<?php
$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect=
mysql_connect('localhost','root','usbw');
$db= mysql_select_db('BD_empresa');
$query_select= "SELECT login FROM usuarios WHERE 
login = '$login'";
$select= mysql_query($query_select,$connect);
$array= mysql_fetch_array($select);
$logarray= $array ['login']; 
?>