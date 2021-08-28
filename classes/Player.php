<?php
	require_once('../show_php_errors.php');

	class Player{
		private $db_con;
		private $user_id;
		public $money;
		public $games = [];
		public $games_json;
		
		public function __construct($user_id){
			$this->user_id = $user_id;
			include('../db_con_developer_quest.php');
			$this->db_con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
			$this->money = $this->fetchMoney();
			$this->games = $this->fetchGames();
			$this->games_json = json_encode($this->games);
			// mysqli_close($db_con);
		}
		
		public function updateMoney($amount){
			$finalAmount = $this->money + $amount;
			
			if ($finalAmount >= 0){
				$update_stmt = 'UPDATE users SET money = '.$finalAmount.' WHERE user_id = "'.$this->user_id.'";';
				mysqli_query($this->db_con, $update_stmt);
				$this->money = $finalAmount;
				
				return true;
			}
			else{
				return false;
			}
			
		}
		
		public function buyComputer(){
			$rating = 1;
			
			if ($this->updateMoney(-80) ){
				$update_stmt = 'UPDATE computers SET rating = '.$rating.' WHERE user_id = "'.$this->user_id.'";';
				mysqli_query($this->db_con, $update_stmt);
			}
			else{
				echo "Insufficient funds";
			}
		}
		
		public function createGame($genre){
			$insert_stmt = 'INSERT INTO games (user_id, genre) VALUES ("'.$this->user_id.'", "'.$genre.'");';
			mysqli_query($this->db_con, $insert_stmt);
			$this->updateMoney(80);
		}
		
		public function fetchGames(){
			$select_stmt = 'SELECT * FROM games WHERE user_id = "'.$this->user_id.'";';
			
			$result = mysqli_query($this->db_con, $select_stmt);
			
			if ($result->num_rows ){
				$games = mysqli_fetch_all($result, MYSQLI_ASSOC);
				// print_r($games);
				return $games;
			}
		}
		
		public function fetchMoney(){
			$select_stmt = 'SELECT * FROM users WHERE user_id = "'.$this->user_id.'";';
			
			$result = mysqli_query($this->db_con, $select_stmt);
			
			if ($result->num_rows ){
				$user = mysqli_fetch_all($result, MYSQLI_ASSOC);
				//$_SESSION['username'] = $user[0]['username'];
				return $user[0]['money'];
			}
		}
	}
?>