<?php
require "../connect.php";
session_start();
 $id_user= $_SESSION['user_id'];
 $fname='';
 $phone="";
 $dep="";
 $Address="";
 $sql="SELECT * FROM info WHERE user_id=' $id_user'";
 $result=mysqli_query($con,$sql);
 while ($row=mysqli_fetch_array($result)) {
 	$fname=$row['full_name'];
 	$phone=$row['phone'];
 	$dep=$row['department'];
 	$Address=$row['address'];
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
				<span>Welcom <?php echo " ".$fname;?></span>
               
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
				<table class="table">
					<tr>
						<th>Full name </th>
						<td><?php echo $fname;?></td>
					</tr>
					<tr>
						<th>ID </th>
						<td><?php echo $id_user;?></td>
					</tr>
					<tr>
						<th>Phone</th>
						<td><?php echo $phone;?></td>
					</tr>
					<tr>
						<th>Department</th>
						<td><?php echo $dep;?></td>
					</tr>
					<tr>
						<th>Address</th>
						<td><?php echo $Address;?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</section>
<footer></footer>
</body>
</html>