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
$req = new OrderAddRequest();
//赋值……
$req->setAddress("xxxx");
$req->setAmount("88.00");
$req->setCityId("010");
$req->setCompanyCustNo("6114631094");
$req->setCountyId("01");
$req->setEmail("xx@xx.com");
$req->setInvoiceContent("1");
$req->setInvoiceState("1");
$req->setInvoiceTitle("11");
$req->setInvoiceType("1");
$req->setMobile("xxxx");
$req->setOrderType("0");
$req->setPayment("01");
$req->setProvinceId("10");
$req->setReceiverName("张三");
$req->setRemark("xx");
$req->setServFee("5.00");
$sku = new Sku();
$sku->setNum("1");
$sku->setSkuId("121345091");
$sku->setUnitPrice("88.00");
$req->setSku(array($sku));
$req->setTaxNo("1234567890ABCDE");
$req->setTelephone("010-xxxx");
$req->setTownId("01");
$req->setTradeNo("1000001");
$req->setZip("210000");

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