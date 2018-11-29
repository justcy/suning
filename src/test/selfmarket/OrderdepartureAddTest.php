<?php
/**
 * 
 *
 * @author suning
 * @date   2017-5-23
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/OrderdepartureAddRequest.php');
$req = new OrderdepartureAddRequest();
//赋值……
$orderDepartue = new OrderDepartue();
$orderDepartue->setArrivalTime("2017-04-28 20:00:00");
$orderDepartue->setCommodityCode("10444215");
$orderDepartue->setContacts("呃呃");
$orderDepartue->setDepartureCode("444444");
$orderDepartue->setDepartureCount("100");
$orderDepartue->setDeparturePlace("南京");
$orderDepartue->setDepartureTime("2017-04-28");
$orderDepartue->setDestination("上海");
$orderDepartue->setLicensePlate("苏AR3334");
$orderDepartue->setPurchaseOrderItemNo("10");
$orderDepartue->setPurchaseOrderNo("111111");
$orderDepartue->setSaleOrderCode("4121022");
$orderDepartue->setSaleOrderItemCode("10");
$orderDepartue->setTel("18551664455");
$req->setOrderDepartue(array($orderDepartue));

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