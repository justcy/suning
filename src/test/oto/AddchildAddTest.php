<?php
/**
 * 
 *
 * @author suning
 * @date   2016-11-16
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/oto/AddchildAddRequest.php');
$req = new AddchildAddRequest();
//赋值……
$req->setParentProductCode("1000");
$req->setItemCode("sjspbm");
$req->setBarcode("1100");
$req->setPrice("123");
$req->setBarpic("http://10.19.95.100/uimg/sop/commodity/201311290550007674_x.jpg");
$req->setSupplierImg1Url("http://10.19.95.100/uimg/sop/commodity/201311290550007674_x.jpg");
$pars = new Pars();
$pars->setParCode("G00003");
$pars->setParValue("23码");
$req->setPars(array($pars));

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