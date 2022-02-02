<?php

namespace ongameuk\php\Core;

class Application {

    public static function app_run(){
        router::spl_autoload_register('MainController');
    }

}

Application::app_run();

?>