<?php
/**
 * 批量查询指定收费项目服务剩余可使用数量
 *
 * @author suning
 * @date   2015-6-8
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/fws/ChargeItemRemainQueryRequest.php');
$req = new ChargeItemRemainQueryRequest();
//赋值……
$req->setChargeId("21228");
$req->setBusinessAccounts("tiger@3.com");
$req->setPageNo("1");
$req->setPageSize("10");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "95d3ca767adff5aa75adb0363de6f22b";
$appSecret = "c0948c41fe19a358e50552cebc064514";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>