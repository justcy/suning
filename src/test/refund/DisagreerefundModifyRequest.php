<?php
/**
 * 退货及退款API - 退款信息处理(不同意)
 *
 */

// 引入主文件
require_once ('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/refund/DisagreerefundModifyRequest.php');

$req = new DisagreerefundModifyRequest();
$refundHead = new RefundHead();
$refundHead -> setOrderCode("1000835014");
$req -> setRefundHead($refundHead);
$refundDetail = new RefundDetail();
$refundDetail->setProductCode("102609934");
$refundDetail->setOrderLineNumber("100151521");
$refundDetail->setState("C051");
$refundDetail->setReason("买家自己原因11");
$req -> setRefundDetail(array($refundDetail));
// api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl, $appKey, $appSecret, 'xml');
$resp = $client -> execute($req);
print_r("返回响应报文:" . $resp);
?>