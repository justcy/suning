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
$req = new PurweekplanConfirmRequest();
//赋值……
$purchaseWeekPlans = new PurchaseWeekPlans();
$purchaseWeekPlans->setItemStatus("20");
$purchaseWeekPlans->setLocationCode("0001");
$purchaseWeekPlans->setPlantCode("D025");
$purchaseWeekPlans->setPurchaseWeekPlanNo("W000001");
$purchaseWeekPlans->setReplenishmentQty("1000");
$purchaseWeekPlans->setSnProductCode("102536103");
$purchaseWeekPlans->setSupplierComment("供应商备注");
$purchaseWeekPlans->setSupplierConfirmTime("2018-8-2 12:12:12");
$purchaseWeekPlans->setWeekItem("1");
$purchaseWeekPlans->setWeekplanStartDate("2018M8W2");
$req->setPurchaseWeekPlans(array($purchaseWeekPlans));
$req->setSupplierCode("1000198");

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