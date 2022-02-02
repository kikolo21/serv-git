<?php

namespace ongameuk\php\Controllers;

use ongameuk\php\Libs\functions;
use ongameuk\php\Config\config;
use ongameuk\php\Views\main;
use ongameuk\php\Models\api;

class ongameuk {

    public static function js_onload_config() 
    {        
        $js_min = ''; $js_min_dir = '';
        if (!config::localversion()) { $js_min = '.min'; $js_min_dir = 'min/'; }

        $version_date = date("dmYHis");
        
        $js_onload_config = '
        <script type="text/javascript" charset="utf-8" src="'.config::https_host().'/js/min/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="'.config::https_host().'/js/'.$js_min_dir.'vendor.min.js?v='.$version_date.'"></script>
        <script type="text/javascript" charset="utf-8" src="'.config::https_host().'/js/'.$js_min_dir.'functions'.$js_min.'.js?v='.$version_date.'"></script>
        <script type="text/javascript" charset="utf-8" src="'.config::https_host().'/js/'.$js_min_dir.'app_ongameuk'.$js_min.'.js?v='.$version_date.'"></script>
        ';


            //    app_ongameuk.get_bonus_number = '".templates::$get_bonus_number."';
            
        $js_onload_config.= "
        <script>
  
            window.onload = function()
            {
                app_ongameuk.loc = '".config::localversion()."';
                app_ongameuk.intl = '".config::intlversion()."';
                app_ongameuk.ratings = ".api::$json_ratings.";

                app_ongameuk.blprms['ua'] = '".functions::get('ua')."';
                app_ongameuk.blprms['tid'] = '".functions::get('tid')."';
                app_ongameuk.blprms['cid'] = '".config::get_google_ga()."';
                app_ongameuk.blprms['el'] = '".functions::get('el')."';
                app_ongameuk.blprms['ev'] = '".functions::get('ev')."';
                app_ongameuk.blprms['cs'] = '".functions::get('cs')."';
                app_ongameuk.blprms['cm'] = '".functions::get('cm')."';
                app_ongameuk.blprms['cn'] = '".functions::get('cn')."';
                app_ongameuk.blprms['ck'] = '".functions::get('ck')."';
                app_ongameuk.blprms['cc'] = '".functions::get('cc')."';
                app_ongameuk.blprms['cd1'] = '".config::get_google_ga()."';
                
                app_ongameuk.ready();
            }

        </script>";
  
        print $js_onload_config;
    }

}

?>
