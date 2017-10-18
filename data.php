<?php 
header('Content-type:text/html; charset=utf-8');
header("Access-Control-Allow-Origin: http://yangzongheng.cn");  
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header('Access-Control-Allow-Headers: x-requested-with,content-type');
$file_path = "./data.json";
if(file_exists($file_path)){
$fp = fopen($file_path,"r");
$str = fread($fp,filesize($file_path));
echo $str;
}
?>