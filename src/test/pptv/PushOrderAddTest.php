<?php
/**
 * 
 *
 * @author suning
 * @date   2017-4-5
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/pptv/PushOrderAddRequest.php');
$req = new PushOrderAddRequest();
//赋值……
$req->setBuyerNick("_82203a3f81a78d1292ef@alipay");
$req->setDeliveryArea("0270702");
$req->setHopeArrivalTime("2016-01-01 01:01:01");
$req->setInvoiceFlag("0");
$req->setInvoiceName("苏宁易购");
$req->setInvoiceType("01");
$order = new Order();
$order->setCreated("2017-02-19 12:07:16");
$order->setDiscountFee("0");
$order->setNum("2");
$order->setNumIId("173681370");
$order->setOrderitemId("2153");
$order->setPayment("520");
$order->setPayTime("2017-02-19 12:07:56");
$order->setPayTypeAmount("520");
$order->setPayTypeCode("4235");
$order->setPayTypeDesc("支付宝");
$order->setPrice("520");
$order->setStoreCode("DZ30");
$order->setTotalFee("520");
$req->setOrder(array($order));
$req->setOrderId("2017021912071637922761");
$req->setPostFee("0.00");
$req->setReceiverAddress("关山大道1号光谷软件园光谷展示中心C座5层");
$req->setReceiverCity("武汉市");
$req->setReceiverDistrict("洪山区");
$req->setReceiverMobile("13995596082");
$req->setReceiverName("姜先生");
$req->setReceiverPhone("13995596082");
$req->setReceiverState("湖北省");
$req->setReceiverTown("关山街道");
$req->setReceiverZip("223700");
$req->setSellerNick("pptv聚力官方商城");

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