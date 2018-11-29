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
$req = new SearchcarttwocouponQueryRequest();
//赋值……
$req->setCartTwoNo("242225492431967067");
$req->setChanId("02");
$req->setCity("北京市");
$discountList = new DiscountList();
$discountList->setActivityType("5");
$discountList->setDiscount("100.00");
$mainProductList = new MainProductList();
$mainProductList->setBusinessSign("0");
$mainProductList->setCmmdtyCode("000000010533645636");
$mainProductList->setDiscountList(array($discountList));
$mainProductList->setItemId("252225492431458174");
$mainProductList->setMarketingActivityType("0");
$mainProductList->setPrice("100.00");
$mainProductList->setSaleNum("12");
$req->setMainProductList(array($mainProductList));
$req->setMemberNo("6207320981");

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