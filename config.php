<?php
final class Config
{
	const OSS_ACCESS_ID = '';
	//Access Key ID
	const OSS_ACCESS_KEY = '';
	//Access Key Secret
	const OSS_ENDPOINT = '';
	//OSS EndPoint (e.g. http://oss-cn-shanghai.aliyuncs.com)
	const OSS_BUCKET = '';
	//OSS Bucket Name
}
$bucket_url = '' ;
//Index Page of oss bucket, started with "http(s)", ended with"/" (e.g. http://xxxxx.oss-cn-shanghai.aliyuncs.com/)
$site = '' ;
//Site Name
$footer = '';
//Footer, Stats Code Supported
$stats = true ;
//Display how long listObjects() takes? (true/false)