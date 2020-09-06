<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chào mừng bạn đến với trang quản lý tài sản khoa CNTT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />


<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
  <!-- requried-jsfiles-for owl -->
          <link href="css/owl.carousel.css" rel="stylesheet">
          <script src="js/owl.carousel.js"></script>
            <script>
              $(document).ready(function() {
                $("#owl-demo").owlCarousel({
                  items : 3,
                  lazyLoad : true,
                  autoPlay : true,
                  pagination : true,
                  nav:true,
                });
              });
            </script>
  <!-- //requried-jsfiles-for owl -->
</head>
<?php
include("ketnoi2.php");
session_start();
?>
<?php
    if(isset($_SESSION['username'])&& ($_SESSION['password'])){
        if($_SESSION['role']=='admin')
          {
            header("location:index_admin.php");
          }
        else
          {
            header("location:index_user.php");
          }
  }
?>
<?php
$ThongBao="";
if(isset($_POST['submit'])){
	
	$user=$_POST['txtUser'];
	$password=$_POST['txtPassword'];
	$sql="select * from user where username='$user' and password='$password'";
	$result = mysqli_query($link, $sql);
	if(mysqli_num_rows($result)==1)
	{
	   $_SESSION['username']=$user;
       $_SESSION['password']=$password;
       $rs=mysqli_fetch_array($result);
       $fullname=$rs['fullname'];
	     $role = $rs['role'];
       $_SESSION['fullname']= $fullname;
	     $_SESSION['role'] = $role;
     if($_SESSION['role']=='admin')
     {
        header("location:index_admin.php");
     }
     else
     {
		    header("location:index_user.php");
     }
	}
		else
		{
			$ThongBao= "Tên đăng nhập hoặc mật khẩu không đúng!";
		}
}
?>

<body>

<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="images/nen1.jpg" style="width: 100% " alt="" >
			</div><!--col-md-12-->
		</div><!--row-->
<div id="slides" class="carousel slide" data-ride="carousel" style="margin-top:20px;">
<?php
include("formLogin.php");
?>
</div>
<footer>
  <?php
include("footer.php");
?>
</footer>
</div>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
  <!-- //Bootstrap Core JavaScript -->
  
</body>
</html>

