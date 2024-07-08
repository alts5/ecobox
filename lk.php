<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:../");
}
?>
<?php include("includes/header.php"); ?>

<?
$result=mysql_query("SELECT id, FIO, balans, ecocenter, address, hallid, status FROM users where username = '$user'"); // запрос на выборку сведений о пользователях
$row=mysql_fetch_array($result);
?>

<div class = 'page-name'><b>ЛИЧНЫЙ КАБИНЕТ ПОЛЬЗОВАТЕЛЯ BioBOX</b></div>
<hr size='1' style='margin: 10px 35px;'></hr>
<table style = 'width:100%;'>
	<tr>
		<td>
			<div class = 'balans-header'><h2>Мой баланс</h2></div>
			<div class = 'balans-status'><?print $row['balans']?> руб.</div>
			<div style='text-align: center;'><button class = 'pay-btn' onclick='sho("block")'>Пополнить баланс</button></div>
		</td>
		<td>
			<div class = 'balans-header' style = 'text-align: left'><h2>Мой BioBOX</h2></div>
			<div class = 'info-eco'>
				<div style = 'padding: 15px 0'><b>Идентификационный номер EcoCenter:</b> <?print $row['ecocenter']?></div>
				<div style = 'padding: 15px 0'><b>Адрес EcoCenter:</b> <?print $row['address']?></div>
				<div style = 'padding: 15px 0'><b>Номер коридора:</b> <?print $row['hallid']?></div>
				<div style = 'padding: 15px 0'><b>Текущий статус:</b> <?print $row['status']?></div>
			</div>
		</td>
	</tr>
</table>
<hr size='1' style='margin: 10px 35px;'></hr>
<div class = 'sub-pagename'><b>Управление BOXами</b></div>
<table style='width: 100%; padding: 15px 30px; text-align: center; font-family: Arial; color: grey'>
<tr class = "tr_sty"><th>Box-ID</th><th>Номер стойки</th><th>Статус</th>
<th class = "student_table_yach" colspan="2">Действия</th>
</tr>
<?
$zap_cult=mysql_query("SELECT box_number, status, stoika FROM boxes WHERE user = '".$row['FIO']."'"); // запрос на выборку сведений о пользователях
while ($cult=mysql_fetch_array($zap_cult)){// для каждой строки из запроса
echo "<tr>";
echo "<td>" .   $cult['box_number'] . "</td>";
echo "<td>" .   $cult['stoika'] . "</td>";
echo "<td>" .   $cult['status'] . "</td>";
echo "<td><button class = removercold_btn onclick = wait('block','freez.php?id=" . $cult['box_number'] . "')>Заморозить BOX</button></td>"; // запуск скрипта для удаления
echo "<td><button class = removercold_btn onclick = wait('block','delete.php?id=" . $cult['box_number'] . "')>Освободить BOX</button></td>"; // запуск скрипта для удаления
echo "</tr>";
}
print "</table>";
?>
</table>
<div style = 'text-align: center'><button class = 'add-btn' onclick='sho("block")'>Забронировать BOX</button></div>
<?php include("includes/footer.php"); ?>