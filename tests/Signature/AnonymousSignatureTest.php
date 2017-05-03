<?php
namespace Aws3\Test\Signature;

use Aws3\Credentials\Credentials;
use Aws3\Signature\AnonymousSignature;
use GuzzleHttp\Psr7\Request;

/**
 * @covers Aws3\Signature\AnonymousSignature
 */
class AnonymousTest extends \PHPUnit_Framework_TestCase
{
    public function testDoesNotSignsRequests()
    {
        $creds = new Credentials('foo', 'bar', 'baz');
        $signature = new AnonymousSignature();
        $request = new Request(
            'PUT',
            'http://s3.amazonaws.com/bucket/key',
            [
                'Content-Type'   => 'Baz',
                'X-Amz-Meta-Boo' => 'bam'
            ],
            'body'
        );

        $result = $signature->signRequest($request, $creds);
        $this->assertSame($request, $result);

        $this->assertEquals($request, $signature->presign(
            $request,
            $creds,
            '+1 minute'
        ));
    }
}
