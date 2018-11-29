<?php
/**
 * 商品API - 图片上传
 *
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 引入主文件
    require_once('../../SuningSdk.php');
	require_once(dirname(__FILE__).'/../../request/item/PicAddRequest.php');

    $req = new PicAddRequest();
    // 取得上传图片的二进制流
    $picContent = SuningUploadRequest::getPicStreamByBase64('pic');
    $req->setPicContent($picContent);
    //api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
    $req -> setCheckParam('true');
    $serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
    $appKey = "1c9926360f6226ca5ef5859137f42701";
    $appSecret = "22c4de6c716db0d7f4b3ca9753b3b9b3";
    $client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
    $resp = $client -> execute($req);
    print_r("返回响应报文:".$resp);
}
?>
<html>
<head>
<title>upload</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<form method="post" enctype ="multipart/form-data" >
<input type="file" name="pic">
<input type="submit" value="上传">
</form>
</body>
</html>