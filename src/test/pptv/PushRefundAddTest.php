<?php
/**
 * 
 *
 * @author suning
 * @date   2017-4-1
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/pptv/PushRefundAddRequest.php');
$req = new PushRefundAddRequest();
//赋值……
$req->setBuyerNick("tbtest561");
$req->setCompanyName("申通快递");
$req->setCreatedTime("2016-01-01 00:00:00");
$req->setDesc("测试");
$req->setModifiedTime("2016-01-02 00:00:00");
$req->setNum("1");
$req->setOid("1377744083656645");
$req->setOrderStatus("TRADE_BUYER_SIGNED");
$req->setOuterId("ISBN-001");
$req->setReason("测试");
$req->setRefundFee("10.00");
$req->setRefundId("54479739429405");
$req->setRefundNum("1");
$req->setRefundPhase("onsale");
$req->setRefundVersion("1411375308927");
$req->setSellerNick("tbtest869");
$req->setSid("123456789");
$req->setStatus("SELLER_REFUSE_BUYER");
$req->setTid("1377744083656645");
$req->setTitle("天堂伞龙井茶");
$req->setTotalFee("10.00");
$req->setType("T");

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