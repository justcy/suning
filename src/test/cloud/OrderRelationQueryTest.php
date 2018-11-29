<?php
/**
 * 订购关系查询
 *
 * @author suning
 * @date   2015-5-28
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/cloud/OrderRelationQueryRequest.php');
$req = new OrderRelationQueryRequest();
//赋值……
$req->setStartTime("2015-01-07 19:40:55");
$req->setEndTime("2015-01-08 19:40:58");
$req->setAppId("11");
$req->setPageNo("1");
$req->setPageSize("10");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "7413b0470380905d2330af7e445f1beb";
$appSecret = "d9dc9254c32e5ba793793c0d203827c6";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>