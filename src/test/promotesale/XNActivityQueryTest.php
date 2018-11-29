<?php
/**
 * X元N件活动批量查询
 *
 * @author suning
 * @date   2015-7-27
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/promotesale/XNActivityQueryRequest.php');
$req = new XNActivityQueryRequest();
//赋值……
$req->setPageNo("1");
$req->setPageSize("10");
$req->setStartTime("2015-06-24 00:00:00");
$req->setEndTime("2015-07-27 23:59:59");
$req->setActivityStatus("8");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "cf97250875cd07d64fea3428dd3bd109";
$appSecret = "9fb5785f3f84f60589329228182b0c0e";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>