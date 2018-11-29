<?php
/**
 * 发票预校验查询
 *
 * @author suning
 * @date   2016-4-19
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/InvoiceCheckResultQueryRequest.php');
$req = new InvoiceCheckResultQueryRequest();
//赋值……
$req->setSupplierCode("10001372");
$req->setSnCode("5400");
//$req->setStartDate("1");
//$req->setEndDate("1");
$req->setInvoiceNum("1");
//$req->setInvoiceCode("1");
//$req->setInvoiceModel("1");
$req->setPageNo("1");
$req->setPageSize("2");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "a226186c2b811ce7fbce83e8a98dc7fe";
$appSecret = "435687b33f10f5114a1d2440fe0848c7";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>