<?php
/**
 * 订单发货单修改
 *
 * @author suning
 * @date   2015-9-14
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/factoryorder/OrderDeliverModifyRequest.php');
$req = new OrderDeliverModifyRequest();
//赋值……
$req->setOrderItemId("00005196454302");
$req->setExpressNo("00005196454302");
$req->setExpressCompCode("S01");
$req->setSupplierCode("10000197");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "ad563ca763118f980a3dd62f6c83e492";
$appSecret = "ac39357cf39358894f49b8ce7dbe081e";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>