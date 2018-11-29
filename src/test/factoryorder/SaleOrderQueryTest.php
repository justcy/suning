<?php
/**
 * 批量获取销售订单
 *
 * @author suning
 * @date   2016-4-19
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/factoryorder/SaleOrderQueryRequest.php');
$req = new SaleOrderQueryRequest();
//赋值……
$req->setStartTime("2016-03-29 23:06:10");
$req->setEndTime("2016-04-01 23:06:10");
$req->setPageNo("1");
$req->setPageSize("10");
$req->setState("40");
$req->setSupplierCode("10000029");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "1fffda2cb49365e770a1b4b266c471de";
$appSecret = "87175f3d8e6ae538851e398f58438fba";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>