<?php
namespace Aws3\Test\Api\Parser;

use Aws3\Command;
use Aws3\Api\Service;
use Aws3\Api\Shape;
use Aws3\Test\UsesServiceTrait;
use GuzzleHttp\Psr7;

/**
 * @covers Aws3\Api\Parser\AbstractParser
 * @covers Aws3\Api\Parser\AbstractRestParser
 * @covers Aws3\Api\Parser\JsonRpcParser
 * @covers Aws3\Api\Parser\JsonParser
 * @covers Aws3\Api\Parser\RestJsonParser
 * @covers Aws3\Api\Parser\RestXmlParser
 * @covers Aws3\Api\Parser\QueryParser
 * @covers Aws3\Api\Parser\XmlParser
 */
class ComplianceTest extends \PHPUnit_Framework_TestCase
{
    use UsesServiceTrait;

    public function testCaseProvider()
    {
        $cases = [];

        $files = glob(__DIR__ . '/../test_cases/protocols/output/*.json');
        foreach ($files as $file) {
            $data = json_decode(file_get_contents($file), true);
            foreach ($data as $suite) {
                $suite['metadata']['type'] = $suite['metadata']['protocol'];
                foreach ($suite['cases'] as $case) {
                    $serviceData = [
                        'metadata'   => $suite['metadata'],
                        'shapes'     => $suite['shapes'],
                        'operations' => [
                            $case['given']['name'] => $case['given']
                        ]
                    ];
                    $description = new Service($serviceData, function () { return []; });
                    $cases[] = [
                        $file . ': ' . $suite['description'],
                        $description,
                        $case['given']['name'],
                        $case['result'],
                        $case['response']
                    ];
                }
            }
        }

        return $cases;
    }

    /**
     * @dataProvider testCaseProvider
     */
    public function testPassesComplianceTest(
        $about,
        Service $service,
        $name,
        array $expectedResult,
        $res
    ) {
        $parser = Service::createParser($service);
        $command = new Command($name);

        // Create a response based on the serialized property of the test.
        $response = new Psr7\Response(
            $res['status_code'],
            $res['headers'],
            Psr7\stream_for($res['body'])
        );

        $result = $parser($command, $response)->toArray();
        $this->fixTimestamps($result, $service->getOperation($name)->getOutput());
        $this->assertEquals($expectedResult, $result);
    }

    private function fixTimestamps(&$data, Shape $shape)
    {
        switch (get_class($shape)) {
            case 'Aws3\Api\StructureShape':
                if ($data) {
                    foreach ($data as $key => &$value) {
                        if ($shape->hasMember($key)) {
                            $this->fixTimestamps($value, $shape->getMember($key));
                        }
                    }
                }
                break;
            case 'Aws3\Api\ListShape':
                foreach ($data as &$value) {
                    $this->fixTimestamps($value, $shape->getMember());
                }
                break;
            case 'Aws3\Api\MapShape':
                foreach ($data as &$value) {
                    $this->fixTimestamps($value, $shape->getValue());
                }
                break;
            case 'Aws3\Api\TimestampShape':
                // Format the DateTimeResult as a Unix timestamp.
                $data = $data->format('U');
                break;
        }
    }
}
