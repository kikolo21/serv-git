<?php

namespace ongameuk\php\Core\Sessions;

use ongameuk\php\Libs\functions;
use ongameuk\php\Logs\logs;
use ongameuk\php\Config\config;
use ongameuk\php\Core\router;
use ongameuk\php\Core\Sessions\SysSession;

class connect_sessions_db_mysql {
		
	public static function new_connect()
	{
		// create new db connect
		if (!function_exists('mysqli_connect')){
			
			if (config::localversion()) // local version		
			logs::client_err_log('config-mysql-lnk_db-not-found',true);
			else exit;

		} else { // for mysql
			
			$lcon = mysqli_connect(config::$glocal,
				SysSession::$connectionInfo['UID'],
				SysSession::$connectionInfo['PWD'],
				SysSession::$connectionInfo['Database']);

			/* check connection */ 
			if ($lcon) return $lcon; else
			{	
				if (config::localversion())
				die( print_r( mysqli_connect_error(), true));
					print "Configuration issue: MYSQL database is unavailable";
				return false;
			}

		}
	}

	public static function start_sessions_db_mysql($get_exit)
	{
		/*  create source db
			connect config sql
		*/
		if (!function_exists('mysqli_connect'))
			logs::client_err_log('mysqli_connect-not-found',true);

		if (router::spl_autoload_register('config'))
		{
			if (!empty(config::db_name)
			and !empty(config::db_user)
			and !empty(config::db_pasw))
			SysSession::$connectionInfo = array(
				"UID" => config::db_user,
				"PWD" => config::db_pasw, 
				"Database" => config::db_name, 
				"CharacterSet" => "UTF-8"
			);
			else logs::client_err_log('config-not-found-1',true);
		}
		else logs::client_err_log('config-not-found-2',true);
		
		$handler = new SysSession (); 
		session_set_save_handler ( $handler , true );

		$lnk_db = connect_sessions_db_mysql::new_connect(); // connect to base
		config::$lnk_db = $lnk_db;

		session_start();

		if ($get_exit) functions::exit_system(true);
		
		// account::$user_info['login'] = 'Anonymous';
		if ($lnk_db) return true; 
	}

}

?>