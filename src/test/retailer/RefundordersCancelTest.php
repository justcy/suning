<?php
/**
 * 
 *
 * @author suning
 * @date   2018-8-3
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new RefundordersCancelRequest();
//赋值……
$req->setMerchantCustNo("2453451234");
$req->setStoreCode("3653245");
$orderList = new OrderList();
$orderList->setOrderItemNo("3412431");
$orderList->setCmmdtyCode("2134566654");
$orderList->setOuterOrderItemNo("11145365");
$orderList->setOrderNo("P1807110000159021");
$req->setOrderList(array($orderList));
$req->setAppId("fd3af1ads4jlg3realf5ga");

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