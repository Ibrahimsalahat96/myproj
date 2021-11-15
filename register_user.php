<?php 
require_once 'data.php';

if(isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['gender'])){
	$emaill=$_POST['email'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$query="INSERT INTO user_register (Firstname,Lastname,gender,Email,password) VALUES ('$firstname','$lastname','gender','$emaill','$password')";
$res=mysqli_query($con,$query);



	echo "<script>
alert('You Are welcome,thank you for registeration');
window.location.href='User_form.php';
</script>";
	
}else{echo "<script>
alert('Wrong username OR password ');
window.location.href='register.php';
</script>";
}


 ?>