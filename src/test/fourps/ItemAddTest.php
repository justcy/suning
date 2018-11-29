<?php
/**
 * 商品申请接口
 *
 * @author suning
 * @date   2016-8-15
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/fourps/ItemAddRequest.php');
$req = new ItemAddRequest();
//赋值……
$req->setSupplierCmCode("20160815002");
$req->setProductName("IPHONE6S全网通112");
$req->setGbCode("690024411");
$req->setCmLength("15.001");
$req->setCmWidth("15.001");
$req->setCmHeight("15.001");
$req->setCmVolume("3375.675");
$req->setGrossWeight("2.002");
$req->setNetWeight("2");
$req->setShelfLifeFlag("0");
$req->setShelfLife("30");
$req->setPackingList("123456789012345678901234567890123456789012345678901234567890");
$req->setCategoryName1("1");
$req->setCategoryName2("1");
$req->setBrandName("1");
$req->setStandard("1");
$req->setModel("1234567890123456789012345678901234567890");
$req->setCategoryCode("1");
$req->setBrandCode("R6151001");
$req->setCmType("01");
$req->setCmTitle("test");
$req->setCmArea("00");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "30d2f5605061d760e1c6a1ba1d4a7e59";
$appSecret = "b9ae1a76f5d75c9667471b184dc39b7e";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>