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
<link href="../css/custom.css" rel="stylesheet">
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
</style>

</head>
	<?php
		include("ketnoi2.php");
		$assetid = "";
		$assetname = "";
		$roomid = $_GET["roomid"]; 
		$configuration = "";
		$status = "";
        $thongbao = "";
		if(isset($_POST["create"])){
		    $assetid = $_POST["assetid"];
		    $assetname = $_POST["assetname"];
		    $configuration = $_POST["configuration"];
		    $status = $_POST["status"];
            $sql="select assetid from asset where assetid='$assetid' ";
            $result=mysqli_query($link,$sql);
            if(mysqli_num_rows($result)==1)
            {
               $thongbao="Mã tài sản đã tồn tại, bạn vui lòng nhập một mã khác !";
            }else{
					$sql="INSERT INTO asset VALUE('$assetid', '$assetname', '$configuration','$roomid','$status')";
					mysqli_query($link,$sql);
					echo("<script > alert('Thêm thông tin thành công!');
						window.location='listAsset.php?roomid=$roomid';
						</script>");
			
		}
        }
         if((!isset($_POST["create"]))|| ($thongbao!="")){
	?> 
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
				<div class="forms">
					<div class="row">
						<h3 class="title1" style="text-align: center;">Thêm tài sản </h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" action="" method="post">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"><b>Mã tài sản: </b></label>
									<div class="col-sm-8">
										<input type="text" required="required" class="form-control1" id="assetid" name="assetid" value="<?php echo $assetid ?>" placeholder="Nhập mã tài sản..."/>
										<span style="color: red;"><?php echo $thongbao; ?></span>
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label"><b>Tên tài sản: </b></label>
									<div class="col-sm-8">
										<input type="text" required="required" class="form-control1" id="assetname" name="assetname" value="<?php echo $assetname ?>" placeholder="Nhập tên tài sản..."/>
									</div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label"><b>Cấu hình: </b></label>
									<div class="col-sm-8">
										<textarea name="configuration" required="required" id="configuration" cols="50" rows="4" class="form-control1" placeholder="nhập cấu hình "><?php echo $configuration ?></textarea></div>
								</div>
								<div class="form-group">
									<label for="smallinput" class="col-sm-2 control-label label-input-sm"><b>Trạng thái</b></label>
									<div class="col-sm-8">
										<input type="text" class="form-control1 input-sm" id="status" name="status" value="<?php echo $status ?>" placeholder="Nhập trạng thái..."/>
									</div>
								</div>
								<div class="form-group">
									<div class=" col-sm-6 offset-sm-2">
									</div>
									<div class="col-sm-1">
										<button  class="btn btn-primary" type="submit" value="create" name="create"> Thêm </button>
									</div>
								</div>
							</form>
						
						<div style="text-align: right;">
							<a onclick="history.go(-1);"><i>Quay lại</i></a>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		<?php  include "footer_admin.php"; ?>
        <!--//footer-->
	</div>
    <?php
}
?>
	
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
	
</body>
</html>
<?php 
	
?>
<?php
}else{
  session_destroy();
  echo("<script > alert('Bạn không đủ quyền truy cập vào trang này!');
  window.location='../index.php';</script>");
}
?>
