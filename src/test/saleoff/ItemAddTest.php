<?php
/**
 * 
 *
 * @author suning
 * @date   2017-5-9
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/saleoff/ItemAddRequest.php');
$req = new ItemAddRequest();
//赋值……
$req->setSupplierImg3Url("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setCategoryCode("R6101011");
$req->setSellPoint("卖点");
$req->setSupplierImg2Url("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setSupplierImg5Url("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setBarpic("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setCmTitle("商品标题");
$req->setSupplierImg1Url("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setPrice("100.11");
$req->setSupplierImg4Url("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setBrandCode("A101");
$req->setProductName("商品名称");
$req->setIntroduction("电脑详情");
$req->setItemCode("商家商品编码");
$parsX = new ParsX();
$parsX->setParValueX("红色");
$parsX->setParCodeX("G00001");
$childItem = new ChildItem();
$childItem->setBarpicX("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$childItem->setSupplierImgAUrl("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$childItem->setBarcode("11");
$childItem->setItemCodeX("子商品商家商品编码");
$childItem->setParsX(array($parsX));
$childItem->setPriceX("1.11");
$req->setChildItem(array($childItem));
$pars = new Pars();
$pars->setParCode("cm_model");
$pars->setParValue("1");
$req->setPars(array($pars));
$detailModule = new DetailModule();
$detailModule->setNum("1");
$detailModule->setModuleId("R2701001_1");
$detailModule->setModuleName("优惠信息");
$detailModule->setType("cat_mod");
$detailModule->setContent("模块化详情内容");
$req->setDetailModule(array($detailModule));
$packingList = new PackingList();
$packingList->setPackingListQty("1");
$packingList->setPackingListName("电脑");
$req->setPackingList(array($packingList));
$req->setLtpic("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");

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