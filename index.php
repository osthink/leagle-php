<?php
define('_ROOT',dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('_SYS_PATH',_ROOT . 'Leagle' . DIRECTORY_SEPARATOR);
define('_APP',_ROOT . 'app' . DIRECTORY_SEPARATOR);
require _SYS_PATH.'Leagle.php';
$app = new Leagle;
$app -> run();
