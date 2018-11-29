<?php
/**
 * 
 *
 * @author suning
 * @date   2017-10-10
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new ReviewestatusAddRequest();
//赋值……
$reviewestatus = new Reviewestatus();
$reviewestatus->setActualDeliveryTime("2017-8-9");
$reviewestatus->setArrivalDelayDays("1");
$reviewestatus->setArrivalWeek("1");
$reviewestatus->setAtpPlanArrDate("2017-8-9");
$reviewestatus->setAtpPlanArrWeek("12");
$reviewestatus->setCommArrTime("2017-08-09 ");
$reviewestatus->setConfirmSubTime("2017-08-09 17:03:43");
$reviewestatus->setCustReceiptDate("2017-8-9");
$reviewestatus->setIndustyArrTime("2017-8-9");
$reviewestatus->setIndustyTradeTime("2017-8-9");
$reviewestatus->setLatestArrTime("2017-08-09 ");
$reviewestatus->setModel("1");
$reviewestatus->setMoneyAmount("1");
$reviewestatus->setNotPassReasons("12");
$reviewestatus->setNumber("12");
$reviewestatus->setOmsItemNo("123");
$reviewestatus->setOmsOrderNo("123456");
$reviewestatus->setOrderSource("1");
$reviewestatus->setPlanArrTime("2017-8-9");
$reviewestatus->setPlanDeliveryTime("2017-08-09 ");
$reviewestatus->setPurchaseOrderNo("1");
$reviewestatus->setPurOrderItemNo("1");
$reviewestatus->setServiceCode("123456");
$reviewestatus->setServiceName("123456");
$reviewestatus->setSignQuantity("1000000.333");
$reviewestatus->setState("1");
$reviewestatus->setStatusOccurTime("2017-04-08 20:00:00");
$reviewestatus->setTrafficDelayDays("1");
$reviewestatus->setWarehouseLocation("12");
$req->setReviewestatus(array($reviewestatus));

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "a13b8bd0efb06a770c57d1c370ce8ee7";
$appSecret = "f08ce9836c4bcfc708194594081f6690";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
$reqJson = getReqJson($req);
print_r("请求报文:\n".$reqJson);
print_r("\n返回响应报文:\n".$resp);

function getReqJson($req){
	$paramsArray = $req -> getApiParams();
	if(empty($paramsArray)){
		$paramsArray = '';
	}
	$paramsArray = array('sn_request' => array('sn_body' => array(
		"{$req -> getBizName()}" => $paramsArray
	)));
	return json_encode($paramsArray);
}
?>