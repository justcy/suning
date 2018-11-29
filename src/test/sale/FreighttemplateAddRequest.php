<?php
/**
 * 销售准备API - 新增运费模板
 *
 */

// 引入主文件
require_once('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/sale/FreighttemplateAddRequest.php');

$req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName("xu2");
$req -> setShippingType("0");
$req -> setValuationType("1");
$req -> setFirstValue("4.0");
$req -> setFirstValueFare("4.00");
$req -> setContinuedValue("2.0");
$req -> setContinuedValueFare("2.00");
$freightList = new FreightList();
$freightList -> setSperencod("001");
$freightList -> setSpeprovencod("140");
$freightList -> setSpecityencod("000001000174");
$freightList -> setFirstValue("4.0");
$freightList -> setFirstValueFare("4.00");
$freightList -> setContinuedValue("2.0");
$freightList -> setContinuedValueFare("2.00");
$req -> setFreightList($freightList);
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl, $appKey, $appSecret, 'xml');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);

/* $reqFormat = 'json';
// (1)不含特定区域的公共模板(买家承担服务费)
$req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('公共模板xu1');
$req -> setShippingType('0');
$req -> setValuationType('0');
$req -> setFirstValue('1');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1');
$req -> setContinuedValueFare('1.00');
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----（1）功能测试------不含特定区域的公共模板(买家承担服务费)------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</---------- -----不含特定区域的公共模板(买家承担服务费)---------------->"; */

// （2）不含特定区域的公共模板(卖家承担服务费)
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('卖家承担服务费xu');
$req -> setShippingType('1');
$req -> setValuationType('0');
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----（2）功能测试------不含特定区域的公共模板(卖家承担服务费)------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</---------- -----不含特定区域的公共模板(卖家承担服务费)---------------->"; */

// (3)只有区域的特定模板
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('只有区域的特定模板xu2');
$req -> setShippingType('0');
$req -> setValuationType('0');
$req -> setFirstValue('1');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1');
$req -> setContinuedValueFare('1.00');
$freightList = new FreightList();
$freightList -> setSperencod('001,002');
$freightList -> setFirstValue('4');
$freightList -> setFirstValueFare('4.00');
$freightList -> setContinuedValue('2');
$freightList -> setContinuedValueFare('2.00');
$req -> setFreightList($freightList);
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（3）功能测试---------只有区域的特定模板------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------只有区域的特定模板--------------------->"; */

// （4）只有省份的特定模板
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('只有省份的特定模板xu1');
$req -> setShippingType('0');
$req -> setValuationType('0');
$req -> setFirstValue('1');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1');
$req -> setContinuedValueFare('1.00');
$freightList = new FreightList();
$freightList -> setSpeprovencod('100,020,160');
$freightList -> setFirstValue('4');
$freightList -> setFirstValueFare('4.00');
$freightList -> setContinuedValue('2');
$freightList -> setContinuedValueFare('2.00');
$req -> setFreightList($freightList);
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（4）功能测试---------只有省份的特定模板------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------只有省份的特定模板--------------------->"; */

// （5）只有城市的特定模板
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('只有城市的特定模板xu1');
$req -> setShippingType('0');
$req -> setValuationType('0');
$req -> setFirstValue('2');
$req -> setFirstValueFare('3.00');
$req -> setContinuedValue('1');
$req -> setContinuedValueFare('2.00');
$freightList = new FreightList();
$freightList -> setSpecityencod('000001000174,000001000175,000001000176');
$freightList -> setFirstValue('4');
$freightList -> setFirstValueFare('4.00');
$freightList -> setContinuedValue('2');
$freightList -> setContinuedValueFare('2.00');
$req -> setFreightList($freightList);
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（5）功能测试---------只有城市的特定模板------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------只有城市的特定模板--------------------->"; */

