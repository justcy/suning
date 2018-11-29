<?php
/**
 * 
 *
 * @author suning
 * @date   2017-1-12
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/ChilditemAddRequest.php');
$req = new ChilditemAddRequest();
//赋值……
$req->setParentProductCode("1000");
$pars = new Pars();
$pars->setParCode("1000");
$pars->setParValue("子商品特性参数值");
$req->setPars(array($pars));
$req->setSupplierImgAUrl("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setItemCode("123");
$req->setBarcode("123");
$req->setBarpic("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");

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