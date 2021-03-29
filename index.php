<?php





/*FRONT CONTROLLER
*1. общие нвстройки 
*2. подключение файлов системы
*3. установка соединения с БД
*4. вызов router
*
*/

// 1

ini_set('display_errors', 1);
error_reporting(E_ALL);


//2

define("ROOT", dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');



//3


//4

$router = new Router();
$router->run();


