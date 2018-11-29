<?php
/**
 * 网盟订单信息批量查询
 *
 * @author suning
 * @date   2014-10-16
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/netalliancetx/QueryNetallianceOrderRequest.php');
$req = new QueryNetallianceOrderRequest();
//赋值……
$req->setStartTime("2014-01-10 14:14:12");
$req->setEndTime("2014-05-06 10:20:30");
$req->setPageNo("5");
$req->setPageSize("10");
$req->setOrderLineStatus("1");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "a3de6c25b13856ca68b5e7ebb6a4cdee";
$appSecret = "820b0b5b375ea950197eec48ad54a00a";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>