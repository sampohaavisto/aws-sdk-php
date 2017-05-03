<?php
namespace Aws3\Test\S3;

use Aws3\Test\UsesServiceTrait;

/**
 * @covers Aws3\S3\PermanentRedirectMiddleware
 */
class PermanentRedirectTest extends \PHPUnit_Framework_TestCase
{
    use UsesServiceTrait;

    /**
     * @expectedException \Aws3\S3\Exception\PermanentRedirectException
     * @expectedExceptionMessage Encountered a permanent redirect while requesting
     */
    public function testThrowsSpecificException()
    {
        $s3 = $this->getTestClient('s3');
        $this->addMockResults($s3, [['@metadata' => ['statusCode' => 301]]]);
        $s3->getObject(['Bucket' => 'test', 'Key' => 'key']);
    }

    public function testPassesThroughUntouched()
    {
        $s3 = $this->getTestClient('s3');
        $this->addMockResults($s3, [['@metadata' => ['statusCode' => 200]]]);
        $s3->getObject(['Bucket' => 'test', 'Key' => 'key']);
    }
}
