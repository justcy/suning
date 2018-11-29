<?php
/**
 * 获取结算清单号
 *
 * @author suning
 * @date   2016-4-19
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/StatementCodeQueryRequest.php');
$req = new StatementCodeQueryRequest();
//赋值……
$req->setCreateTimeStart("2014-04-01");
$req->setCreateTimeEnd("2014-04-14");
$req->setSupplierCode("10001372");
$req->setOperaType("03");
$req->setIsSing("1");
$req->setIsSuccess("1");
$req->setPageNo("1");
$req->setPageSize("2");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "a226186c2b811ce7fbce83e8a98dc7fe";
$appSecret = "435687b33f10f5114a1d2440fe0848c7";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>