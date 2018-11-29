<?php
/**
 * 定向发券活动详情查询
 *
 * @author suning
 * @date   2015-12-14
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/promotesale/DireCouponDetailGetRequest.php');
$req = new DireCouponDetailGetRequest();
//赋值……
$req->setActivityCode("15121114160610000027");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "02ceb7726e47e2592d82a6472841deb2";
$appSecret = "67e3c4355126ea68077b702554b75548";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>