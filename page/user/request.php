<?php
require "../connect.php";
session_start();
 $id_user= $_SESSION['user_id'];
  if (isset($_POST['sumb'])) {
  	$tit=$_POST['title'];
  	$detl=$_POST['deta'];
  	$sql_insert="INSERT INTO request (title,details,id_user) VALUES ('$tit','$detl','$id_user')";

  	if(mysqli_query($con,$sql_insert)){
  		header("location:index.php");
  	}
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
				<a href="logout.php">Logout</a>
               
			</div>
		</div>
	</div>
</header>
<section>
	<div class="container-fluid">
		<div class="row">
			<nav class="col-md-2 ">
				<ul class="nav nav-navbar flex-column">
					<li>LOGO</li>
					<li><a href="profile.php"><i class="glyphicon glyphicon-user"></i></a></li>
					<li><a href="request.php"><i class="fas fa-plus"></i></a></li>
				</ul>
			</nav>
			<div class="col-md-8">
				<div class="col-md-6 forms">
					<form method="POST">
					<input type="text" name="title" class="form-control">
					<textarea class="form-control" rows="5" name="deta"></textarea>
					<input type="submit" name="sumb" class="btn btn-info" value="send">
				</form>
				</div>
					
			</div>
		</div>
	</div>
</section>
<footer></footer>
</body>
</html>