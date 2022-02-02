<?php

namespace ongameuk\php\Models;

use ongameuk\php\Config\config;
use ongameuk\php\Libs\functions;

class api
{

    public static $json_ratings = '';
    public static $read_review_bonus_name = '';

    public static function find_bonus_page_read_review($bonus_name='')
    {
        if (empty($bonus_name)) 
        {
            $bonus_name = functions::get_request_uri();
            if (!empty($bonus_name) and $bonus_name[0]=='/') 
            {
                $bonus_name = mb_substr($bonus_name,1);
                $bonus_name = preg_replace('/\-+/', ' ', $bonus_name);
            } else return false;
        }
        
        for ($i=0;$i<count(config::$ratings);$i++)
        {
            if (config::$ratings[$i][0]==$bonus_name)
            {
                api::$read_review_bonus_name = $bonus_name;
                return true; // имя бонуса соответствует зарегистрированному
            }
        }
    }

    public static function find_bonus_page_other(&$module_page_other_name)
    {
        $module_page_other_name = '?';
        $other_pages = array('/best-strategies','/common-mistakes','/best-sites','/reseacrh-types');
        if (empty($page_uri)) 
        {
            $page_uri = functions::get_request_uri();
            if (!(!empty($page_uri) and $page_uri[0]=='/')) return false;
        }
        
        for ($i=0;$i<count($other_pages);$i++)
        {
            if ($other_pages[$i]==$page_uri)
            {
                $module_page_other_name = mb_substr($page_uri,1);
                return true; // имя страницы соответствует зарегистрированному
            }
        }
    }
    
    public static function get_read_review_bonus_logo()
    {
        $puth_logo = 'top-rated-slots-sites/';
        for ($i=0;$i<count(config::$ratings);$i++)
        {
            if (config::$ratings[$i][0]==api::$read_review_bonus_name)
            {
                return $puth_logo.config::$ratings[$i][2].'.png'; // имя бонуса соответствует зарегистрированному
            }
        }
    }
    
    public static function get_read_review_bonus_id()
    {
        for ($i=0;$i<count(config::$ratings);$i++)
        {
            if (config::$ratings[$i][0]==api::$read_review_bonus_name)
            {
                return 'id_bonus_link'.config::$ratings[$i][2]; // имя бонуса соответствует зарегистрированному
            }
        }
    }
    
    public static function get_read_review_bonus_rating()
    {
        for ($i=0;$i<count(config::$ratings);$i++)
        {
            if (config::$ratings[$i][0]==api::$read_review_bonus_name)
            {
                return config::$ratings[$i][3]; // имя бонуса соответствует зарегистрированному
            }
        }
    }
    
    public static function get_read_review_bonus_info()
    {
        for ($i=0;$i<count(config::$ratings);$i++)
        {
            if (config::$ratings[$i][0]==api::$read_review_bonus_name)
            {
                return preg_replace('/\n+/', '<br/>', config::$ratings[$i][4]); // имя бонуса соответствует зарегистрированному
            }
        }
    }
    
    public static function get_read_review_bonus_all_info_boxes($load_box='first')
    {
        $contents_all_box = '';
        $bonus_index_sub = array();
        for ($i=0;$i<count(config::$read_review_content);$i++)
        {
            if (config::$read_review_content[$i][0]==api::$read_review_bonus_name)
            {
                if (empty($bonus_index_sub[api::$read_review_bonus_name])) $bonus_index_sub[api::$read_review_bonus_name] = 0;
                $bonus_index_sub[api::$read_review_bonus_name]++;

                $content_box_name = '';
                $content_box_sub1 = '';
                $content_box_sub2 = '';
                $content_box_sub3 = '';
                $content_box_sub4 = '';
                $content_box_sub5 = '';

                if (isset(config::$read_review_content[$i][1])) $content_box_name = config::$read_review_content[$i][1];
                if (isset(config::$read_review_content[$i][2])) $content_box_sub1 = '<p>'.preg_replace('/\n+/', '<br/>', config::$read_review_content[$i][2]).'</p>';
                if (isset(config::$read_review_content[$i][3])) $content_box_sub2 = '<p>'.preg_replace('/\n+/', '<br/>', config::$read_review_content[$i][3]).'</p>';
                if (isset(config::$read_review_content[$i][4])) $content_box_sub3 = '<p>'.preg_replace('/\n+/', '<br/>', config::$read_review_content[$i][4]).'</p>';
                if (isset(config::$read_review_content[$i][5])) $content_box_sub4 = '<p>'.preg_replace('/\n+/', '<br/>', config::$read_review_content[$i][5]).'</p>';
                if (isset(config::$read_review_content[$i][6])) $content_box_sub5 = '<p>'.preg_replace('/\n+/', '<br/>', config::$read_review_content[$i][6]).'</p>';

                if ($load_box=='first')
                {
                    return 
                    '<div class="main-screen__left">
                        <h1 class="main-title">'.$content_box_name.'</h1>
                        <div class="undertitle h5">'.$content_box_sub1.'</div>
                    </div>';
                }
                else
                if ($load_box=='two' and $bonus_index_sub[api::$read_review_bonus_name]>1)
                {
                    return 
                    '<div class="text_content">
                        <h2>'.$content_box_name.'</h2>
                        '.$content_box_sub1.'
                        '.$content_box_sub2.'
                        '.$content_box_sub3.'
                        '.$content_box_sub4.'
                        '.$content_box_sub5.'
                        <div class="sections-divider"></div>
                    </div>';
                }
                else
                if ($bonus_index_sub[api::$read_review_bonus_name]>2)
                { // вывести всю информацию по блокам если присутствует
                    if (!empty($contents_all_box))
                    $contents_all_box.= '<div class="sections-divider more"></div>';
                    
                    $contents_all_box.= 
                    '<div>
                        <h2>'.$content_box_name.'</h2>
                        '.$content_box_sub1.'
                        '.$content_box_sub2.'
                        '.$content_box_sub3.'
                        '.$content_box_sub4.'
                        '.$content_box_sub5.'
                    </div>';
                }

            }
        }

        return $contents_all_box;
    }

