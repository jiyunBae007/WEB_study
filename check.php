<?php
session_start();

function login_func()
{
  if (($_POST['id']=='seyeon') && ($_POST['pw']=='1234'))
  {
    Header('location: index.php');
  }

  else
  {
    echo "로그인 정보가 일치하지 않습니다";
  }
}

echo login_func();

 ?>
