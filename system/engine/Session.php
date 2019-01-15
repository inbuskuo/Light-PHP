<?php
class Session{

	public static $handler;

	public static function init($session_handler){

		//ini_set('session.save_handler', 'files');
		session_set_save_handler($session_handler, true);
		//session_save_path(SYSTEM . '/sessions');

		$session_handler->start();

		if (!$session_handler->isValid()){
			//$session_handler->destroy();
			$session_id = session_id();
			$session_handler->destroy($session_id);
		}

		Session::$handler = $session_handler;
	}

	public static function get($key){
		return Session::$handler->get($key);
	}

	public static function set($key, $value){
		Session::$handler->put($key, $value);
	}

}