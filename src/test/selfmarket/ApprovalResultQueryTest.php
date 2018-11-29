<?php
/**
 * 获取审批结果
 *
 * @author suning
 * @date   2016-4-19
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/selfmarket/ApprovalResultQueryRequest.php');
$req = new ApprovalResultQueryRequest();
//赋值……
$req->setSupplierCode("10000007");
$req->setType("1");
$req->setApplyCode("16802374");
$req->setCreateStartDate("2014-01-05");
$req->setCreateEndDate("2014-01-05");
$req->setModelType("1");
$req->setPageNo("1");
$req->setPageSize("10");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "aa48c8b081c7d304a9b3f96725988f77";
$appSecret = "4caf4cc47d7c114cb09d957a7454ddd3";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>