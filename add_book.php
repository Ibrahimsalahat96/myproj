<?php
require_once 'data.php';


//added all information in cookies



if( !empty($_POST['Bookname']) &&!empty($_POST['Authername'])&&!empty($_FILES['file']) &&!empty($_POST['category'])){


$target_dir = "assets/img/portfolio/products/";

	$file = $_FILES["file"]['name'];
	 $_FILES["file"]['size'];
	  $type=$_FILES['file']['type'];
	  $_FILES['file']['error'];

	  $photo = $_FILES["files"]['name'];
	 $_FILES["files"]['size'];
	  $_FILES['files']['type'];
	  $_FILES['files']['error'];


$exts = pathinfo($photo, PATHINFO_EXTENSION);
$alloweds = array('jpg','png','jpeg');
if( ! in_array( $exts, $alloweds ) )
 {echo "<script>
alert('Wrong.this is not image file  ');
window.location.href='admin.php';
</script>";
}


$ext = pathinfo($file, PATHINFO_EXTENSION);
$allowed = array('pdf');
 if( ! in_array( $ext, $allowed ) )
 {echo "<script>
alert('Wrong.this is not pdf file  ');
window.location.href='admin.php';
</script>";
exit();
}else{


$target_dirs = "assets/img/portfolio/products/";


  move_uploaded_file($_FILES["file"]['tmp_name'], "assets/img/portfolio/products/".$file);
  $name=$target_dir.$_FILES["file"]['name'];




  move_uploaded_file($_FILES["files"]['tmp_name'], "assets/img/portfolio/products/".$photo);
  $img=$target_dirs.$_FILES["files"]['name'];


$Book=$_POST['Bookname'];

$Auther=$_POST['Authername'];
$category=$_POST['category'];

$query="INSERT INTO product (name,auther,category,img,dowload) VALUES ('$Book','$Auther','$category','$img','$name')";
$res=mysqli_query($con,$query);

echo "<script>
alert('You Are add');
window.location.href='admin.php';
</script>";

}}else{
		echo "<script>
alert('Wrong.  ');
window.location.href='admin.php';
</script>";
}

	


	



 

?>