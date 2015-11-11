<?php
	class Main{

		public function encrypt($str){
			$str = base64_encode(base64_encode(base64_encode($str)));
			return $str;
		}

		public function decrypt($str){
			$str = base64_decode(base64_decode(base64_decode($str)));
			return $str;
		}

		public function authen(){
			mysql_connect('localhost', 'root', 'password');
			mysql_select_db('posts');
		}

		public function insertData($main, $post, $date) {
			$timestamp = time();
			$query = 'INSERT INTO `posts` (`main`, `post`, `date`, `timestamp`) VALUES ("'.$main.'", "'.$post.'", "'.$date.'", "'.$timestamp.'")';
			mysql_query($query);
			echo "Submitted!";
		}
	}
?>