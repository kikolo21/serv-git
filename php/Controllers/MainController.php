<?php

namespace ongameuk\php\Core;

use ongameuk\php\Config\config;
use ongameuk\php\Libs\functions;
use ongameuk\php\Core\Sessions\connect_sessions_db_mysql;
use ongameuk\php\Models\api;

class MainController
{

  public static function start() { 

    if (config::localversion())
    {
      mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
      error_reporting(E_ALL);
    }
    else // default online
    error_reporting(0);
    
    $get_exit = false;
    if (!empty(functions::get('exit')) and functions::get('exit')==='1') $get_exit = true;

    if (!connect_sessions_db_mysql::start_sessions_db_mysql($get_exit)) { logs::client_err_log('error connect to app'); return false; }

    date_default_timezone_set('Europe/Kiev');
        
    header_remove('X-Powered-By');

    header("Expires:Sat, 1 Jan 2005 00:00:00 GMT");
    header("Last-Modified:".gmdate("D, d M Y H:i:s")." GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Content-type:text/html; charset=utf-8");
    header("Pragma:no-cache");
		
    router::spl_autoload_register('Api');
    
    // include modules for Main page
    if (!empty(functions::get('ajax_controller'))) // ajax redirects on modules
    router::spl_autoload_register('ajaxController');
    else
    //  РЕДИРЕКТЫ НА ВНУТРЕННИЕ СТРАНИЦЫ
    if (api::find_bonus_page_read_review()) 
    router::spl_autoload_register('read_review');
    else
    if (api::find_bonus_page_other($module_page_other_name)) 
    router::spl_autoload_register($module_page_other_name);
    else
    router::spl_autoload_register('Main');

  }

}

MainController::start();

?>
