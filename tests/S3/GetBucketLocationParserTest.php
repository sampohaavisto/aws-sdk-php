<?php
namespace Aws3\Test\S3;

use Aws3\Test\UsesServiceTrait;
use Aws3\S3\GetBucketLocationParser;
use Aws3\Command;
use Aws3\Result;
use GuzzleHttp\Psr7\Response;

/**
 * @covers Aws3\S3\GetBucketLocationParser
 */
class GetBucketLocationParserTest extends \PHPUnit_Framework_TestCase
{
    use UsesServiceTrait;

    /**
     * @dataProvider getTestCases
     */
    public function testParsesLocationFromGetBucketLocationOperations(
        $commandName, $responseBody, $expectedValue
    ) {
        $parser = new GetBucketLocationParser(function () {
            return new Result();
        });

        $command = new Command($commandName);
        $response = new Response(200, [], $responseBody);

        $result = $parser($command, $response);

        $this->assertEquals($expectedValue, $result['LocationConstraint']);
    }

    public function getTestCases()
    {
        return [
            ['GetBucketLocation', '<LocationConstraint>us-west-2</LocationConstraint>', 'us-west-2'],
            ['GetBucketLocation', '<LocationConstraint>EU</LocationConstraint>',        'eu-west-1'],
            ['GetBucketLocation', '<LocationConstraint/>',                              'us-east-1'],
            ['GetBucket',         '<LocationConstraint>us-west-2</LocationConstraint>', null],
        ];
    }
}
