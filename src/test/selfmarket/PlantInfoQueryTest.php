<?php
/**
 * 获取地点信息
 *
 * @author suning
 * @date   2016-4-19
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/PlantInfoQueryRequest.php');
$req = new PlantInfoQueryRequest();
//赋值……
$req->setPlantTypeCode("1");
//$req->setCityName("1");
//$req->setPlantCode("1");
$req->setPageNo("1");
$req->setPageSize("2");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "aa48c8b081c7d304a9b3f96725988f77";
$appSecret = "4caf4cc47d7c114cb09d957a7454ddd3";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>