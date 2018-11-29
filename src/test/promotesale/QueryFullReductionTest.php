<?php
/**
 * 满减活动批量查询
 *
 * @author suning
 * @date   2014-10-16
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/promotesale/QueryFullReductionRequest.php');
$req = new QueryFullReductionRequest();
//赋值……
$req->setPageNo("1");
$req->setPageSize("10");
$req->setStartTime("2014-01-10 14:14:12");
$req->setEndTime("2014-05-06 10:20:30");
$req->setPromotionRange("1");
$req->setStatusCode("2");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "36c8e577eb29a23b2a80f2e412a42393";
$appSecret = "a1a947c89eeca125be8872cf94bf698f";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>