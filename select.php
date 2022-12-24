<?php
include "db.php";
  $name = $_POST[ 'name' ];
  $find = "SELECT * FROM login WHERE name = '$name';";
  $result = mysqli_query($conn, $find);
  $row = mysqli_fetch_array($result);

?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>정보변경</title>
  </head>
  <body>
    <form action="update.php" method="POST">
    <input type="hidden" name="name" value="<?php echo $row[ 'name' ]; ?>">

      <p>이름 : <input type = "text" name = "name" size = "5" value="<?php echo $row[ 'name' ]; ?>" required></p>
      <p>전화번호 : <input type = "text" name = "phonenumber" size = "11"
                    maxlength = "11" value="<?php echo $row[ 'phonenumber' ]; ?>" required></p>
      <p>나이 :  <input type = "text" name = "age" size = "3" value="<?php echo $row[ 'age' ]; ?>" required></p>
      <p>성별 : <input type = "text" name = "gender" size = "3" value="<?php echo $row[ 'gender' ]; ?>" required></p>

      <button onclick="history.back();">뒤로가기</button>
      <button type = "submit"> 변경</button>
    </form>
  </body>
</html>
