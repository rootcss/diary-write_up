<html>
<head>	
	<link rel="stylesheet" type="text/css" href="./css/index.css">
</head>
<body>
	<div id="wrapper">
		<div id="header">
			Something in your mind? Write up!
			<span style="float:right;margin-left:300px;position:absolute;font-size:12px;color:#444;"> <?php echo date("d/m/Y"); ?> </span>
			<a target="iframe_data" href="add_post.php"><span style="float:right;margin-left:250px;position:absolute;font-size:12px;color:#444;"><img src="./img/new.png" title="New post" height="30" width="30"></span></a>
			<a href="index.php"><span style="float:right;margin-left:200px;margin-top:-5px;position:absolute;font-size:12px;color:#444;"><img src="./img/home.png" title="New post" height="40" width="40"></span></a>
			<a href="view.php"><span style="float:right;margin-left:160px;margin-top:0px;position:absolute;font-size:12px;color:#444;"><img src="./img/view.png" title="View all posts" height="35" width="35"></span></a>
		</div>

		<div id="container">
			<?php

				require_once('./authen.php');
				$query = 'SELECT * FROM `posts` ORDER BY `timestamp`';
				$q = mysql_query($query);
				while($data=mysql_fetch_row($q)) {
					echo $data['sno'].;
					echo 
				}

			?>
		</div>

		<div id="footer">
			
		</div>
	</div>
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/index.js"></script>
</body>
</html>