<?php
/**
 * 海外购订单申报（海外直邮）
 *
 * @author suning
 * @date   2016-1-27
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/transaction/SeaOrderDeclareAddRequest.php');
$req = new SeaOrderDeclareAddRequest();
//赋值……
$req->setB2cOrderNo("2003139508");
$orderLineList = new OrderLineList();
$orderLineList->setOrderLineNumber("00030081246201"); 
$req->setOrderLineList(array($orderLineList));
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "d86feb368f2fcc87d11d69283ed58544";
$appSecret = "3e1be3797982bfbf46501121cc9a43d3";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>