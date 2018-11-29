<?php
/**
 * 获取模块模板
 *
 * @author suning
 * @date   2016-5-11
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/item/ModuleTempletGetRequest.php');
$req = new ModuleTempletGetRequest();
//赋值……
$req->setCategoryCode("R6151001");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "fa6f80198cb2f2fe2c27d57b3b2d23ad";
$appSecret = "dd2b44d25c542e9a6b82acd60005f539";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>