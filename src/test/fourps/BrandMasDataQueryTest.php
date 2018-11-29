<?php
/**
 * 品牌主数据查询接口
 *
 * @author suning
 * @date   2016-2-23
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/fourps/BrandMasDataQueryRequest.php');
$req = new BrandMasDataQueryRequest();
//赋值……
$req->setBrandName("海");
$req->setPageNo("1");
$req->setPageSize("5");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "9416c0de5c17023f78ea058f541f5895";
$appSecret = "6b86c422951046e2408da57f303241b0";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>