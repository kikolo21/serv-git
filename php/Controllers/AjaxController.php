<?php

namespace ongameuk\php\Core\Ajax;

use ongameuk\php\Libs\functions;
use ongameuk\php\Core\router;
use ongameuk\php\Libs\PHPMailer\smtp_gmail_module;
use ongameuk\php\Models\api;
use ongameuk\php\Config\config;

class AjaxController {

  public static function ajax_controller_redirect()
  {
      $ajax_controller = functions::get('ajax_controller');
      if (empty($ajax_controller) or $ajax_controller=='ajaxController') return false;

      router::spl_autoload_register($ajax_controller);
      
      return true;
  }
      
  public static function request_response_data()
  {

    if (AjaxController::ajax_controller_redirect()) return true;

    if ($_SERVER['REQUEST_METHOD']==='GET')
    $comand_query = functions::get('q');
    else
    if ($_SERVER['REQUEST_METHOD']==='POST')
    $comand_query = functions::post('q');

    if ($comand_query == 'send_form')
    {

      // get data and start process validation
      $get_msg = functions::get('msg');
      $get_from_name = functions::get('from_name');
      $get_from_email = functions::get('from_email');

      $from_name = functions::get_new_correct_validate_value($get_from_name,'description');
      if (empty($from_name) or $from_name!=$get_from_name or !functions::preg_match($from_name,'text_ru_en')) { print 'err_form_name'; exit; }

      $from_email = functions::get_new_correct_validate_value($get_from_email,'email');
      if ($from_email!=$get_from_email or !filter_var($from_email, FILTER_VALIDATE_EMAIL)) { print 'err_form_email'; exit; }

      $get_msg = functions::get_new_correct_validate_value($get_msg,'description');
      if (empty($get_msg) or (!empty($get_msg) and !functions::preg_match($get_msg,'text_ru_en'))) { print 'err_form_msg'; exit; }
      //------------------------------------------

      $get_msg_send_key = functions::get('msgsk');
      
      if (!empty($get_msg_send_key) 
      and functions::isset_cookie_connect('my_msgsk')
      and md5($get_msg_send_key)==functions::cookie_connect('my_msgsk')
      and $get_msg_send_key==md5("sec_hash-LGMSD#QEWSDF".date("mY")))
      {

        functions::set_cookie('my_msgsk','');

        if (
          (!empty($from_name) and mb_strlen($from_name)<=100)
          and
          (!empty($from_email) and mb_strlen($from_email)<=100)
          and
          (!empty($get_msg) and mb_strlen($get_msg)<=100)
        )
        {

          $smtp_gmail_config['FromName'] = 'ONGAMEUK - Autosender';
          $smtp_gmail_config['From_email'] = 'autosender@ongameuk.com';
          $smtp_gmail_config['Password'] = '13467908@gg';
          $smtp_gmail_config['From_login_email'] = 'autosender@ongameuk.com';

          $smtp_gmail_config['To_email'] = 'subscription@ongameuk.com';
          $smtp_gmail_config['To_name'] = 'subscription';

          $smtp_gmail_config['Subject'] = 'ongameuk - contactform';
          $smtp_gmail_config['Body'] = 'Вы получили запрос из формы ONGAMEUK.COM<p>Данные запроса:<br>Имя: '.$from_name.'<br>E-mail:'.$from_email.'<br>'.$get_msg.'<br><br>Это письмо сгенерировано автоматически. Пожалуйста не отвечайте на него.';

          router::spl_autoload_register('smtp_gmail_module');
          router::spl_autoload_register('PHPMailer');
          router::spl_autoload_register('SMTP');
          router::spl_autoload_register('Exception');
          print smtp_gmail_module::send_mail($smtp_gmail_config);
          exit;
        }

        print 'err:send_form_data:api';
        exit;
      }

      print 'err:send_form_data:k';
      exit;
    }
    else
    if ($comand_query == 'add_rating')
    {
      $bn = functions::get('bn');
      $bn = urldecode($bn);
      
      if (api::set_config_ratings_user_click($bn, $user_rating_count))
      {
        print 'result:ok:'.$user_rating_count;
        exit;
      }
    
      print 'err_add_rating';
      exit;
    }

    print 'error request #1'; 
    exit; 
  }

}

AjaxController::request_response_data();

?>