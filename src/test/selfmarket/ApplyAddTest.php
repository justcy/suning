<?php
/**
 * 
 *
 * @author suning
 * @date   2018-3-6
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new ApplyAddRequest();
//赋值……
$req->setBarpic("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setBrandCode("A101");
$req->setCategoryCode("R6101011");
$parsX = new ParsX();
$parsX->setParCodeX("111");
$parsX->setParValueX("红色");
$childItem = new ChildItem();
$childItem->setBarcode("11");
$childItem->setBarpicX("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$childItem->setItemCodeX("111");
$childItem->setParsX(array($parsX));
$childItem->setSupplierImgAUrl("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setChildItem(array($childItem));
$req->setCmTitle("商品标题");
$req->setConventionBeginTime("2018-02-13 11:37:00");
$req->setConventionEndTime("2018-02-13 11:37:00");
$req->setConventionPoints("常规促销卖点");
$detailModule = new DetailModule();
$detailModule->setContent("模块化详情内容");
$detailModule->setModuleId("123");
$detailModule->setModuleName("模块名称");
$detailModule->setNum("1");
$detailModule->setType("cat_mod");
$req->setDetailModule(array($detailModule));
$req->setEndTime("2018-02-13 11:37:00");
$req->setHighBeginTime("2018-02-13 11:37:00");
$req->setHighEndTime("2018-02-13 11:37:00");
$req->setHighPoints("高级促销卖点");
$req->setIntroduction("好品质好商品");
$req->setItemCode("naikeabc");
$req->setMobilePromotionLink("http://shop.suning.com/70088824/10108744.html");
$packingList = new PackingList();
$packingList->setPackingListName("电脑");
$packingList->setPackingListQty("1");
$req->setPackingList(array($packingList));
$pars = new Pars();
$pars->setParCode("cm_model");
$pars->setParValue("1");
$req->setPars(array($pars));
$req->setProductName("大衣");
$req->setPromotionFlag("是");
$req->setPromotionLink("http://shop.suning.com/70088824/10108744.html");
$req->setPromotionPoints("活动关联文案");
$req->setSellingPoints("商品卖点");
$req->setStartTime("2018-02-13 11:37:00");
$supplierImgUrl = new SupplierImgUrl();
$supplierImgUrl->setUrlA("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$supplierImgUrl->setUrlB("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$supplierImgUrl->setUrlC("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$supplierImgUrl->setUrlD("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$supplierImgUrl->setUrlE("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setSupplierImgUrl(array($supplierImgUrl));

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