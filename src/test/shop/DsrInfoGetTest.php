<?php
/**
 * 获取店铺评分
 *
 * @author suning
 * @date   2016-5-4
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/shop/DsrInfoGetRequest.php');
$req = new DsrInfoGetRequest();
//赋值……
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "2b3908fa221c2a3739ef324a560536b5";
$appSecret = "dbd2fc8c99288cdad831afb823ae0328";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>