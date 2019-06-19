<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo TITLE; ?></title>
</head>
<body>
	<h2>MySQL</h2>
	<hr>
	<h3>insert into user (id, name, password) values (<?= $id ?>, <?= $name ?>, <?= $password ?>)</h3>
	<p>Result : <?= $resultMy1 ?></p>
	<hr>
	<h3>select id, name, password from user where id = <?= $id ?></h3>
	<p>Result single line:</p>
	<?php
		foreach($rowMy1 as $key => $value){
			echo $key.' => '.$value.', ';
		}
	?>
	<hr>
	<h3>update user set name = <?= $nameUser ?> where id = <?= $userId ?></h3>
	<p>Result: <?= $resultMy2 ?></p>
	<hr>
	<h3>select id, name from user where userid = <?= $id ?></h3>
	<p>Result all lines:</p>
	<?php
		foreach($rowsMy1 as $item){
			foreach ($item as $key => $value) {
				echo $key.' => '.$value.', ';
			}    
			echo "<br />";
		}
	?>
	<hr>
	<?php echo 'Total lines: '.$countRowsMy; ?>
	<hr>
	<h3>delete from user where id = <?= $userIdDelete ?></h3>
	<p>Result: <?= $resultMy3 ?></p>

	<hr>
	<h2>PostgreSQL</h2>
	<hr>
	<h3>insert into user (id, name, password) values (<?= $pId ?>, <?= $pName ?>, <?= $pPassword ?>)</h3>
	<p>Result : <?= $resultPg1 ?></p>
	<hr>
	<h3>select id, name, password from user where id = <?= $pId ?></h3>
	<p>Result single line:</p>
	<?php
		foreach($rowPg1 as $key => $value){
			echo $key.' => '.$value.', ';
		}
	?>
	<hr>
	<h3>update user set name = <?= $pNameUser ?> where id = <?= $pUserId ?></h3>
	<p>Result: <?= $resultPg2 ?></p>
	<hr>
	<h3>select id, name from user></h3>
	<p>Result all lines:</p>
	<?php
		foreach($rowsPg1 as $item){
			foreach ($item as $key => $value) {
				echo $key.' => '.$value.', ';
			}    
			echo "<br />";
		}
	?>
	<hr>
	<?php echo 'Total lines: '.$countRowsPg; ?>
	<hr>
	<h3>delete from user where id = <?= $id ?></h3>
	<p>Result: <?= $resultPg3 ?></p>
</body>
</html>