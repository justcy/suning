<?php
/**
 * 批量获取采购调拨报表
 *
 * @author suning
 * @date   2015-12-14
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/AllotFormQueryRequest.php');
$req = new AllotFormQueryRequest();
//赋值……
$req->setStartTime("20151124");
$req->setEndTime("20151124");
$req->setBrandCode("000060864");
$req->setPageNo("1");
$req->setPageSize("50");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "4e5ffc4d6e4f714e2eaf93268cf9b8d4";
$appSecret = "7b3360b7c9ff91c7959fe5c4c772c4da";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>