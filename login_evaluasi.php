<?php require_once('conn/sia.php'); ?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['user_id'])) {
  $loginUsername=$_POST['user_id'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "level";
  $MM_redirectLoginSuccess = "index.php";
  $MM_redirectLoginFailed = "login.php";
  $MM_redirecttoReferrer = false;
  
  mysql_select_db($database_akademik, $akademik);
  	
  $LoginKM__query=sprintf("SELECT username, password, level, real FROM user WHERE username='%s' AND password='%s'",
  get_magic_quotes_gpc() ? $loginUsername : addslashes($loginUsername), get_magic_quotes_gpc() ? $password : addslashes($password)); 
   
  $LoginKM = mysql_query($LoginKM__query, $akademik) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginKM);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysql_result($LoginKM,0,'level');
    
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
	}
	header("Location: index.php");
	}else{
?>
<script language="JavaScript">
<!-- Begin
function popUp(pesan) {
window.location.href="login.php";
day = new Date();
id = day.getTime();
eval("alert(pesan, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=0,height=0,left = 0,top = 0');");
}
// End -->
	popUp('Input yang anda masukkan salah, silahkan ulangi lagi!');
	</script>
<?php
  }
}
?>

<form name="login" id="login" method="POST" action="<?php echo $loginFormAction; ?>" >
<table align="center" vspace="100" height="270" width="278">
<tr><td>
  <table width="278" border="0" align="center">
    <tr>
      <? echo "$loginUsername"; ?>
      <? echo "$LoginRS" ?>
      <td width="90"><font class="isi" color="#000000"> <b>User ID</b></font></td>
      <td width="10"  class="isi"> <center><b>:</b></center> </td>
      <td width="100"  class="isi"><center><input name="user_id" type="text" id="user_id" size="20" maxlength="20" onChange="loginUser(this)"/></center></td></tr>
    <tr>
      <td width="90"><font class="isi" color="#000000"> <b>Password</b></font></td>
      <td width="10" class="isi"> <center><b>:</b></center> </td>
      <td width="100" class="isi"><center><input name="password" type="password" id="password" size="20" maxlength="20" onChange="loginUser(this)"/></center></td>
      </tr>
    <tr><td colspan="3">&nbsp;</td></tr>
    <tr>
      <td align="center" colspan="3"><input name="Submit" type="submit" value="Login" onChange="dataLogin" /></td></tr>
    </table>
</td></tr>
</table>
</form>
</body>
</html>
