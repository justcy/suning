<?php
/**
 * 单个订单详情查询
 *
 * @author suning
 * @date   2016-3-28
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/supply/SupplyOrderGetRequest.php');
$req = new SupplyOrderGetRequest();
//赋值……
$req->setOrderCode("1002725050");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "917f0b9a93b31393cf4d4816a84c2434";
$appSecret = "917f0b9a93b31393cf4d4816a84c2433";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>