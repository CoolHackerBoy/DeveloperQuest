<?php
	require_once('../show_php_errors.php');

	class PlayerData{
		private $db_con;
		private $user_id;
		public $money;
		
		public function __construct($user_id){
			$this->user_id = $user_id;
			require_once('../db_con_developer_quest.php');
			$this->db_con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);	
			
			$select_stmt = 'SELECT * FROM users WHERE user_id = "'.$this->user_id.'";';

			$result = mysqli_query($this->db_con, $select_stmt);
			
			if ($result->num_rows ){
				$user = mysqli_fetch_all($result, MYSQLI_ASSOC);
				//$_SESSION['username'] = $user[0]['username'];
				$this->money = $user[0]['money'];
			}
			// mysqli_close($db_con);
		}
		
		public function updateMoney($amount){
			$finalAmount = $this->money + $amount;
			
			if ($finalAmount >= 0){
				$select_stmt = 'UPDATE users SET money = '.$finalAmount.' WHERE user_id = "'.$this->user_id.'";';
				mysqli_query($this->db_con, $select_stmt);
				$this->money = $finalAmount;
			}
			else{
				echo "Insufficient funds";
			}
			
		}
	}
?>