<?php 
require "../connect.php";
session_start();
$id_user= $_SESSION['user_id'];
$note="";
if (isset($_POST['sumb'])) {
	$id_request=$_POST['reqid'];
	$sql_req="SELECT * FROM request WHERE id_request='$id_request'";
    $resu=mysqli_query($con,$sql_req);
    if(mysqli_num_rows($resu)==1){
       $_SESSION['id_req']=$id_request;
       header("location:requestinfo.php");
    }
    else{
    	$note="NOT REQUEST HAS THIS NUMBER ";
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
				<a href="#">Logout</a>
               
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
					<li><a href="add.php"><i class="fas fa-plus"></i></a></li>
					<li><a href="requests.php"><i class="fas fa-folder-open"></i></a></li>
				</ul>
			</nav>
			<div class="col-md-8">
				<div class="col-md-6 forms">
					<form method="POST">
					<input type="number" name="reqid" class="form-control" placeholder="request id">
					
					<input type="submit" name="sumb" class="btn btn-info" value="serach">
				</form>
				<p><?php echo " ".$note; ?></p>
				</div>
					
			</div>
		</div>
	</div>
</section>
<footer></footer>
</body>
</html>