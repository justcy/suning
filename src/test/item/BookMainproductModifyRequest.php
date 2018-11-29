<?php
/**
 * 商品API - 商品内容纠错申请（文化制品类）
 *
 */

// 引入主文件
require_once ('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/item/BookMainproductModifyRequest.php');

$req = new BookMainproductModifyRequest();
$req -> setProductCode("1004562459");
$req -> setItemCode("10045073");
$correctParams = new CorrectParams();
$correctParams->setCorrectKey("productName");
$correctParams->setCorrectPic("百年孤独");
$correctParams->setCorrectReason("名字写错啦");
$correctParams->setCorrectValue("http://10.19.95.100/uimg/sop/richtext/201401240949566545111.gif");
$req -> setCorrectParams(array($correctParams,$correctParams));
// api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl, $appKey, $appSecret, 'xml');
$resp = $client -> execute($req);
print_r("返回响应报文:" . $resp);
?>