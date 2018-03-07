<?php

/*define("DB_DRIVER", "mysql");
define("DB_HOST", "localhost");
define("DB_NAME", "value");
define("DB_USER", "rodionova");
define("DB_PASS", "neto1663");

try{
	//подключаемся к базе данных
	$connect_str=DB_DRIVER . ";host=" . DB_HOST . ";dbname=" . DB_NAME;
	$db=new PDO($connect_str,DB_USER, DB_PASS); 
	$row=[];
	//делаем запрос к таблице базы данных
    $result=$db->query("SELECT * FROM books");
	$error_array=$db->errorInfo();
	
	//обрабатываем ошибки
	if ($db->errorCode()!=0000) 
	{
		echo "SQL error: " . $error_array[2] . "<br /><br />";
	} 

	while ($row= $result->fetch()) 
	{
		print_r($row);
	}
}*/

$connect=mysqli_connect("localhost", "rodionova", "neto1663", "global");
$sql="select * from books";
$res=mysqli_query($connect, $sql);

while ($data=mysqli_fetch_array($res))
{?>
<table>
	<thead>
		<tr>
			<td>Название</td>
			<td>Автор</td>
			<td>Год выпуска</td>
			<td>Жанр</td>
			<td>ISBN</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $data["name"] ?></td>
			<td><?php echo $data["author"] ?></td>
			<td><?php echo $data["year"] ?></td>
			<td><?php echo $data["genre"] ?></td>
			<td><?php echo $data["isbn"] ?></td>
		</tr>
	</tbody>
</table>
<?php
}

?>