<?php
	$id = $_GET['id'];
	require_once('./authen.php');
	require_once('./class.php');
	$query='SELECT * FROM `posts` WHERE `sno` = "'.$id.'"';
	$res=mysql_query($query);
	$obj = new Main();
	while($data=mysql_fetch_array($res)) {
		echo'
				<link rel="stylesheet" type="text/css" href="./css/index.css">
				<center>

				<div id="main_field" style="font-size:17px;color:#EF4836;">
					'.$obj->decrypt($data['main']).'
				</div>

				<div id="date_field" style="font-size:13px;">
					['.$obj->decrypt($data['date']).']

					<!--<a href="editdata.php?id='.$data['sno'].'" target="iframe_data">
						<span style="float:right;margin-left:250px;margin-top:-10px;position:absolute;">
							<img src="./img/edit.png" height=30 width=30>
						</span>
					</a>-->
				</div>	
				
				<div id="post_field" style="padding-right:10px;overflow-y:auto;">
					'.$obj->decrypt($data['post']).'			
				</div>
				
				</center>
		';
	}
?>