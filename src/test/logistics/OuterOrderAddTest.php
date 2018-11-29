<?php
/**
 * 外部订单创建接口
 *
 * @author suning
 * @date   2015-8-7
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/logistics/OuterOrderAddRequest.php');
$req = new OuterOrderAddRequest();
//赋值……
$req->setOriSys("ZZD");
$orderItems = new OrderItems();
$orderItem = new OrderItem();
$orderItem->setOrderId("1004232622100105"); 
$orderItem->setBusinessType("B008"); 
$orderItem->setShipCondition("01"); 
$orderItem->setExpressValue("1"); 
$orderItem->setAnnouncedValue("1"); 
$orderItem->setValueUnit("1"); 
$orderItem->setInsuredValue("1"); 
$orderItem->setReceiptBillFlag("1"); 
$orderItem->setCashonDeliveryType("1"); 
$orderItem->setCashonDeliveryValue("1"); 
$orderItem->setReceiveCheckCode("1"); 
$orderItem->setDeliPoint("1"); 
$orderItem->setHomeLanFlag("1"); 
$orderItem->setTaxOnbaggage("1"); 
$orderItem->setTaxUnit("1"); 
$orderItem->setPickupDate("2015-08-04"); 
$orderItem->setPickupTime("23:22:22"); 
$orderItem->setExpectDate("2015-08-10"); 
$orderItem->setExpectTime("23:00:00"); 
$orderItem->setOrderCustomer("0010000011"); 
$orderItem->setPriorityGrade("1"); 
$orderItem->setCreateNumLes("admin"); 
$orderItem->setCreateTimeLes("12:02:23"); 
$orderItem->setCreateDateLes("2014-02-23"); 
$crossItems = new CrossItems();
$crossItem = new CrossItem();
$crossItem->setItemNumber("1"); 
$crossItem->setExpressCode("1"); 
$crossItem->setCrossName("aa"); 
$crossItem->setLength("1"); 
$crossItem->setWidth("1"); 
$crossItem->setHeight("1"); 
$crossItem->setLengthUnit("1"); 
$crossItem->setVolume("1"); 
$crossItem->setVolumeUnit("1"); 
$crossItem->setCrossWeight("1"); 
$crossItem->setWeightUnit("1"); 
$crossItem->setRemarks("éè¦ç©å,è¯·è½»æ¿è½»æ¾"); 
$crossItem->setRelationTaskSys("1"); 
$crossItem->setRelationTaskId("1"); 
$crossItem->setRelationTaskItemId("1"); 
$crossItems->setCrossItem(array($crossItem));
$orderItem->setCrossItems($crossItems);
$orderPartners = new OrderPartners();
$orderPartner = new OrderPartner();
$orderPartner->setItemNumber("1"); 
$orderPartner->setCustomerType("AG"); 
$orderPartner->setCustomerId("0010000016"); 
$orderPartner->setName("zhagnshan"); 
$orderPartner->setAddress1("ä»é¹¤é¨"); 
$orderPartner->setAddress2("1"); 
$orderPartner->setZipCode("1"); 
$orderPartner->setProvince("åäº¬å¸"); 
$orderPartner->setCity("åäº¬å¸"); 
$orderPartner->setDistrict("çæ­¦åº"); 
$orderPartner->setTown("1"); 
$orderPartner->setRegion("1"); 
$orderPartner->setFixedlineTelephone("1"); 
$orderPartner->setMobilePhone("13412345670"); 
$orderPartner->setEmail("1"); 
$orderPartner->setTransportationZone("1"); 
$orderPartners->setOrderPartner(array($orderPartner));
$orderPartner = new OrderPartner();
$orderPartner->setItemNumber("1"); 
$orderPartner->setCustomerType("WE"); 
$orderPartner->setCustomerId("0010000016"); 
$orderPartner->setName("zhagnshan"); 
$orderPartner->setAddress1("ä»é¹¤é¨"); 
$orderPartner->setAddress2("1"); 
$orderPartner->setZipCode("1"); 
$orderPartner->setProvince("åäº¬å¸"); 
$orderPartner->setCity("åäº¬å¸"); 
$orderPartner->setDistrict("çæ­¦åº"); 
$orderPartner->setTown("1"); 
$orderPartner->setRegion("1"); 
$orderPartner->setFixedlineTelephone("1"); 
$orderPartner->setMobilePhone("13412345670"); 
$orderPartner->setEmail("1"); 
$orderPartner->setTransportationZone("1"); 
$orderPartners->setOrderPartner(array($orderPartner));
$orderItem->setOrderPartners($orderPartners);
$orderItems->setOrderItem(array($orderItem));
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