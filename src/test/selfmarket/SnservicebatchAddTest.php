<?php
/**
 * 
 *
 * @author suning
 * @date   2017-6-28
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/SnservicebatchAddRequest.php');
$req = new SnservicebatchAddRequest();
//赋值……
$sninstallDetail = new SninstallDetail();
$sninstallDetail->setRecordGuid("5D21BD501D63793FE1000000C0A8765D");
$sninstallDetail->setItemGuid("4FA025393D23C08CE1008000C0A8765B");
$sninstallDetail->setSrvOrdId("7163370425");
$sninstallDetail->setSrvOrdType("ZS01");
$sninstallDetail->setZbtobJsdh("10001023430");
$sninstallDetail->setZbtobFlag("JS");
$sninstallDetail->setZbtobJyCode("103430134");
$sninstallDetail->setZbtobJyDis("XX错误");
$req->setSninstallDetail(array($sninstallDetail));

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