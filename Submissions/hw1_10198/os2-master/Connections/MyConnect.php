<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_MyConnect = "localhost";
$database_MyConnect = "os2_store";
$username_MyConnect = "root";
$password_MyConnect = "";
$MyConnect = mysql_pconnect($hostname_MyConnect, $username_MyConnect, $password_MyConnect) or trigger_error(mysql_error(),E_USER_ERROR); 
?>