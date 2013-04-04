<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_akademik = "localhost";
$database_akademik = "akadft_akdemikft";
$username_akademik = "akadft";
$password_akademik = "teknik0417";
$akademik = mysql_pconnect($hostname_akademik, $username_akademik, $password_akademik) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db($database_akademik) or die("Database tidak bisa dibuka");;
?>