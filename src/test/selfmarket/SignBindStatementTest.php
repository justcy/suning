<?php
/**
 * 合并对账签章
 *
 * @author suning
 * @date   2016-4-19
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/SignBindStatementRequest.php');
$req = new SignBindStatementRequest();
//赋值……
$signHead = new SignHead();
$signHead->setSupplierCheckOrderCode("DMSH11033101"); 
$signHead->setModelType("4"); 
$signHead->setSupplierCode("10001369"); 
$signHead->setSupplierName("XXå¬å¸"); 
$signHead->setApplyFeed("12345"); 
$signHead->setSettlementType("2"); 
$signHead->setSettlementDate("2014-04-02"); 
$signHead->setComments("è´¹ç¨ä»¥çç« ä¸ºå"); 
$signHead->setSignDate("2014-04-05"); 
$signHead->setHtmlContent("sfsdfasfdasfsdfsdf"); 
$signHead->setSignNatureContent("xsdfsdfeerehgfh"); 
$req->setSignHead($signHead);
$signDetail = new SignDetail();
$signDetail->setApplyCode("16359173"); 
$signDetail->setApplicationCode("1309X0021404407948"); 
$req->setSignDetail(array($signDetail));
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "aa48c8b081c7d304a9b3f96725988f77";
$appSecret = "4caf4cc47d7c114cb09d957a7454ddd3";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>