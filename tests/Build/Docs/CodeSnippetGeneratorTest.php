<?php
namespace Aws3\Test\Build\Docs;


use Aws3\Api\ApiProvider;
use Aws3\Api\Service;
use Aws3\Build\Docs\CodeSnippetGenerator;

class CodeSnippetGeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider exampleProvider
     *
     * @param Service $service
     * @param string $operation
     * @param array $input
     * @param string $expected
     * @param bool $isInput
     */
    public function testCanBuildCodeExamples(
        Service $service,
        $operation,
        array $input,
        $expected,
        $isInput = true
    ) {
        $builder = new CodeSnippetGenerator($service);
        $this->assertSame($expected, $builder($operation, $input, [], $isInput));
    }

    public function exampleProvider()
    {
        $provider = ApiProvider::defaultProvider();
        return [
            // strings in input
            [
                new Service($provider->resolve($provider, 'api', 'sqs', 'latest'), $provider),
                'GetQueueUrl',
                [
                    'QueueName' => 'MyQueue',
                    'QueueOwnerAWSAccountId' => '12345678910',
                ],
                <<<'EOCS'
$result = $client->getQueueUrl([
    'QueueName' => 'MyQueue',
    'QueueOwnerAWSAccountId' => '12345678910',
]);
EOCS
            ],
            // strings in output
            [
                new Service($provider->resolve($provider, 'api', 'sqs', 'latest'), $provider),
                'GetQueueUrl',
                ["QueueUrl" => "https://queue.amazonaws.com/123456789101112/MyQueue"],
                <<<'EOCS'
[
    'QueueUrl' => 'https://queue.amazonaws.com/123456789101112/MyQueue',
]
EOCS
                , false,
            ],
            // Dates and numbers in input
            [
                new Service($provider->resolve($provider, 'api', 'autoscaling', 'latest'), $provider),
                'DescribeScheduledActions',
                [
                    'EndTime' => 1449799223,
                    'MaxRecords' => 10,
                    'StartTime' => 1449798223,
                ],
                <<<'EOCS'
$result = $client->describeScheduledActions([
    'EndTime' => <DateTimeInterface>,
    'MaxRecords' => 10,
    'StartTime' => <DateTimeInterface>,
]);
EOCS
            ],
            // Dates, numbers, and lists in output
            [
                new Service($provider->resolve($provider, 'api', 'autoscaling', 'latest'), $provider),
                'DescribeScheduledActions',
                [
                    'NextToken' => 'Next',
                    'ScheduledUpdateGroupActions' => [
                        [
                            'AutoScalingGroupName' => 'my-autoscaling-group',
                            'DesiredCapacity' => 4,
                            'EndTime' => 1449799223,
                            'MaxSize' => 5,
                            'MinSize' => 3,
                            'Recurrence' => 'daily',
                            'ScheduledActionARN' => 'arn:aws:iam::123456789012:user/David',
                            'ScheduledActionName' => 'David',
                            'StartTime' => 1449798223,
                            'Time' => 1449798223,
                        ],
                    ],
                ],
                <<<'EOCS'
[
    'NextToken' => 'Next',
    'ScheduledUpdateGroupActions' => [
        [
            'AutoScalingGroupName' => 'my-autoscaling-group',
            'DesiredCapacity' => 4,
            'EndTime' => <DateTimeInterface>,
            'MaxSize' => 5,
            'MinSize' => 3,
            'Recurrence' => 'daily',
            'ScheduledActionARN' => 'arn:aws:iam::123456789012:user/David',
            'ScheduledActionName' => 'David',
            'StartTime' => <DateTimeInterface>,
            'Time' => <DateTimeInterface>,
        ],
    ],
]
EOCS
                , false,
            ],
            // Blobs and maps in input
            [
                new Service($provider->resolve($provider, 'api', 'dynamodb', 'latest'), $provider),
                'PutItem',
                [
                    'Item' => [
                        'Key' => [
                            'B' => "3q2+7w==",
                        ],
                    ],
                ],
                <<<'EOCS'
$result = $client->putItem([
    'Item' => [
        'Key' => [
            'B' => <binary string>,
        ],
    ],
]);
EOCS
            ]
        ];
    }
}
