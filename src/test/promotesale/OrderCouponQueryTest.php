<?php
/**
 * 订单返券活动批量查询
 *
 * @author suning
 * @date   2016-1-11
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/promotesale/OrderCouponQueryRequest.php');
$req = new OrderCouponQueryRequest();
//赋值……
$req->setPageNo("1");
$req->setPageSize("10");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "0dc2d68a00da41ebd9876bdda379f13a";
$appSecret = "c77fa9fa6dabd07de7b369b767f43de2";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>