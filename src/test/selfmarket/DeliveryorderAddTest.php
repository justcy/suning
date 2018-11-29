<?php
/**
 * 
 *
 * @author suning
 * @date   2018-8-23
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new DeliveryorderAddRequest();
//赋值……
$deliveryDetail = new DeliveryDetail();
$deliveryDetail->setDeliveryItemNo("1");
$deliveryDetail->setDeliveryQty("10");
$deliveryDetail->setOrderCode("123456789");
$deliveryDetail->setOrderItem("1");
$req->setDeliveryDetail(array($deliveryDetail));
$deliveryHead = new DeliveryHead();
$deliveryHead->setCarrierName("张三");
$deliveryHead->setCarrierTel("18669612345");
$deliveryHead->setDeliveryDate("2018-01-01");
$deliveryHead->setDeliveryNo("13456789");
$deliveryHead->setPlannedArrivalDate("2018-01-01");
$deliveryHead->setPlannedArrivalTime("09:00");
$deliveryHead->setSupplierCode("10000197");
$req->setDeliveryHead($deliveryHead);

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