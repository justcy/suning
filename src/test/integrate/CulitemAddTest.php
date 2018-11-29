<?php
/**
 * 
 *
 * @author suning
 * @date   2018-3-23
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new CulitemAddRequest();
//赋值……
$req->setAfterSaleServiceDec("七天内包退换");
$req->setAlertQty("10");
$req->setAssortCode("11111");
$req->setAuditFlag("X");
$req->setBrandCode("000C");
$req->setCategoryCode("R00001");
$req->setCmTitle("111");
$detailModule = new DetailModule();
$detailModule->setContent("模块化详情内容");
$detailModule->setModuleId("123");
$detailModule->setModuleName("模块名称");
$detailModule->setNum("1");
$detailModule->setType("cat_mod");
$req->setDetailModule(array($detailModule));
$req->setIntroduction("111");
$req->setInvQty("100");
$req->setItemCode("12233");
$pars = new Pars();
$pars->setParCode("111");
$pars->setParValue("111");
$req->setPars(array($pars));
$req->setPeopleNum("2");
$req->setPingouPrice("20.00");
$req->setPrice("20.00");
$req->setProductName("平凡的世界");
$req->setSaleCatalogCode("262676");
$req->setSaleDate("2014-01-06");
$req->setSaleSet("0");
$req->setSellPoint("好品质");
$req->setSupplierImgAUrl("11");
$req->setSupplierImgBUrl("11");
$req->setSupplierImgCUrl("11");
$req->setSupplierImgDUrl("111");
$req->setSupplierImgEUrl("111");
$req->setWhiteBackgroundPic("https://uimgpre.cnsuning.com/uimg/sop/commodity/151495935813172557645370_x.png");

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