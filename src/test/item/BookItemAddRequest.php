<?php
/**
 * 商品API - 产品申请（文化制品类商品）
 *
 */

// 引入主文件
require_once ('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/item/BookItemAddRequest.php');

$req = new BookItemAddRequest();
$req -> setCategoryCode("dda");
$req -> setSaleCatalogCode("dddd");
$req -> setBrandCode("adfdfd");
$req -> setProductName("dd");
$req -> setImg1Url("aa");
$req -> setImg2Url("dfd");
$req -> setImg3Url("dfd");
$req -> setImg4Url("ddfd");
$req -> setImg5Url("dfd");
$req -> setSellPoint("fdfd");
$req -> setFreightTemplateId("ddd");
$req -> setItemCode("fdf");
$req -> setPrice("add");
$req -> setInvQty("fff");
$req -> setAlertQty("dfdf");
$req -> setAfterSaleServiceDec("ddd");
$req -> setSaleSet("ad");
$req -> setSaleDate("aaa");
$req -> setAuditFlag("ddd");
$pars1 = new Pars();
$pars1->setParCode("add");
$pars1->setParValue("fff");

$pars2 = new Pars();
$pars2->setParCode("add2");
$pars2->setParValue("fff2");

$req -> setPars(array($pars1,$pars2));
// api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl, $appKey, $appSecret, 'xml');
$resp = $client -> execute($req);
print_r("返回响应报文:" . $resp);
?>