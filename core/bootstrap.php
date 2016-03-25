<?php
/**
 * Created by PhpStorm.
 * User: Ibrahima Sory Diallo
 * Date: 24/03/2016
 * Time: 23:48
 */
require_once __DIR__.'/config.inc.php';
require_once '../vendor/autoload.php';
//

use RedBeanPHP\Facade as R;
if(empty(R::$currentDB)){
  $dsn = sprintf('%s:host=%s;dbname=%s', DB_TYPE, DB_HOST, DB_NAME);
    R::setup($dsn,DB_USER,DB_PASSWORD); R::debug();
}else echo 'nn';
R::close();
