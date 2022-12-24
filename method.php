<?php
include "db.php";

$name = $_POST['name'];
$phonenumber = $_POST['phonenumber'];
$age = $_POST['age'];
$gender = $_POST['gender'];

$result = mysqli_query($conn,"INSERT INTO login
VALUES('".$name."', '".$phonenumber."', '".$age."', '".$gender."')");

if($result === false){
  echo 'ERROR';
  error_log(mysqli_error($conn));
} else{
echo '등록되었습니다. <a href="index.php">처음으로</a>';
}
?>
