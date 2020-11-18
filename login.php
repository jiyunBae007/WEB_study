<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
    if (!isset($_SESSION['id']) || !isset($_SESSION['pw'])) {
    }
     ?>
     <form class="" action="index.html" method="post">
       <p>아이디: <input type="text" name="id" value="아이디"></p>
       <p>아이디: <input type="text" name="pw" value="비밀번호"></p>
       <p><input type="submit" value="로그인"></p>
       <a href="signup.php">회원가입</a>
     </form>
     <?php
     if (!isset($_SESSION[id]!=$id) || !isset($_SESSION[pw]!=$pw) {
       echo "로그인에 실패했습니다."
     }
      ?>
  </body>
</html>
