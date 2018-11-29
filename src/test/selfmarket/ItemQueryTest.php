<?php
/**
 * 
 *
 * @author suning
 * @date   2018-1-11
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new ItemQueryRequest();
//赋值……
$req->setApplyStatus("11");
$req->setBrandCode("I678");
$req->setCategoryCode("R3301002");
$req->setCmTitle("商品标题");
$req->setContentStatus("12");
$req->setEndTime("2015-11-27 16:21:38");
$req->setItemCode("123");
$req->setPageNo("1");
$req->setPageSize("10");
$req->setProductCode("140001234");
$req->setStartTime("2015-11-27 16:21:38");
$req->setSupplierCodeAsk("12345678912");

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