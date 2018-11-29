<?php
/**
 * 库存API - 新增仓库地址
 *
 */

// 引入主文件
require_once('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/inventory/InvaddressAddRequest.php');

$req = new InvaddressAddRequest();
$req -> setInvContact("testx");
$req -> setInvProvince("100");
$req -> setInvCity("000001000173");
$req -> setInvRegion("00000001");
$req -> setStreetAddress("王庄湖x栋");
$req -> setZipCode("111111");
$req -> setTelePhone("13651662999");
$req -> setPhoneNum("025-66996699");
$req -> setInvName("某某公司某地仓库");
$req -> setRemark("备注");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);

?>