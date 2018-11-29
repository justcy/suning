<?php
/**
 * 
 *
 * @author suning
 * @date   2018-4-24
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new SuporderstatusAddRequest();
//赋值……
$supOrderStatus = new SupOrderStatus();
$supOrderStatus->setLatestArrTime("2017-08-09 ");
$supOrderStatus->setNotPassReasons("货源不足");
$supOrderStatus->setNumber("12");
$supOrderStatus->setOmsItemNo("1");
$supOrderStatus->setOmsOrderNo("123456");
$supOrderStatus->setPlanArrTime("yyyy-MM-dd");
$supOrderStatus->setPurchaseOrderNo("1001417778");
$supOrderStatus->setPurOrderItemNo("1");
$supOrderStatus->setState("11");
$supOrderStatus->setStatusOccurTime("yyyy-MM-dd");
$req->setSupOrderStatus(array($supOrderStatus));
$req->setSupplierCode("10001097");

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