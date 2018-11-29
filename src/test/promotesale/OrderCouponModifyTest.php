<?php
/**
 * 订单返券活动修改
 *
 * @author suning
 * @date   2016-1-11
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/promotesale/OrderCouponModifyRequest.php');
$req = new OrderCouponModifyRequest();
//赋值……
$req->setActivityCode("16010815271010000173");
$req->setActivityName("111");
$req->setEndTime("2016-03-09 21:00:00");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "4bbe33560f7d8825d6a6d76e5b3ff105";
$appSecret = "95bc2213518145c09a377d042c814e90";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>