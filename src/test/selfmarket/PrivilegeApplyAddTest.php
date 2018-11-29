<?php
/**
 * 优惠单活动函申请
 *
 * @author suning
 * @date   2016-4-19
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/PrivilegeApplyAddRequest.php');
$req = new PrivilegeApplyAddRequest();
//赋值……
$applyHead = new ApplyHead();
$applyHead->setSupplierCode("10001372"); 
$applyHead->setSupplierBraComp("SEBJ"); 
$applyHead->setSupplierOffice("1"); 
$applyHead->setSnCode("5400"); 
$applyHead->setProductBrand("000021659"); 
$applyHead->setExpenseBudgetCode("1"); 
$applyHead->setAreaCopCode("1"); 
$applyHead->setSupplierApplicationCode("1"); 
$applyHead->setStartDate("2014-05-19"); 
$applyHead->setEndDate("2014-05-23"); 
$applyHead->setApplyLevel("1"); 
$applyHead->setActionDescribe("1"); 
$applyHead->setSettlementType("1"); 
$applyHead->setPayType("1"); 
$applyHead->setInvoiceContent("1"); 
$applyHead->setPayDate("2014-05-29"); 
$applyHead->setHtmlContent("1"); 
$applyHead->setSignNatureContent("1"); 
$req->setApplyHead($applyHead);
$areaDetail = new AreaDetail();
$areaDetail->setOperateAreaCompany("1"); 
$areaDetail->setOperateAreaShoper("1"); 
$req->setAreaDetail(array($areaDetail));
$itemDetail = new ItemDetail();
$itemDetail->setWareHouse("1"); 
$itemDetail->setChannel("1"); 
$itemDetail->setItemCode("1"); 
$itemDetail->setChargeItem("1"); 
$itemDetail->setFavoureAmount("1"); 
$itemDetail->setComments("1"); 
$req->setItemDetail(array($itemDetail));
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "a226186c2b811ce7fbce83e8a98dc7fe";
$appSecret = "435687b33f10f5114a1d2440fe0848c7";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>