<?php
/**
 * 批量查询单个订单作业
 *
 * @author suning
 * @date   2016-1-11
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/OrderDetailQueryRequest.php');
$req = new OrderDetailQueryRequest();
//赋值……
$req->setOrderSource("201");
$req->setCancelType("1");
$req->setOutOrderId("2016501110120107");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "e38f48178f9260140bb974d7949f54eb";
$appSecret = "e754e1b2da9efa2cdea1cb1873161957";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>