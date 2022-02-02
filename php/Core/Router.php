<?php

namespace ongameuk\php\Core;

use ongameuk\php\Config\config;
use ongameuk\php\Libs\functions;

class router {

   // SECURITY APP DIRECTORY STORAGE
   public static function php_dir()
   {
    if (is_dir(__DIR__)) 
    return mb_substr(__DIR__,0,strrpos(__DIR__, 'php'))."php\\";
    else return '';
   }

    public static function spl_autoload_register($class) { 
        
        if (router::php_dir())
        {
            $dir_classes = [
                'Core',
                'Core\Sessions',
                'Config',
                'Controllers',
                'Libs',
                'Libs\PHPMailer',
                'Views',
                'Models',
                'Logs'
            ];
            
            foreach ($dir_classes as $dir)
            {
                $ext = 'php';
                $puth_dir_classes = router::php_dir().$dir."\\".$class.'.'.$ext;
                if (file_exists($puth_dir_classes))
                {  require_once $puth_dir_classes; return true; }
            }
        }
        
        print 'Error app class "'.$class.'" not found. Please refresh configuration "php\" folder for app.'; 
        exit;

    }

    public static function app_run(){
        
        router::spl_autoload_register('functions');
        router::spl_autoload_register('config');

        if (config::host_protocol()!='https') { header("Location: https://".config::host_name()); exit; }

        if (!empty(functions::get('err'))) { router::spl_autoload_register('error_page'); exit; }
        
        router::spl_autoload_register('logs');
        router::spl_autoload_register('OngameukController');
        
        // start (sessions+cookie) user db - sessions.php (mysql)
        router::spl_autoload_register('SysSession');
        router::spl_autoload_register('connect_sessions_db_mysql');

        router::spl_autoload_register('Application');

    }

}

router::app_run();

?>