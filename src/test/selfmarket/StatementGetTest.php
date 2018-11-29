<?php
/**
 * 返利对账单金额确认
 *
 * @author suning
 * @date   2016-4-19
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/StatementGetRequest.php');
$req = new StatementGetRequest();
//赋值……
$confirmHead = new ConfirmHead();
$confirmHead->setSupplierCode("10001372"); 
$confirmHead->setApplyCode("17683049"); 
$confirmHead->setModelType("1"); 
$confirmHead->setSettlementType("1"); 
$confirmHead->setSettlementDate("2014-04-02"); 
$confirmHead->setComments("è´¹ç¨ç¡®è®¤ä»¥æç»çç« ä»¶ä¸ºå"); 
$confirmHead->setAllCheckQty("2"); 
$confirmHead->setAllCheckedAmount("1334.70"); 
$req->setConfirmHead($confirmHead);
$confirmDetail = new ConfirmDetail();
$confirmDetail->setRelatedOrgCode("1"); 
$confirmDetail->setRelatedWareHouse("1"); 
$confirmDetail->setItemCode("BCD-402DRISL1"); 
$confirmDetail->setBlanceSalesAmount("45.90"); 
$confirmDetail->setBlanceQty("12"); 
$confirmDetail->setBlanceAmount("444.90"); 
$req->setConfirmDetail(array($confirmDetail));
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "a226186c2b811ce7fbce83e8a98dc7fe";
$appSecret = "435687b33f10f5114a1d2440fe0848c7";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>