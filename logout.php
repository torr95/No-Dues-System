<?php
require 'core.inc.php';
session_destroy();
//$http_referer=$_SERVER['HTTP_REFERER'];
//header('Location:'.$http_referer);
header('Location: index.php');
?>