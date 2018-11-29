<?php
/**
 * 新增苏宁物流任务作业状态反馈
 *
 * @author suning
 * @date   2014-8-22
 */
// 引入主文件
require_once('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/logistics/LogisticsTaskStatusAddRequest.php');
$req = new LogisticsTaskStatusAddRequest();
//赋值……
$req->setLogisticOrderId("SNCY0200000008999");
$req->setLogisticExpressId("62000000000000000001");
$req->setLogisticStation("南京配送中心");
$req->setState("1020");
$req->setFinishedDate("2014-06-23");
$req->setFinishedTime("12:00:00");
$req->setConsignee("admin");
$req->setOperator("张三");
$req->setTelNumber("125548752");
$req->setShipmentCode("test");
$req->setWeight("22.2");
$req->setWeightUnit("kg");
$req->setNote("test");
$req->setAirwayBillNo("test");
$req->setFlightDate("test");
$req->setFlightNo("test");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>