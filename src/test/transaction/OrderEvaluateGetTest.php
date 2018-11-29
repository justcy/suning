<?php
/**
 * 订单评价单笔查询查询
 *
 * @author suning
 * @date   2016-5-4
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/transaction/OrderEvaluateGetRequest.php');
$req = new OrderEvaluateGetRequest();
//赋值……
$req->setOrderCode("1003163008");
$req->setProductCode("150011381");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "2238a6ccacf472caba35aaa92610983a";
$appSecret = "83505555d41533459d74305c0a68acd3";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>