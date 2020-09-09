<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Календарь</title>
</head>

<body>
<table border='1'>
<?php

    date_default_timezone_set('Europe/Samara');

	echo "<caption><i>".date('d.m.Y H:i')."</i></caption>";

?>
	<thead>
		<tr>
			<th>Пн</th>
			<th>Вт</th>
			<th>Ср</th>
			<th>Чт</th>
			<th>Пт</th>
			<th>Сб</th>
			<th>Вс</th>
		</tr>
	</thead>
	<tbody>
	<tr>
<?php

for ($k = 1; $k <= date("t"); $k++) {
	if ($k  % 7 == 0){
		echo "</tr>";
	}
	
	if ($k < date("w", strtotime("first day of now"))){
		echo "<td>  </td>";
	} 

	if ($k == date("d")){
		echo "<td><font color=red> $k </font></td>";
	} else {
		echo "<td> $k </td>";
	}
}
?>
</tbody>
</table>

</body>
</html>