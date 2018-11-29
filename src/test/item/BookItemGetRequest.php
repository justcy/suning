<?php
/**
 * 商品API - 我的商品库信息精确查询（文化制品类商品）
 *
 */

// 引入主文件
require_once('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/item/BookItemdetailQueryRequest.php');

$req = new BookItemdetailQueryRequest(); 
$req -> setProductCode("105560068");
$req -> setProductName("十万个为什么");
$req -> setItemCode("9787511002884");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'xml');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>