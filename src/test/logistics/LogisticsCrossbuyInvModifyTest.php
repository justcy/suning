<?php
/**
 * 批量库存更新
 *
 * @author suning
 * @date   2015-1-19
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/logistics/LogisticsCrossbuyInvModifyRequest.php');
$req = new LogisticsCrossbuyInvModifyRequest();
//赋值……
$req->setWarehouseCode("L009");
$productInv = new ProductInv();
$productInv->setDeadlineDate("20181231");
$productInv->setCargoOwner("R5400");
$productInv->setUnrestrictedStock("100");
$productInv->setProductCode("101030591");
$productInv->setRestrictedStock("100");
$productInv->setUseStock("100");
$productInv->setProductName("IPHON6");
				
$req->setProductInv(array($productInv));

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "f0c090e98ade95fad4dfc8706a52b3f2";
$appSecret = "42f7580432caee840f4e20176e7f1ebf";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>