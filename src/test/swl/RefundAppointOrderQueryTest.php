<?php
/**
 * 商品退库预约信息批量查询
 *
 * @author suning
 * @date   2015-6-24
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/swl/RefundAppointOrderQueryRequest.php');
$req = new RefundAppointOrderQueryRequest();
//赋值……
$req->setPageNo("1");
$req->setPageSize("10");
$req->setAppointStatus("1");
$req->setRefundType("1");
$req->setWarehouseCode("L025");
$req->setAppointStartDate("2014-11-21");
$req->setAppointEndDate("2014-11-21");
$req->setCreateStartDate("2014-11-21");
$req->setCreateEndDate("2014-11-21");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "d4d39a8040fa16d9aa499a4af9b2a660";
$appSecret = "3fde6dadef8515ea3ecf96ae4398d5c2";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>