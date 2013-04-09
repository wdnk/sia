<?php

require_once('conn/sia.php');

if(!isset($_SESSION)){
  session_start();
}

$loginFormAction = "login_evaluasi.php";
if(isset($_POST['username'])){
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $query="SELECT username, password FROM user where username='$username' && password='$password'";
    $result=mysql_query($query); 
    //echo $query;
    //exit;  
    if(mysql_num_rows($result)>0) {  
             list ($username,$password) = mysql_fetch_row($result);  
              $_SESSION['username']=$username;
              $sql=mysql_query("select level from user where username='$_SESSION[username]'");
              $result=mysql_fetch_row($sql);
              $level=$result[0];
              if($level=="user"){
                header ("location:index.php?page=user");
              }elseif($level=="admin" ){
                  header ("location:index.php?page=admin");
              }else{
                  echo "evaluasi satu";
              }
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