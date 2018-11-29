<?php
/**
 * 
 *
 * @author suning
 * @date   2018-8-22
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new CartwocomputeQueryRequest();
//赋值……
$req->setCartTwoNo("DLJA2018114812000000");
$req->setChanId("01");
$req->setCity("南京市");
$mainProductList = new MainProductList();
$mainProductList->setBusinessSign("0");
$mainProductList->setCmmdtyCode("123156481248");
$mainProductList->setItemId("123156481248");
$mainProductList->setMarketingActivityType("4-1");
$mainProductList->setPrice("1.00");
$mainProductList->setSaleNum("3");
$req->setMainProductList(array($mainProductList));
$req->setMemberNo("18397652345");

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