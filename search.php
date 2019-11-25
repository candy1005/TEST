<?php
require_once('inc.php');
require_once('system/safe.php');
if (isset($_GET['key'])){
	null_back($_GET['key'],'请输入要查找的关键字');
	$key = $_GET['key'];
}
//读取模板文件
$n_host = 0;
if (ism()) {
	include($dir.$t_mpath.'search.php');
} else {
	include($dir.$t_path.'search.php');
}
?>
