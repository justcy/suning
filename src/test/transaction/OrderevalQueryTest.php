<?php
/**
 * 订单评价批量查询
 *
 * @author suning
 * @date   2014-9-25
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/transaction/OrderevalQueryRequest.php');
$req = new OrderevalQueryRequest();
//赋值……
$req->setStartTime("2014-9-10");
$req->setEndTime("2014-9-20");
$req->setReviewLevel("123");
$req->setSuplReviewFlag("1");
$req->setReplyOrNot("12");
$req->setPageNo("123");
$req->setPageSize("1");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "88d4b0f16fda4d867391a45b4e9b66a2";
$appSecret = "c15f3e6184caae59c0522b951721b0b6";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>