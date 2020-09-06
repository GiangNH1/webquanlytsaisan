
<?php
session_start();
?>
<?php
$user = $_SESSION['username'];
$role = $_SESSION['role'];
if ($role == 'admin') {
include("ketnoi2.php");
	$newsid = $_GET["newsid"];
	$sql="delete from news where newsid ='$newsid'";
	mysqli_query($link,$sql);
	echo("<script > alert('Xóa thông tin thành công!'); window.location='listNews.php';	</script>");
}else{
  session_destroy();
  echo("<script > alert('Bạn không đủ quyền truy cập vào trang này!');
  window.location='../index.php';</script>");
}
?>
