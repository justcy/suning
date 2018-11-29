<?php
/**
 * 
 *
 * @author suning
 * @date   2016-8-24
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/custom/MobileCouponAddRequest.php');
$req = new MobileCouponAddRequest();
//赋值……
$req->setCouponName("优惠券名称");
$couponInfo = new CouponInfo();
$couponInfo->setCouponLink("http://…");
$couponInfo->setCouponPicUrl("http://…");
$req->setCouponInfo($couponInfo);

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "a13b8bd0efb06a770c57d1c370ce8ee7";
$appSecret = "f08ce9836c4bcfc708194594081f6690";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:\n".$resp);
?>