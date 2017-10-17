<?php 
header("Access-Control-Allow-Origin: http://localhost:8080, https://zonghengkaren.github.io, https://www.yangzongheng.cn");  
header("Access-Control-Allow-Origin: *");   
header('Access-Control-Allow-Headers: X-Requested-With,X_Requested_With');
$file_path = "./data.json";
if(file_exists($file_path)){
$fp = fopen($file_path,"r");
$str = fread($fp,filesize($file_path));
echo $str;
}
?>