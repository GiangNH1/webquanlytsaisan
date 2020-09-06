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
		$sql = "select * from user where username='$user'";
		$resut =mysqli_query($link,$sql);
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
					<h2 class="title1">Trang thông tin cá nhân</h2>
					<div class="bs-example widget-shadow" data-example-id="bordered-table">
						<table class="table table-bordered"> 
							
							<tbody> 
								<?php
								    while($rs=mysqli_fetch_array($resut))
								    {
							    ?>
								<tr> 
									 
									<td ><b style="color: blue;">Họ và tên: </b><?php echo $rs["fullname"]?></td> 
									<td> <b style="color: blue;">Địa chỉ: </b><?php echo $rs["address"]?></td> 
								</tr>
                                <tr> 
									
									<td><b style="color: blue;">Số điện thoại: </b><?php echo $rs["phone"]?></td> 
									<td><b style="color: blue;">Email: </b><?php echo $rs["email"]?></td> 
								</tr>
       	                        <tr> 
									
									<td><b style="color: blue;">Tên đăng nhập:</b> <?php echo $rs["username"]?></td> 
									<td><b style="color: blue;">Chức vụ:</b> <?php echo $rs["role"]?></td> 
								</tr>
                                
								<?php 
									}
								?> 
								
							</tbody>
                            <tr>
                            <td align="center"colspan="2">
                            <button type='submit' style="color: white;background: red" class="btn btn-success edit">
                        <a href="editPersonal_user.php" style="color: white;background: red"><span  style="color: white;"class="glyphicon glyphicon-edit"></span>Chỉnh sửa</a></button>
                        <button type='submit' class="btn btn-success edit" style="background: #009500; color: white;">
                        <a href="changePassword_user.php" style="color: white;"> <span  style="color: white;"class="glyphicon glyphicon-refresh"></span> Đổi mật khẩu</a></button>
                            </td>
                            </tr>	
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--footer-->
	<?php include "footer.php"; ?>
    <!--//footer-->
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
