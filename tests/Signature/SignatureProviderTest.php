<?php
namespace Aws3\Test\Signature;

use Aws3\Signature\SignatureProvider;

/**
 * @covers Aws3\Signature\SignatureProvider
 */
class SignatureProviderTest extends \PHPUnit_Framework_TestCase
{
    public function versionProvider()
    {
        return [
            ['v4', 'Aws3\Signature\SignatureV4', 'foo'],
            ['v4', 'Aws3\Signature\S3SignatureV4', 's3'],
            ['v4-unsigned-body', 'Aws3\Signature\SignatureV4', 'foo'],
            ['anonymous', 'Aws3\Signature\AnonymousSignature', 's3'],
        ];
    }

    /**
     * @dataProvider versionProvider
     */
    public function testCreatesSignatureFromVersionString($v, $type, $service)
    {
        $fn = SignatureProvider::version();
        $result = $fn($v, $service, 'baz');
        $this->assertInstanceOf($type, $result);
    }

    public function testCanMemoizeSignatures()
    {
        $fn = SignatureProvider::version();
        $fn = SignatureProvider::memoize($fn);
        $a = $fn('v4', 'ec2', 'us-west-2');
        $this->assertSame($a, $fn('v4', 'ec2', 'us-west-2'));
        $this->assertNotSame($a, $fn('v4', 'ec2', 'us-east-1'));
    }

    public function testResolvesSignaturesSuccessfully()
    {
        $this->assertInstanceOf(
            'Aws3\Signature\SignatureInterface',
            SignatureProvider::resolve(
                SignatureProvider::version(),
                'v4',
                'ec2',
                'us-west-2'
            )
        );
    }

    /**
     * @expectedException \Aws3\Exception\UnresolvedSignatureException
     */
    public function testResolvesSignaturesWithException()
    {
        $fn = SignatureProvider::defaultProvider();
        SignatureProvider::resolve($fn, 'foooo', '', '');
    }
}
