<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>회원가입 id 중복확인</title>
  </head>
  <body style="background-color: #0080FF">
    <h1>회원가입 페이지</h1>
    <FORM>
      <p>아이디 : <input type="text" name="id"></p>
      <?php
      $con=mysqli_connect("localhost","root","비밀번호","mydb") or die("mysql connect error");
      $query="select * from member where id ='$id';";
      $result = mysqli_query($con,$query) or die("query error");
      $count = mysqli_num_rows($result);

      if($count==1){
        echo "이미 사용 중인 아이디입니다. 새로운 아이디를 입력해주세요.";
      }
      else
      echo "사용 가능한 아이디입니다.";
       ?>

      <p>비밀번호 : <input type="password" name="pwd"></p>
      <p>이름 : <input type="text" name="name"></p>
      <p>Email : <input type="text" name="email"></p>

      <p><button type="submit">가입하기</button></p>
      <?php
      $sql= mysqli_query($con,"INSERT INTO member values('$id','$pwd','$name','$email')");
      if (!mysqli_query($con,$sql)){
        echo "회원가입 정보 저장을 실패했습니다.";
      }
      else{
        echo "회원가입 정보 저장에 성공했습니다.";
        echo "<script>location.href='login.php';</script>";
      }
      mysqli_close($con);
       ?>
    </FORM>

  </body>
</html>
