<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Контакты</title>
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
                    <li><a href="raspis.php">Туры</a></li>
                    <li><a href="contact.php" class="selected">Контакты</a></li>
                </ul>
                <br style="clear: left" />
            </div> <!-- end of templatemo_menu -->
        </div>
        
        <div id="templatemo_main">
            <h2>Связь с нами!</h2>
            <div class="col col23">
            	<h5>Оставьте свое сообщение прямо сейчас!</h5>
                 <div id="contact_form">
                       <form method="post" name="contact" action="send.php">
                            <p>
                                <label for="first_name">Имя:</label> 
                                <input type="text" id="first_name" name="first_name" class="required input_field" />
                            </p>
                            <p>
                                <label for="email">Email:</label> 
                                <input type="text" id="email" name="email" class="validate-email required input_field" />
                            </p>
                           
                            <div class="cleaner h20"></div>
            
                            <label for="text">Сообщение:</label> 
                            <textarea id="text" name="message" rows="0" cols="0" class="required"></textarea>
                            <div class="cleaner h20"></div>
							
                            <input type="submit" value="Отправить" id="submit" name="submit" class="submit_btn float_l" />
                            <input type="reset" value="Сбросить" id="reset" name="reset" class="submit_btn float_r" />
                      </form>
                 </div>
            </div>
            
            <div class="col col13 no_margin_right">
            	<h4>Контактные данные</h4>
                <h6><strong>CSF Tour</strong></h6>
                  г.Воронеж,<br />
                    Университетская площадь 1<br />
				<strong>Email:</strong> <a href="mailto:anuta.csf@gmail.com<">anuta.csf@gmail.com</a>  <br />
                <strong>Email:</strong> <a href="mailto:titova_rit@mail.ru<">titova_rit@mail.ru</a>  <br />
                <div class="cleaner h40"></div>
                
                <div class="img_border">
<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A481adbed3195bc04d1ce2ee7fc1767b16fd24912a7703ab115d742b7f2ac5c7c&amp;source=constructor" width="270" height="270" frameborder="0"></iframe>
            	</div>
                <br>  <br>  <br>  <br>  <br>  <br> 
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