<?php
session_start();
?>
<?php
$user = $_SESSION['username'];
$role = $_SESSION['role'];
if ($role == 'admin') {
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
	
<body class="cbp-spmenu-push">
	<div class="main-content">
	<!-- menu -->
		<?php 
			include "header_admin.php";
			include "menu_admin.php";
		?>
		
	<!-- end menu -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1" style="text-align: center;">Danh sách đăng ký phòng thực hành</h2>
					<div class="bs-example widget-shadow" data-example-id="bordered-table">
						<table class="table table-bordered">
						<h3>Tuần 1 <img src="tuan.JPG" alt="" /></h3>
                        <p><i style="color: silver;">22/06/2020</i></p>	
                        <p><i style="">Từ ngày 22/06/2020 đến ngày 28/06/2020</p>
                        <a href="listBorrowRoom6.php?date=22/06/2020"><b>Xem chi tiết >></b></a>	 
						<hr /> 
						<h3>Tuần 2 <img src="tuan.JPG" alt="" /></h3>
                        <p><i style="color: silver;">29/06/2020</i></p>	
                        <p><i style="">Từ ngày 29/06/2020 đến ngày 05/07/2020</p>
                        <a href="listBorrowRoom6.php?date=29/06/2020"><b>Xem chi tiết >></b></a>	 
						<hr />	
						<h3>Tuần 3 <img src="tuan.JPG" alt="" /></h3>
                        <p><i style="color: silver;">06/07/2020</i></p>	
                        <p><i style="">Từ ngày 06/07/2020 đến ngày 12/07/2020</p>
                        <a href="listBorrowRoom6.php?date=06/07/2020"><b>Xem chi tiết >></b></a>
                       	<hr />
                           <h3>Tuần 4 <img src="tuan.JPG" alt="" /></h3>
                        <p><i style="color: silver;">13/07/2020</i></p>	
                        <p><i style="">Từ ngày 13/07/2020 đến ngày 19/07/2020</p>
                        <a href="listBorrowRoom6.php?date=13/07/2020"><b>Xem chi tiết >></b></a>
                       	
						</table>
					</div>
					
				</div>
			</div>
		</div>
		<!--footer-->
		<?php include "footer_admin.php"; ?>
        <!--//footer-->
	</div>
	
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
	function check(){
		if(document.getElementById('assetid').checked == false){
                    alert("Chon ít nhất 1 truòng");
                    return false;
                }
                else return true;
        
	}
	</script>
	
</body>
</html>
<?php
}else{
  session_destroy();
  echo("<script > alert('Bạn không đủ quyền truy cập vào trang này!');
  window.location='../index.php';</script>");
}
?>
