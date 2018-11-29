<?php
/**
 * 苏宁服务订单校验信息反馈
 *
 * @author suning
 * @date   2016-5-27
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/asmp/SnInstallOrderAddRequest.php');
$req = new SnInstallOrderAddRequest();
//赋值……
$req->setRecordGuid("5D21BD501D63793FE1000000C0A8765D");
$req->setItemGuid("4FA025393D23C08CE1008000C0A8765B");
$req->setSrvOrdId("7163370425");
$req->setSrvOrdType("ZS01");
$req->setZb2bFlag("JS");
$jsDetail = new JsDetail();
$jsDetail->setZb2bJsdh("10001023430"); 
$jsDetail->setZb2bJb("100.00"); 
$jsDetail->setZb2bLr("100.00"); 
$jsDetail->setZb2bYc("100.00"); 
$jsDetail->setZb2bJlf("100.00"); 
$jsDetail->setZb2bQt("100.00"); 
$jsDetail->setZb2bKkCode("1"); 
$jsDetail->setZb2bKk("1"); 
$req->setJsDetail(array($jsDetail));
$jyDetail = new JyDetail();
$jyDetail->setZb2bJyCode("103430134"); 
$jyDetail->setZb2bJyDis("XXéè¯¯"); 
$req->setJyDetail(array($jyDetail));
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "5c991b791c6e5c46f925c7c6171a22cc";
$appSecret = "911bc7ef82abc19f065f256d7afef2d9";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>