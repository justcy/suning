<?php
/**
 * 订单发货(包裹单号发货)
 *
 * @author suning
 * @date   2015-10-28
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/transaction/PackageOrderDeliverAddRequest.php');
$req = new PackageOrderDeliverAddRequest();
//赋值……
$req->setPackageOrderId("00000000100005502363");
$req->setDeliveryType("02");
$req->setExpressCompanyCode("B01");
$req->setExpressNo("123123123");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "927b8dabc68dbdc5c778892bd811ea87";
$appSecret = "894aa4ed1010409e9ec50deddf80f250";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>