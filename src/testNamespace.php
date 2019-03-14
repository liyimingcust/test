<?php
require_once dirname(__DIR__).'\vendor\autoload.php';
$obj = new \Acmetest\Test();//实例化类
echo $obj->test();
