<?php
/**
 * 商品API - 商品内容维护
 *
 */

// 引入主文件
require_once ('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/item/ItemcontentsAddRequest.php');

$req = new ItemcontentsAddRequest();
$req -> setProductCode("aaa");
$req -> setSellPoint("bbb");
$req -> setFreightTemplateId("ccc");
$req -> setItemCode("hhh");
$req -> setPrice("0.05");
$req -> setInvQty("1000");
$req -> setIntroduction("ddd");
$req -> setAfterSaleServiceDec("kkk");
$req -> setSaleSet("1");
$req -> setSaleDate("2013-12-14");

$childItem = new ChildItem();
$childItem->setAlertQty("dd");
$req->setChildItem(array($childItem));
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'xml');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>