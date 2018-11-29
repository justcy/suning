<?php
/**
 * 库存API - （平行仓模式）设置仓库覆盖范围
 *
 */

// 引入主文件
require_once('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/inventory/ParallelinvareaSetRequest.php');

$req = new ParallelinvareaSetRequest(); 
$req -> setInvCode("100");
$invProvinces = new InvProvinces();
$invProvince = new InvProvince();
$invProvince->setInvProvinceCode("100");
$invProvince1 = new InvProvince();
$invProvince1->setInvProvinceCode("101");
$invProvinces->setInvProvince(array($invProvince,$invProvince1));
$req -> setInvProvinces($invProvinces);

$invCitys = new InvCitys();
$invCity1 = new InvCity();
$invCity1->setInvCityCode("000001000173");
$invCity2 = new InvCity();
$invCity2->setInvCityCode("000001000354");
$invCitys -> setInvCity(array($invCity1,$invCity2));
$req -> setInvCitys($invCitys);
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>