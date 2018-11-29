<?php
/**
 * 订单退货任务创建
 *
 * @author suning
 * @date   2015-12-28
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/OrderReturnAddRequest.php');
$req = new OrderReturnAddRequest();
//赋值……
$req->setOutOrderId("201512280001");
$req->setOldOrderId("20151228145701");
$req->setOrderSource("201");
$req->setExpectStartTime("2015-12-29 12:20:00");
$req->setExpectEndTime("2015-12-31 12:20:00");
$req->setRemark("11");
$req->setSenderZipCode("11");
$req->setSenderProvince("11");
$req->setSenderCity("11");
$req->setSenderArea("11");
$req->setSenderTown("11");
$req->setSenderAddress("11");
$req->setSenderName("11");
$req->setSenderMobile("11111111");
$req->setSenderPhone("11111");
$req->setTakeFlag("1");
$req->setOrderFlag("1");
$orderProductList = new OrderProductList();
$orderProductList->setWarehouseCode("111"); 
$orderProductList->setOrderItemId("111"); 
$orderProductList->setReturnReason("1111"); 
$orderProductList->setDeliverNo("111"); 
$orderProductList->setItemName("111"); 
$orderProductList->setItemCode("11"); 
$orderProductList->setOuterItemId("11"); 
$orderProductList->setItemQuantity("3"); 
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