<?php
namespace Aws3\Budgets;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **AWS Budgets** service.
 * @method \Aws3\Result createBudget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBudgetAsync(array $args = [])
 * @method \Aws3\Result createNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNotificationAsync(array $args = [])
 * @method \Aws3\Result createSubscriber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriberAsync(array $args = [])
 * @method \Aws3\Result deleteBudget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBudgetAsync(array $args = [])
 * @method \Aws3\Result deleteNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNotificationAsync(array $args = [])
 * @method \Aws3\Result deleteSubscriber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubscriberAsync(array $args = [])
 * @method \Aws3\Result describeBudget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBudgetAsync(array $args = [])
 * @method \Aws3\Result describeBudgets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBudgetsAsync(array $args = [])
 * @method \Aws3\Result describeNotificationsForBudget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNotificationsForBudgetAsync(array $args = [])
 * @method \Aws3\Result describeSubscribersForNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubscribersForNotificationAsync(array $args = [])
 * @method \Aws3\Result updateBudget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBudgetAsync(array $args = [])
 * @method \Aws3\Result updateNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNotificationAsync(array $args = [])
 * @method \Aws3\Result updateSubscriber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubscriberAsync(array $args = [])
 */
class BudgetsClient extends AwsClient {}