    // ПОЛУЧАЕТ ДЛЯ ВСЕХ БОНУСОВ СПИСОК РЕЙТИНГОВ ДЛЯ ОТОБРАЖЕНИЯ НА САЙТЕ
    public static function get_config_ratings()
    { 
        api::$json_ratings = '';

        $result = mysqli_query(config::$lnk_db,"SELECT bonus_name, start_rating_count+user_rating_count FROM ratings ");
        if ($result and $result->num_rows>0)
        {
            while ($sql_data = mysqli_fetch_row($result)) {
                api::$json_ratings.= "'".$sql_data[0]."':'".$sql_data[1]."',";
            }

            if (!empty(api::$json_ratings)) api::$json_ratings = mb_substr(api::$json_ratings,0,mb_strlen(api::$json_ratings)-1);
            api::$json_ratings = "{".api::$json_ratings."}";
        }
    }

    // ПОЛЬЗОВАТЕЛЬСКАЯ УСТАНОВКА РЕЙТИНГА ДЛЯ БОНУСА (+1 балл)
    public static function set_config_ratings_user_click($bonus_name, &$user_rating_count)
    {
        if (!(api::find_bonus_page_read_review($bonus_name))) return false;

        // поверить, существует ли уже такая запись, и обновить данные по ней (ограничить количество запросов в 1 мин)
        $result = mysqli_query(config::$lnk_db,"SELECT start_rating_count, user_rating_count FROM ratings where bonus_name = '".$bonus_name."' ");
        if ($result and $result->num_rows>0)
        { // UPDATE

            $res = mysqli_fetch_row($result);
            $user_rating_count = $res[1]*1+1;

            mysqli_query(config::$lnk_db, "UPDATE ratings SET user_rating_count=".$user_rating_count." where bonus_name = '".$bonus_name."' ");
            if (mysqli_affected_rows(config::$lnk_db)==0) {
                // error refresh data... add msg in log..
                return false;
            }
            else
            {
                $user_rating_count+= $res[0]*1;
                return true;
            }
        }
    }

    // ЭТА БЕЗОПАСНАЯ ФУНКЦИЯ МОЖЕТ БЫТЬ ВЫЗВАНА ТОЛЬКО ВРУЧНУЮ АМИНИСТРАТОРОМ -> api::set_config_ratings();
    public static function set_config_ratings()
    { /* АВТОМАТИЧЕСКИ СОЗДАЕТ СПИСОК СТАРТОВЫХ ЗНАЧЕНИЙ РЕЙТИНГА ДЛЯ БОНУСОВ (СОЗДАЕТ НОВЫЕ ЗНАЧЕНИЯ, ИЛИ ОБНОВЛЯЕТ СТАРЫЕ УСТАНОВЛЕННЫЕ ЗНАЧЕНИЯ)
        ! РЕДАКТИРОВАНИЕ НАЗВАНИЙ НЕ ПРОИСХОДИТ, И НАЗВАНИЯ НЕ ДОЛЖНЫ БЫТЬ ИЗМЕНЕНЫ, ИЛИ МОГУТ\ДОЛЖНЫ БЫТЬ ИЗМЕНЕНЫ ТОЛЬКО ВРУЧНУЮ В БАЗЕ И ЗДЕСЬ ОДНОВРЕМЕННО
        */

        /*
        !Важно - не менять названия без изменения в базе. см. описание выше. (изменение названий приведет к добавлению новых значений, если их нет в базе)
        
        Параметры:
        ["вн.идентификатор", "стартовое значение рейтинга, число"]
        */
        
        for ($i=0;$i<count(config::$ratings);$i++)
        {
            $ident_bonus_name = mb_strtolower(config::$ratings[$i][0]);
            $start_rating_count = config::$ratings[$i][1];

            // поверить, существует ли уже такая запись, и обновить данные по ней (ограничить количество запросов в 1 мин)
            $result = mysqli_query(config::$lnk_db,"SELECT bonus_name FROM ratings where bonus_name = '".$ident_bonus_name."' ");
            if ($result and $result->num_rows>0)
            { // UPDATE

                mysqli_query(config::$lnk_db, "UPDATE ratings SET start_rating_count=".$start_rating_count." where bonus_name = '".$ident_bonus_name."' ");
                if (mysqli_affected_rows(config::$lnk_db)==0) {
                // error refresh data... add msg in log..
                
                }
                
            }
            else
            if ($result->num_rows==0) // INSERT
            {
                $user_rating_count = 0;

                $stmt = mysqli_prepare(config::$lnk_db,"INSERT INTO ratings
                (bonus_name,
                start_rating_count,
                user_rating_count
                ) 
                VALUES 
                (?, ?, ?)");

                if ($stmt)
                {
                    mysqli_stmt_bind_param($stmt, 'sii' 
                    ,$ident_bonus_name
                    ,$start_rating_count
                    ,$user_rating_count);

                    mysqli_stmt_execute($stmt);
                    
                    $mysqli_errors = mysqli_stmt_error($stmt);
                    if (!empty($mysqli_errors))
                    printf("Ошибка: [".$ident_bonus_name."] %s.\n", $mysqli_errors);

                    mysqli_stmt_close($stmt);
                } else { print 'set_config_ratings:err'; exit; }
            }

        }

    }

}



?>