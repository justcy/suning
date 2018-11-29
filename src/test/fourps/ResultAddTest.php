<?php
/**
 * 
 *
 * @author suning
 * @date   2017-4-24
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/fourps/ResultAddRequest.php');
$req = new ResultAddRequest();
//赋值……
$req->setExpressKey("tiantian");
$req->setFailReason("商品已损坏");
$req->setFreight("30.04");
$req->setPickupMan("张三");
$req->setPickupManContact("18651660535");
$req->setPickupNetwork("111玄武区快递点");
$req->setPickupNetworkContact("18651660531");
$req->setPickupState("0");
$req->setPickupTime("2017-03-27  11:34:17");
$req->setPushType("1");
$req->setReturnOrderId("D201609272106001855");
$req->setSignupState("0");
$req->setSignupTime("2017-03-27  11:34:17");
$req->setWaybillNo("105452777012");
$req->setWeight("20.05");

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