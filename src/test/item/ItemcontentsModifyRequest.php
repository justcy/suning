<?php
/**
 * 商品API - 商品内容修改
 *
 */

// 引入主文件
require_once ('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/item/ItemcontentsModifyRequest.php');

$req = new ItemcontentsModifyRequest();
$req -> setProductCode("dfdfd");
$req -> setSellPoint("dfd");
$req -> setFreightTemplateId("dfddfd");
$req -> setItemCode("dfdf");
$req -> setIntroduction("fdfd");
$req -> setAfterSaleServiceDec("dd");
$req -> setSaleSet("1");
$req -> setSaleDate("2014-12-15");
$childItem = new ChildItem();
$childItem->setProductCode("dfdf");
$childItem->setItemCode("dfdf");
$req -> setChildItem(array($childItem));
// api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl, $appKey, $appSecret, 'xml');
$resp = $client -> execute($req);
print_r("返回响应报文:" . $resp);
?>