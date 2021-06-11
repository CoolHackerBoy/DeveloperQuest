<?php
	require_once('../show_php_errors.php');

	class PlayerData{
		public $money;
		
		public function __construct($user_id){
			require_once('../db_con_developer_quest.php');
			$db_con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);	
			$select_stmt = 'SELECT * FROM users WHERE user_id = "'.$user_id.'";';

			$result = mysqli_query($db_con, $select_stmt);
			
			if ($result->num_rows ){
				$user = mysqli_fetch_all($result, MYSQLI_ASSOC);
				//$_SESSION['username'] = $user[0]['username'];
				$this->money = $user[0]['money'];
			}
			mysqli_close($db_con);
		}
	}
?>