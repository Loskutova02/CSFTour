<?php
	$action =$_GET["action"];
	$db= mysqli_connect("localhost","titova", "NewPass18","titova");
if($action == "add_ticket") {
	$id = $_POST["id"];
	$ticket = $_POST["ticket"];

	if (!empty($id)&&!empty($ticket))
	{
	$qwerty1 = "UPDATE transport SET id_ticket = '$ticket' WHERE id = '$id' LIMIT 1";
	$result = mysqli_query($db,$qwerty1);
}
else {  die("Будьте внимательнее! Пустая строка");}
	Header("Location: adminpanel.php?content=transport");
	exit();

}

if($action == "clear_ticket") {
	$id = $_POST["id"];
if (!empty($id))
{
    $qwerty1 = "UPDATE transport SET id_ticket = '0' WHERE id = '$id' LIMIT 1";
	$result = mysqli_query($db,$qwerty1);
}
else {  die("Будьте внимательнее! Пустая строка");}
	Header("Location: adminpanel.php?content=transport");
	exit();

}


if($action == "new_ticket") {
	$t_otpr = $_POST["t_otpr"];
	$t_prib = $_POST["t_prib"];
	$m_otpr = $_POST["m_otpr"];
	$m_prib = $_POST["m_prib"];
	$number_ticket = $_POST["number_ticket"];
	$id_hotel = $_POST["hotel"];
if (!empty($t_otpr)&&!empty($t_prib)&&!empty($m_otpr)&&!empty($m_prib)&&!empty($number_ticket)&&!empty($id_hotel))
{

    $qwerty2 = "INSERT INTO ticket ( id, t_otpr, t_prib, m_otpr, m_prib, number_ticket, id_hotel ) VALUES ( '', '$t_otpr', '$t_prib', '$m_otpr', '$m_prib', '$number_ticket', $id_hotel)";
	mysqli_query($db,$qwerty2);
}
else {  die("Будьте внимательнее! Пустая строка");}	
	Header("Location: adminpanel.php?content=info");
	exit();
}

if($action == "edit_ticket") {
	$hotel = $_POST["hotel"];
	$t_otpr = $_POST["t_otpr"];
	$t_prib = $_POST["t_prib"];
	$m_otpr = $_POST["m_otpr"];
	$m_prib = $_POST["m_prib"];
	$number_ticket = $_POST["number_ticket"];
	$id = $_POST["id_ticket"];
if (!empty($hotel)&&!empty($t_otpr)&&!empty($t_prib)&&!empty($m_otpr)&&!empty($m_prib)&&!empty($number_ticket)&&!empty($id))
{

    $qwerty3 = "UPDATE ticket SET t_otpr = '$t_otpr', t_prib = '$t_prib',   m_otpr = '$m_otpr',  m_prib = '$m_prib',   number_ticket = '$number_ticket', id_hotel = '$hotel' WHERE id = '$id' LIMIT 1";
	$result = mysqli_query($db,$qwerty3);
}
else {  die("Будьте внимательнее! Пустая строка");}	
	Header("Location: adminpanel.php?content=info");
	exit();
}

if($action == "del_ticket") {
	$id = $_GET["id"];
	if (!empty($id))
{
    $qwerty4 = "DELETE FROM ticket WHERE id = $id ";
	mysqli_query($db,$qwerty4);
}
else {  die("Будьте внимательнее! Пустая строка");}	
	Header("Location: adminpanel.php?content=info");
	exit();
}

if($action == "edit_hotel") {
	$hotel = $_POST["hotel"];
	$region = $_POST["region"];
	$id = $_POST["id_hotel"];
if (!empty($hotel)&&!empty($region)&&!empty($id))
{
    $qwerty = "UPDATE hotel SET name = '$hotel',	region = '$region'  WHERE id = '$id' LIMIT 1";
	$result = mysqli_query($db,$qwerty);
}
else {  die("Будьте внимательнее! Пустая строка");}	
	Header("Location: adminpanel.php?content=info");
	exit();
}

if($action == "new_hotel") {
	$name = $_POST["name"];
	$region = $_POST["region"];
	if (!empty($name)&&!empty($region))
	{
	
	$qwerty = "INSERT INTO hotel ( id, name, region ) VALUES ( '', '$name', '$region' )";
	mysqli_query($db,$qwerty);
}
else {  die("Будьте внимательнее! Пустая строка");}
	Header("Location: adminpanel.php?content=info");
	exit();
}

if($action == "del_hotel") {
	$id = $_GET["id"];
	if (!empty($id))
{
    $qwerty = "DELETE FROM hotel WHERE id = $id ";
	mysqli_query($db,$qwerty);
}
else {  die("Будьте внимательнее! Пустая строка");}
	Header("Location: adminpanel.php?content=info");
	exit();
}

if($action == "new_ticket1") {
	$type = $_POST["type"];
	$number = $_POST["number"];
	$name = $_POST["name"];
	$surname = $_POST["surname"];
if (!empty($type)&&!empty($number)&&!empty($name)&&!empty($surname))
{
    $qwerty6 = "INSERT INTO transport ( id, number, type, name, surname, id_ticket ) VALUES ( '', '$number', '$type', '$name','$surname', 0 )";
	mysqli_query($db,$qwerty6);
}
else {  die("Будьте внимательнее! Пустая строка");}
	Header("Location: adminpanel.php?content=transport");
	exit();
}
unset($action);
?>
