<?php
/**
 * 退货及退款API - 退货信息处理(同意)
 *
 */

// 引入主文件
require_once ('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/refund/AgreerejectedModifyRequest.php');

$req = new AgreerejectedModifyRequest();
$rejectedHead = new RejectedHead();
$rejectedHead -> setOrderCode("1000835014");
$rejectedHead -> setAddress("100000021");
$rejectedHead -> setName("张三");
$rejectedHead -> setTelephone("18654558864");
$rejectedHead -> setPostalCode("210000");
$req -> setRejectedHead($rejectedHead);
$rejectedDetail = new RejectedDetail();
$rejectedDetail->setProductCode("8");
$rejectedDetail->setOrderLineNumber("9");
$rejectedDetail->setState("6");
$rejectedDetail->setReason("7");
$req -> setRejectedDetail(array($rejectedDetail));
// api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl, $appKey, $appSecret, 'xml');
$resp = $client -> execute($req);
print_r("返回响应报文:" . $resp);

?>