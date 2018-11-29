<?php
/**
 * 销售准备API - 修改销售范围模板
 *
 */
// 引入主文件
require_once('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/sale/SaleareatemplateModifyRequest.php');

$req = new SaleareatemplateModifyRequest();
$req -> setTemplateId("1c2855714df94ed880a54f35788e11629bd8a2f54cb64e8d");
$req -> setTemplateName("ts001");
$req -> setNation("0");
$provList = new ProvList();
$prov = array('100');
$provList -> setProv($prov);
$req -> setProvList($provList);
$cityList = new CityList();
$city = array('000001000197');
$cityList -> setCity($city);
$req -> setCityList($cityList);
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);

?>