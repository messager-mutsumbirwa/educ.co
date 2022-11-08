<?php 
include '../controler/config.php';
include '../view/entete.php';
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:../login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:../login.php');
}

?>
 ?>
 <?php include 'index.php'  ?>