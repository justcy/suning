<?php
/**
 * 获取订购isv软件的用户信息
 *
 * @author suning
 * @date   2015-6-5
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/cloud/OrderIsvSoftUserInfoGetRequest.php');
$req = new OrderIsvSoftUserInfoGetRequest();
//赋值……
$req->setCustNum("6001911196");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://10.24.66.241:80/api/http/sopRequest";
$appKey = "8f34a15bb19cb241630ce3aecaae0f8f";
$appSecret = "e2074fb1ba5929709dc0a7185444b2c5";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>