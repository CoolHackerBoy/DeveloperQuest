<?php
	require_once('../show_php_errors.php');
	
	class Game{
		public $user_id;
		public $game_id;
		public $genre;
		private $db_con;
		
		public function __construct($url_param){
			include('../db_con_developer_quest.php');
			$this->db_con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
			$this->game_id = $url_param;
			$this->fetchGame();
		}
		
		public function realeaseUpdate(){
			
		}
		
		public function fetchGame(){
			$select_stmt = 'SELECT * FROM games WHERE game_id = "'.$this->game_id.'";';
			
			$result = mysqli_query($this->db_con, $select_stmt);
			
			if ($result->num_rows ){
				$game = mysqli_fetch_all($result, MYSQLI_ASSOC);
				$this->genre = $game[0]['genre'];
				$this->user_id = $game[0]['user_id'];
				print_r($game);
			}
		}
	}
?>