// （6）包含大区、省、城市的特定模板
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('有大区和省份城市的特定模板xu2');
$req -> setShippingType('0');
$req -> setValuationType('1');
$req -> setFirstValue('1.0');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('2.0');
$req -> setContinuedValueFare('1.00');
$freightList = new FreightList();
$freightList -> setSperencod('001,002');
$freightList -> setSpeprovencod('140,150,160');
$freightList -> setSpecityencod('000001000174,000001000175,000001000176');
$freightList -> setFirstValue('4.0');
$freightList -> setFirstValueFare('4.00');
$freightList -> setContinuedValue('2.0');
$freightList -> setContinuedValueFare('2.00');
$req -> setFreightList($freightList);
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（6）功能测试---------包含大区、省、城市的特定模板------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------包含大区、省、城市的特定模板--------------------->"; */

// （7）多个特定模板-按件数
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('多个特定模板测试xu3');
$req -> setShippingType('0');
$req -> setValuationType('0');
$req -> setFirstValue('1');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1');
$req -> setContinuedValueFare('1.00');
$freightList = new FreightList();
$freightList -> setSperencod('002');
$freightList -> setFirstValue('4');
$freightList -> setFirstValueFare('4.00');
$freightList -> setContinuedValue('2');
$freightList -> setContinuedValueFare('2.00');
$freightList2 = new FreightList();
$freightList2 -> setSperencod('004');
$freightList2 -> setFirstValue('1');
$freightList2 -> setFirstValueFare('4.00');
$freightList2 -> setContinuedValue('2');
$freightList2 -> setContinuedValueFare('3.00');
$freights = array( $freightList, $freightList2);
$req -> setFreightList($freights);
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（7）功能测试---------多个特定模板-按件数------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------多个特定模板-按件数--------------------->"; */

// （8）买家承担服务费 -按重量
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('按重量特定模板测试xu2');
$req -> setShippingType('0');
$req -> setValuationType('1');
$req -> setFirstValue('1.0');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1.0');
$req -> setContinuedValueFare('1.00');
$freightList = new FreightList();
$freightList -> setSperencod('002');
$freightList -> setFirstValue('4.0');
$freightList -> setFirstValueFare('4.00');
$freightList -> setContinuedValue('2.0');
$freightList -> setContinuedValueFare('2.00');
$freightList2 = new FreightList();
$freightList2 -> setSperencod('004');
$freightList2 -> setFirstValue('1.0');
$freightList2 -> setFirstValueFare('4.00');
$freightList2 -> setContinuedValue('2.0');
$freightList2 -> setContinuedValueFare('3.00');
$freights = array( $freightList, $freightList2);
$req -> setFreightList($freights);
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（8）功能测试---------买家承担服务费 -按重量------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------买家承担服务费 -按重量--------------------->"; */

// （9）买家承担服务费 -按体积
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('按体积特定模板测试xu2');
$req -> setShippingType('0');
$req -> setValuationType('2');
$req -> setFirstValue('1.0');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1.0');
$req -> setContinuedValueFare('1.00');
$freightList = new FreightList();
$freightList -> setSperencod('002');
$freightList -> setFirstValue('4.0');
$freightList -> setFirstValueFare('4.00');
$freightList -> setContinuedValue('2.0');
$freightList -> setContinuedValueFare('2.00');
$freightList2 = new FreightList();
$freightList2 -> setSperencod('004');
$freightList2 -> setFirstValue('1.0');
$freightList2 -> setFirstValueFare('4.00');
$freightList2 -> setContinuedValue('2.0');
$freightList2 -> setContinuedValueFare('3.00');
$freights = array( $freightList, $freightList2);
$req -> setFreightList($freights);
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（9）功能测试---------买家承担服务费 -按体积------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------买家承担服务费 -按体积--------------------->"; */

