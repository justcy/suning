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
$req = new MixpayorderAddRequest();
//赋值……
$req->setAddress("江苏省南京市雨花区软件大道舜天集团");
$req->setAmount("88.00");
$req->setCityId("025");
$req->setCompanyCustNo("15114631094");
$req->setCountyId("05");
$req->setEmail("xxx@xxx.com");
$req->setInvoiceContent("1");
$req->setInvoiceState("1");
$req->setInvoiceTitle("江苏舜天有限公司");
$req->setInvoiceType("1");
$req->setMobile("15311351111");
$req->setOrderType("1");
$req->setPayment("08");
$req->setProvinceId("100");
$req->setReceiverName("张三");
$req->setRemark("xxxxx");
$req->setServFee("5.00");
$sku = new Sku();
$sku->setNum("1");
$sku->setSkuId("140272356");
$sku->setUnitPrice("88.00");
$req->setSku(array($sku));
$specialVatTicket = new SpecialVatTicket();
$specialVatTicket->setCompanyName("江苏舜天有限公司");
$specialVatTicket->setConsigneeAddress("江苏省南京市秦淮区法院");
$specialVatTicket->setConsigneeMobileNum("15822222200");
$specialVatTicket->setConsigneeName("张三");
$specialVatTicket->setRegAccount("23235254664336");
$specialVatTicket->setRegAdd("江苏省南京市雨花区软件大道舜天集团");
$specialVatTicket->setRegBank("453453434534354");
$specialVatTicket->setRegTel("18767890345");
$specialVatTicket->setTaxNo("1234567890ABCDE");
$req->setSpecialVatTicket($specialVatTicket);
$subPaymentModes = new SubPaymentModes();
$subPaymentModes->setPayAmount("50");
$subPaymentModes->setPayCode("7207");
$req->setSubPaymentModes(array($subPaymentModes));
$req->setTelephone("010-84728989");
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