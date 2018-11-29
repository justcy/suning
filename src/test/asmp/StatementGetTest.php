<?php
/**
 * 直连厂家结算单对账接口
 *
 * @author suning
 * @date   2016-6-21
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/asmp/StatementGetRequest.php');
$req = new StatementGetRequest();
//赋值……
$req->setGuid("u00000000001");
$req->setZcjsqdm("123456789");
$req->setZawbs("1");
$req->setZkpje("123456");
$req->setNoteHeader("æ ");
$req->setFactoryBp("0000020156 ");
$detail = new Detail();
$detail->setDetailGuid("u00000000001"); 
$detail->setZno("111"); 
$detail->setJctype("A"); 
$detail->setServiceOrder("7312952676"); 
$detail->setZcjyjje("100"); 
$detail->setZawf("100"); 
$detail->setZpjf("0"); 
$detail->setZblpf("0"); 
$detail->setZqtf("0"); 
$detail->setZbtje("10"); 
$detail->setZkfje("20"); 
$detail->setZjlje("5"); 
$detail->setZbtyy("A0001"); 
$detail->setZbtyyDesc("ç©ºè°æºå­£è¡¥è´´"); 
$detail->setZjlyy("C0001"); 
$detail->setZjlyyDesc("å®è£ææ¯å¥½"); 
$detail->setZkfyy("B0001"); 
$detail->setZkfyyDesc("é¡¾å®¢æè¯"); 
$detail->setZcjtzkpje("125"); 
$detail->setNoteItem("æ "); 
$req->setDetail(array($detail));
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "5c991b791c6e5c46f925c7c6171a22cc";
$appSecret = "911bc7ef82abc19f065f256d7afef2d9";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>