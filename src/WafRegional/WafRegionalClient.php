<?php
namespace Aws3\WafRegional;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **AWS WAF Regional** service.
 * @method \Aws3\Result associateWebACL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateWebACLAsync(array $args = [])
 * @method \Aws3\Result createByteMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createByteMatchSetAsync(array $args = [])
 * @method \Aws3\Result createIPSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIPSetAsync(array $args = [])
 * @method \Aws3\Result createRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRuleAsync(array $args = [])
 * @method \Aws3\Result createSizeConstraintSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSizeConstraintSetAsync(array $args = [])
 * @method \Aws3\Result createSqlInjectionMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSqlInjectionMatchSetAsync(array $args = [])
 * @method \Aws3\Result createWebACL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWebACLAsync(array $args = [])
 * @method \Aws3\Result createXssMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createXssMatchSetAsync(array $args = [])
 * @method \Aws3\Result deleteByteMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteByteMatchSetAsync(array $args = [])
 * @method \Aws3\Result deleteIPSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIPSetAsync(array $args = [])
 * @method \Aws3\Result deleteRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRuleAsync(array $args = [])
 * @method \Aws3\Result deleteSizeConstraintSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSizeConstraintSetAsync(array $args = [])
 * @method \Aws3\Result deleteSqlInjectionMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSqlInjectionMatchSetAsync(array $args = [])
 * @method \Aws3\Result deleteWebACL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWebACLAsync(array $args = [])
 * @method \Aws3\Result deleteXssMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteXssMatchSetAsync(array $args = [])
 * @method \Aws3\Result disassociateWebACL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateWebACLAsync(array $args = [])
 * @method \Aws3\Result getByteMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getByteMatchSetAsync(array $args = [])
 * @method \Aws3\Result getChangeToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChangeTokenAsync(array $args = [])
 * @method \Aws3\Result getChangeTokenStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChangeTokenStatusAsync(array $args = [])
 * @method \Aws3\Result getIPSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIPSetAsync(array $args = [])
 * @method \Aws3\Result getRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRuleAsync(array $args = [])
 * @method \Aws3\Result getSampledRequests(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSampledRequestsAsync(array $args = [])
 * @method \Aws3\Result getSizeConstraintSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSizeConstraintSetAsync(array $args = [])
 * @method \Aws3\Result getSqlInjectionMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSqlInjectionMatchSetAsync(array $args = [])
 * @method \Aws3\Result getWebACL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWebACLAsync(array $args = [])
 * @method \Aws3\Result getWebACLForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWebACLForResourceAsync(array $args = [])
 * @method \Aws3\Result getXssMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getXssMatchSetAsync(array $args = [])
 * @method \Aws3\Result listByteMatchSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listByteMatchSetsAsync(array $args = [])
 * @method \Aws3\Result listIPSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIPSetsAsync(array $args = [])
 * @method \Aws3\Result listResourcesForWebACL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourcesForWebACLAsync(array $args = [])
 * @method \Aws3\Result listRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRulesAsync(array $args = [])
 * @method \Aws3\Result listSizeConstraintSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSizeConstraintSetsAsync(array $args = [])
 * @method \Aws3\Result listSqlInjectionMatchSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSqlInjectionMatchSetsAsync(array $args = [])
 * @method \Aws3\Result listWebACLs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWebACLsAsync(array $args = [])
 * @method \Aws3\Result listXssMatchSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listXssMatchSetsAsync(array $args = [])
 * @method \Aws3\Result updateByteMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateByteMatchSetAsync(array $args = [])
 * @method \Aws3\Result updateIPSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIPSetAsync(array $args = [])
 * @method \Aws3\Result updateRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRuleAsync(array $args = [])
 * @method \Aws3\Result updateSizeConstraintSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSizeConstraintSetAsync(array $args = [])
 * @method \Aws3\Result updateSqlInjectionMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSqlInjectionMatchSetAsync(array $args = [])
 * @method \Aws3\Result updateWebACL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWebACLAsync(array $args = [])
 * @method \Aws3\Result updateXssMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateXssMatchSetAsync(array $args = [])
 */
class WafRegionalClient extends AwsClient {}
