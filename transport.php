<table  align = center border = 0 width = 100% cellspacing = 0 cellpadding = 5 valign = top>
<tr>
<td  align = top><br>

<h3>
<font size = 6>Транспорт:</font></h3>
<?php
$db= mysqli_connect("localhost","titova", "NewPass18","titova");

if (isset($_GET["id_del"])) {
$id_del=$_GET["id_del"];
}

if (isset ($id_del))
{
//-------------------------------------------------------------------------------------------------------------------
$qwerty1 = "DELETE FROM transport WHERE  id=$id_del";
mysqli_query($db,$qwerty1);	
//-------------------------------------------------------------------------------------------------------------------
}

if(!isset($s)) { $s = "id"; }

$qwerty = "select * from transport order by ".$s." asc";
$result = mysqli_query($db,$qwerty);
print "<h3>Количество: ".mysqli_num_rows($result)."<br><br><br>";


print "
<style>
.class1{
	/*  background: #fc0;  Цвет фона */
    opacity: 10; /* Полупрозрачность таблицы */
    filter: alpha(Opacity=50); /* Для IE */
}
</style>
<table class = class1 align = left border = 4 cellspacing = 1 cellpadding = 2 valign = top>
<tr>

<td align = center ><b>&nbsp;<a href = adminpanel.php?content=transport&s=number>№ Транспорта</a>&nbsp;</td>
<td align = center ><b>&nbsp;<a href = adminpanel.php?content=transport&s=type>Тип </a>&nbsp;</td>
<td align = center ><b>&nbsp;<a href = adminpanel.php?content=transport&s=typeClass>Цена от, руб</a>&nbsp;</td>
<td align = center ><b>&nbsp;<a href = adminpanel.php?content=transport&s=price>Класс</a>&nbsp;</td>
<td align = center ><b>&nbsp;<a href = adminpanel.php?content=transport&s=id>Статус</td>
<td align = center><b><a href = adminpanel.php?content=transport&s=id>Путевка</td>
<td align = center ><b>&nbsp;<a href = adminpanel.php?content=transport&s=id>Действие</td>
</tr>

";

while($row = mysqli_fetch_array($result)) {
	print "
	<tr>

	<td align = center>$row[1]</td>
	<td align = center>$row[2]</td>
	<td align = center>$row[3]</td>
	<td align = center>$row[4]</td>
	<td align = center>
";
	if($row[5] == 0) {
		print "<font color = #ff0000>Транспорт готов...</font>";
		print "</td><td align = center>
   
<form action = \"scr_action.php?action=add_ticket\" method = \"POST\">
<select name = \"ticket\">
<option value = \"\">Выбрать путевку
<option value = \"\">--------------";

	
$qwerty7 = "select * from ticket";
$result3 = mysqli_query($db,$qwerty7);
	while($ticket = mysqli_fetch_array($result3)) {
		print "<option value = $ticket[0]>$ticket[3] - $ticket[4]";
	}


	print "</select>
	<p class=\"send\" >
	<input type = \"submit\" name = \"ok\" value = \"Прикрепить\"></p>
	<input type = hidden name = id value = $row[0]>
	</form>
	</td>
 <td><a href=\"adminpanel.php?content=transport&&id_del=$row[0]\"> Удалить транспорт </a>	</td>";
	}
	else {
	    $qwerty = "select transport.id_ticket, ticket.m_otpr, ticket.m_prib, number_ticket from transport, ticket where transport.id = '$row[0]' AND ticket.id = transport.id_ticket";
		$result2 = mysqli_query($db,$qwerty); 
		$row2 = mysqli_fetch_row($result2);
		print "<b>".$row2[3]." / ".$row2[1]."-".$row2[2];
	print "</td>
	<td align = left>
	<form action = \"scr_action.php?action=clear_ticket\" method = \"POST\">
	<p class=\"send\" >
	<center>
	<input type = \"submit\" name = \"ok\" value = \"Отменить\">&nbsp;&nbsp;</p>
	<input type = hidden name = id value = $row[0]>
	</form>
	</td>
		
	";
	}

	print "	</tr>";
}

print "	</table>";
?>

</td>
</tr>

<tr>
<td>
<section id="content">
<div id="container">
<br>
<h1><!--<font size = 3>-->Новый транспорт:</h1>


<form class="mainform"  action = "scr_action.php?action=new_ticket1" method = "POST"">

<h2>
Тип транспорта: 
<select name = "type">
<option value = "">Выбрать
<option value = "">--------------
<option value = "Самолет">Самолет
<option value = "Поезд">Поезд
<option value = "Автобус">Автобус


</select><br><br>
<p class="name">
Номер транспорта:<br>&nbsp <input type = "text" name = "number" pattern="[0-9]{1,5}" size = 30 value = ""
placeholder="Гос номер" required/>

<p class="name">
Класс транспорта:
<select name = "surname">
<option value = "">Выбрать
<option value = "">--------------
<option value = "Бизнесс">Бизнес
<option value = "Эконом">Эконом
<option value = "Стандарт">Стандарт
</p>

</select>

<p class="name">
Минимальная цена билета:<br>&nbsp <input type = "text" name = "name" pattern="^[0-9]+$" size = 30 value = ""
placeholder="Цена" required/>
<p class="send" >
&nbsp&nbsp&nbsp<input type = "submit" name = "ok" value = "Добавить Транспорт"></p>
</h2>
</form>

</section>

</td>
</div>
</tr>

</table>
