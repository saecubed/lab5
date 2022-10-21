<?php
include "database.php";
// Выводим результат из БД
$sql = mysqli_query($conn, 'SELECT * FROM `Определения`');
  while ($result = mysqli_fetch_array($sql)) {
	echo '<tr>'.'<td>' .$result['термин'].'</td>'.'<td>'. $result['определение'].'</td>'.'</tr>';
  }
?>
