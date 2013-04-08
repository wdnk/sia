<?php
if (!isset($_SESSION)) {
  session_start();
}

if(!isset($_SESSION['eval_username'])){ 
  header("location:index.php?page=login_evaluasi");
}else{
  $sql=mysql_query("select level from user where user='$_SESSION[eval_username]'");
  $result=mysql_fetch_row($sql);
  $level=$result[0]['level'];
  if($level=="user"){
    header ("location:user.php");
  }elseif($level=="admin" ){
      header ("location:admin.php");
  }else{
      echo "evaluasi satu";
  }
}
?>