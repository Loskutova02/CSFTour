<html>

<?php
if(session_id() == '') { 
session_start(); 
}

?>
<style>
.edit
{
	 color:#7f4291
}

</style>

<?php
$db= mysqli_connect("localhost","titova", "NewPass18","titova");

$userquery = "select * from hotel";
$result = mysqli_query($db,$userquery);
print "<h3>&nbspКоличество направлений следования: ".mysqli_num_rows($result)."<br></h3>";    
$userquery1 = "select * from ticket";
$result3 = mysqli_query($db,$userquery1 );
print "<h3>&nbspКоличество доступных туров: ".mysqli_num_rows($result3)."<br><br><br></h3>";


while($row = mysqli_fetch_array($result)) {
	print "<b>&nbsp<font size = 2>$row[1]</font></b>  ";

	print "(<b> &nbsp<a href = 'edit.php?type=1&id=$row[0]' ><font color =  #7f4291>Редактировать</font></a> :: <a href = 'scr_action.php?action=del_hotel&id=$row[0]' ><font color =  #7f4291>Удалить</font></a></b> )<br>&nbsp$row[2]<br>&nbsp;&nbsp;- <u>Туры:</u><br>";

	$myq = "select * from ticket where id_hotel = '$row[0]'";
	$result2 = mysqli_query($db,$myq);

	if (mysqli_num_rows($result2) <= 0) { print "&nbsp;&nbsp;&nbsp;&nbsp;<font color = #ff0000>Нет туров в этом направлении...</font><br><br>"; }
	else {

		while($row2 = mysqli_fetch_array($result2)) {
			print "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$row2[5]." ::. <font color = #ff0000>".$row2[3]."-".$row2[4]."</font> .::</b> (<u>Дата заселения/отъезда:</u> $row2[1]/$row2[2]) <a href = 'edit.php?type=2&id=$row2[0]'><font color =  #7f4291>Редактировать</font></a> :: <a href = 'scr_action.php?action=del_ticket&id=$row2[0]'><font color =  #7f4291>Удалить</font></a><br>";
		}
	}
	print "<br>";
	$_SESSION['count']=1;
}
?>
</html>

 

