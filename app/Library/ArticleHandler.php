<?php

	namespace App\Library;

	class ArticleHandler{
		private static $instance = null;
		private static $filename = null;
		public static function getInstance(){
			if( self::$instance == null ){
				self::$instance = new ArticleHandler();
			}
			return self::$instance;
		}

		public function __construct(){
			self::$filename = storage_path('article.json');
		}

		public static function getArticle(){
			return self::getData();
		}

		private static function getData(){
			return json_decode( file_get_contents(self::$filename), 1);
		}
	}

?>