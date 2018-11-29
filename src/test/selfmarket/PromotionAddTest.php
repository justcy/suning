<?php
/**
 * 促销服务协议确认函申请
 *
 * @author suning
 * @date   2016-4-19
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/PromotionAddRequest.php');
$req = new PromotionAddRequest();
//赋值……
$req->setSupplierCode("10001372");
$req->setSupplierBraComp("SEBJ");
$req->setSupplierOffice("åäº¬,å¤©æ´¥");
$req->setSnCode("5400");
$req->setSupplierApplicationCode("FYBJ14061004");
$req->setProductBrand("0123,0124,0125");
$req->setExpenseBudgetCode("123456789");
$req->setAreaCopCode("1001");
$req->setStartDate("2014-05-19");
$req->setEndDate("2014-05-29");
$req->setPromotActivName("ä¿éæ´»å¨åç§°");
$req->setPromotAgreementName("ä¿éåè®®åç§°");
$req->setPaymentLittleMount("10000.60");
$req->setSettlementType("1");
$req->setInvoiceDate("2014-05-29");
$req->setPayType("3");
$req->setInvoiceContent("2");
$req->setPayDate("2014-05-29");
$req->setHtmlContent("XHHGHHKJKKKKLGFHJRTIOOJBK...");
$req->setSignNatureContent("XHHGHHKJKKKKLGFHJRTIOOJBK...");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "a226186c2b811ce7fbce83e8a98dc7fe";
$appSecret = "435687b33f10f5114a1d2440fe0848c7";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>