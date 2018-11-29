<?php
/**
 * 订单优惠活动创建
 *
 * @author suning
 * @date   2016-6-21
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/promotesale/OrderCouponAddRequest.php');
$req = new OrderCouponAddRequest();
//赋值……
$req->setActivityName("0åè´­");
$req->setStartTime("2015-06-18 00:00:00");
$req->setEndTime("2015-07-18 00:00:00");
$req->setChannelInfo("31");
$req->setActivityProductType("1");
$req->setCouponProductType("1");
$req->setReturnCouponType("1");
$req->setReturnCouponValue("1");
$req->setActivityLimit("1");
$req->setActivityTimesLimit("1");
$req->setPeopleActivityTimesLimit("1");
$req->setEffectDays("1");
$req->setBaseQuantifierType("1");
$req->setRewardType("1");
$req->setAreaCode("1");
$req->setBooleanCap("1");
$rewardList = new RewardList();
$rewardList->setFloor("1"); 
$rewardList->setDiscountValue("1"); 
$rewardList->setRewardAmount("1"); 
$rewardList->setBaseAmount("1"); 
$rewardList->setDiscountThreshold("1"); 
$rewardList->setCutAmount("1"); 
$rewardList->setReduceLimit("1"); 
$req->setRewardList(array($rewardList));
$couponProductList = new CouponProductList();
$couponProductList->setCouponProductCode("1"); 
$req->setCouponProductList(array($couponProductList));
$activityProductList = new ActivityProductList();
$activityProductList->setActivityProductCode("1"); 
$req->setActivityProductList(array($activityProductList));
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "97df3d2ad61f460a78bce2be41497268";
$appSecret = "a73d0e4436b606b5d1ad69d5677fff9a";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>