<?php
/**
 * 单品销售范围维护
 *
 * @author suning
 * @date   2014-7-18
 */
// 引入主文件
require_once('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/sale/ItemsaleareaAddRequest.php');

$req = new ItemsaleareaAddRequest();
//赋值……
$req->setProductCode("102609864");
$req->setItemCode("1026098632");

$provList = new ProvList();
$provList->setProv(array("260","070"));

$req->setProvList($provList);

$cityList = new CityList();
$cityList->setCity(array("000001000197","000001000198"));

$req->setCityList($cityList);

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'xml');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>