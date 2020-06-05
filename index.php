<?php
@date_default_timezone_set('Asia/Shanghai');//校正时区
define('MY_ROOT', dirname(dirname(dirname(__FILE__))));

// require_once(MY_ROOT."/include/RedisComm2.class.php");

// $redis_obj = RedisComm2::getInstance('127.0.0.1', '6379');

// $redis = new Redis();
// $redis->connect('127.0.0.1', 6379);

// $redis->set("tutorial-name", "Redis tutorial");

// var_dump($redis_obj->get('tutorial-name'));die();

// $memcache = memcache_connect('localhost', 11211);

// if ($memcache) {
// 	$memcache->set("str_key", "String to store in memcached");
// 	$memcache->set("num_key", 123);

// 	$object = new StdClass;
// 	$object->attribute = 'test';
// 	$memcache->set("obj_key", $object);

// 	$array = Array('assoc'=>123, 345, 567);
// 	$memcache->set("arr_key", $array);

// 	var_dump($memcache->get('str_key'));
// 	var_dump($memcache->get('num_key'));
// 	var_dump($memcache->get('obj_key'));
// }
// else {
// 	echo "Connection to memcached failed";
// }

$str = "见放辣椒的浪费了
        傲慢放假矮了让乐乐";

$str2 = str_replace('', '\n', $str);

echo $str;
echo "<br>";
echo $str2;
// $arr = str_split($str);
// var_dump($arr);

