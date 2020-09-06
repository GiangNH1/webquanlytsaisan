
<?php
session_start();
?>
<?php
$user = $_SESSION['username'];
$role = $_SESSION['role'];
if ($role == 'admin') {
include("ketnoi2.php");
	$notificationid = $_GET["notificationid"];
	$sql="delete from notification where notificationid ='$notificationid'";
	mysqli_query($link,$sql);
	echo("<script > alert('Xóa thông tin thành công!'); window.location='listNotification.php';	</script>");
}else{
  session_destroy();
  echo("<script > alert('Bạn không đủ quyền truy cập vào trang này!');
  window.location='../index.php';</script>");
}
?>
