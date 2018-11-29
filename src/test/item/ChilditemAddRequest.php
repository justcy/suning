<?php
/**
 * 商品API - 子商品新增
 *
 */

// 引入主文件
require_once ('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/item/ChilditemAddRequest.php');

$req = new ChilditemAddRequest();
$req -> setParentProductCode("104000339");
$req -> setItemCode("120120");
$req -> setBarcode("222");
$req -> setPrice("59.00");
$req -> setInvQty("4546");
$req -> setAlertQty("67");
$req -> setImg1Url("http://a.hiphotos.baidu.com/image/pic/item/9922720e0cf3d7ca4b79057ff01fbe096b63a92f.jpg");
$req -> setImg2Url("http://a.hiphotos.baidu.com/image/pic/item/9922720e0cf3d7ca4b79057ff01fbe096b63a92f.jpg");
$req -> setImg3Url("http://a.hiphotos.baidu.com/image/pic/item/9922720e0cf3d7ca4b79057ff01fbe096b63a92f.jpg");
$req -> setImg4Url("http://a.hiphotos.baidu.com/image/pic/item/9922720e0cf3d7ca4b79057ff01fbe096b63a92f.jpg");
$req -> setImg5Url("http://a.hiphotos.baidu.com/image/pic/item/9922720e0cf3d7ca4b79057ff01fbe096b63a92f.jpg");
$pars = new Pars();
$pars->setParCode("G00003");
$pars->setParValue("24码");
$req -> setPars(array($pars));
// api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl, $appKey, $appSecret, 'xml');
$resp = $client -> execute($req);
print_r("返回响应报文:" . $resp);
?>