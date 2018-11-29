<?php
/**
 * 订单发货任务创建
 *
 * @author suning
 * @date   2015-12-28
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/OrderDeliveryAddRequest.php');
$req = new OrderDeliveryAddRequest();
//赋值……
$req->setOutOrderId("201512280100011");
$req->setOrderSource("201");
$req->setScheduleType("1");
$req->setDeliveryType("1");
$req->setScheduleDay("2015-12-29 12:20:00");
$req->setScheduleStart("2015-12-29 12:20:00");
$req->setScheduleEnd("2015-12-29 12:20:00");
$req->setReceiverZipCode("22");
$req->setReceiverProvince("22");
$req->setReceiverCity("22");
$req->setReceiverArea("22");
$req->setReceiverTown("22");
$req->setReceiverAddress("22");
$req->setReceiverName("22");
$req->setReceiverMobile("22");
$req->setReceiverPhone("22");
$req->setCarCode("22");
$req->setOrderFlag("22");
$req->setCustSelectNumber("22");
$orderProductList = new OrderProductList();
$orderProductList->setWarehouseCode("22"); 
$orderProductList->setOrderItemId("22"); 
$orderProductList->setItemCode("22"); 
$orderProductList->setOuterItemId("22"); 
$orderProductList->setItemName("22"); 
$orderProductList->setInventoryType("22"); 
$orderProductList->setItemQuantity("22"); 
$orderProductList->setDeliverNo("22"); 
$orderProductList->setActualPrice("22"); 
$orderProductList->setColourNumber("22"); 
$orderProductList->setProduceCode("22"); 
$req->setOrderProductList(array($orderProductList));
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "9416c0de5c17023f78ea058f541f5895";
$appSecret = "6b86c422951046e2408da57f303241b0";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>