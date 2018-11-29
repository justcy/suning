<?php
/**
 * 延迟交易收货时间
 *
 * @author 14042058
 * @date   2014-6-4
 */
// 引入主文件
require_once('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/transaction/OrderdelayModifyRequest.php');
$req = new OrderdelayModifyRequest();
//赋值……
$req->setExpressNo('B030103');
$req->setExpressCompanyCode('H02');
$req->setDelayTime('3');

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>