// （10）(模板名称格式错误)--异常测试
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('#^$6234234!!!');
$req -> setShippingType('0');
$req -> setValuationType('0');
$req -> setFirstValue('1');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1');
$req -> setContinuedValueFare('1.00');
$freightList = new FreightList();
$freightList -> setSperencod('002');
$freightList -> setFirstValue('4.0');
$freightList -> setFirstValueFare('4.00');
$freightList -> setContinuedValue('2.0');
$freightList -> setContinuedValueFare('2.00');
$freightList2 = new FreightList();
$freightList2 -> setSperencod('004');
$freightList2 -> setFirstValue('1.0');
$freightList2 -> setFirstValueFare('4.00');
$freightList2 -> setContinuedValue('2.0');
$freightList2 -> setContinuedValueFare('3.00');
$freights = array( $freightList, $freightList2);
$req -> setFreightList($freights);
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（10）异常测试---------模板名称格式错误------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------模板名称格式错误--------------------->"; */

// （11）(模板名称长度超过25)--异常测试
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('新增多个特定模板测试新增多个特定模板测试新增多个特定模板测试');
$req -> setShippingType('0');
$req -> setValuationType('0');
$req -> setFirstValue('1');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1');
$req -> setContinuedValueFare('1.00');
$freightList = new FreightList();
$freightList -> setSperencod('002');
$freightList -> setFirstValue('4.0');
$freightList -> setFirstValueFare('4.00');
$freightList -> setContinuedValue('2.0');
$freightList -> setContinuedValueFare('2.00');
$freights = array( $freightList);
$req -> setFreightList($freights);
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（11）异常测试---------模板名称长度超过25------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------模板名称长度超过25--------------------->\n"; */

// （12）(运费方式错误)--异常测试
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('运费方式错误xu');
$req -> setShippingType('3');
$req -> setValuationType('0');
$req -> setFirstValue('1');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1');
$req -> setContinuedValueFare('1.00');
$freightList = new FreightList();
$freightList -> setSperencod('002');
$freightList -> setFirstValue('4.0');
$freightList -> setFirstValueFare('4.00');
$freightList -> setContinuedValue('2.0');
$freightList -> setContinuedValueFare('2.00');
$freights = array( $freightList);
$req -> setFreightList($freights);
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（12）异常测试---------运费方式错误------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------运费方式错误--------------------->\n"; */

// （13）(计价方式错误)--异常测试
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('计价方式错误xu');
$req -> setShippingType('1');
$req -> setValuationType('4');
$req -> setFirstValue('1');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1');
$req -> setContinuedValueFare('1.00');
$freightList = new FreightList();
$freightList -> setSperencod('002');
$freightList -> setFirstValue('4.0');
$freightList -> setFirstValueFare('4.00');
$freightList -> setContinuedValue('2.0');
$freightList -> setContinuedValueFare('2.00');
$freights = array( $freightList);
$req -> setFreightList($freights);
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（13）异常测试---------计价方式错误------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------计价方式错误--------------------->\n"; */

// (14)(买家承担费用时，首费标准为空)--异常测试
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('首费标准为空xu');
$req -> setShippingType('0');
$req -> setValuationType('1');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1');
$req -> setContinuedValueFare('1.00');
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（14）异常测试---------买家承担费用时，首费标准为空------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------买家承担费用时，首费标准为空--------------------->\n"; */

// （15）(买家承担费用时，首费为空)--异常测试
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('首费为空xu');
$req -> setShippingType('0');
$req -> setValuationType('1');
$req -> setFirstValue('0');
$req -> setContinuedValue('1');
$req -> setContinuedValueFare('1.00');
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（15）异常测试---------买家承担费用时，首费为空------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------买家承担费用时，首费为空--------------------->\n"; */

// （16）(买家承担费用时，续费标准为空)--异常测试
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('续费标准为空xu');
$req -> setShippingType('0');
$req -> setValuationType('1');
$req -> setFirstValue('1');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValueFare('1.00');
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（16）异常测试---------买家承担费用时，续费标准为空------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------买家承担费用时，续费标准为空--------------------->\n"; */

// （17）(买家承担费用时，续费为空)--异常测试
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('续费为空xu');
$req -> setShippingType('0');
$req -> setValuationType('1');
$req -> setFirstValue('1');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1');
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（17）异常测试---------买家承担费用时，续费为空------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------买家承担费用时，续费为空--------------------->\n"; */

