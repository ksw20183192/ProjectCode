<?php
include "db.php";

$name = $_POST['name'];
$find = mysqli_query($conn, "SELECT * FROM login WHERE name = '$name';");
$row = mysqli_fetch_assoc($find);



if($name != $row['name']){
echo '없는 이름입니다. <a href="index.php">처음으로</a>';
}
else{
$result = mysqli_query($conn,"DELETE FROM login WHERE name = '$name';") or die ("ERROR");

if($result === false){
    echo 'ERROR';
    error_log(mysqli_error($conn));
  } else{
      echo '삭제되었습니다. <a href="index.php">처음으로</a>';
  }
}
?>
