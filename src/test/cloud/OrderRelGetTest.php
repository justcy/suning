<?php
/**
 * 订购关系查询
 *
 * @author suning
 * @date   2016-2-24
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/cloud/OrderRelGetRequest.php');
$req = new OrderRelGetRequest();
//赋值……
$req->setUserId("6001985373");
$req->setItemcode("1");
$req->setOrderId("821602241000011433");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "cc473007542b03fb4bdba9191bb68415";
$appSecret = "704242d60267d9f95c3a183f1b150fca";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>