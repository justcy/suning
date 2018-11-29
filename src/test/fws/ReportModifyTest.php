<?php
/**
 * 上传(更新)检测报告
 *
 * @author suning
 * @date   2015-6-8
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/fws/ReportModifyRequest.php');
$req = new ReportModifyRequest();
//赋值……
$req->setQtOrderCode("S01234567890");
$req->setQtCode("QT201501019876543210");
$req->setOrderDetailId("12297");
$req->setItemCode("100015014");
$req->setItemName("åå¤«å±±æ³ç¿æ³æ°´");
$req->setItemDesc("å¤©ç¶ãå®å¨ãå¥åº·");
$req->setQtType("1");
$req->setQtStandard("GB2001");
$req->setQtFile("JVBERi0xLjUNCiW1tbW1DQoxIDAgb2JqDQ");
$req->setFileName("11.pdf");
$req->setQtExpiry("2015-01-01");
$req->setQtOrderStatus("3");
$req->setIsPass("1");
$req->setDescribed("wu");
$req->setMemo("wu");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "95d3ca767adff5aa75adb0363de6f22b";
$appSecret = "c0948c41fe19a358e50552cebc064514";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>