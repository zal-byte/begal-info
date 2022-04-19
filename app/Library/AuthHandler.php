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
			self::$filename = storage_path('user.json');
		}

		public static function signup($username, $fullname, $password){
			$user = self::getUser();

			
			$user_name = array();

			foreach($user as $usr){
				foreach($usr as $key=>$val){
					array_push($user_name, $key);
				}
			}


			if(in_array($username, $user_name)){
				return array('status'=>0, 'msg'=>'Username ini telah digunakan.');
			}else{
				$myData[$username] = array('name'=>$fullname, 'password'=>md5($password));

				array_push($user, $myData);

				if(file_put_contents(self::$filename, json_encode($user,JSON_PRETTY_PRINT))){
					return array('status'=>1);
				}else{
					return array('status'=>0,'msg'=>'Daftar gagal');
				}
			}
		}

		public static function login( $username, $password ){
			$usr = self::getUser();
			

			$i = 0;
			foreach( $usr as $user ){
				if(isset($user[$username])){
					if( $user[$username]['password'] == md5($password)){
						return array('status'=>1);
						break;
					}else{
						return array('status'=>0, 'msg'=>'Invalid password');
						break;
					}
				}
				$i++;
			}

			if( $i == count($usr)){
				return array('status'=>0, 'msg'=>'User not found');
			}

		}

		private static function getUser(){
			return json_decode(file_get_contents(self::$filename), 1);
		}
	}

?>