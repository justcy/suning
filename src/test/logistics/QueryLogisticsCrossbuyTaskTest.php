<?php
/**
 * 苏宁物流跨境购任务派发信息批量查询
 *
 * @author suning
 * @date   2015-1-22
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/logistics/QueryLogisticsCrossbuyTaskRequest.php');
$req = new QueryLogisticsCrossbuyTaskRequest();
//赋值……
$req->setStartTime("2014-01-01 01:01:01");
$req->setEndTime("2014-01-01 23:59:59");
$req->setPageNo("1");
$req->setPageSize("10");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "7671c52d74ce85fde1d219c7ad9d2c81";
$appSecret = "c87d119d63660e4d6372f07a42d2e4e5";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>