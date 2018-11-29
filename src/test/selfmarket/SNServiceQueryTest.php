<?php
/**
 * 获取苏宁安装类订单信息
 *
 * @author suning
 * @date   2016-4-20
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/SNServiceQueryRequest.php');
$req = new SNServiceQueryRequest();
//赋值……
$req->setRecordGuId("1");
$req->setItemGuId("1");
$req->setSrvOrdId("1");
$req->setStartTime("2015-11-28 00:00:00");
$req->setEndTime("2015-11-29 00:00:00");
$req->setPageNo("1");
$req->setPageSize("2");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "82fdfb8aa13d18b1b3fd703b02f5d45e";
$appSecret = "f73e8c8b9a0ef3b29a408fb71274edbd";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>