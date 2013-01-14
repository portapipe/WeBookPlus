<?php namespace wb;
if(!defined('PORTAL_INDEX_FILE')){if(headers_sent()){echo '<header><meta http-equiv="refresh" content="0;url=../"></header>';}else{header('HTTP/1.0 301 Moved Permanently'); header('Location: ../');} die("<font size=+2>Access Denied!!</font>");}
// WeBookPlus
define('WB_VERSION', '1.0.0');




\psm\ClassLoader::registerClassPath('wb', __DIR__.DIRECTORY_SEPARATOR.'classes');


// load config.php
$config = \psm\config::loadConfig('config.php');

//throw new \Exception('Division by zero.');
$users = \psm\users::loadUsers();
echo 'works!!!';


?>