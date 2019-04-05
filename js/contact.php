<?php
session_start();
?>
<html>
<head>
<title>Туристическое агентство</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen">
	<meta name="description" content="Описание страницы" />
	<meta name="keywords" content="Ключевые слова" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-with-map.css">
	
<style>	

.header_img {height:400px;background-color:#fdccf89c;border-radius:0px 0px 8px 8px;margin-bottom:15px;}
.font { font-size:15px }
.table {opacity: 100}
</style>

	</head>

<body> 
	<div id="page">
	<header>
		<a align = "center" href="" title="" class="logo"><img src="images/logo3.png" alt="CSFTour" /></a>
		<nav>
			<ul id="top_menu">
			<li><a href="index.php?content=raspis">Туристические маршруты</a></li>
			<li><a href="index.php?content=photo">Фотогалерея</a></li>
			<li><a href="contact.php">Контакты</a></li>
			<li><a href="index.php?content=log"></a></li>
		    <li><a href="index.php?content=log"></a></li>
			<li><a href="index.php?content=log"></a></li>
			<li><a href="index.php?content=log">Админ панель</a></li>
			</ul>
		</nav>
		<div class="header_img">
		<br><br>
<center>
<table  width = "9" class = "font" >
<tr>
<td cellpadding = "7">
<p>
Адрес: г.Воронеж, Университетская пл. 1
</p>
<p>
E-mail:
<a href="mailto:anuta.csf@gmail.com">
anuta.csf@gamil.com
</a>
</p>
<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7e9d5abc8e010caefe2e7416b29e38a239418b123c79aea9df9f94cb498c95aa&amp;source=constructor" width="350" height="240" frameborder="0"></iframe>

</td>
<td cellpadding = "7">
 <br>
  
  <form action="send.php" method="post">

Ваше имя &nbsp;<input class="b2" type="text" name="first_name">
<br><br>
Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="b2" type="text" name="email" required placeholder="Обязательное поле" ><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Сообщение:<br><textarea  class="b2" rows="5" name="message" cols="20"></textarea><br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="b1" type="submit" name="submit" value="Отправить!">
<br>
</form>
</td>
<td>

</td>
</tr>
</table>
 
  
  </div>

		</div>
	</header>
</head>
<table align = center  width = 100%  valign = top>
<tr>


<td align = left valign = top>


</td>
</tr>
</table>

</div>
<footer id="myFooter">
     <div class="container">
            <div class="row">
                <div class="col-sm-3">
                 
                    <ul>
                  
                    </ul>
                </div>
               
                <div class="col-sm-3">
                    
                    <ul>
                  
                    </ul>
                </div>
            </div>
            <!-- Here we use the Google Embed API to show Google Maps. -->
            <!-- In order for this to work in your project you will need to generate a unique API key.  -->
         <b>
		 <table cellspacing="0" cellpadding="0">
		 <tr>
		 <td>

		 </td>
		 <td>
		  

		 </td>
	
		 </table>
           
        </div>
      
		
		<style>
details[open] div {
  animation: spoiler 1s;
}
@keyframes spoiler {
  0%   {opacity: 0;}
  100% {opacity: 1;}
}

 .b1 {
    background: navy; /* Синий цвет фона */ 
    color: white; /* Белые буквы */ 

   }
    .b2 {

    color: black; /* Белые буквы */ 

   }
</style>
<center>

		
        <div class="footer-copyright">
            <p> Анна Лоскутова & Маргарита Титова, ВГУ © 2019 Copyright </p>
        </div>
    </footer>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>