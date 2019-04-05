



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
                    <li><a href="adminpanel.php">Туры</a></li>
              	    <li><a href="adminpanel.php?content=add_ticket">Маршруты</a></li>
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
if (isset($_POST['txt_search'])) {
$txt_search=$_POST['txt_search'];
}
if (isset($_GET['content'])) {
$content=$_GET['content'];
}
	if(!isset($content)) { 
		$content = "info";
		include "info.php"; 

	}
	else {
		if($content == "info") include "info.php";
		if($content == "transport") include "transport.php";
		if($content == "add_hotel") include "add_hotel.php";
		if($content == "add_ticket") include "add_ticket.php";
		if($content == "edit") include "edit.php";
	
	}	
?>
</td>
</tr>
</table>
      
                    
								
			
				
					
		
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