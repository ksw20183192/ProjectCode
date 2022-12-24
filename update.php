<?php
include "db.php";

if(mysqli_connect_errno()){
  echo "연결실패".mysqli_connect_errno();
}

$name = $_POST['name'];
$phonenumber = $_POST['phonenumber'];
$age = $_POST['age'];
$gender = $_POST['gender'];


$result = mysqli_query($conn, "UPDATE login SET phonenumber = $phonenumber,
                    age = $age, gender = '$gender' WHERE name = '$name';");
if($result === false){
  echo 'ERROR';
  error_log(mysqli_error($conn));
} else{
echo '변경되었습니다. <a href="index.php">처음으로</a>';
}

?>
