<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Туры</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- templatemo 353 beauty class -->
<!-- 
Beauty Class Template 
http://www.templatemo.com/preview/templatemo_353_beauty_class 
-->
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

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
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="about.php">О нас</a></li>
                    <li><a href="raspis.php" class="selected">Туры</a></li>
                                        <li><a href="contact.php">Контакты</a></li>
                </ul>
                <br style="clear: left" />
            </div> <!-- end of templatemo_menu -->
        </div>
        
        <div id="templatemo_main">
            <?php
if(session_id() == '') { 
session_start(); 
}
?>
<table align = center  width = 100%  valign = top>

<tr>
<td width = 770 align = top><br>

<?php
$txt_search='';
$form='';
if (isset($_POST["txt_search"])) {
$txt_search=$_POST["txt_search"];
}
$db= mysqli_connect("localhost","titova", "NewPass18","titova");
echo "<form  method = \"POST\"> <h3>&nbspВведите строку для поиска:<br></h3><input type = text name = txt_search size = 60 placeholder=\"Введите строку\" required>&nbsp;<input type = submit name = ok value = Найти><br><br>	 </form>";
echo $txt_search;

if(!isset($txt_search) || $txt_search == "") {
	print $form;
}
else {

    $qwerty = "select * from ticket where (m_otpr LIKE '%$txt_search%') OR (m_prib LIKE '%$txt_search%') OR (number_ticket LIKE '%$txt_search%')";
	$result = mysqli_query($db,$qwerty);

	if(mysqli_num_rows($result) <= 0) {
		print "<u>По вашему запросу <b><font color = #ff0000>$txt_search</b></font> в разделе \"Туры\", ничего не найдено!</u><br><br>$form";
	}
	else {
	
	print "<u>По вашему запросу <b><font color = #ff0000>$txt_search</b></font> в разделе \"Туры\", найдено:</u><br><br>";

		while($row2 = mysqli_fetch_array($result)) {
			print "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$row2[5]." ::. <font color = #ff0000>".$row2[3]."-".$row2[4]."</font> .::</b>
 (<u>Дата заселения/отъезда:</u> $row2[1]/$row2[2])<br>";
		}

	}
}
?>
</td>
</tr>
<tr>
<td width = 770  align = top><br>
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

	print "<b> &nbsp  </b> <br>&nbsp$row[2]<br>&nbsp;&nbsp;- <u>Туры:</u><br>";

	$myq = "select * from ticket where id_hotel = '$row[0]'";
	$result2 = mysqli_query($db,$myq);

	if (mysqli_num_rows($result2) <= 0) { print "&nbsp;&nbsp;&nbsp;&nbsp;<font color = #ff0000>Нет туров в этом направлении...</font><br><br>"; }
	else {

		while($row2 = mysqli_fetch_array($result2)) {
			print "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$row2[5]." ::. <font color = #ff0000>".$row2[3]."-".$row2[4]."</font> .::</b> (<u>Дата отправления/прибытия:</u> $row2[1]/$row2[2])  <br>";
		}
	}
	print "<br>";
	$_SESSION['count']=1;
}
?>
</table>
        	
        </div>    
        <div class="cleaner"></div>
        <div class="pagging">
           
        </div> 
        <div class="cleaner h20"></div>
              
    </div>
   
    
    <div id="templatemo_footer_wrapper">
        <div id="templatemo_footer">
            Copyright © 2019 <a href="#">Анна Лоскутова & Маргарита Титова, ВГУ</a>
        </div>
    </div>
</div>
</body>
</html>