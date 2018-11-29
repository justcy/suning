<?php
/**
 * 商品API - 文化制品类商品内容维护
 *
 */

// 引入主文件
require_once('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/item/BookItemcontentsAddRequest.php');

$req = new BookItemcontentsAddRequest(); 
$req -> setProductCode("108521158");
$req -> setSellPoint("卖点");
$req -> setFreightTemplateId("206b6ab5b1534564892077d9182637a7");
$req -> setItemCode("1111");
$req -> setPrice("199.00");
$req -> setInvQty("999");
$req -> setAlertQty("20");
$req -> setAfterSaleServiceDec("我是售后服务");
$req -> setSaleSet("1");
$req -> setSaleDate("2014-08-21");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'xml');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);

?>