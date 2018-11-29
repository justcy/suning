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
$req = new ReceiveinfoModifyRequest();
//赋值……
$req->setCityName("南京市");
$req->setCustomerName("张三");
$req->setDetailAddress("苏宁大道1号");
$req->setDistrictName("玄武区");
$req->setMobilePhoneNum("1110002222");
$req->setOrderCode("101030001");
$req->setPhoneNum("02566996699");
$req->setProvinceName("江苏省");
$req->setSupplierCode("10001373");
$req->setTownCode("0250101");
$req->setTownName("仙鹤门街道");
$req->setUserName("aa@163.com");

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