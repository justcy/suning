<?php
/**
 * 购物返券活动批量查询
 *
 * @author suning
 * @date   2014-10-16
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/promotesale/QueryShoppingCouponRequest.php');
$req = new QueryShoppingCouponRequest();
//赋值……
$req->setPageNo("1");
$req->setPageSize("10");
$req->setTimeType("1");
$req->setStartTime("2014-01-10 14:14:12");
$req->setEndTime("2014-05-06 10:20:30");
$req->setStatusCode("1");
$req->setRange("1");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "a13b8bd0efb06a770c57d1c370ce8ee7";
$appSecret = "f08ce9836c4bcfc708194594081f6690";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>