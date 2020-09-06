<?php
session_start();
?>
<?php
$user = $_SESSION['username'];
$role = $_SESSION['role'];
if ($role == 'user') {
?>
<!DOCTYPE HTML>
<html>
<head>
<title>WebAssetManager</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style type="text/css">
	.navbar{
		margin-bottom:0px;
	}
	.MenuTSX ul li{display:inline-block;width:150px;height:45px;text-align: center;position:relative; text-decoration: none;}

	.MenuTSX ul li a{display:block;color: black;text-decoration: none; font-weight: bold;}

	    
	.MenuTSX ul li a:hover{background-color:#00F;color: white;height:auto; width:auto }
	.form-control1{
		border: 1px solid #007bff;
		color: #060606;
	}
	.form-control{
		border: 1px solid #007bff;
		color: #060606;
	}
	#page-wrapper {
    padding: 1em 1em 1em;
    background-color: #F1F1F1;
	}
	.cbp-spmenu-push div#page-wrapper {
    margin: 0 0 0 0;
    transition: .5s all;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
}
</style>

</head>
<?php
	include("ketnoi2.php");
  if(isset($_POST["luu"])){
    
    $fullname=$_POST["txtfullname"];
   
    $address=$_POST["txtaddress"];
    $phone=$_POST["txtphone"];
    $email=$_POST["txtemail"];
    
	 
 $sql="update user set fullname ='$fullname',address='$address',phone='$phone',email='$email' where username='$user'";
  mysqli_query($link,$sql);
  echo("<script > alert('Sửa thông tin thành công!');
window.location='personalPage_user.php';
</script>");
    }else
    {
    $user = $_SESSION['username'];
    $fullname="";
    $address="";
    $phone="";
    $email="";
    
    
	
    $sql="select * from user where username='$user'";
    $result=mysqli_query($link,$sql);
    if($rs=mysqli_fetch_array($result))
    {
		$username = $rs["username"];
         $fullname=$rs["fullname"];
         $role=$rs["role"];
         $address=$rs["address"];
          $phone=$rs["phone"];
         $email=$rs["email"];
         
    }
?>
<body class="cbp-spmenu-push">
	<!-- menu -->
	<?php
		include "header_menu_user.php";
	?>
	<!-- end menu -->
		<!-- main content start-->
	<div class="container">
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1" style="text-align: center;">Chỉnh sửa trang cá nhân</h2>
					<div class="bs-example widget-shadow" data-example-id="bordered-table">
					<form action="" id="form0" method="post" name="regForm">
					  <div class="form-group row">
					    <label for="inputPassword" class="col-sm-2 col-form-label">Username:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputPassword" name="txtusername" disabled="true" value="<?php echo $username?>"/>
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="inputPassword" class="col-sm-2 col-form-label">Họ tên:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputPassword" name="txtfullname"  value="<?php echo $fullname?>"/>
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="inputPassword" class="col-sm-2 col-form-label">Chức vụ:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputPassword" disabled="true"name="txtrole" value="<?php echo $role?>"/>
					    </div>
					  </div>
					 
					  <div class="form-group row">
					    <label for="inputPassword" class="col-sm-2 col-form-label">Địa chỉ:</label>
					    <div class="col-sm-10">
					      <input type="texy" class="form-control" id="inputPassword"name="txtaddress" value="<?php echo $address?>" />
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="inputPassword" class="col-sm-2 col-form-label">Số điện thoại:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputPassword" name="txtphone" value="<?php echo $phone?>"/>
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="inputPassword" class="col-sm-2 col-form-label">Email:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputPassword"  name="txtemail" value="<?php echo $email?>"/>
					    </div>
					  </div>
					   <div class="form-group row" align="center">
					    
					    <button style="background: #0080FF;color: white; text-align: center;" type='submit' class="btn btn-success edit" name="luu">
					                        Lưu</button>
					                         <button style="background: red;color: white; text-align: center;" type='submit' class="btn btn-success edit">
					                        <a href="personalPage.php" style="color: white;">Hủy Bỏ</a></button>
					  </div>
					</form>
						
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
   <!-- <footer> -->
	<?php include "footer.php"; ?>
   <!-- </footer> -->
   </body>
</html>
<?php
}
?>
	
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
	
</body>
</html>
<?php
}else{
  session_destroy();
  echo("<script > alert('Bạn không đủ quyền truy cập vào trang này!');
  window.location='index.php';</script>");
}
?>
