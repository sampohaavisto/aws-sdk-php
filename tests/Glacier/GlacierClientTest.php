<?php
namespace Aws3\Test\Glacier;

use Aws3\Exception\CouldNotCreateChecksumException;
use Aws3\Glacier\GlacierClient;
use Aws3\Test\UsesServiceTrait;
use GuzzleHttp\Psr7\NoSeekStream;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7;

/**
 * @covers Aws3\Glacier\GlacierClient
 */
class GlacierClientTest extends \PHPUnit_Framework_TestCase
{
    use UsesServiceTrait;

    public function testAppliesAllMiddleware()
    {
        $client = new GlacierClient([
            'service' => 'glacier',
            'region'  => 'us-west-2',
            'version' => 'latest'
        ]);
        $command = $client->getCommand('UploadArchive', [
            'vaultName'  => 'foo',
            'sourceFile' => __DIR__ . '/test-content.txt',
        ]);
        $request = \Aws3\serialize($command);

        // Added default accountId and the API version header.
        $this->assertEquals('-', $command['accountId']);
        $this->assertEquals(
            $client->getApi()->getMetadata('apiVersion'),
            $request->getHeaderLine('x-amz-glacier-version')
        );

        // Added Content-Type and Body
        $this->assertEquals('foo', $command['body']);
        $this->assertEquals('text/plain', $request->getHeaderLine('Content-Type'));

        // Added the tree and content hashes.
        $hash = hash('sha256', 'foo');
        $this->assertEquals($hash, $request->getHeaderLine('x-amz-content-sha256'));
        $this->assertEquals($hash, $request->getHeaderLine('x-amz-sha256-tree-hash'));
    }

    public function testErrorWhenHashingNonSeekableStream()
    {
        $this->setExpectedException(CouldNotCreateChecksumException::class);
        $this->getTestClient('Glacier')->uploadArchive([
            'vaultName' => 'foo',
            'body'      => new NoSeekStream(Psr7\stream_for('foo')),
        ]);
    }
}
