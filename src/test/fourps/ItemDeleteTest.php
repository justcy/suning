<?php
/**
 * 商品删除接口
 *
 * @author suning
 * @date   2015-12-21
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/fourps/ItemDeleteRequest.php');
$req = new ItemDeleteRequest();
//赋值……
$req->setSupplierCmCode("102608837");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "1579d631e43245840c515ffffdaea0a6";
$appSecret = "165bb7a9d57c4feca55c719893d592b0";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>