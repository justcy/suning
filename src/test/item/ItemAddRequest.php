<?php
/**
 * 商品API - 产品申请
 *
 */

// 引入主文件
require_once ('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/item/ItemAddRequest.php');

$req = new ItemAddRequest();
$req -> setCategoryCode("dfdfd");
$req -> setBrandCode("dfd");
$req -> setProductName("fdfd");
$req -> setImg1Url("fdfd");
$req -> setIntroduction("fdfd");
$req -> setImg2Url("fdfd");
$req -> setImg3Url("fdfd");
$req -> setImg4Url("fdfd");
$req -> setImg5Url("fdfd");
$req -> setSellPoint("fdfd");
$req -> setFreightTemplateId("fdfd");
$req -> setItemCode("fdfd");
$req -> setPrice("12.1");
$req -> setInvQty("fdfd");
$req -> setAlertQty("fdfd");
$req -> setAfterSaleServiceDec("fdfd");
$req -> setSaleSet("1");
$req -> setSaleDate("2014-03-04");
$pars = new Pars();
$pars->setParCode("fdfd");
$pars->setParValue("fdfd");
$req -> setPars(array($pars));
$packingList = new PackingList();
$packingList->setPackingListName("fdfd");
$packingList->setPackingListQty("fdfd");
$req -> setPackingList(array($packingList));
$module = new Module();
$module->setModuleName("11");
$module->setModuleStatus("11");
$module->setCouponId("11");
$module->setTuijianId("11");
$module->setImgUrl(array("1111111"));
$mobileNew = new MobileNew();
$req -> setModule(array($module));
$req -> setMobileNew(mobileNew);


// api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl, $appKey, $appSecret, 'xml');
$resp = $client -> execute($req);
print_r("返回响应报文:" . $resp);
?>