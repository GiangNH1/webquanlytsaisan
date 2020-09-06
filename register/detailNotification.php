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
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet"  type='text/css' href="../css/dataTables.bootstrap4.min.css" />

<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='../css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="../js/metisMenu.min.js"></script>
<script src="../js/custom.js"></script>
	<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
<link href="../css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style type="text/css">
	.navbar{
		margin-bottom:0px;
	}
	.MenuTSX ul li{display:inline-block;width:150px;height:45px;text-align: center;position:relative; text-decoration: none;}

	.MenuTSX ul li a button {display:block;color: black;text-decoration: none; font-weight: bold;}

	    
	.MenuTSX ul li a:hover{background-color:#00F;color: white;height:auto; width:auto }
	.Menubutton{
		margin-top: 6px;
	    background-color: #333;
	    color: #9d9d9d;
	    width: 150px;
	}
	.btn:hover {
	  color: white;
	}
</style>

</head>
	<?php
		include("ketnoi2.php");
		    $notificationid = $_GET["notificationid"];
			$sqlUpdate ="update notification set status='đã xem' where notificationid = '$notificationid'";
			mysqli_query($link,$sqlUpdate);
			$contents = "";
			$sender = "";
			$sql = "select * from notification n join user u on u.username = n.sender where notificationid = '$notificationid' ";
			$result=mysqli_query($link,$sql);
		    if($rs=mysqli_fetch_array($result))
		    {
				$notificationid = $rs["notificationid"];
		        $contents =$rs["contents"];
		        $sender = $rs["fullname"];
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
			<div class="main-page">
				<div class="tables">
					<h2 class="title1" style="text-align: center;">Chi tiết thông báo</h2>
					<div class="bs-example widget-shadow" data-example-id="bordered-table">

						<table class="table table-bordered" >
						<div style="text-align: center;">
							<h5>Người gửi: <?php echo $sender ?></h5> 
							<p>Nội dung: <?php echo $contents ?></p>
							<div style="text-align: ce;">
								<a onclick="history.go(-1);"><i>Quay lại</i></a>
							</div>
						</div>
						</table>
					</div>
					
				</div>
			</div>
	</div>
	<!--footer-->
	<?php include "../footer.php"; ?>
    <!--//footer-->
	<!-- side nav js -->
	<script src='../js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="../js/classie.js"></script>
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
	<script src="../js/jquery.nicescroll.js"></script>
	<script src="../js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
	<script src="../js/bootstrap.js"> </script>
	<script type="text/javascript" src="../js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" src="../js/dataTabel.js"></script>
	<script type="text/javascript">
</body>
</html>
<?php
}else{
  session_destroy();
  echo("<script > alert('Bạn không đủ quyền truy cập vào trang này!');
  window.location='../index.php';</script>");
}
?>
