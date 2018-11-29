<?php
/**
 * 单个查询订单记录接口
 *
 * @author suning
 * @date   2015-6-8
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/fws/HistoryOrderGetRequest.php');
$req = new HistoryOrderGetRequest();
//赋值……
$req->setOrderId("109");
$req->setOrderDetailId("259");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "d883413ac56a1429afc776625c8a4917";
$appSecret = "b08d684dc2ff8bcfd458c65d4501d730";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>