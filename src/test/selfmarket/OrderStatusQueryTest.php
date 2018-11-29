<?php
/**
 * 订单状态查询
 *
 * @author suning
 * @date   2015-11-18
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/OrderStatusQueryRequest.php');
$req = new OrderStatusQueryRequest();
//赋值……
$req->setOrderSource("201");
$req->setStartTime("2015-11-01 12:20:00");
$req->setEndTime("2015-11-13 12:20:00");
$req->setQueryType("2");
$req->setPageSize("50");
$req->setPageNo("1");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "1579d631e43245840c515ffffdaea0a6";
$appSecret = "165bb7a9d57c4feca55c719893d592b0";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>