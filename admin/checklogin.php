<?php

include "connection.php";
if(isset($_POST['login'])){

	extract($_POST);
    $query   = "select * from user where `name` = '$name' and password ='$password'";
	$result  = mysqli_query($con,$query);
	$num_row = mysqli_num_rows($result);

	if($num_row > 0){
		$row    = mysqli_fetch_assoc($result);
		
	
		$id = $row['id'];
// 		$date = date("Y-m-d H:i:s");
// 		$ip   =  $ip =  $_SERVER['REMOTE_ADDR'];
// 		$query = "INSERT INTO `login_record(`user_id`,`ip`) VALUES ('$id2','$ip')";
// 		$result= mysqli_query($con,$query);
	    $_SESSION['user_admin']  = $row;
	    header("location:index.php");
		
	}else{
	header("location:login.php?msg=error");
	}
}elseif(isset($_GET['logout'])){

		session_destroy();
		header("location:login.php");
}elseif (isset($_POST['forget'])) {

    extract($_POST);



    echo $query ="SELECT * FROM `user` where email = '$email' ";

     $result     = mysqli_query($con,$query);

     $row = mysqli_fetch_assoc($result);

     $num = mysqli_num_rows($result);

     if($num > 0){

       

     include("phpmailer/forget-pass.php");

    header("location:/login.php?mail=sent"); 

     }else{

      header("location:/login.php?msg=error");

     }

        

}

?>