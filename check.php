<?php
session_start();

function login_func()
{
  if (($_POST['id']=='gigi') && ($_POST['pw']=='2020111330'))
  {
    Header('location: index.php');
  }

  else
  {
    echo "아이디/비밀번호 가 올바르지 않습니다. 로그인에 실패하였습니다.";
    header('location:login.php')
  }
}

echo login_func();

 ?>
