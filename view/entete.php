<?php
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styleent.css">

	 <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"> 
  <title>Titre</title> 
  <style type="text/css" media="all"> 
  html, body { 
    margin: 0; 
    padding : 0; 
    } 
  
  </style>
	<title>connexion </title>
</head>
<body>
<div class="menu">
	<div class="log"><img src="log.jpeg"></div>
	<div class="options">
	<ul >
	
		<li>
			<a href="dashboard.php?ID={$row['user_id']}">Dashboard</a>
		</li>
		<li>
			<a href="#">Mycourses</a>
		</li>
		<li>
			<a href="#">Reports & Analytics</a>
		</li>
		<li>
			<a href="#">Support</a>
		</li>
		<li>
			<a href="#">Announcements</a>
		</li>
		<li>
			<a href="#">Training
		</a>
	</li>
</ul>
</div>
<div class="fil">
	<a href="../view/home.php">
	<?php
	include '../controler/config.php';
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
  </a>
</div>
	<div class="closh"  href="../educ.com/view/home.php"><img src="bell.gif"><a href="../educ.com/view/home.php"></a></div>
</div>
</div>
</body>
</html>