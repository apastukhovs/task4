<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo TITLE; ?></title>
</head>
<body>
	<h2>MySQL</h2>
	<hr>
	<h3>insert into  test (id, name, password) values (<?= $id ?>, <?= $name1 ?>, <?= $password1 ?>)</h3>
	<p>Result : <?= $resultMy1 ?></p>
	<hr>
	<h3>select id, name, password from test where id = <?= $id ?></h3>
	<p>Result single line:</p>
	<?php
		foreach($rowMy1 as $key => $value){
			echo $key.' => '.$value.', ';
		}
	?>
	<hr>
	<h3>update test set name = <?= $name2 ?> where id = <?= $id ?></h3>
	<p>Result: <?= $resultMy2 ?></p>
	<hr>
	<h3>select id, name from test where userid = <?= $id ?></h3>
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
	<h3>delete from test where id = <?= $id ?></h3>
	<p>Result: <?= $resultMy3 ?></p>

	<hr>
	<h2>PostgreSQL</h2>
	<hr>
	<h3>insert into test (id, name, password) values (<?= $id ?>, <?= $name1 ?>, <?= $password1 ?>)</h3>
	<p>Result : <?= $resultPg1 ?></p>
	<hr>
	<h3>select id, name, password from test where id = <?= $id ?></h3>
	<p>Result single line:</p>
	<?php
		foreach($rowPg1 as $key => $value){
			echo $key.' => '.$value.', ';
		}
	?>
	<hr>
	<h3>update test set name = <?= $name2 ?> where id = <?= $id ?></h3>
	<p>Result: <?= $resultPg2 ?></p>
	<hr>
	<h3>select id, name from test where id = <?= $id ?></h3>
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
	<h3>delete from test where id = <?= $id ?></h3>
	<p>Result: <?= $resultPg3 ?></p>
</body>
</html>