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
		$dateregist = date("Y-m-d");
		$sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart,br.daystart,br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE br.username = '$user'";
		$resut =mysqli_query($link,$sql);

		$date = $_GET['date'];
		$ngay = substr($date,0,2);
		$thang = substr($date,3,2);
		$nam = substr($date,6,10);
		$dateint = mktime(0, 0, 0, $thang, $ngay, $nam);
		$datesql =  date('Y-m-d', $dateint);
		$dateint1 = mktime(0, 0, 0, $thang, ($ngay + 1), $nam);
		$date1 =  date('d/m/Y', $dateint1);
		$datesql1 =  date('Y-m-d', $dateint1);
		$dateint2 = mktime(0, 0, 0, $thang, ($ngay + 2), $nam);
		$date2 =  date('d/m/Y', $dateint2);
		$datesql2 =  date('Y-m-d', $dateint2);
		$dateint3 = mktime(0, 0, 0, $thang, ($ngay + 3), $nam);
		$date3 =  date('d/m/Y', $dateint3);
		$datesql3 =  date('Y-m-d', $dateint3);
		$dateint4 = mktime(0, 0, 0, $thang, ($ngay + 4), $nam);
		$date4 =  date('d/m/Y', $dateint4);
		$datesql4 =  date('Y-m-d', $dateint4);
		$dateint5 = mktime(0, 0, 0, $thang, ($ngay + 5), $nam);
		$date5 =  date('d/m/Y', $dateint5);
		$datesql5 =  date('Y-m-d', $dateint5);
		$dateint6 = mktime(0, 0, 0, $thang, ($ngay + 6), $nam);
		$date6 =  date('d/m/Y', $dateint6);
		$datesql6 =  date('Y-m-d', $dateint6);
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
					<h2 class="title1" style="text-align: center;">Thời khóa biểu thực hành cho giảng viên</h2>
                    <p style="text-align: center;">Tuần 1: Từ ngày <?php echo $date ?> đến ngày <?php echo $date6 ?></p>
                    <p style="text-align: center;">KHOA CÔNG NGHỆ THÔNG TIN</p>
					<div class="bs-example widget-shadow" data-example-id="bordered-table">
						<table class="table table-bordered"> 
							<tdead>
								
								<tr> 
									<td rowspan="3" style="text-align: center;"><b>Phòng</b></td> 
									<td style="text-align: center;"><b>Thứ</b></td> 
									<td style="text-align: center;"><b>2</b></td>
									<td style="text-align: center;"><b>3</b></td>
									<td style="text-align: center;"><b>4</b></td>
									<td  style="text-align: center;"><b>5</b></td>
									<td  style="text-align: center;"><b>6</b></td>  
                                    <td  style="text-align: center;"><b>7</b></td>
									<td style="text-align: center;"><b>CN</b></td>  
								</tr> 
                                <tr> 
								
									<td style="text-align: center;"><b>Ngày</b></td> 
									<td ><b><?php echo $date; ?></b></td>
									<td ><b><?php echo $date1; ?></b></td>
									<td ><b><?php echo $date2; ?></b></td>
									<td ><b><?php echo $date3; ?></b></td>
									<td ><b><?php echo $date4; ?></b></td>  
                                    <td ><b><?php echo $date5; ?></b></td>
									<td ><b><?php echo $date6; ?></b></td> 
								</tr> 
                                <tr> 
								
									<td style="text-align: center;"><b>Buổi</b></td>
									<td><b>Người đăng ký</b></td>
									<td><b>Người đăng ký</b></td>
									<td><b>Người đăng ký</b></td>
									<td><b>Người đăng ký</b></td>
									<td><b>Người đăng ký</b></td>
									<td><b>Người đăng ký</b></td>
									<td><b>Người đăng ký</b></td> 
								</tr> 
							</tdead>
							<?php 
								$rommid = "";
								$sqlRoom = "select * from room where function = 'Phòng thực hành'";
								$resutRoom =mysqli_query($link,$sqlRoom);
								while($rs=mysqli_fetch_array($resutRoom))
									{ 
									    $roomid = $rs["roomid"];
							?>
							<tr>
									<td rowspan="3" style="text-align: center;"><b><?php echo $rs["roomname"] ?></b></td> 
									<td  style="text-align: center;"><b>Sáng</b></td> 
									 
									<td>
                                    	<?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql'and daystart=N'Sáng' and status=N'was handled' and r.roomid='$roomid'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                     	<hr />
                                    	(<?php echo $rs["formlesson"]; echo "-"; echo  $rs["tolesson"] ?>)
  										<?php 
											}
										?>
                                    </td>
                                    <td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql1'and daystart=N'Sáng' and status=N'was handled' and r.roomid='$roomid'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                     	<hr/>
                                     	(<?php echo $rs["formlesson"]; echo "-"; echo  $rs["tolesson"] ?>)
										<?php 
											}
										?>
                                    </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql2'and daystart=N'Sáng' and status=N'was handled' and r.roomid='$roomid'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                        (<?php echo $rs["formlesson"]; echo "-"; echo  $rs["tolesson"] ?>)
                                        <?php 
											}
										?>
                                         </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql3'and daystart=N'Sáng' and status=N'was handled' and r.roomid='$roomid'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
										<?php 
											}
										?>
                                         </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql4'and daystart=N'Sáng' and status=N'was handled' and r.roomid='$roomid'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                        (<?php echo $rs["formlesson"]; echo "-"; echo  $rs["tolesson"] ?>)
                                        <?php 
											}
										?>
                                        </td>  
                                    <td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql5'and daystart=N'Sáng' and status=N'was handled' and r.roomid='$roomid'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                         (<?php echo $rs["formlesson"]; echo "-"; echo  $rs["tolesson"] ?>)
                                         <?php 
											}
										?>
                                         </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql6'and daystart=N'Sáng' and status=N'was handled' and r.roomid='$roomid'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                        (<?php echo $rs["formlesson"]; echo "-"; echo  $rs["tolesson"] ?>)
                                        <?php 
											}
										?>
                                          </td>
									
								</tr>
                                <tr> 
									<td style="text-align: center;"><b>Chiều</b></td> 
									
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql'and daystart=N'Chiều' and status=N'was handled' and r.roomid='$roomid'";
	                                 	$resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                         (<?php echo $rs["formlesson"]; echo "-"; echo  $rs["tolesson"] ?>)
                                         <?php 
											}
										?>
                                         </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql1'and daystart=N'Chiều' and status=N'was handled' and r.roomid='$roomid'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                         (<?php echo $rs["formlesson"]; echo "-"; echo  $rs["tolesson"] ?>)
                                         <?php 
											}
										?>
                                         </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql2'and daystart=N'Chiều' and status=N'was handled' and r.roomid='$roomid'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                        (<?php echo $rs["formlesson"]; echo "-"; echo  $rs["tolesson"] ?>)
                                        <?php 
											}
										?>
                                         </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql3'and daystart=N'Chiều' and status=N'was handled' and r.roomid='$roomid'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                        (<?php echo $rs["formlesson"]; echo "-"; echo  $rs["tolesson"] ?>)
										<?php 
											}
										?>
                                         </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql ="SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql4'and daystart=N'Chiều' and status=N'was handled' and r.roomid='$roomid'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                        (<?php echo $rs["formlesson"]; echo "-"; echo  $rs["tolesson"] ?>)
										<?php 
											}
										?>
                                          </td>  
                                    <td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql5'and daystart=N'Chiều' and status=N'was handled' and r.roomid='$roomid'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                        (<?php echo $rs["formlesson"]; echo "-"; echo  $rs["tolesson"] ?>)
										<?php 
											}
										?>
                                          </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql6'and daystart=N'Chiều' and status=N'was handled' and r.roomid='$roomid'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                        (<?php echo $rs["formlesson"]; echo "-"; echo  $rs["tolesson"] ?>)
										<?php 
											}
										?>
                                          </td>
									
									</tr>
									<tr> 
									<td style="text-align: center;"><b>Tối</b></td> 
									
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql'and daystart=N'Tối' and status=N'was handled' and r.roomid='$roomid'";
	                                 	$resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                        (<?php echo $rs["formlesson"]; echo "-"; echo  $rs["tolesson"] ?>)
										<?php 
											}
										?>
                                         </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql1'and daystart=N'Tối' and status=N'was handled' and r.roomid='$roomid'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                        (<?php echo $rs["formlesson"]; echo "-"; echo  $rs["tolesson"] ?>)
										<?php 
											}
										?>
                                         </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql2'and daystart=N'Tối' and status=N'was handled' and r.roomid='$roomid'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                        (<?php echo $rs["formlesson"]; echo "-"; echo  $rs["tolesson"] ?>)
										<?php 
											}
										?>
                                         </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql3'and daystart=N'Tối' and status=N'was handled' and r.roomid='$roomid'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                        (<?php echo $rs["formlesson"]; echo "-"; echo  $rs["tolesson"] ?>)
										<?php 
											}
										?>
                                         </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql ="SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql4'and daystart=N'Chiều' and status=N'was handled' and r.roomid='$roomid'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                        (<?php echo $rs["formlesson"]; echo "-"; echo  $rs["tolesson"] ?>)
										<?php 
											}
										?>
                                          </td>  
                                    <td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql5'and daystart=N'Tối' and status=N'was handled' and r.roomid='$roomid'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                        (<?php echo $rs["formlesson"]; echo "-"; echo  $rs["tolesson"] ?>)
										<?php 
											}
										?>
                                          </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart='$datesql6'and daystart=N'Tối' and status=N'was handled' and r.roomid='$roomid'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                        (<?php echo $rs["formlesson"]; echo "-"; echo  $rs["tolesson"] ?>)
										<?php 
											}
										?>
                                          </td>
									</tr>
								<?php 
									} 
								?>
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
