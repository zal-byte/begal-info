<?php

	namespace App\Library;

	class AuthHandler{
		private static $instance = null;
		public static function getInstance(){
			if( self::$instance == null ){
				self::$instance = new AuthHandler();
			}
			return self::$instance;
		}
		private static $filename = null;
		public function __construct(){
			self::$filename = storage_path('user.txt');
		}

		public static function login( $username, $password ){
			$usr = self::getUser();

			$temp_usr = array();

			



		}

		private static function getUser(){
			$data = explode('{{{%}}}', file_get_contents(self::$filename));
			return $data;
		}
	}

?>