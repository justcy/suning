<?php
/**
 * 发货信息修改
 *
 * @author 14042058
 * @date   2014-6-4
 */
// 引入主文件
require_once('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/transaction/OrderdeliveryModifyRequest.php');
$req = new OrderdeliveryModifyRequest();
//赋值……
$req->setOrderCode('1001369031');
$req->setExpressNo('B030103');
$req->setExpressCompanyCode('H02');

$sendDetail = new SendDetail();
$productCode = array('104021817');//'104021817','104021954','1001367036','104021888'
$sendDetail->setProductCode($productCode);
$req->setSendDetail($sendDetail);

$orderLineNumbers = new OrderLineNumbers();
$orderLineNumber = array('00003393574401');//'00003393621301','00003393621302','00003393574401','00003393574402'
$orderLineNumbers->setOrderLineNumber($orderLineNumber);
$req->setOrderLineNumbers($orderLineNumbers);


//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'xml');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>