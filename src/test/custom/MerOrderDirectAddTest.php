<?php
/**
 * 
 *
 * @author suning
 * @date   2017-12-19
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new MerOrderDirectAddRequest();
//赋值……
$req->setCityCode("025");
$req->setCmmdtyQaType("0");
$req->setConsignee("张三");
$req->setExtdCmmdtyBand("0000137D5");
$req->setExtdCmmdtyCtgry("R0125658");
$req->setExtdCommodityCode("42346869");
$req->setExtdCommodityName("挂壁式空调");
$req->setFaultTypeCode("B1202004");
$req->setMobPhoneNum("18551600409");
$req->setOrderChannel("ZL");
$req->setOrderTime("20160414175115");
$req->setPhoneNum("073586131462");
$req->setProName("02");
$req->setSaleDate("20130222162020");
$req->setSaleQty("5");
$req->setSalesPerson("75324568");
$req->setSapOrderType("ZS01");
$req->setServiceTime("20160420093018");
$req->setSourceOrderItemId("752316542542535");
$req->setSrvAddress("随机数字；小区/大厦/单位/村；市；区/县/开发区；镇/街道办；路/道/街；巷/弄；号；详细地址");
$req->setSrvAreaCode("0250199");
$req->setSrvMemo("需要带支架，需要维修");

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