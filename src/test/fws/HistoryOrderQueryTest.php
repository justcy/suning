<?php
/**
 * 批量查询订单记录接口
 *
 * @author suning
 * @date   2015-6-8
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/fws/HistoryOrderQueryRequest.php');
$req = new HistoryOrderQueryRequest();
//赋值……
$req->setServerId("");
$req->setChargeId("");
$req->setStartTime("2015-06-01 00:00:00");
$req->setEndTime("2015-07-01 00:00:00");
$req->setOrderCategory("1");
$req->setPageNo("1");
$req->setPageSize("10");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "95d3ca767adff5aa75adb0363de6f22b";
$appSecret = "c0948c41fe19a358e50552cebc064514";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>