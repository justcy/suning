<?php
/**
 * 同意退款
 *
 * @author suning
 * @date   2016-2-24
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/rejected/AgreeRefundModifyRequest.php');
$req = new AgreeRefundModifyRequest();
//赋值……
$req->setChildAccountName("soppre12345@163.com");
$req->setCode("324713");
$req->setOrderItemId("00030081505202");
$req->setReturnMoney("107");
$req->setApplyTime("2016-02-23 19:10:23");
$req->setReturnType("4");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "f9ebbfe7100e089b18c1f85513e74678";
$appSecret = "03e372c1b0c9a2440844740262cf1dd4";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>