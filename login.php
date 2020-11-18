<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>로그인</title>
  </head>
  <body>
    <?php
    session_start();
    if ($_SESSION['id']==null) || !isset($_SESSION['pwd']==null) {
      echo ("아이디와 비밀번호를 입력하지 않았습니다.");
    }
     ?>
     <form name="login_form" action="login_check.php" method="post">
       <p>아이디: <input type="text" name="id" value="아이디"></p>
       <p>비밀번호: <input type="text" name="pw" value="비밀번호"></p>
       <p><input type="submit" name="login" value="login"></p>
     </form>
     <?php
     else{
   echo $_SESSION['name']."(".$_SESSION['id'].")님이 로그인 하였습니다.";
   echo "&nbsp;<a href='logout.php'><input type='button' value='Logout'></a>";
 }
      ?>
  </body>
</html>
