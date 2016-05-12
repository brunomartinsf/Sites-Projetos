<meta http-equiv="Content-Type" content="text/html,charset-utf-8">
<?php
$con = @mysql_connect("localhost","root","1234") or die("Não foi possível conectar com o servidor de dados!");
mysql_select_db("bancooficina",$con) or die("Banco de dados não localizado.");
?>