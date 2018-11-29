<?php
/**
 * 创建店铺分类
 *
 * @author suning
 * @date   2014-8-22
 */
// 引入主文件
require_once('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/shop/ShopcategoryAddRequest.php');
$req = new ShopcategoryAddRequest();
//赋值……
$shopCategory = new ShopCategory();

$shopCategory->setCategoryName("宝宝奶粉");
$shopCategory->setParentCategoryCode("11111");
$shopCategory->setCategorySort("1");
$shopCategory->setCategoryImg("http://10.19.95.100/uimg/sop/commodity/201312061143447224_x.jpg");
$shopCategory->setCategorySet("1");
$req->setShopCategory(array($shopCategory));

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>