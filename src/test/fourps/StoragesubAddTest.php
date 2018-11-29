<?php
/**
 * 商品入库预约申请
 *
 * @author suning
 * @date   2016-5-27
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/fourps/StoragesubAddRequest.php');
$req = new StoragesubAddRequest();
//赋值……
$req->setWarehouseCode("1");
$req->setStorageDate("1");
$req->setStorageTime("1");
$req->setCarrier("1");
$req->setContactsNumber("1");
$req->setWaybill("1");
$req->setPurchaseOrderId("1");
$req->setCustomerId("1");
$commodityList = new CommodityList();
$commodityList->setCommodityCode("1"); 
$commodityList->setSupplierCommodityCode("1"); 
$commodityList->setCount("1"); 
$req->setCommodityList(array($commodityList));
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "a13b8bd0efb06a770c57d1c370ce8ee7";
$appSecret = "f08ce9836c4bcfc708194594081f6690";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>