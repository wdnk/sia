<?php
// *** Logout the current user.
$logoutGoTo = "login.php";
if (!isset($_SESSION)) {
  session_start();
}

$_SESSION['MM_Username'] = NULL;
$_SESSION['MM_UserGroup'] = NULL;
unset($_SESSION['MM_Username']);
unset($_SESSION['MM_UserGroup']);
if ($logoutGoTo != "") {
header("Location: $logoutGoTo");
echo "<script language=\"javascript\" type=\"text/javascript\">
alert('Terima kasih $_SESSION[MM_Username], sampai jumpa')</script>";
exit;
}
?>