// （18）(买家承担费用时，首费标准格式错误)--异常测试
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('首费标准格式错误xu');
$req -> setShippingType('0');
$req -> setValuationType('0');
$req -> setFirstValue('1.0');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1');
$req -> setContinuedValueFare('2.00');
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（18）异常测试---------买家承担费用时，首费标准格式错误------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------买家承担费用时，首费标准格式错误--------------------->\n"; */

// （19）(买家承担费用时，续费标准格式错误)--异常测试
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('续费标准格式错误xu');
$req -> setShippingType('0');
$req -> setValuationType('0');
$req -> setFirstValue('1');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1.0');
$req -> setContinuedValueFare('2.00');
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（19）异常测试---------买家承担费用时，续费标准格式错误------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------买家承担费用时，续费标准格式错误--------------------->\n"; */

// （20）(买家承担费用时，首费格式错误)--异常测试
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('首费格式错误xu');
$req -> setShippingType('0');
$req -> setValuationType('0');
$req -> setFirstValue('1');
$req -> setFirstValueFare('2.0');
$req -> setContinuedValue('1');
$req -> setContinuedValueFare('2.00');
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（20）异常测试---------买家承担费用时，首费格式错误------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------买家承担费用时，首费格式错误--------------------->\n"; */

// （21）(买家承担费用时，续费格式错误)--异常测试
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('续费格式错误xu');
$req -> setShippingType('0');
$req -> setValuationType('0');
$req -> setFirstValue('1');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1');
$req -> setContinuedValueFare('2.0');
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（21）异常测试---------买家承担费用时，续费格式错误------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------买家承担费用时，续费格式错误--------------------->\n"; */

// （22）(买家承担费用时，特定区域续费格式错误)--异常测试
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('特定区域续费格式错误xu');
$req -> setShippingType('0');
$req -> setValuationType('0');
$req -> setFirstValue('1');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1');
$req -> setContinuedValueFare('1.00');
$freightList = new FreightList();
$freightList -> setSpeprovencod('010');
$freightList -> setFirstValue('2');
$freightList -> setFirstValueFare('4.00');
$freightList -> setContinuedValue('1.0');
$freightList -> setContinuedValueFare('1.00');
$freights = array( $freightList);
$req -> setFreightList($freights);
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（22）异常测试---------买家承担费用时，特定区域续费格式错误------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------买家承担费用时，特定区域续费格式错误--------------------->\n"; */


// （23） (买家承担费用时，特定区域续费标准格式错误)--异常测试
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('特定区域续费标准格式错误xu');
$req -> setShippingType('0');
$req -> setValuationType('0');
$req -> setFirstValue('1');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1');
$req -> setContinuedValueFare('1.00');
$freightList = new FreightList();
$freightList -> setSpeprovencod('010');
$freightList -> setFirstValue('1');
$freightList -> setFirstValueFare('4.00');
$freightList -> setContinuedValue('1');
$freightList -> setContinuedValueFare('1.0');
$freights = array( $freightList);
$req -> setFreightList($freights);
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（23）异常测试---------买家承担费用时，特定区域续费标准格式错误------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------买家承担费用时，特定区域续费标准格式错误--------------------->\n";
 */

// （24）(模板名称重复)--异常测试
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('公共模板xu1');
$req -> setShippingType('0');
$req -> setValuationType('0');
$req -> setFirstValue('1');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1');
$req -> setContinuedValueFare('1.00');
$freightList = new FreightList();
$freightList -> setSpeprovencod('010');
$freightList -> setFirstValue('1');
$freightList -> setFirstValueFare('4.00');
$freightList -> setContinuedValue('1');
$freightList -> setContinuedValueFare('1.00');
$freights = array( $freightList);
$req -> setFreightList($freights);
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（24）异常测试---------模板名称重复------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------模板名称重复--------------------->\n"; */

