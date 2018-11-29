<?php
/**
 * 商品入库预约信息批量查询
 *
 * @author suning
 * @date   2015-6-24
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/swl/ProductStorageQueryRequest.php');
$req = new ProductStorageQueryRequest();
//赋值……
$req->setPageNo("1");
$req->setPageSize("10");
$req->setOrderState("01");
$req->setWarehouseCode("L525");
$req->setOrderBeginDate("2015-06-20 14:00:00");
$req->setOrderEndDate("2015-06-26 15:00:00");
$req->setApplyBeginDate("2015-06-20 14:00:00");
$req->setApplyEndDate("2015-06-26 16:00:00");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "d4d39a8040fa16d9aa499a4af9b2a660";
$appSecret = "3fde6dadef8515ea3ecf96ae4398d5c2";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>