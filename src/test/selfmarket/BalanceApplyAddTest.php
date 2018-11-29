<?php
/**
 * 销售补差确认函申请
 *
 * @author suning
 * @date   2016-4-19
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/BalanceApplyAddRequest.php');
$req = new BalanceApplyAddRequest();
//赋值……
$applyHead = new ApplyHead();
$applyHead->setSupplierCode("10001372"); 
$applyHead->setSupplierBraComp("1"); 
$applyHead->setSupplierOffice("1"); 
$applyHead->setSnCode("1"); 
$applyHead->setSupplierApplicationCode("1"); 
$applyHead->setProductBrand("1"); 
$applyHead->setExpenseBudgetCode("1"); 
$applyHead->setAreaCopCode("1"); 
$applyHead->setStartDate("1"); 
$applyHead->setEndDate("1"); 
$applyHead->setDiscountLittleMount("1"); 
$applyHead->setSettlementType("1"); 
$applyHead->setPayType("1"); 
$applyHead->setInvoiceDate("1"); 
$applyHead->setInvoiceContent("1"); 
$applyHead->setPayDate("1"); 
$applyHead->setHtmlContent("1"); 
$applyHead->setSignNatureContent("1"); 
$req->setApplyHead($applyHead);
$applyDetail = new ApplyDetail();
$applyDetail->setInvoiceCode("1"); 
$applyDetail->setLineItem("1"); 
$applyDetail->setExpStartDate("1"); 
$applyDetail->setExpEndDate("1"); 
$applyDetail->setRelationCompCode("1"); 
$applyDetail->setExpDetail("1"); 
$applyDetail->setSettlementAmount("1"); 
$req->setApplyDetail(array($applyDetail));
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "a226186c2b811ce7fbce83e8a98dc7fe";
$appSecret = "435687b33f10f5114a1d2440fe0848c7";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>