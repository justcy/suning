<?php
/**
 * 外部订单修改接口
 *
 * @author suning
 * @date   2015-8-7
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/logistics/OuterOrderModifyRequest.php');
$req = new OuterOrderModifyRequest();
//赋值……
$req->setOriSys("ZZD");
$orderItems = new OrderItems();

$orderItem = new OrderItem();
$orderItem->setLogisticsOrderId("115080000254802"); 
$orderItem->setChangeReason("ss"); 
$orderItem->setChangeFlag("N"); 
$orderItem->setPickupDate("2015-08-04"); 
$orderItem->setPickupTime("23:22:22"); 
$orderItem->setExpectDate("2015-08-10"); 
$orderItem->setExpectTime("23:00:00"); 
$orderItem->setCashonDeliveryType("02"); 
$orderItem->setCashonDeliveryValue("25.25"); 
$orderItem->setChangeDateTime("2015-08-07 09:01:01"); 
$crossItems = new CrossItems();
$crossItem = new CrossItem();
$crossItem->setItemNumber("10"); 
$crossItem->setDeliNumber("1"); 
$crossItem->setDeliUnit("ä»¶"); 
$crossItem->setVolume("36.855"); 
$crossItem->setVolumeUnit("CM3"); 
$crossItem->setCrossWeight("25.365"); 
$crossItem->setWeightUnit("KG"); 
$crossItem->setRemarks("tsss"); 
$crossItems->setCrossItem(array($crossItem));
$orderItem->setCrossItems($crossItems);
$orderPartners = new OrderPartners();
$orderPartner = new OrderPartner();
$orderPartner->setItemNumber("20"); 
$orderPartner->setCustomerType("WE"); 
$orderPartner->setCustomerId("0010000011"); 
$orderPartner->setName("zhangyu"); 
$orderPartner->setAddress1("sss"); 
$orderPartner->setAddress2("dddd"); 
$orderPartner->setZipCode("52140"); 
$orderPartner->setProvince("tt"); 
$orderPartner->setCity("dd"); 
$orderPartner->setDistrict("gg"); 
$orderPartner->setTown("ww"); 
$orderPartner->setRegion("ff"); 
$orderPartner->setFixedlineTelephone("5222"); 
$orderPartner->setMobilePhone("5555"); 
$orderPartner->setEmail("55"); 
$orderPartner->setTransportationZone("55"); 
$orderPartners->setOrderPartner(array($orderPartner));
$orderItem->setOrderPartners($orderPartners);


$orderItem1 = new OrderItem();
$orderItem1->setLogisticsOrderId("115080000254802"); 
$orderItem1->setChangeReason("ss"); 
$orderItem1->setChangeFlag("N"); 
$orderItem1->setPickupDate("2015-08-04"); 
$orderItem1->setPickupTime("23:22:22"); 
$orderItem1->setExpectDate("2015-08-10"); 
$orderItem1->setExpectTime("23:00:00"); 
$orderItem1->setCashonDeliveryType("02"); 
$orderItem1->setCashonDeliveryValue("25.25"); 
$orderItem1->setChangeDateTime("2015-08-07 09:01:01"); 
$crossItems1 = new CrossItems();
$crossItem1 = new CrossItem();
$crossItem1->setItemNumber("10"); 
$crossItem1->setDeliNumber("1"); 
$crossItem1->setDeliUnit("ä»¶"); 
$crossItem1->setVolume("36.855"); 
$crossItem1->setVolumeUnit("CM3"); 
$crossItem1->setCrossWeight("25.365"); 
$crossItem1->setWeightUnit("KG"); 
$crossItem1->setRemarks("tsss"); 
$crossItems1->setCrossItem(array($crossItem1));
$orderItem1->setCrossItems($crossItems1);
$orderPartners1 = new OrderPartners();
$orderPartner1 = new OrderPartner();
$orderPartner1->setItemNumber("20"); 
$orderPartner1->setCustomerType("WE"); 
$orderPartner1->setCustomerId("0010000011"); 
$orderPartner1->setName("zhangyu"); 
$orderPartner1->setAddress1("sss"); 
$orderPartner1->setAddress2("dddd"); 
$orderPartner1->setZipCode("52140"); 
$orderPartner1->setProvince("tt"); 
$orderPartner1->setCity("dd"); 
$orderPartner1->setDistrict("gg"); 
$orderPartner1->setTown("ww"); 
$orderPartner1->setRegion("ff"); 
$orderPartner1->setFixedlineTelephone("5222"); 
$orderPartner1->setMobilePhone("5555"); 
$orderPartner1->setEmail("55"); 
$orderPartner1->setTransportationZone("55"); 
$orderPartners1->setOrderPartner(array($orderPartner1));
$orderItem1->setOrderPartners($orderPartners1);
$orderItems->setOrderItem(array($orderItem,$orderItem1));

$req->setOrderItems($orderItems);
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "7727e111b255b1e5fc6fededcca6edc2";
$appSecret = "a3719da1dc3eccf2d087cf2f53dafb83";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>