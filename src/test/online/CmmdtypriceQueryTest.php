<?php
/**
 * 
 *
 * @author suning
 * @date   2018-9-11
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new CmmdtypriceQueryRequest();
//赋值……
$cmmdtyInfo = new CmmdtyInfo();
$cmmdtyInfo->setAddress("XXX小区XXX号");
$cmmdtyInfo->setChanId("02");
$cmmdtyInfo->setCity("南京市");
$cmmdtyInfo->setCmmdtyCode("123456789");
$cmmdtyInfo->setCounty("江宁区");
$cmmdtyInfo->setOrderItemId("99883884");
$cmmdtyInfo->setProvince("江苏省");
$cmmdtyInfo->setSaleNum("2");
$cmmdtyInfo->setVillage("淳化镇");
$req->setCmmdtyInfo(array($cmmdtyInfo));
$req->setSceneType("1:列表搜索 2:详情页面 3:购物流程");

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