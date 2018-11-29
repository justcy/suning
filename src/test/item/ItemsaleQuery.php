<?php
/**
 * 商品API - 获取商品销售情况
 *
 */

// 引入主文件
require_once('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/item/ItemsaleQueryRequest.php');

$req = new ItemsaleQueryRequest(); 
$req -> setProductName("女装外套");
$req -> setProductCode("102609882");
$req -> setCategoryCode("R2701002");
$req -> setPriceUpper("400.00");
$req -> setPriceLimit("50.00");
$req -> setSaleStatus("1");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'xml');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>