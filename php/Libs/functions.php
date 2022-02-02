<?php

namespace ongameuk\php\Libs;

use ongameuk\php\Libs\functions;
use ongameuk\php\Config\config;

class functions
{
        
  public static function get($var)
  {
      if (!empty($var) and (isset($_GET[$var]))) { if (mb_strlen($_GET[$var])>255) return mb_substr($_GET[$var],0,255); else return $_GET[$var]; }
      return '';
  }
  
  public static function post($var)
  {
    if (!empty($var) and (isset($_POST[$var]))) {  if (mb_strlen($_POST[$var])>255) return mb_substr($_POST[$var],0,255); return $_POST[$var]; }
    return '';
  }

  public static function get_post($var)
  {
    $a = functions::get($var);
    if (empty($a)) $a = functions::post($var);
    return $a;
  }
    
  public static function set_session($var, $value)
  {
    $_SESSION[$var] = $value;
    return true;
  }

  public static function unset_session($var)
  {
    unset($_SESSION[$var]);
    return true;
  }

  // проверяет подключение к сессии если $var = '' и возвращает true если сессия открыта
  // Если $var<>'' возвращает значение запрашиваемой переменной из сессии
  // Если значения нет и сессия открыта или не открыта возвращает ''
  public static function session_connect($var)
  { 
    if (empty($var)) { if (!empty(session_id())) return true; } // подключена ли сессия
    
    if (!empty($var) and !empty(session_id()))
    {
      if (isset($_SESSION[$var])) return $_SESSION[$var];
                             else return '';
    } return '';
  }
    
  // установить переменную cookie
  public static function set_cookie($var, $value)
  {
    $arr_cookie_options = array (
      'expires' => time() + 432000,
      'path' => config::get_catalog_cookie(),
      'domain' => config::host_name(),
      'secure' => true,
      'httponly' => true,
      'samesite' => 'Strict' // Strict
      );

    setcookie($var, $value, $arr_cookie_options);
    return true;
  }
  
  // проверить переменную cookie
  public static function isset_cookie_connect($var)
  {
    if (isset($_COOKIE[$var])) return true;
    return false;
  }

  // разрегистрировать переменную cookie
  public static function unset_cookie($var)
  {
    unset($_COOKIE[$var]);
    return true;
  }
  
  public static function cookie_connect($var)
  {
    return $_COOKIE[$var];
  }
  
  // проверить url /..
  public static function get_request_uri()
  {
    return $_SERVER['REQUEST_URI'];
  }
  
  // проверить url /..
  public static function get_month_name($m)
  {
      $monthes = array(
        1 => 'Jan',    2 => 'Feb',   3 => 'Mar',     4 => 'Apr',
        5 => 'May',       6 => 'Jun',      7 => 'Jul',     8 => 'Aug',
        9 => 'Sep',  10 => 'Oct',  11 => 'Nov',  12 => 'Dec'
    );
    return  $monthes[$m*1]; 
  }

  public static function preg_match($value, $column_name)
  {
    if ($column_name=='login')
        $pattern = '/^[a-zA-Zа-яА-Я0-9\s\!\@\_\.\-]{1,50}$/u';
    else
    if ($column_name=='text_ru_en')
        $pattern = '/^[a-zA-Zа-яА-ЯіїєгёІЇЄГЁ0-9\s\!\@\#\$\€\%\&\*\(\)\_\+\{\}\|\:\?\,\.\/\;\[\]\\\=\-\—\–\"\™\®\№\«\»]{1,255}$/u';
    else
    if ($column_name=='int')
        $pattern = '/^[0-9]+$/u';
    else return false;

    if (preg_match($pattern, $value)) return true;
  }

  public static function get_new_correct_validate_value(&$value, $column_name)
  {
    if ($column_name=='login'
      or $column_name=='email'
      or $column_name=='description')
    {
      $value = urldecode($value);
      $value_new = strip_tags($value);
      $value_new = functions::validate_html_script_php($value_new);
      $value_new = trim($value_new);
      $value_new = htmlspecialchars($value_new, ENT_QUOTES);

      if ($column_name=='login'
        or $column_name=='email')
        $value_new = preg_replace('/\s+/', '', $value_new);
        
        if ($column_name=='login')
        $value_new = strtolower($value_new);
    }
    return $value_new;
  }

  // подготовить текст, удалить пробелы, теги html         
  public static function validate_html_script_php($text_html)
  {
      /* <script */
      $search = array ("'<script[^>]*?>.*?</script>'si");
      $replace = array ('err_script'); 
      $text_html = preg_replace($search, $replace, $text_html);
      /* <?php */
      $search = array ("'\<\?'si");
      $replace = array ('err_php'); 
      $text_html = preg_replace($search, $replace, $text_html);
      /* ?> */
      $search = array ("'\?\>'si");
      $replace = array ('err_php'); 
      $text_html = preg_replace($search, $replace, $text_html);

      return $text_html;
  }

  public static function month_day_now($m_count)
  {
    if ($m_count<0)
    $date_now = date("d.m.Y",time()+(3600*24*$m_count));
    else
    $date_now = date("d.m.Y",time()+(3600*24*$m_count));
    
    $d = mb_substr($date_now,0,2);
    $m = mb_substr($date_now,3,2);
    
    $day_info = '';
    if ($m_count!=0) $day_info = ' '.$d;
    return functions::month_day_plus_minus_now($m, $m_count).$day_info;
  }

