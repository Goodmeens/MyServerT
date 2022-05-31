<!doctype html>
<html lang="en-us">
<head>
	<meta charset="UTF-8"> 
	<title>Магазин</title>
</head>
<body>
<h3>Список товаров</h3>
<form method="POST" action="PayProct.php">
<table>

<?php
//	var_dump($_POST);
	$mysqli=new mysqli('localhost','root','','mybase');
	if ($mysqli->connect_errno) {
		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		return false;
	};
	$mysqli->set_charset("utf8");
	$text="select * from products where name='".$_POST['name']."' and price".$_POST['sign']." ".$_POST['price'];
//	echo $text;
	$result=$mysqli->query($text);
	while ($row = mysqli_fetch_assoc($result)){
//		echo $row['name'];
		echo "<tr><td>".$row['name']."</td><td>".$row['articl']."</td><td>".$row['price']."</td>";
		echo "<td><input name='n".$row['id']."'></td></tr>";
	};
	
?>
</table>
<input type="submit">
</form>
</body>
</html>
