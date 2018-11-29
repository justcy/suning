<?php
/**
 * 
 *
 * @author suning
 * @date   2016-10-19
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/advertise/PromotionUnitAddRequest.php');
$req = new PromotionUnitAddRequest();
//赋值……
$req->setPromotionId("20160621001");
$req->setGoodsCode("000000000102276549");
$req->setGoodsUrl("http://uimgpre.cnsuning.com/uimg/b2c/newcatentries/0000000000-000000000102276549_1_200x200.jpg");
$unitDetail = new UnitDetail();
$unitDetail->setKeyWordCataLog("全棉夏凉被");
$unitDetail->setPrice("10");
$unitDetail->setType("0");
$req->setUnitDetail(array($unitDetail));

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