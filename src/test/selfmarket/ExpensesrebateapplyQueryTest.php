<?php
/**
 * 
 *
 * @author suning
 * @date   2018-4-17
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new ExpensesrebateapplyQueryRequest();
//赋值……
$req->setApplicationCode("1000X0011706000063");
$req->setApplyBegindate("2018-01-01");
$req->setApplyEnddate("2018-01-11");
$req->setApplyModel("31");
$req->setCheckedBegindate("2018-01-01");
$req->setCheckedEnddate("2017-01-11");
$req->setPageNo("1");
$req->setPageSize("10");
$req->setSnCode("5400");
$req->setSupplierCode("10000007");

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