  public static function month_day_plus_minus_now($m = 1)
  {    
    if ($m<=0) $m = 12;
    else
    if ($m>12) $m = 1;

    if($m==1){
        return "January";
    }else if($m==2){
        return "February";
    }else if($m==3){
        return "March";
    }else if($m==4){
        return "April";
    }else if($m==5){
        return "May";
    }else if($m==6){
        return "June";
    }else if($m==7){
        return "July";
    }else if($m==8){
        return "August";
    }else if($m==9){
        return "September";
    }else if($m==10){
        return "October";
    }else if($m==11){
        return "November";
    }else if($m==12){
        return "December";
    }

    return '';
  }
  
  public static function scandirs_custom($start, $link='')
  {
      if (empty($start)) return false;
      $files = array();
      $handle = opendir($start);
      while (false !== ($file = readdir($handle)))
      {
          if ($file != '.' && $file != '..')
          {
              if (is_dir($start.'/'.$file))
              {
                $dir = functions::scandirs_custom($start.'/'.$file,$link);
                $files[$file] = $dir;
              }
              else 
              {
                  array_push($files, $link.$file);
              }
          }
      }
      closedir($handle);
      return $files; 
  }
  
  public static function translite($str='', $type='')
  {
    //---------------------
      static $tbl= array(
      '.'=>'-', '@'=>'@', '_'=>'-', ' '=>'-',  '-'=>'-', '/'=> '-', '\\'=>'-', 
      //-------- Numeric
      '0'=>'0', '1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9',
      //-------- Special Chars
      'quot1;'=>'-', 'quot;'=>'-', '34;'=>'-', '39;'=>'-', 'apos;'=>'-', 'resh;'=>'-', 'gt;'=>'-', 
      'lt;'=>'-', 'and;'=>'-', 'amp;'=>'-', "'"=>'-', '"'=>'-',
      //-------- English lower case
      'q'=>'q', 'w'=>'w', 'e'=>'e', 'r'=>'r', 't'=>'t', 'y'=>'y', 'u'=>'u', 'i'=>'i',
      'o'=>'o', 'p'=>'p', 'a'=>'a', 's'=>'s', 'd'=>'d', 'f'=>'f', 'g'=>'g', 'h'=>'h',
      'j'=>'j', 'k'=>'k', 'l'=>'l', 'z'=>'z', 'x'=>'x', 'c'=>'c', 'v'=>'v', 'b'=>'b',
      'n'=>'n', 'm'=>'m',
      //-------- English upper case
      'Q'=>'Q', 'W'=>'W', 'E'=>'E', 'R'=>'R', 'T'=>'T', 'Y'=>'Y', 'U'=>'U', 'I'=>'I',
      'O'=>'O', 'P'=>'P', 'A'=>'A', 'S'=>'S', 'D'=>'D', 'F'=>'F', 'G'=>'G', 'H'=>'H',
      'J'=>'J', 'K'=>'K', 'L'=>'L', 'Z'=>'Z', 'X'=>'X', 'C'=>'C', 'V'=>'V', 'B'=>'B',
      'N'=>'N', 'M'=>'M',
      //-------- Russ to English upper & lower case
      'а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'e', 'ж'=>'zh', 'з'=>'z',
      'и'=>'i', 'й'=>'j', 'к'=>'k', 'л'=>'l', 'м'=>'m', 'н'=>'n', 'о'=>'o', 'п'=>'p',
      'р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u', 'ф'=>'f', 'ы'=>'y', 'э'=>'je', 'А'=>'A',
      'Б'=>'B', 'В'=>'V', 'Г'=>'G', 'Д'=>'D', 'Е'=>'E', 'Ж'=>'ZH', 'З'=>'Z', 'И'=>'I',
      'Й'=>'J', 'К'=>'K', 'Л'=>'L', 'М'=>'M', 'Н'=>'N', 'О'=>'O', 'П'=>'P', 'Р'=>'R',
      'С'=>'S', 'Т'=>'T', 'У'=>'U', 'Ф'=>'F', 'Ы'=>'Y', 'Э'=>'JE', 'ё'=>'yo', 'х'=>'h',
      'ц'=>'c', 'ч'=>'ch', 'ш'=>'sh', 'щ'=>'shh', 'ю'=>'yu', 'я'=>'ya',
      'Ё'=>'YO', 'Х'=>'H', 'Ц'=>'C', 'Ч'=>'CH', 'Ш'=>'SH', 'Щ'=>'SHH',
      'Ю'=>'YU', 'Я'=>'YA', 
      //-------- other
      'ь'=>'', 'ъ'=>'', 'Ь'=>'', 'Ъ'=>'',
      //-------- URK to English upper & lower case
      'і'=>'i', 'І'=>'I', 'ї'=>'i', 'Ї'=>'I'
      //--------
      );
      $res = strtr($str, $tbl);
      $res = strtolower($res);
      $i=0; $new_res = '';
      while ($i<mb_strlen($res))
      {
        //-------------------
        if ( ($res[$i]>='a' and $res[$i]<='z')
          or ($res[$i]>='а' and $res[$i]<='я')
          or ($res[$i]>='0' and $res[$i]<='9')
          or $res[$i]=='-' or $res[$i]=='@' or $res[$i]=='?' or $res[$i]=='/'
          
            ) $new_res.= $res[$i];
        //-------------------
        $i++;
      }
      //--------------
      $res = $new_res;
      //----- заменяем все "----" на одно "-"
      $res = preg_replace("/--+/","-",$res);  
    
      if ($res[0]=='-') $res = mb_substr($res,1);
      if ($res[mb_strlen($res)-1]=='-') $res = mb_substr($res,0,mb_strlen($res)-1);
      //------------	

  return $res;
  }	

}

?>