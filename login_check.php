 <?php

session_start(); // 세션
$con=mysqli_connect("localhost","root","비밀번호","mydb") or die("mysql connect error");

$query = "select * from users where id='$id' and pw='$pw';";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

if($id==$row['id'] && $pw==$row['pw']){ // id와 pw가 맞다면 login

   $_SESSION['id']=$row['id'];
   $_SESSION['name']=$row['name'];

   echo "<script>location.href='login.php';</script>";

}else{ // id 또는 pw가 다르다면 login 폼으로

   echo ("아이디와 비밀번호 중 틀린 것이 있습니다.");
   echo "<script>location.href='login.php';</script>";

}
mysqli_close($con);
?>
