<?php
/**
 * X元N件活动新增
 *
 * @author suning
 * @date   2015-7-27
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/promotesale/XNActivityAddRequest.php');
$req = new XNActivityAddRequest();
//赋值……
$req->setActivityName("test1");
$req->setStartTime("2016-09-24 20:26:47");
$req->setEndTime("2016-10-30 20:26:47");
$req->setChannelInfo("31");
$req->setBaseAmount("3");
$req->setRewardAmount("100");
$req->setIsLimit("Y");
$req->setPeopleActivityTimesLimit("10");
$req->setPeopleDayTimesLimit("10");
$productList = new ProductList();
$productList->setProductCode("122028287");
				
$req->setProductList(array($productList));

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "cf97250875cd07d64fea3428dd3bd109";
$appSecret = "9fb5785f3f84f60589329228182b0c0e";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>