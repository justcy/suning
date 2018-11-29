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
$req = new OrdQueryRequest();
//赋值……
$req->setEndTime("yyyy-MM-dd HH:mm:ss");
$req->setOrderItemStatus("订单行状态,0:未付关闭;5:未付款,10:待发货,40:已发货,45:已代顾客确认收货,50:顾客已收货,60:单证已寄票,70:顾客已收票,75:交易关闭");
$req->setPageNo("1");
$req->setPageSize("10");
$req->setStartTime("yyyy-MM-dd HH:mm:ss");
$req->setSupplierCode("123456789");

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