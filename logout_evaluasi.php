<?php
// *** Logout the current user.
$logoutGoTo = "index.php?page=login_evaluasi";
if (!isset($_SESSION)) {
  session_start();
}

if ($logoutGoTo != "") {
	$_SESSION['eval_username'] = NULL;
	$_SESSION['eval_UserGroup'] = NULL;
	unset($_SESSION['MM_Username']);
	unset($_SESSION['MM_UserGroup']);
	header("Location: $logoutGoTo");
	echo "<script language=\"javascript\" type=\"text/javascript\">
		alert('Terima kasih $_SESSION[eval_Username], sampai jumpa')</script>";
	exit;
}

$_SESSION['eval_username'] = NULL;
$_SESSION['eval_UserGroup'] = NULL;
unset($_SESSION['MM_Username']);
unset($_SESSION['MM_UserGroup']);

?>