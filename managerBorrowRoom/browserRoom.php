<?php
session_start();
?>
<?php
$user = $_SESSION['username'];
$role = $_SESSION['role'];
if ($role == 'admin') {
	include("ketnoi2.php");
	$contents = "";
	$sendate = date("Y-m-d");
	$username = $_GET["username"];
	$roomid = $_GET["roomid"];
	$datestart = $_GET["datestart"];
	$daystart = $_GET["daystart"];
		$sqlNoti="INSERT INTO notification value('','$user','$username', 'Phòng thực hành bạn đăng ký đã được phê duyệt', '$sendate','đã gửi')";
		if(mysqli_query($link,$sqlNoti)){
		$sql="update borrowroom set status='was handled' where username ='$username' and roomid = '$roomid' and datestart ='$datestart' and daystart ='$daystart' ";
			mysqli_query($link,$sql);	
			echo("<script > alert('đã phê duyệt!');	window.location='listBorrowRoom.php';</script>");
		}
}else{
  session_destroy();
  echo("<script > alert('Bạn không đủ quyền truy cập vào trang này!');
  window.location='../index.php';</script>");
}
?>
