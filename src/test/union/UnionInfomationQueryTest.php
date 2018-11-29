<?php
/**
 * 批量查询联盟商品信息
 *
 * @author suning
 * @date   2015-10-28
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/union/UnionInfomationQueryRequest.php');
$req = new UnionInfomationQueryRequest();
//赋值……
$req->setPageNo("1");
$req->setPageSize("10");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "49b99e6f6e4ac8038e4f189497cb625c";
$appSecret = "3f593ad4101d6533ea447a20f1f4b8de";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>