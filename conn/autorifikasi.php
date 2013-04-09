<?
if (!isset($_SESSION)) {
  session_start();
}

if(!isset($_SESSION['username'])){ 
  header("location:index.php?page=login_evaluasi");
}else{
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
}
?>