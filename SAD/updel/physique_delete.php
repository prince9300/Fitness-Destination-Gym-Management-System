<?php
$Stu_id=$_GET['Stu_id'];
$con = mysqli_connect('localhost','root','','fdg_database');
$sql="DELETE FROM physique_information WHERE Stu_id=$Stu_id";
$result=mysqli_query($con, $sql);
header('Location:physique_information_view.php');

?>