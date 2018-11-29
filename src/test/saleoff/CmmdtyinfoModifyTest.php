<?php
/**
 * 
 *
 * @author suning
 * @date   2018-1-22
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new CmmdtyinfoModifyRequest();
//赋值……
$req->setAfterSaleServiceDec("324234");
$childItem = new ChildItem();
$childItem->setItemCodeX("1");
$childItem->setProductCodeX("100000001");
$childItem->setSupplierImgAUrlX("http://1.jpg");
$req->setChildItem(array($childItem));
$req->setCmTitle("4324");
$detailModule = new DetailModule();
$detailModule->setContent("34");
$detailModule->setModuleId("R2701001_1");
$detailModule->setModuleName("优惠信息");
$detailModule->setNum("1");
$detailModule->setType("cat_mod");
$req->setDetailModule(array($detailModule));
$req->setIntroduction("23123");
$req->setItemCode("324234");
$req->setLtpic("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$packingList = new PackingList();
$packingList->setPackingListName("电脑");
$packingList->setPackingListQty("1");
$req->setPackingList(array($packingList));
$req->setProductCode("4324");
$req->setSellPoint("34234");
$req->setSupplierImgAUrl("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setSupplierImgBUrl("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setSupplierImgCUrl("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setSupplierImgDUrl("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setSupplierImgEUrl(" 	http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");

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