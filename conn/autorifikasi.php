<?
session_start(); 
if(!isset($_SESSION['eval_username'])){ 
	header("location:index.php?page=login_evaluasi");
}
?>