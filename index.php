<?php
require_once('./inc.php');
require_once('./system/safe.php');
$n_host = 0;
if (ism()) {
	include($dir.$t_mpath.'index.php');
} else {
	include($dir.$t_path.'index.php');
}
?>
