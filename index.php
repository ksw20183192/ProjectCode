<?php
$conn = mysqli_connect("localhost", "root", "jwpark", "log_db");

?>
<!DOCTYPE html>
<html>
<head>
      <title>로그인 서버</title>
<head>
<body>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
    다음 정보를 입력하시오<br/>
    <form method="POST" action="method.php" >
    <p>이름 : <input type = "text" name = "name" size = "5"></p>
    <p>전화번호 : <input type = "text" name = "phonenumber" size = "11"
                maxlength = "11"> </p>
  <p>나이 :  <input type = "text" name = "age" size = "3"></p>
  <p>성별 : <input type = "text" name = "gender" size = "3"></p>

  <button type = "submit"> 등록</button>
  <button type="button" onclick="location.href='change.html'">변경</button>
  <button type="button" onclick="location.href='delete.html'">삭제</button>

  </form>
</body>
</html>
