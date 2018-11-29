<?php
/**
 * 单笔查询大聚会商品信息
 *
 * @author suning
 * @date   2015-9-14
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/netallianceju/JuInfomationGetRequest.php');
$req = new JuInfomationGetRequest();
//赋值……
$req->setCommCode("646456");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "3b1e16f2d85ae1da8d85527b5a8c15d4";
$appSecret = "1c8eff31342f09ecce5189ce88b966a4";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>