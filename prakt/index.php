<?php

$string = "26 - 11 - 2021";

$pattern = '/([0-9]{2}) - ([0-9]{2}) - ([0-9]{4})/';

$replacement = 'Год ${3}, месяц ${2}, день ${1}';

echo preg_replace($pattern, $replacement, $string);

die;









//Front Controller

//1.Общие настройки

ini_set('display_errors', 1);
error_reporting(E_ALL);

//2. Подключение файловой системы

define('ROOT', dirname(__FILE__));
require_once(ROOT . '/component/Router.php');


//3. Установка соединения с БД


//4. Вызов Router

$router = new Router();
$router -> run();