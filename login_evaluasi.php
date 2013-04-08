<?php require_once('conn/sia.php'); ?>
<?php
session_start();
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password=$_POST['password'];
  $Eval_fldUserAuthorization = "level";
  $Eval_redirectLoginSuccess = "index.php?page=evaluasi_satu";
  $Eval_redirectLoginFailed = "index.php?page=login_evaluasi";
  $Eval_redirecttoReferrer = false;
  
  mysql_select_db($database_akademik, $akademik);
  	
  $LoginEvaluasi__query=sprintf("SELECT `username`, `password`, `level`, `real` FROM `user` WHERE username='%s' AND password='%s'",
  get_magic_quotes_gpc() ? $loginUsername : addslashes($loginUsername), get_magic_quotes_gpc() ? $password : addslashes($password)); 
   
  $LoginEval = mysql_query($LoginEvaluasi__query, $akademik) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginEval);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysql_result($LoginEval,0,'level');
    
    $_SESSION['eval_username'] = $loginUsername;
    $_SESSION['eval_usergroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $Eval_redirectLoginSuccess = $_SESSION['PrevUrl'];	
	}
	  header("Location: index.php?page=evaluasi_satu");
	}else{
?>
<script language="JavaScript">
<!-- Begin
function popUp(pesan) {
window.location.href="index.php?page=login_evaluasi";
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
<table width="280" border="0" align="center">
    <tr>
      <? echo "$loginUsername"; ?>
      <? echo "$LoginRS" ?>
      <td width="90"><font class="isi" color="#000000"> <b>Username</b></font></td>
      <td width="10"  class="isi"> <center><b>:</b></center> </td>
      <td width="100"  class="isi"><center><input name="username" type="text" id="username" size="20" maxlength="20" onChange="loginUser(this)"/></center></td></tr>
    <tr>
      <td width="90"><font class="isi" color="#000000"> <b>Password</b></font></td>
      <td width="10" class="isi"> <center><b>:</b></center> </td>
      <td width="100" class="isi"><center><input name="password" type="password" id="password" size="20" maxlength="20" onChange="loginUser(this)"/></center></td>
      </tr>
    <tr>
      <td align="right" colspan="3"><input name="Submit" type="submit" value="Login" onChange="dataLogin" /></td></tr>
    </table>
</form>
</body>
</html>
