<?php 

require "config/config.php";

require 'controller/'.$config['default_controller'].'.php';


$obj = new $config['default_controller']();
$obj->index();
echo 'test';

