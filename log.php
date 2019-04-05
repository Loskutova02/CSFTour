<?php
session_start();
?>
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
                    <li><a href="index.php" class="selected">Главная</a></li>
                    <li><a href="about.php">О нас</a></li>
                    <li><a href="raspis.php">Туры</a></li>
                    <li><a href="hotel.php">Отели</a></li>
                    <li><a href="contact.php">Контакты</a></li>
			
                </ul>
                <br style="clear: left" />
            </div> <!-- end of templatemo_menu -->
        </div>
        <div id="templatemo_slider">
           <div id="slider-wrapper">
                <div id="slider" class="nivoSlider">
                    <img src="images/slider/01.jpg" alt="Slider 01"  />
                   <img src="images/slider/02.jpg" alt="Slider 02"/></a>
                   <img src="images/slider/03.jpg" alt="Slider 03" />
                    <img src="images/slider/04.jpg" alt="Slider 04"/>
                    <img src="images/slider/05.jpg" alt="Slider 05"/>
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
        <div id="templatemo_main">
            <div class="col col23">
                <h2>Добро пожаловать на CSFTour</h2>
				<br><br>
<?php
	
	if(isset($_SESSION["session_username"])){
	// вывод "Session is set"; // в целях проверки
	header("Location: adminpanel.php");
	}

	if(isset($_POST["login"])){

	if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$username=htmlspecialchars($_POST['username']);
	$password=htmlspecialchars($_POST['password']);
	$db= mysqli_connect("localhost","titova", "NewPass18","titova");
	$query ="SELECT * FROM user WHERE username='".$username."' AND password='".$password."'";
	$result = mysqli_query($db,$query);
	$numrows=mysqli_num_rows($result);
	if($numrows!=0)
 {
while($row=mysqli_fetch_assoc($result))
 {
	$dbusername=$row['username'];
  $dbpassword=$row['password'];
 }
  if($username == $dbusername && $password == $dbpassword)
 {
	// старое место расположения
	//  session_start();
	 $_SESSION['session_username']=$username;	 
 /* Перенаправление браузера */
   header("Location: adminpanel.php");
	}
	} else {
	//  $message = "Invalid username or password!";
	
	echo  "Invalid username or password!";
 }
	} else {
    $message = "All fields are required!";
	}
	}
	?>
<center>
<div id="login">
<h1>Вход</h1>
<form action="" id="loginform" method="post"name="loginform">
<p><h3><label for="user_login">Имя пользователя<br></h3>
<input class="input" id="username" name="username"size="20"
type="text" value=""></label></p>
<p><h3><label for="user_pass">Пароль<br></h3>
 <input class="input" id="password" name="password"size="20"
  type="password" value=""></label></p> 
	<p class="submit"><input class="button" name="login"type= "submit" value="Log In"></p>

   </form>
 </div>            
            </div>
            <div class="col col13 no_margin_right">
                <h2>Сервисы</h2>
                <ul class="tmo_ul_list">
              
                    <li><a href="http://www.cs.vsu.ru">Сайт ФКН</a></li>
                    <li><a href="http://www.gooogle.com">Поиск Google</a></li>
                    <li><a href="http://www.yandex.ru">Поиск Яндекс</a></li>
                    <li><a href="http://www.vsu.ru">Сайт ВГУ</a></li>
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

