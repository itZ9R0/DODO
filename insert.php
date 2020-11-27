<?php 
 $connect = mysqli_connect("127.0.0.1", "root", "", "dodo");                          
  $query = mysqli_query($connect, "SELECT * FROM products WHERE id = '{$_GET["id"]}'");  
 $stroka = $query->fetch_assoc();
  $ins = "INSERT INTO karzina (name, img, price) VALUES('". $stroka['name']."' , ' ".$stroka['img']."', ' ".$stroka['price']."' )";	
 mysqli_query($connect, $ins);
header("location:index.php");	
?>

