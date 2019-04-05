<table align = center  width = 100%  valign = top>

<br>
<section id="content">
<h1>Добавить новую путевку:
<form class="mainform" action = "scr_action.php?action=new_ticket" method = "POST""></h1>
<p class="name">
<h2>Отель:
<select name = "hotel">
<option value = "">Выбрать
<option value = "">--------------
</p></h2>
<?php
$db= mysqli_connect("localhost","titova", "NewPass18","titova");
$qwerty = "select * from hotel";
$result = mysqli_query($db,$qwerty);
	while($otdel = mysqli_fetch_array($result)) {
		print "<option value = $otdel[0]>$otdel[1]";
	}
?>
</select><br>
<p class="name">
<h2><br>
Дата заселения: <input type = "date" name = "t_otpr"  size = "45" value = ""
placeholder="Отправление" required/>
<br>
Дата отъезда: <input type = "date" name = "t_prib" size = 25 value = ""
placeholder="Прибытие" required/>
<br><br></h2></p>
<p class="name">
<h2>
<br>
Пункт отправления: <input type = "text" name = "m_otpr" size = 20 value = "" 
placeholder="Отправление" required/>
 <br>
Пункт прибытия: <input type = "text" name = "m_prib"  size = 20 value = ""
placeholder="Прибытие" required/>
 <br><br></h2></p>
 <h2><p class="name">
№ путевки: <input type = "text" name = "number_ticket" pattern="[0-9]{1,10}" size = 10 value = ""
placeholder="№ путевки" required/>
</h2></p><br>
<p class="send" >
<br>
<input type = "submit" name = "ok" value = "Добавить путевку"></p><p></p>
</form>
</section>
</td>
</tr>
</table>
</p>

