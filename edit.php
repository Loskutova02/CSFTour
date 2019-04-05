



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Главная</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- templatemo 353 beauty class -->
<!-- 
Beauty Class Template 
http://www.templatemo.com/preview/templatemo_353_beauty_class 
-->
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<script type="text/javascript" src="js/jquery-1-4-2.min.js"></script> 
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

</head>
<body>

<div id="templatemo_body_wrapper">
    <div id="templatemo_wrapper"><span id="templatemo_wrapper_top"></span>
        <div id="templatemo_header">    
            <div id="site_title"><a href="#">Beauty Class</a></div>
            <div id="templatemo_menu" class="ddsmoothmenu">
                <ul>
                    <li><a href="adminpanel.php">Маршруты</a></li>
              	    <li><a href="adminpanel.php?content=add_ticket">Туры</a></li>
                    <li><a href="adminpanel.php?content=add_hotel">Отели</a></li>
                    <li><a href="adminpanel.php?content=transport">Транспорт</a></li>
						<li><a href="logout.php">Выход</a></li>
			
                </ul>
                <br style="clear: left" />
            </div> <!-- end of templatemo_menu -->
        </div>
        <div id="templatemo_slider">
           <div id="slider-wrapper">
                <div id="slider1" >
                    
		<?php

session_start();

if(!isset($_SESSION["session_username"])):
header("location:login.php");
else:
?>
	<div id="welcome">
<h2>Добро пожаловать, <span><?php echo $_SESSION['session_username'];?>! </span></h2>

</div>
<?php endif; ?>
                </div>
                <div id="htmlcaption" class="nivo-html-caption">
        
                </div>
            </div>
            <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
            <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            </script>
        </div>
		<table align = center  width = 100%  valign = top>
<tr>
<td align = left valign = top>
<?php
if(!isset($id)) { 
	$id = 1; 
	if(!isset($type)) { $type = 1; }
}
$type=$_GET["type"];
?>

<td align = left valign = top>
<?php
$db= mysqli_connect("localhost","titova", "NewPass18","titova");
if ($_SESSION['count'] == 1)
{
$id=$_GET["id"];
$_SESSION['id']=$_GET["id"];
$_SESSION['count']++;
}
else
{
$id=$_SESSION['id'];
}

if($type == 1) {

	print "<h3>&nbsp;&nbsp;Редактирование местопребывания:</h3>";

	
	$qwerty = "select * from hotel where id = '$id'";
	$result = mysqli_query($db,$qwerty);
	$row = mysqli_fetch_row($result);


print '
	<form action = "scr_action.php?action=edit_hotel" method = "POST"">

<h4>&nbsp&nbsp;&nbsp;Название отеля:<br> &nbsp;&nbsp;&nbsp;<input type = "text" name = "hotel" size = 40 value = "'.$row[1].'"
></h4>

<h4>&nbsp&nbsp;&nbsp;Место расположения:<br>&nbsp;&nbsp;&nbsp;<textarea name = "region" cols = 60 rows = 10>'.$row[2].'</textarea><h4>

<input type = hidden name = id_hotel value = '.$row[0].'>

&nbsp;&nbsp;&nbsp;<input type = "submit" name = "ok" value = "Изменить">
</form>
';

}

if($type == 2) {

	print "<h3>&nbsp&nbsp;Редактирование путевки:</h3>";

$qwerty1 = "select * from ticket where id = '$id'";	
$result = mysqli_query($db,$qwerty1);
$row = mysqli_fetch_row($result);


print '
<form action = "scr_action.php?action=edit_ticket" method = "POST"">
<h4>&nbsp;&nbsp&nbsp;Отель: <br></h4>
<h4>
&nbsp;&nbsp&nbsp;<select name = "hotel">
<option value = "">Выбрать
<option value = "">--------------
</h4>';


$qwerty4 = "select * from hotel";
$result2 = mysqli_query($db,$qwerty4);
	while($hotel = mysqli_fetch_array($result2)) {
		if($row[6] == $hotel[0]) {
			print "<option value = $hotel[0] selected>$hotel[1]";
		}
		else {
			print "<option value = $hotel[0]>$hotel[1]";
		}
	}


print '
</select><br><br>
<h4>&nbsp;&nbsp&nbsp;Дата заселения: <input type = "date" name = "t_otpr" size = 15 value = "'.$row[1].'"> отбытие: <input type = "date" name = "t_prib" size = 15 value = "'.$row[2].'"><br><br>

&nbsp;&nbsp&nbsp;Пункт отправления: <input type = "text" name = "m_otpr" size = 20 value = "'.$row[3].'"> <br>&nbsp;Пункт прибытия: <input type = "text" name = "m_prib" size = 20 value = "'.$row[4].'"><br><br>
&nbsp;&nbsp&nbsp;№ путевки: <input type = "text" name = "number_ticket" size = 10 value = "'.$row[5].'"><br><br>

<input type = hidden name = id_ticket value = '.$row[0].'>

&nbsp;&nbsp&nbsp;<input type = "submit" name = "ok" value = "Изменить"></h4>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</form>
';

}

?>
</td>
</tr>
</table>
      
                    
								
			
				</div>
					
		
                </ul>
                <div class="cleaner h40"></div>
                
                    <div class="cleaner"></div>
                </div>
            </div>
            <div class="cleaner"></div>
        </div>
    </div>
   
    
    <div id="templatemo_footer_wrapper">
        <div id="templatemo_footer">
            Copyright © 2019 <a href="#">Анна Лоскутова & Маргарита Титова, ВГУ</a>
        </div>
    </div>
</div>
</body>
</html>