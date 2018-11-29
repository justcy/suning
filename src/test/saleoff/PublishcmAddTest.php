<?php
/**
 * 
 *
 * @author suning
 * @date   2017-5-18
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/saleoff/PublishcmAddRequest.php');
$req = new PublishcmAddRequest();
//赋值……
$req->setProductCode("102652866");
$req->setSellPoint("卖点");
$req->setCmTitle("商品标题");
$req->setPrice("123");
$req->setItemCode("主商品商家商品编码。");
$req->setIntroduction("商家商品介绍");
$packingList = new PackingList();
$packingList->setPackingListQty("1");
$packingList->setPackingListName("装箱清单名单");
$req->setPackingList(array($packingList));
$childItem = new ChildItem();
$childItem->setProductCodeX("104007723");
$childItem->setItemCodeX("561");
$childItem->setPriceX("11");
$childItem->setSupplierImgAUrl("http://1.jpg");
$req->setChildItem(array($childItem));
$detailModule = new DetailModule();
$detailModule->setContent("模块化详情内容");
$detailModule->setNum("1");
$detailModule->setModuleId("R6151002_1");
$detailModule->setModuleName("模块名称");
$detailModule->setType("cat_mod");
$req->setDetailModule(array($detailModule));
$req->setSupplierImgUrlA("http://1.jpg");
$req->setSupplierImgUrlB("http://1.jpg");
$req->setSupplierImgUrlC("http://1.jpg");
$req->setSupplierImgUrlD("http://1.jpg");
$req->setSupplierImgUrlE("http://1.jpg");
$req->setLtpic("http://1.jpg");
$req->setAfterSaleServiceDec("22");

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