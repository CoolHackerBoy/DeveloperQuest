<?php
	require_once('../show_php_errors.php');
	
	class Game{
		private $db_con;
		public $user_id;
		public $game_id;
		public $genre;
		public $title;
		public $budget;
		public $description;
		public $platform;
		
		public function __construct($url_param = null){
			include('../db_con_developer_quest.php');
			$this->db_con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
			$this->game_id = $url_param;
			$this->fetchGame();
		}
		
		public function create($param){
			$insert_stmt = "INSERT INTO `games` 
			(`user_id`, `budget`, `title`, `description`, `genre`) 
			VALUES 
				('".$param['user_id']."', 
				'".$param['budget']."', 
				'".$param['title']."', 
				'".$param['description']."', 
				'".$param['genre']."')
			;";
			
			mysqli_query($this->db_con, $insert_stmt);
			
			return mysqli_insert_id($this->db_con);
		}
		
		public function realeaseUpdate(){
			
		}
		
		public function fetchGame(){
			$select_stmt = 'SELECT * FROM games WHERE game_id = "'.$this->game_id.'";';
			
			$result = mysqli_query($this->db_con, $select_stmt);
			
			if ($result->num_rows ){
				$game = mysqli_fetch_all($result, MYSQLI_ASSOC);
				$this->title = $game[0]['title'];
				$this->description = $game[0]['description'];
				$this->budget = $game[0]['budget'];
				$this->genre = $game[0]['genre'];
				$this->platform = $game[0]['platform'];
				$this->user_id = $game[0]['user_id'];
				print_r($game);
			}
		}
	}
?>