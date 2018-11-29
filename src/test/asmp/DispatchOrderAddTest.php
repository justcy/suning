<?php
/**
 * 厂派订单接入
 *
 * @author suning
 * @date   2016-5-27
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/asmp/DispatchOrderAddRequest.php');
$req = new DispatchOrderAddRequest();
//赋值……
$req->setOrderSource("5D21BD");
$req->setSourceOrderItemId("12016031801704");
$req->setOrderType("02");
$req->setOrderTime("20160504120000");
$req->setSaleQty("4");
$req->setCmmdtyQaType("0");
$req->setServiceTime("20160504120000");
$req->setExtdCmmdtyBand("000010254");
$req->setExtdCmmdtyCtgry("R0104001");
$req->setExtdCommodityName("AOå²å¯æ¯çµç­æ°´å¨EWH-60D10B");
$req->setConsignee("çå°ä¸«");
$req->setPhoneNum("025-26739840");
$req->setMobPhoneNum("18651665787");
$req->setSrvAddress("0;;ä¸æµ·å¸;æ¨æµ¦åº;å¨åº;;;;å¸åè·¯å·¥åä¸æ72å·301å®¤");
$req->setStandardCode("1");
$req->setCityCode("025");
$req->setSrvAreaCode("0250103");
$req->setSrvMemo("æ ");
$req->setSaleDate("20160504120000");
$req->setServiceSource("SN");
$req->setSalesPerson("customer");
$req->setOrderChannel("PC");
$req->setFaultTypeCode("1");
$req->setCustomerProperty("0001");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "5c991b791c6e5c46f925c7c6171a22cc";
$appSecret = "911bc7ef82abc19f065f256d7afef2d9";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>