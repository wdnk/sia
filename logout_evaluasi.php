<?php
// *** Logout the current user.
$logoutGoTo = "index.php?page=login_evaluasi";
if (!isset($_SESSION)) {
  session_start();
}

if ($logoutGoTo != "") {
	$_SESSION['username'] = NULL;
	unset($_SESSION['username']);
	header("Location: $logoutGoTo");
	echo "<script language=\"javascript\" type=\"text/javascript\">
		alert('Terima kasih $_SESSION[username], sampai jumpa')</script>";
	exit;
}

$_SESSION['username'] = NULL;
unset($_SESSION['username']);

?>