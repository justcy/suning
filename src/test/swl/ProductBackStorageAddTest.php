<?php
/**
 * 商品退库预约申请
 *
 * @author suning
 * @date   2015-6-24
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/swl/ProductBackStorageAddRequest.php');
$req = new ProductBackStorageAddRequest();
//赋值……
$req->setWarehouseCode("L004");
$req->setRefundType("0");
$req->setAppointDate("2015-06-26");
$req->setAppointTime("16:00");
$req->setContacts("1111");
$req->setSupplierPhone("18626368253");
$commodityList = new CommodityList();
$commodityList->setRefundCount("6");
$commodityList->setSupCommCode("22");
$commodityList->setCommodityCode("120861696");
				
$req->setCommodityList(array($commodityList));

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "d4d39a8040fa16d9aa499a4af9b2a660";
$appSecret = "3fde6dadef8515ea3ecf96ae4398d5c2";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>