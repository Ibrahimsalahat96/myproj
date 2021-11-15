<?php
require_once 'data.php';


//added all information in cookies



if(isset($_POST['email'])&& isset($_POST['Password'])){
$emaill=$_POST['email'];
$passwordd=$_POST['Password'];
$query1="SELECT *  from user_register where Email = '$emaill' and password = '$passwordd'";
$res1=mysqli_query($con,$query1);
$cot1=mysqli_num_rows($res1);

if(($cot1 > 0)){

	echo "<script>
alert('You Are Welcome');

window.location.href='Shop.php';
</script>";
	
}else{echo "<script>
alert('Wrong username OR password ');
window.location.href='User_form.php';
</script>";
}
}else{
      echo "as";
}

	



 

?>