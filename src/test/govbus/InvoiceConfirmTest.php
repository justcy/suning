<?php
/**
 * 
 *
 * @author suning
 * @date   2018-3-6
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new InvoiceConfirmRequest();
//赋值……
$applyForInvoiceReqDTO = new ApplyForInvoiceReqDTO();
$applyForInvoiceReqDTO->setAddress("江苏省南京市秦淮区法院");
$applyForInvoiceReqDTO->setCompanyName("江苏舜天有限公司");
$applyForInvoiceReqDTO->setConsigneeMobileNum("17856789012");
$applyForInvoiceReqDTO->setConsigneeName("张三");
$applyForInvoiceReqDTO->setInvoiceContent("22");
$applyForInvoiceReqDTO->setInvoiceType("6");
$applyForInvoiceReqDTO->setRegAccount("23235254664336");
$applyForInvoiceReqDTO->setRegAdd("江苏省南京市雨花区软件大道舜天集团");
$applyForInvoiceReqDTO->setRegBank("453453434534354");
$applyForInvoiceReqDTO->setRegTel("18767890345");
$applyForInvoiceReqDTO->setTaxNo("32534346637");
$applyForInvoiceReqDTO->setTitle("南京苏宁软件有限公司");
$req->setApplyForInvoiceReqDTO($applyForInvoiceReqDTO);
$orderInfoDTO = new OrderInfoDTO();
$orderInfoDTO->setGcOrderNo("23423524334");
$req->setOrderInfoDTO(array($orderInfoDTO));

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