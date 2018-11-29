<?php
/**
 * 
 *
 * @author suning
 * @date   2017-5-23
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/InventoryAddRequest.php');
$req = new InventoryAddRequest();
//赋值……
$inventory = new Inventory();
$inventory->setCommodityCode("1111620000000 ");
$inventory->setCommodityName("R35G/HFJ+3成品");
$inventory->setCreateTime("2017-04-08 20:00:00");
$inventory->setFactoryName("天津、南昌、宁波");
$inventory->setInventoryDate("2017-04-08");
$inventory->setInvertoryCount("500");
$inventory->setOfflineInventory("500");
$req->setInventory(array($inventory));

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