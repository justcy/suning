<?php
/**
 * 销售准备API - 修改运费模板
 *
 */

// 引入主文件
require_once('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/sale/FreighttemplateModifyRequest.php');

$req = new FreighttemplateModifyRequest();
$req -> setFreightTemplateId("4ddc79a287c34c01b7823a5c725b46af");
$req -> setFreightTemplateName("temp3");
$req -> setShippingType("0");
$req -> setValuationType("1");
$req -> setFirstValue("4.0");
$req -> setFirstValueFare("4.00");
$req -> setContinuedValue("2.0");
$req -> setContinuedValueFare("2.00");
$freightList = new FreightList();
$freightList -> setSperencod("002");
$freightList -> setSpeprovencod("150");
$freightList -> setSpecityencod("000001000175");
$freightList -> setFirstValue("4.0");
$freightList -> setFirstValueFare("4.00");
$freightList -> setContinuedValue("2.0");
$freightList -> setContinuedValueFare("2.00");
$req -> setFreightList($freightList);
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'xml');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);

?>