<?php
/**
 * 商业折让对账单申请
 *
 * @author suning
 * @date   2016-4-19
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/DiscountApplyAddRequest.php');
$req = new DiscountApplyAddRequest();
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
$applyHead->setActionLettersCode("1"); 
$applyHead->setChargeBudgetCode("1"); 
$applyHead->setStartDate("2014-05-19"); 
$applyHead->setEndDate("2014-05-29"); 
$applyHead->setActionLettersContent("1"); 
$applyHead->setContractContent("1"); 
$applyHead->setPaymentLittleMount("1"); 
$applyHead->setSettlementType("1"); 
$applyHead->setPayType("1"); 
$applyHead->setPayDate("2014-05-29"); 
$applyHead->setInvoiceContent("1"); 
$applyHead->setHtmlContent("1"); 
$applyHead->setSignNatureContent("1"); 
$req->setApplyHead($applyHead);
$applyDetail = new ApplyDetail();
$applyDetail->setChargeItem("1"); 
$applyDetail->setItemCode("1"); 
$applyDetail->setWareNumber("1"); 
$applyDetail->setOnePrice("1"); 
$applyDetail->setSalesAmount("1"); 
$applyDetail->setAgioRate("1"); 
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