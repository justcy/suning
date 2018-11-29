<?php
/**
 * 查询苏宁会员等级
 *
 * @author suning
 * @date   2016-7-12
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/netalliance/SnMemberLevelGetRequest.php');
$req = new SnMemberLevelGetRequest();
//赋值……
$req->setExtSystemId("PPTV");
$req->setMixCustNum("6ae762db66213bba5dba6");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "54fac3bb93475047e880ec3f04d81912";
$appSecret = "8b349aa103fa1631c0118e7dff0940a8";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>