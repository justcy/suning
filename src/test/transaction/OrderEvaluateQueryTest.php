<?php
/**
 * 订单评价批量查询（三个月内）
 *
 * @author suning
 * @date   2016-5-4
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/transaction/OrderEvaluateQueryRequest.php');
$req = new OrderEvaluateQueryRequest();
//赋值……
//$req->setEvaluateLevel("0");
$req->setStartTime("2016-01-18");
$req->setEndTime("2016-04-17");
//$req->setIsAddComments("0");
//$req->setIsReply("0");
$req->setPageNo("2");
$req->setPageSize("2");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "2238a6ccacf472caba35aaa92610983a";
$appSecret = "83505555d41533459d74305c0a68acd3";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>