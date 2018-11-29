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
$req = new CulitemcontentsModifyRequest();
//赋值……
$req->setAfterSaleServiceDec("七天内包退换");
$req->setAlertQty("5");
$req->setAssortCode("11111111");
$req->setCmTitle("商品标题");
$detailModule = new DetailModule();
$detailModule->setContent("模块化详情内容");
$detailModule->setModuleId("123");
$detailModule->setModuleName("模块名称");
$detailModule->setNum("1");
$detailModule->setType("模板类型");
$req->setDetailModule(array($detailModule));
$req->setIntroduction("单一详情");
$req->setInvQty("10");
$req->setItemCode("7775");
$req->setPrice("20.00");
$req->setProductCode("105560068");
$req->setSaleDate("2014-01-06");
$req->setSaleSet("0");
$req->setSellPoint("十万个为什么");
$req->setSupplierImgAUrl("商家商品图片1地址url");
$req->setSupplierImgBUrl("商家商品图片2地址url");
$req->setSupplierImgCUrl("商家商品图片3地址url");
$req->setSupplierImgDUrl("商家商品图片4地址url");
$req->setSupplierImgEUrl("商家商品图片5地址url");
$req->setWhiteBackgroundPic("https://uimgpre.cnsuning.com/uimg/sop/commodity/151495935813172557645370_x.png");
$req->setPingouPrice("20.00");
$req->setPeopleNum("2");

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