<?php
/**
 * 
 *
 * @author suning
 * @date   2017-7-25
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/custom/ElectronicInvoiceAddRequest.php');
$req = new ElectronicInvoiceAddRequest();
//赋值……
$req->setInvoiceCode("1111");
$req->setInvoiceData("13v1123v3bh2h234");
$req->setInvoiceNo("1111");
$req->setInvoiceTime("2016-08-01 10:10:10");
$req->setInvoiceType("1");
$req->setOrderId("4511680451");
$req->setProductCode("1111");

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