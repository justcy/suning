<?php
/**
 * 库存API - 修改单个仓库（平行仓模式）
 *
 */

// 引入主文件
require_once('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/inventory/ParallelinvaddressModifyRequest.php');

$req = new ParallelinvaddressModifyRequest(); 
$req -> setInvCode("1234");
$req -> setInvName("南京2号仓");
$req -> setInvNameBack("002仓");
$req -> setInvProvince("100");
$req -> setInvCity("000001000173");
$req -> setInvRegion("00000001");
$req -> setStreetAddress("动漫走廊");
$req -> setZipCode("226408");
$req -> setInvContact("李四");
$req -> setPhoneNum("13551662631");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>