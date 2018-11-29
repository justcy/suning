<?php
/**
 * 单笔查询联盟商品信息
 *
 * @author suning
 * @date   2016-1-27
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/union/UnionInfomationGetRequest.php');
$req = new UnionInfomationGetRequest();
//赋值……
$req->setGoodsCode("000000000150003092");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "54fac3bb93475047e880ec3f04d81912";
$appSecret = "8b349aa103fa1631c0118e7dff0940a8";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>