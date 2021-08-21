<?php
	require_once('../show_php_errors.php');
	
	class Game{
		public $user_id;
		public $game_id;
		public $genre;
		
		public function __construct($url_param){
			$this->game_id = $url_param;
		}
		
		public function realeaseUpdate(){
			
		}
	}
?>