<?php 
require "../connect.php";
session_start();
$id_user= $_SESSION['user_id'];
$id_req=$_SESSION['id_req'];

$sql="SELECT * FROM request WHERE id_request='$id_req'";
$res=mysqli_query($con,$sql);
$title="";
$deta="";
while ($row=mysqli_fetch_array($res)) {
	$title=$row['title'];
	$deta=$row['details'];
}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<span>Welcom </span>
               
			</div>
			<div class="col-md-6">
				<a href="#">Logout</a>
               
			</div>
		</div>
	</div>
</header>
<section>
	<div class="container-fluid">
		<div class="row">
			<h2><?php echo " ".$title;?></h2>
			<p><?php echo " ".$deta;?></p>

			<a href="index.php">Home page</a>
		</div>
	</div>
</section>
<footer></footer>
</body>
</html>