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
	label{
		color: #106bb4;
		font-weight: bold;
		font-size: 13px;
	}
	span{
		font-size: 13px;
    	font-weight: bold;
	}
	.btn {
    border-radius: 25px;
    width: 130px;
    }
	.form-control{
		border: 1px solid #007bff;
		color: #060606;
	}
	.span-titel{
		color: #9A0E14;
    	font-size: 14px;
	}
</style>

</head>
	<?php
		include("ketnoi2.php");
		$thongbao ="";
		$roomid = "";
		$datestart = "";
		$daystart = "";
		$formlesson = "";
		$tolesson = "";
		$status = "";
		$fullname = "";
		$role = "";
		$address = "";
		$phone = "";
		$email = "";
		$dateregist = date("Y-m-d");
		$sqlUser = "select * from user where username='$user'";
		$resultUser = mysqli_query($link,$sqlUser);
		while($rs=mysqli_fetch_array($resultUser)){
			$fullname = $rs["fullname"];
			$role = $rs["role"];
			$address = $rs["address"];
			$phone = $rs["phone"];
			$email = $rs["email"];

		}
		if(isset($_POST["register"])){
		    $roomid = $_POST["roomid"];
		    $dateregist = $_POST["dateregist"];
		    $datestart = $_POST["datestart"];
		    $daystart = $_POST["daystart"];
		    $formlesson = $_POST["formlesson"];
		    $tolesson = $_POST["tolesson"];
		    $status = 'pending';
            $sql="select roomid, datestart, daystart from borrowroom where roomid='$roomid' and datestart='$datestart' and daystart='$daystart'";
            $result=mysqli_query($link,$sql);
            if(mysqli_num_rows($result)==1)
            {
                $sql1="SELECT roomid, datestart, daystart FROM borrowroom WHERE roomid='$roomid' and datestart='$datestart'and daystart='Sáng'";
                $sql2="SELECT roomid, datestart, daystart FROM borrowroom WHERE roomid='$roomid' and datestart='$datestart'and daystart='Chiều'";
                $result1=mysqli_query($link,$sql1);
                $result2=mysqli_query($link,$sql2);
                if(mysqli_num_rows($result1)==1 && (mysqli_num_rows($result2)==1))
                  {
                     $thongbao="Phòng đã được đăng ký, bạn vui lòng chọn phòng khác !";
                  }
                else if(mysqli_num_rows($result1)==1 && (mysqli_num_rows($result2)==0))
                    {
                      $thongbao="Buổi sáng đã được đăng ký, bạn có thể chọn vào buổi chiều hoặc chọn phòng khác !";  
                   }
               else if(mysqli_num_rows($result1)==0 && (mysqli_num_rows($result2)==1))
                   {
                      $thongbao="Buổi chiều đã được đăng ký, bạn có thể chọn vào buổi sáng hoặc chọn phòng khác !";  
                   }
                    
				
			
            }else{
				
			$sql="INSERT INTO borrowroom VALUE('$user', '$roomid', '$dateregist','$datestart', '$daystart', '$formlesson', '$tolesson', '$status')";
			mysqli_query($link,$sql);
			echo("<script > alert('Đăng ký phòng thành công!'); window.location='../index_user.php'; </script>");
			}
        }
         if((!isset($_POST["register"]))|| ($thongbao!="")){
	?>
	<!-- menu -->
		<?php 
			include "header_menu_user.php";
		?>
	<!-- end menu -->
		<!-- main content start--> 
<body class="cbp-spmenu-push">
	<div class="container">
			<div class="main-page">
				<div class="forms">
					<div class="row">
						<h3 class="title1" style="text-align: center;margin-top:10px;">Đăng ký phòng thực hành online</h3>
						<div class="form-three widget-shadow">
							
							<form class="form-horizontal" action="" method="post">
								<div class="form-group">
											<div  class="col-sm-2"></div>
											<div class=" col-sm-8">
													<span style="color:red"> <?php echo $thongbao; ?> </span>
														
											</div>	
										</div>
										<div class="form-group">
											<label class=" col-sm-2  label-align control-label">Họ Tên :</label>
												<span  class="col-form-label col-lg-3 col-md-3 col-sm-3">
													<?php echo $fullname; ?> 
												</span>
											<label class=" col-sm-2 label-align control-label">Chức vụ : </label>
												<span  class="col-form-label col-lg-2 col-md-3 col-sm-3">
													<?php echo $role ?>
												</span>
										</div>
										<div class="form-group">
											<label class=" col-sm-2  label-align control-label">Địa chỉ :</label>
												<span  class=" col-sm-3">
													<?php echo $address; ?>
												</span>
											<label class=" col-sm-2 label-align control-label">Số điện thoại :</label>
												<span  class=" col-sm-3">
													<?php echo $phone; ?>
												</span>
										</div>
										<div class="form-group">
											<label class=" col-sm-2  label-align control-label">Ngày đăng ký :</label>
												<input type="hidden" class="form-control" name="dateregist" id="dateRegist" value="<?php echo $dateregist; ?>" >
												<span  class="col-sm-3" >
													<?php echo $dateregist; ?>
												</span>
											
										</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Chọn phòng: </label>
									<div class="col-sm-8">
										<select name="roomid" id="selector1" class="form-control" required="required">
										<option value="">Chọn phòng đăng ký </option>
										<?php 
											$sqlRoom = "select * from room where function = 'Phòng thực hành'";
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
									<label for="selector1" class="col-sm-2 control-label">Buổi: </label>
									<div class="col-sm-8">
										<select name="daystart" id="selector1" class="form-control" required="required">
										<option value="">Chọn buổi</option>
										<option value="Sáng">Sáng </option>
										<option value="Chiều">Chiều</option>
									</select></div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Ngày thực hành: </label>
									<div class="col-sm-8">
										<input required="required" type="date" class="form-control" id="datestart" name="datestart" value="<?php echo $datestart ?>" placeholder="nhập mã tài sản">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Từ tiết: </label>
									<div class="col-sm-8">
										<select name="formlesson" id="selector1" class="form-control" required="required">
										<option value="">Từ tiết </option>
										<option value="Tiết 1">Tiết 1 </option>
										<option value="Tiết 2">Tiết 2 </option>
										<option value="Tiết 3">Tiết 3</option>
										<option value="Tiết 4">Tiết 4</option>
										<option value="Tiết 5">Tiết 5</option>
									</select></div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Đến tiết: </label>
									<div class="col-sm-8">
										<select name="tolesson" id="selector1" class="form-control" required="required">
										<option value="">Đến tiết </option>
										<option value="Tiết 1">Tiết 1 </option>
										<option value="Tiết 2">Tiết 2 </option>
										<option value="Tiết 3">Tiết 3</option>
										<option value="Tiết 4">Tiết 4</option>
										<option value="Tiết 5">Tiết 5</option>
									</select></div>
								</div>
								<div class="form-group">
									<div class=" col-sm-6 offset-sm-2">
									</div>
									<div class="col-sm-1">
										<button  class="btn btn-primary" type="submit" value="register" name="register"> Đăng ký </button>
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
     <?php
}
?>
	<?php  include "../footer.php"; ?>
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
	<script type="text/javascript">
    	$("[name='roomid']").val("<?php echo $roomid ?>");
    	$("[name='daystart']").val("<?php echo $daystart ?>");
    	$("[name='tolesson']").val("<?php echo $tolesson ?>");
    	$("[name='formlesson']").val("<?php echo $formlesson ?>");
    </script>
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
