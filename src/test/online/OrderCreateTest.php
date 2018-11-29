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
$req = new OrderCreateRequest();
//赋值……
$fullReductionInfo = new FullReductionInfo();
$fullReductionInfo->setActivityId("1233434");
$fullReductionInfo->setBonusId("2079097");
$fullReductionInfo->setFullReductionAmount("2.00");
$fullReductionInfo->setFullReductionType("1");
$fullReductionInfo->setProvider("01");
$couponInfo = new CouponInfo();
$couponInfo->setCouponAmount("1.00");
$couponInfo->setCouponCode("21212");
$couponInfo->setCouponType("01");
$platFormOrder = new PlatFormOrder();
$platFormOrder->setBusinessSign("0");
$platFormOrder->setCouponInfo(array($couponInfo));
$platFormOrder->setFullReductionInfo(array($fullReductionInfo));
$platFormOrder->setOrderItemId("22222222222222");
$platFormOrder->setOrderItemStatus("01");
$platFormOrder->setOrderPayment("10.00");
$platFormOrder->setOuterSkuId("123456789");
$platFormOrder->setPointAmount("1.00");
$platFormOrder->setPostage("5.00");
$platFormOrder->setPrice("100.00");
$platFormOrder->setPromotionNum("201419801004**");
$platFormOrder->setSaleNum("3");
$platFormOrder->setSelectedArrivalTime("2018-08-01-2");
$platFormOrder->setSelectedInstallDate("11");
$platFormOrder->setSkuId("1234");
$platFormOrder->setTotalFee("12.00");
$platFormTrade = new PlatFormTrade();
$platFormTrade->setAccntBank("南京银行");
$platFormTrade->setBankAccntNum("6YUIOP3456789009876");
$platFormTrade->setBespoke("Y");
$platFormTrade->setCartTwoNo("DLJA2018114812000000");
$platFormTrade->setChanId("01");
$platFormTrade->setInvoiceContent("餐饮");
$platFormTrade->setInvoiceTitle("个人消费");
$platFormTrade->setInvoiceTitleType("01");
$platFormTrade->setInvoiceType("01");
$platFormTrade->setIsSupportPromotion("0");
$platFormTrade->setMemberNo("23456543");
$platFormTrade->setOrderId("123342312");
$platFormTrade->setOrderStatus("01");
$platFormTrade->setOrderType("A001");
$platFormTrade->setPayment("100.00");
$platFormTrade->setPlatFormOrder(array($platFormOrder));
$platFormTrade->setReceiverAddress("修文路9号");
$platFormTrade->setReceiverCity("南京市");
$platFormTrade->setReceiverCounty("江宁区");
$platFormTrade->setReceiverMobile("12345678900");
$platFormTrade->setReceiverName("张三");
$platFormTrade->setReceiverNationality("中国");
$platFormTrade->setReceiverPhone("025-22222222");
$platFormTrade->setReceiverProvince("江苏省");
$platFormTrade->setReceiverStreet("淳化街道");
$platFormTrade->setReceiverZip("210000");
$platFormTrade->setRegAddr("举例");
$platFormTrade->setRegPhone("02584418888");
$platFormTrade->setTaxMobilePhone("02584418888");
$platFormTrade->setTaxPayerAddr("南京市白下区淮宁电器大厦18F");
$platFormTrade->setTaxPayerName("张三");
$platFormTrade->setTaxPayerNo("21111");
$platFormTrade->setTaxPayerPhone("02584418888");
$platFormTrade->setTotalNo("2");
$req->setPlatFormTrade($platFormTrade);

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