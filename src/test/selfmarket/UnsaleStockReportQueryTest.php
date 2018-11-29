<?php
/**
 * 获取滞销样式库存报表
 *
 * @author suning
 * @date   2016-3-9
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/UnsaleStockReportQueryRequest.php');
$req = new UnsaleStockReportQueryRequest();
//赋值……
$req->setSupplierCode("10026379");

$req->setPageNo("1");
$req->setPageSize("1");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "0dcb65d09590d6eb1b5b0d475f695959";
$appSecret = "5826187b5ba4dbd9f414fdc7ecec6e6f";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>