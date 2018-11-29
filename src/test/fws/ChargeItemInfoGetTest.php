<?php
/**
 * 查询收费项目属性接口
 *
 * @author suning
 * @date   2015-6-8
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/fws/ChargeItemInfoGetRequest.php');
$req = new ChargeItemInfoGetRequest();
//赋值……
$req->setServerId("2308");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "95d3ca767adff5aa75adb0363de6f22b";
$appSecret = "c0948c41fe19a358e50552cebc064514";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>