<?php
/**
 * 
 *
 * @author suning
 * @date   2017-7-27
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/cmall/PointgiveAddRequest.php');
$req = new PointgiveAddRequest();
//赋值……
$req->setCustNum("6143457056");
$req->setDeviceId("aafadfadf");
$req->setEcoType("140000000010");
$req->setInvokerCode("pptv");
$order = new Order();
$order->setAccountType("8012");
$order->setAddAmt("11");
$order->setBranch("5006");
$order->setCmdtyBrand("adad");
$order->setCmdtyCatalog("aad");
$order->setCmdtyCode("adadd");
$order->setCmdtyGroup("adaa");
$order->setCmdtyName("aada");
$order->setOrderAmt("10");
$order->setOrderItemId("A101602061818477844");
$order->setOrderType("DXHDT");
$order->setOrderTypeDesc("aaa");
$order->setStore("8371");
$order->setSupplierCode("如果积分发放主体类型为209000000020时，此字段必填");
$order->setSupplierType("209000000020");
$req->setOrder($order);
$req->setOrderId("aaaaaa");
$req->setSceneCode("场景编码");
$req->setSceneType("PE1110");
$req->setTransId("d7bb1090e11c4ab398b38ab75efa6e02");
$req->setTransTimestamp("2016-05-06 18:18:47:691");

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