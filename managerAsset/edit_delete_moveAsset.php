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
	.Menubutton{
		margin-top: 6px;
	    background-color: #333;
	    color: #9d9d9d;
	    width: 150px;
	}
	.form-control1{
		border: 1px solid #007bff;
		color: #060606;
	}
</style>

</head>
	<?php
		include("ketnoi2.php");
	if($_GET["submit"] == "delete"){
		$assetid=$_GET["assetid"];
		$roomid = $_GET["roomid"];
		$sql="delete from asset where assetid ='$assetid' and roomid = '$roomid'";
		mysqli_query($link,$sql);
			echo("<script > alert('Xóa thông tin thành công!'); window.location='listAsset.php?roomid=$roomid';	</script>");
	}else if($_GET["submit"] == "edit"){
		if(isset($_POST["edit"])){
		    $assetid = $_POST["assetid"];
		    $assetname = $_POST["assetname"];
		    $configuration = $_POST["configuration"];
		    $roomid = $_POST["roomid"];
		    $status = $_POST["status"];
			$sql="update asset set assetname='$assetname', configuration='$configuration', status='$status' where assetid ='$assetid' and roomid = '$roomid'";
			mysqli_query($link,$sql);
			echo("<script > alert('Sửa thông tin thành công!');
				window.location='listAsset.php?roomid=$roomid';
				</script>");
	    }else{
			    $assetid=$_GET["assetid"];
				$roomid = $_GET["roomid"];
				$assetname= "";
		        $configuration = "";
		        $status = "";
				$sql = "select * from asset where assetid = '$assetid' and roomid = '$roomid'";
			    $result=mysqli_query($link,$sql);
		    if($rs=mysqli_fetch_array($result))
		    {
				$assetid = $rs["assetid"];
		        $assetname=$rs["assetname"];
		        $configuration = $rs["configuration"];
		        $roomid=$rs["roomid"];
		        $status=$rs["status"];
		         
		    }
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
						<h3 class="title1" style="text-align: center;">sửa tài sản </h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" action="" method="post" >
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Mã tài sản: </label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="assetid" disabled="disabled" value="<?php echo $assetid ?>">
										<input type="hidden" value="<?php echo $assetid ?>" name="assetid">
										<input type="hidden" value="<?php echo $roomid ?>" name="roomid">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Tên tài sản: </label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="assetname" value="<?php echo $assetname ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Cấu hình: </label>
									<div class="col-sm-8"><textarea name="configuration" id="txtarea1" cols="50" rows="4" class="form-control1" placeholder="nhập cấu hình "><?php echo $configuration ?></textarea></div>
								</div>
								
								<div class="form-group">
									<label for="smallinput" class="col-sm-2 control-label label-input-sm">Trạng thái</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1 input-sm" id="smallinput" name="status" value="<?php echo $status ?>">
									</div>
								</div>
								<div class="form-group">
									<div class=" col-sm-6 offset-sm-2">
									</div>
									<div class="col-sm-1">
										<button  class="btn btn-primary" type="submit" value="edit" name="edit"> Lưu thay đổi </button>
									</div>
								</div>
							</form>
<?php 
	}
		}
	else{
		if(isset($_POST["move"])){
		    $assetid = $_POST["assetid"];
		    $assetname = $_POST["assetname"];
		    $roomid = $_POST["roomid"];
		    $roomidMove = $_POST["roomidMove"];
			$sqlChk = "select * from asset where assetid = '$assetid' and roomid = '$roomidMove'";
			$resultChk = mysqli_query($link,$sqlChk);
			while($rs=mysqli_fetch_array($resultChk)){
			if($rs["assetid"] == $assetid && $rs["roomid"] == $roomidMove){
				echo("<script > alert('Tài sản $assetname đã có trong phòng $roomidMove! Vui lòng kiểm tra lại');
				window.location='listAsset.php?roomid=$roomid';
				</script>");
			}else{	
				$sql="update asset set roomid='$roomidMove' where assetid ='$assetid' and roomid = '$roomid'";
				mysqli_query($link,$sql);
				echo("<script > alert('Chuyển thông tin thành công!');
					window.location='listAsset.php?roomid=$roomid';
					</script>");
			}
		}
	    }else{
			    $assetid=$_GET["assetid"];
				$roomid = $_GET["roomid"];
				$assetname= "";
		        $configuration = "";
		        $status = "";
				$sql = "select * from asset where assetid = '$assetid' and roomid = '$roomid'";
			    $result=mysqli_query($link,$sql);
		    if($rs=mysqli_fetch_array($result))
		    {
				$assetid = $rs["assetid"];
		        $assetname=$rs["assetname"];
		        $configuration = $rs["configuration"];
		        $roomid=$rs["roomid"];
		        $status=$rs["status"];
		         
		    }
	?> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<!-- menu -->
		<?php 
			include "../header_admin.php";
			include "../menu_admin.php";
		?>
	<!-- end menu -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="row">
						<h3 class="title1" style="text-align: center;">Chuyển tài sản </h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" action="" method="post" >
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tên tài sản: </label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="assetid" disabled="disabled" value="<?php echo $assetname ?>">
										<input type="hidden" value="<?php echo $assetid ?>" name="assetid">
										<input type="hidden" value="<?php echo $assetname ?>" name="assetname">
										<input type="hidden" value="<?php echo $roomid ?>" name="roomid">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Chọn phòng chuyển đến</label>
									<div class="col-sm-8">
										<select name="roomidMove" id="selector1" class="form-control">
										<option>Chọn phòng chứa tài sản</option>
										<?php 
											$sqlRoom = "select * from room";
											$resutRoom =mysqli_query($link,$sqlRoom);
											while($rs=mysqli_fetch_array($resutRoom))
									    { 
										?>
										<option value="<?php echo $rs['roomid'] ?>"><?php echo $rs["roomname"] ?></option>
										<?php 
											}
										?>
									</select></div>
								</div>
								
								<div class="form-group">
									<div class=" col-sm-6 offset-sm-2">
									</div>
									<div class="col-sm-1">
										<button  class="btn btn-primary" type="submit" value="move" name="move"> Chuyển </button>
									</div>
								</div>
							</form>
<?php 
	}
		}
?>
						<div style="text-align: right;">
							<a onclick="history.go(-1);"><i>Quay lại </i></a>
						</div>
						</div>
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
	
</body>
</html>
<?php
}else{
  session_destroy();
  echo("<script > alert('Bạn không đủ quyền truy cập vào trang này!');
  window.location='../index.php';</script>");
}
?>
