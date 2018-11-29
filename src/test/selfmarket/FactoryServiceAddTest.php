<?php
/**
 * 厂家安装订单信息反馈
 *
 * @author suning
 * @date   2016-4-20
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/FactoryServiceAddRequest.php');
$req = new FactoryServiceAddRequest();
//赋值……
$req->setRecordGuId("1");
$req->setItemGuId("1");
$req->setSrvOrdId("1");
$req->setSrvOrdType("1");
$req->setOrderStatus("1");
$req->setFacSiteName("1");
$req->setFacSiteTel("1");
$req->setSrvStatus("1");
$req->setInCompleteReason("1");
$req->setInstalledId("1");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "82fdfb8aa13d18b1b3fd703b02f5d45e";
$appSecret = "f73e8c8b9a0ef3b29a408fb71274edbd";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>