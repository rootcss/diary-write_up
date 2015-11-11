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
			<a href="index.php"><span style="float:right;margin-left:200px;margin-top:-5px;position:absolute;font-size:12px;color:#444;"><img src="./img/home.png" title="Home" height="40" width="40"></span></a>
			<a href="view.php"><span style="float:right;margin-left:160px;margin-top:0px;position:absolute;font-size:12px;color:#444;"><img src="./img/view.png" title="View all posts" height="35" width="35"></span></a>
		</div>

		<div id="container">
			<div id="left">
				<center>				
					<iframe name="iframe_data" src="add_post.php"></iframe>
				</center>
			</div>

			<div id="right">
				<center>
				<br>
				<?php
					require_once('./authen.php');
					require_once('./class.php');
					$query='SELECT * FROM `posts` ORDER BY `sno` DESC';
					$res=mysql_query($query);
					$obj = new Main();
					while($data=mysql_fetch_array($res)) {
						echo '<a target="iframe_data" href="viewdata.php?id='.$data['sno'].'">
								<div class="strips" style="cursor:pointer;width:450px;height:30px;overflow:hidden;
								padding:5px;font-size:14px;border-radius:30px;margin-bottom:5px;background:#89C4F4;color:#444;">';
							echo '<span style="float:left;padding-left:2px;overflow:hidden;">'.substr($obj->decrypt($data['main']), 0, 60).'...</span><br>';
							echo '<span style="float:right;font-size:11px;margin-right:10px;">'.$obj->decrypt($data['date']).'</span>';
						echo'</div>
							</a>';
					}
				?>
				</center>
			</div>
		</div>

		<div id="footer">
			
		</div>
	</div>
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/index.js"></script>
</body>
</html>