<?php
/**
 * 
 *
 * @author suning
 * @date   2018-7-18
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new ApplicationPrivilegeCreateRequest();
//赋值……
$applyHead = new ApplyHead();
$applyHead->setActionDescribe("五一门店促销活动");
$applyHead->setApplyLevel("FGS");
$applyHead->setAreaCompanyCode("5400");
$applyHead->setEndDate("2018-05-20");
$applyHead->setExpenseBudgetCode("HDC0001566");
$applyHead->setHtmlContent("HTML ENCODE:UTF-8");
$applyHead->setInvoiceContent("3");
$applyHead->setPayDate("2018-06-04");
$applyHead->setPayType("3");
$applyHead->setProductBrand("1659");
$applyHead->setSettlementType("1");
$applyHead->setSnCode("5400");
$applyHead->setStartDate("2018-05-01");
$applyHead->setSupplierApplicationCode("HDIC180622578");
$applyHead->setSupplierCode("10000335");
$req->setApplyHead($applyHead);
$areaDetail = new AreaDetail();
$areaDetail->setOperateAreaCompany("1020");
$areaDetail->setOperateAreaShoper("4687");
$req->setAreaDetail(array($areaDetail));
$itemDetail = new ItemDetail();
$itemDetail->setChannel("99");
$itemDetail->setComments("商品优惠");
$itemDetail->setFavoureAmount("100.2");
$itemDetail->setItemCode("101092731");
$itemDetail->setWareHouse("0001");
$itemDetail->setChargeItem("不限");
$req->setItemDetail(array($itemDetail));

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