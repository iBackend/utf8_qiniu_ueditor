<?php
/*
 *@description   文件上传方法
 *@author widuu  http://www.widuu.com
 *@mktime 08/01/2014
 */
	require("conf.php");
	header("Content-type:text/html;charset=utf-8");
	$accessKey = $QINIU_ACCESS_KEY;
	$secretKey = $QINIU_SECRET_KEY;
	
	$bucket = $BUCKET;
	
	$time = time()+3600;
	
	$data =  array(
		"scope"=>$bucket,
		"deadline"=>$time,
		"returnBody"=>"{\"url\": $(key), \"state\": \"SUCCESS\", \"name\": $(fname),\"size\": \"$(fsize)\",\"w\": \"$(imageInfo.width)\",\"h\": \"$(imageInfo.height)\"}"
	);
	$data = json_encode($data);
	$find = array('+', '/');
	$replace = array('-', '_');
	$data = str_replace($find, $replace, base64_encode($data));
	$sign = hash_hmac('sha1', $data, $secretKey, true);
	$result = $accessKey . ':' . str_replace($find, $replace, base64_encode($sign)).':'.$data ;
	echo $result;