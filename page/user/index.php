<?php
require "../connect.php";
session_start();
 $id_user= $_SESSION['user_id'];
 $fname='';
 $sql="SELECT * FROM info WHERE user_id=' $id_user'";
 $result=mysqli_query($con,$sql);
 while ($row=mysqli_fetch_array($result)) {
 	$fname=$row['full_name'];
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
				<span>Welcom<?php echo " ".$fname;?> </span>
               
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
				
					<div class="cent">
						<h3>Profile</h3>
					</div>
				<table class="table">
					<thead>
						<th>Title</th>
						<th>Details</th>
						<th>status</th>
					</thead>
					<tbody>
						<?php 
                          $sql_req="SELECT * FROM request WHERE id_user='$id_user'";
                           $result=mysqli_query($con,$sql_req);
                           while ($row=mysqli_fetch_array($result)) {
                             	echo '
                                  <tr>
                                    <td>'.$row['title'].'</td>
                                     <td>'.$row['details'].'</td>
                                  </tr>
                             	';
                              }
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<footer></footer>
</body>
</html>