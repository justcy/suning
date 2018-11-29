<?php
/**
 * 苏宁顾客投诉记录单笔查询
 *
 * @author suning
 * @date   2014-9-25
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/transaction/ComplaintGetRequest.php');
$req = new ComplaintGetRequest();
//赋值……
$req->setComplaintCode("213");
$req->setOrderCode("123");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "88d4b0f16fda4d867391a45b4e9b66a2";
$appSecret = "c15f3e6184caae59c0522b951721b0b6";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>