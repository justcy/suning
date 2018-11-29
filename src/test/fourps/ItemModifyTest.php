<?php
/**
 * 商品修改接口
 *
 * @author suning
 * @date   2016-2-23
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/fourps/ItemModifyRequest.php');
$req = new ItemModifyRequest();
//赋值……
$req->setSupplierCmCode("201602151515");
$req->setProductName("金螳螂0224api发cmType防尘");
$req->setGbCode("201602151650abcd");
$req->setCmLength("2");
$req->setCmWidth("2");
$req->setCmHeight("2");
$req->setCmVolume("2");
$req->setGrossWeight("2");
$req->setNetWeight("2");
$req->setShelfLifeFlag("2");
$req->setPackingList("2");
$req->setShelfLife("2");
$req->setCategoryName1("222");
$req->setCategoryName2("22222");
$req->setBrandName("222");
$req->setStandard("22");
$req->setModel("2");
$req->setCategoryCode("22");
$req->setBrandCode("22");
$req->setCmType("2");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "30d2f5605061d760e1c6a1ba1d4a7e59";
$appSecret = "b9ae1a76f5d75c9667471b184dc39b7e";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>