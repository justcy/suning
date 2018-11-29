<?php
/**
 * 
 *
 * @author suning
 * @date   2016-11-17
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/oto/ItemAddRequest.php');
$req = new ItemAddRequest();
//赋值……
$req->setCategoryCode("R6101011");
$req->setBrandCode("A101");
$req->setProductName("电脑");
$req->setSellPoint("卖点");
$req->setSaleSet("1");
$req->setCmTitle("标题");
$req->setTargetChannel("1");
$req->setPrice("100.11");
$req->setItemCode("111");
$req->setAssortCode("210002118");
$req->setSupplierImg1Url("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setSupplierImg2Url(">http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setSupplierImg3Url("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setSupplierImg4Url("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setSupplierImg5Url("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$pars = new Pars();
$pars->setParCode("LAENG");
$pars->setParValue("1");
$req->setPars(array($pars));
$pars1 = new Pars();
$pars1->setParCode("LAENG");
$pars1->setParValue("1");
$childItem = new ChildItem();
$childItem->setItemCode("111");
$childItem->setBarcode("11");
$childItem->setPrice("1.11");
$childItem->setSupplierImg1Url("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$childItem->setBarpic("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$childItem->setPars(array($pars1));
$req->setChildItem(array($childItem));
$req->setBarpic("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setIntroduction("电脑详情");
$detailModule = new DetailModule();
$detailModule->setNum("1");
$detailModule->setModuleId("R2701001_1");
$detailModule->setModuleName("优惠信息");
$detailModule->setType("cat_mod");
$detailModule->setContent("模块化详情内容");
$req->setDetailModule(array($detailModule));
$packingList = new PackingList();
$packingList->setPackingListName("电脑");
$packingList->setPackingListQty("1");
$req->setPackingList(array($packingList));
$req->setSaleDate("2016-10-11");

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