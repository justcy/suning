<?php
/**
 * 
 *
 * @author suning
 * @date   2018-8-3
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new ShoppingordersCreateRequest();
//赋值……
$req->setAppId("af99f27da589fbf089103f2f44c9a");
$req->setBuyerName("张三");
$req->setBuyerPhone("15866728686");
$req->setCreateCode("1405648424");
$req->setDiscountAmount("0.00");
$req->setDiscountCode("6833452575344");
$installDelivery = new InstallDelivery();
$installDelivery->setInstallBuyerAddress("XXX路31号XXX大厦A座2楼");
$installDelivery->setInstallCityCode("320100");
$installDelivery->setInstallCityName("南京市");
$installDelivery->setInstallDistrictCode("320112");
$installDelivery->setInstallDistrictName("江宁区");
$installDelivery->setInstallName("张三");
$installDelivery->setInstallPhone("18632678623");
$installDelivery->setInstallProvinceCode("320000");
$installDelivery->setInstallProvinceName("江苏省");
$installDelivery->setInstallTownCode("320112");
$installDelivery->setInstallTownName("江宁");
$req->setInstallDelivery($installDelivery);
$req->setMerchantCustNo("1701014245");
$req->setOrderAmount("2862.00");
$orderDelivery = new OrderDelivery();
$orderDelivery->setBuyerAddress("XXX路31号XXX大厦A座2楼");
$orderDelivery->setCityCode("320100");
$orderDelivery->setCityName("南京市");
$orderDelivery->setDistrictCode("320112");
$orderDelivery->setDistrictName("江宁区");
$orderDelivery->setProvinceCode("320000");
$orderDelivery->setProvinceName("江苏省");
$orderDelivery->setReceiverName("张三");
$orderDelivery->setReceiverPhone("18632486868");
$orderDelivery->setTownCode("320112");
$orderDelivery->setTownName("江宁");
$req->setOrderDelivery($orderDelivery);
$req->setOrderFrom("1");
$orderItem = new OrderItem();
$orderItem->setBookTimeDetail("2018-07-01");
$orderItem->setCmmdtyCode("E232A1000000157");
$orderItem->setCmmdtyName("空调");
$orderItem->setHopeArrivalTime("2018-07-01");
$orderItem->setInstallFlag("0");
$orderItem->setOrderType("1");
$orderItem->setOuterOrderItemNo("1004654");
$orderItem->setQuantity("1");
$orderItem->setSellPrice("2800.00");
$orderItem->setServiceCode("556421389");
$orderItem->setShipMethod("1");
$orderItem->setSupplierCode("SN");
$orderItem->setSupplierName("苏宁");
$orderItem->setTotalPayAmount("2800.00");
$orderItem->setUnitPrice("27800.00");
$orderItem->setDistributorCode("0000000000");
$req->setOrderItem(array($orderItem));
$req->setOuterOrderNo("4343424");
$req->setPayAmount("2862.00");
$req->setPosCode("6849451548");
$req->setRemark("备注信息");
$req->setSalesMode("1");
$req->setStoreCode("1232130002");
$req->setUserCode("00000012313");

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