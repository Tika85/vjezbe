<?php

	class DB {
		
		private static $_instance = null; 
		private $_conn;
		private $post = 'localhost' //127.0.0.1
		private $_user = 'root';
		private $_pass = '';
		private $_db = 'fakultet';
		
		public function __construct(){
			$this->_conn = new PDO("mysql:host=$this->_host;dbname=$this->_db, charset=UTF8", $this->_user, $this->_pass);
	} 
		public static function get_instance(){
			if (!self::$_instance)  {
				self:: $_instance = new DB();
			}
			return self:: $_instance;
			
		}
		
		
	}

$konekcija = DB::getInstance();		
		