// （25）(买家承担服务费 -地区编码格式错误)--异常测试
/*  $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('地区编码格式错误xu1');
$req -> setShippingType('0');
$req -> setValuationType('1');
$req -> setFirstValue('1.0');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1.0');
$req -> setContinuedValueFare('1.00');
$freightList = new FreightList();
$freightList -> setSperencod('30');
$freightList -> setFirstValue('4.0');
$freightList -> setFirstValueFare('4.00');
$freightList -> setContinuedValue('2.0');
$freightList -> setContinuedValueFare('2.00');
$freights = array( $freightList);
$req -> setFreightList($freights);
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（25）异常测试---------买家承担服务费 -地区编码格式错误------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------买家承担服务费 -地区编码格式错误---------------->\n";  */

// （26）省份编码错误--异常测试
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('省份错误特定模板测试xu1');
$req -> setShippingType('0');
$req -> setValuationType('1');
$req -> setFirstValue('1.0');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1.0');
$req -> setContinuedValueFare('1.00');
$freightList = new FreightList();
$freightList -> setSpeprovencod('250,test');
$freightList -> setFirstValue('4.0');
$freightList -> setFirstValueFare('4.00');
$freightList -> setContinuedValue('2.0');
$freightList -> setContinuedValueFare('2.00');
$freights = array( $freightList);
$req -> setFreightList($freights);
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（26）异常测试---------省份编码错误------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------省份编码错误---------------->\n"; */

// （27）(买家承担服务费 -城市错误)--异常测试
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('城市错误特定模板测试xu1');
$req -> setShippingType('0');
$req -> setValuationType('1');
$req -> setFirstValue('1.0');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1.0');
$req -> setContinuedValueFare('1.00');
$freightList = new FreightList();
$freightList -> setSpecityencod('250,test');
$freightList -> setFirstValue('4.0');
$freightList -> setFirstValueFare('4.00');
$freightList -> setContinuedValue('2.0');
$freightList -> setContinuedValueFare('2.00');
$freights = array( $freightList);
$req -> setFreightList($freights);
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（27）异常测试---------买家承担服务费 -城市错误------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------买家承担服务费 -城市错误---------------->\n"; */

// （28）地区编码错误--异常测试
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('地区错误特定模板测试xu1');
$req -> setShippingType('0');
$req -> setValuationType('1');
$req -> setFirstValue('1.0');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1.0');
$req -> setContinuedValueFare('1.00');
$freightList = new FreightList();
$freightList -> setSperencod('999');
$freightList -> setFirstValue('4.0');
$freightList -> setFirstValueFare('4.00');
$freightList -> setContinuedValue('2.0');
$freightList -> setContinuedValueFare('2.00');
$freights = array( $freightList);
$req -> setFreightList($freights);
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（28）异常测试---------地区编码错误------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------地区编码错误---------------->\n"; */

// （29）续费不能大于首费--异常测试
/* $req = new FreighttemplateAddRequest();
$req -> setFreightTemplateName('续费不能大于首费测试xu1');
$req -> setShippingType('0');
$req -> setValuationType('1');
$req -> setFirstValue('1.0');
$req -> setFirstValueFare('2.00');
$req -> setContinuedValue('1.0');
$req -> setContinuedValueFare('4.00');
$freightList = new FreightList();
$freightList -> setSperencod('999');
$freightList -> setFirstValue('4.0');
$freightList -> setFirstValueFare('4.00');
$freightList -> setContinuedValue('2.0');
$freightList -> setContinuedValueFare('2.00');
$freights = array( $freightList);
$req -> setFreightList($freights);
$req -> setReqFormat($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
$reqStr = $req ->getApiParams($reqFormat);
echo "<-----------（29）异常测试---------续费不能大于首费------->\n";
print_r("[新增运费模板]请求报文:\n" .$reqStr);
$resp = DefaultSuningClient::execute($req);
print_r("\n[新增运费模板]响应报文:\n" .$resp);
echo "\n</--------------------续费不能大于首费---------------->\n"; */

?>