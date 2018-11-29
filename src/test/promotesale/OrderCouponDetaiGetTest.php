<?php
/**
 * 订单优惠活动详情查询
 *
 * @author suning
 * @date   2016-2-24
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/promotesale/OrderCouponDetaiGetRequest.php');
$req = new OrderCouponDetaiGetRequest();
//赋值……
$req->setActivityCode("16022314491010000061");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "02ceb7726e47e2592d82a6472841deb2";
$appSecret = "67e3c4355126ea68077b702554b75548";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>