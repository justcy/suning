<?php
/**
 * 展示位使用协议申请
 *
 * @author suning
 * @date   2016-4-19
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/ProtocolAddRequest.php');
$req = new ProtocolAddRequest();
//赋值……
$req->setSupplierCode("10000335");
$req->setSupplierBraComp("SEBJ");
$req->setSupplierOffice("åäº¬,å¤©æ´¥");
$req->setSnCode("5400");
$req->setSupplierApplicationCode("FYBJ14061004");
$req->setExpenseBudgetCode("123456789");
$req->setAreaCopCode("1001");
$req->setContractDate("2014-05-10");
$req->setContractCode("12345");
$req->setAdProtocolCity("åäº¬");
$req->setAdProtocolRode("ä¸æµ·è·¯");
$req->setAdProtocolMarket("èå®å¹¿åº");
$req->setAdProtocolBuilding("5æ¥¼");
$req->setAdProtocolArea("200");
$req->setStartDate("2014-05-19");
$req->setEndDate("2014-05-29");
$req->setPaymentLittleMount("30000.00");
$req->setFirstMonthAmount("10000.00");
$req->setSecondPayMonth("5");
$req->setNextMonthAmount("10000.00");
$req->setLastPayMonth("11");
$req->setLastMonthAmount("10000.00");
$req->setSettlementType("1");
$req->setOtherProtocol("å¶ä»çº¦å®");
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