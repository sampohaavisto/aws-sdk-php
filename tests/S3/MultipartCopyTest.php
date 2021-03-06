<?php
namespace Aws3\Test\S3;

use Aws3\Result;
use Aws3\ResultInterface;
use Aws3\S3\MultipartCopy;
use Aws3\Test\UsesServiceTrait;

class MultipartCopyTest extends \PHPUnit_Framework_TestCase
{
    use UsesServiceTrait;

    const MB = 1048576;

    /**
     * @dataProvider getTestCases
     */
    public function testS3MultipartCopyWorkflow(
        array $uploadOptions = [],
        $error = false
    ) {
        $client = $this->getTestClient('s3');
        $url = 'http://foo.s3.amazonaws.com/bar';
        $this->addMockResults($client, [
            new Result(['UploadId' => 'baz']),
            new Result(['ETag' => 'A']),
            new Result(['ETag' => 'B']),
            new Result(['ETag' => 'C']),
            new Result(['Location' => $url])
        ]);

        if ($error) {
            $this->setExpectedException($error);
        }

        $uploader = new MultipartCopy($client, '/bucket/key', $uploadOptions);
        $result = $uploader->upload();

        $this->assertTrue($uploader->getState()->isCompleted());
        $this->assertEquals($url, $result['ObjectURL']);
    }

    public function getTestCases()
    {
        $defaults = [
            'bucket' => 'foo',
            'key'    => 'bar',
            'source_metadata' => new Result(['ContentLength' => 11 * self::MB]),
        ];

        return [
            [
                ['acl' => 'private'] + $defaults
            ],
            [ // Error: bad part_size
                ['part_size' => 1] + $defaults,
                'InvalidArgumentException'
            ],
        ];
    }

    public function testCanLoadStateFromService()
    {
        $client = $this->getTestClient('s3');
        $url = 'http://foo.s3.amazonaws.com/bar';
        $this->addMockResults($client, [
            new Result(['Parts' => [
                ['PartNumber' => 1, 'ETag' => 'A', 'Size' => 5 * self::MB],
                ['PartNumber' => 2, 'ETag' => 'B', 'Size' => 5 * self::MB],
            ]]),
            new Result(['ContentLength' => 11 * self::MB]),
            new Result(['ETag' => 'C']),
            new Result(['Location' => $url])
        ]);

        $state = MultipartCopy::getStateFromService($client, 'foo', 'bar', 'baz');
        $uploader = new MultipartCopy($client, '/bucket/key', ['state' => $state]);
        $result = $uploader->upload();

        $this->assertTrue($uploader->getState()->isCompleted());
        $this->assertEquals(5 * self::MB, $uploader->getState()->getPartSize());
        $this->assertEquals($url, $result['ObjectURL']);
    }

    public function testCanUseCaseInsensitiveConfigKeys()
    {
        $client = $this->getTestClient('s3');
        $sourceMetadata = $this->getMockBuilder(ResultInterface::class)->getMock();
        $putObjectMup = new MultipartCopy($client, '/bucket/key', [
            'Bucket' => 'newBucket',
            'Key' => 'newKey',
            'source_metadata' => $sourceMetadata,
        ]);
        $classicMup = new MultipartCopy($client, '/bucket/key', [
            'bucket' => 'newBucket',
            'key' => 'newKey',
            'source_metadata' => $sourceMetadata,
        ]);
        $configProp = (new \ReflectionClass(MultipartCopy::class))
            ->getProperty('config');
        $configProp->setAccessible(true);

        $this->assertSame($configProp->getValue($classicMup), $configProp->getValue($putObjectMup));
    }
}
