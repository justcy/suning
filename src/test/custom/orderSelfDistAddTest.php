<?php
/**
 * 
 *
 * @author suning
 * @date   2018-1-12
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new orderSelfDistAddRequest();
//赋值……
$req->setDeliveryPerName("张三");
$req->setDeliveryPerPhone("13899995555");
$req->setDeliveryTime("2012-06-20 00:00:00");
$req->setOrderCode("88888");
$orderLineNumbers = new OrderLineNumbers();
$orderLineNumbers->setOrderLineNumber("100151521");
$req->setOrderLineNumbers($orderLineNumbers);
$phoneIdentifyCodes = new PhoneIdentifyCodes();
$phoneIdentifyCodes->setOrderLineNumber("1");
$phoneIdentifyCodes->setPhoneIdentifyCode("1");
$phoneIdentifyCodes->setProductCode("1");
$req->setPhoneIdentifyCodes(array($phoneIdentifyCodes));
$productCodes = new ProductCodes();
$productCodes->setProductCode("108252389");
$req->setProductCodes($productCodes);

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