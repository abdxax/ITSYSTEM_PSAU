<?php

$con=mysqli_connect("localhost","root","","it_system_demo")or die ("Error");


$sql="SELECT * FROM user";

$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res)){
    echo $row['user_id'];
}

?>