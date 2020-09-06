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
<meta name="viewport" content="widtd=device-widtd, initial-scale=1">
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
	.MenuTSX ul li{display:inline-block;widtd:150px;height:45px;text-align: center;position:relative; text-decoration: none;}

	.MenuTSX ul li a button {display:block;color: black;text-decoration: none; font-weight: bold;}

	    
	.MenuTSX ul li a:hover{background-color:#00F;color: white;height:auto; widtd:auto }
	.Menubutton{
		margin-top: 6px;
	    background-color: #333;
	    color: #9d9d9d;
	    widtd: 150px;
	}
	.btn:hover {
	  color: white;
	}
</style>

</head>
	<?php
		
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
				<div class="tables">
					<h2 class="title1" style="text-align: center;">Danh sách đăng ký phòng thực hành</h2>
                    <p style="text-align: center;">Tuần 2: Từ ngày 08/07/2020 đến ngày 14/07/2020</p>
                    <p style="text-align: center;">KHOA CÔNG NGHỆ THÔNG TIN</p>
					<div class="bs-example widget-shadow" data-example-id="bordered-table">
						<table class="table table-bordered"> 
							<tdead> 
								<tr> 
									<td rowspan="3" style="text-align: center;"><b>Buổi</b></td> 
									<td style="text-align: center;"><b>Thứ</b></td> 
									<td style="text-align: center;"><b>2</b></td>
									<td style="text-align: center;"><b>3</b></td>
									<td style="text-align: center;"><b>4</b></td>
									<td style="text-align: center;"><b>5</b></td>
									<td style="text-align: center;"><b>6</b></td>  
                                    <td style="text-align: center;"><b>7</b></td>
									<td style="text-align: center;"><b>CN</b></td>  
								</tr> 
                                <tr> 
								
									<td style="text-align: center;"><b>Ngày</b></td> 
									<td><b>08/07/2020</b></td>
									<td><b>09/07/2020</b></td>
									<td><b>10/07/2020</b></td>
									<td><b>11/07/2020</b></td>
									<td><b>12/07/2020</b></td>  
                                    <td><b>13/07/2020</b></td>
									<td><b>14/07/2020</b></td>   
								</tr> 
                                <tr> 
								
									<td style="text-align: center;"><b>Người đăng ký</b></td> 
									<td><b>Người đăng ký</b></td>
									<td><b>Người đăng ký</b></td>
									<td><b>Người đăng ký</b></td>
									<td><b>Người đăng ký</b></td>
									<td><b>Người đăng ký</b></td>  
                                    <td><b>Người đăng ký</b></td>
									<td><b>Người đăng ký</b></td>  
								</tr> 
							</tdead> 
								<tbody> 
									<td  style="text-align: center;"colspan="2"><b>Sáng</b></td> 
									 
									<td>
                                    	<?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart=N'2020-07-08'and daystart=N'Sáng' and status=N'pending'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
									<?php echo $rs["roomid"];?>,
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                         <a class = "btn btn-primary" onclick= "return confirm('Bạn có chắc chắn muốn duyệt thông tin này không?')" href="browserRoom.php?username=<?php echo $rs['username'] ?>&roomid=<?php echo $rs["roomid"]?>&datestart=<?php echo $rs['datestart'] ?>&daystart=<?php echo $rs['daystart'] ?>">Duyệt </a>
										<?php 
											}
										?>
                                       
                                    </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart=N'2020-07-09'and daystart=N'Sáng' and status=N'pending'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
									<?php echo $rs["roomid"];?>,
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                         <a class = "btn btn-primary" onclick= "return confirm('Bạn có chắc chắn muốn duyệt thông tin này không?')" href="browserRoom.php?username=<?php echo $rs['username'] ?>&roomid=<?php echo $rs["roomid"]?>&datestart=<?php echo $rs['datestart'] ?>&daystart=<?php echo $rs['daystart'] ?>">Duyệt </a>
										<?php 
											}
										?>
                                        
                                    </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart=N'2020-07-10'and daystart=N'Sáng' and status=N'pending'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
									<?php echo $rs["roomid"];?>,
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                         <a class = "btn btn-primary" onclick= "return confirm('Bạn có chắc chắn muốn duyệt thông tin này không?')" href="browserRoom.php?username=<?php echo $rs['username'] ?>&roomid=<?php echo $rs["roomid"]?>&datestart=<?php echo $rs['datestart'] ?>&daystart=<?php echo $rs['daystart'] ?>">Duyệt </a>
										<?php 
											}
										?>
                                         </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart=N'2020-07-11'and daystart=N'Sáng' and status=N'pending'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
									<?php echo $rs["roomid"];?>,
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
										<?php 
											}
										?>
                                         </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart=N'2020-07-12'and daystart=N'Sáng' and status=N'pending'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
									<?php echo $rs["roomid"];?>,
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                         <a class = "btn btn-primary" onclick= "return confirm('Bạn có chắc chắn muốn duyệt thông tin này không?')" href="browserRoom.php?username=<?php echo $rs['username'] ?>&roomid=<?php echo $rs["roomid"]?>&datestart=<?php echo $rs['datestart'] ?>&daystart=<?php echo $rs['daystart'] ?>">Duyệt </a>
										<?php 
											}
										?>
                                        </td>  
                                    <td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart=N'2020-07-13'and daystart=N'Sáng' and status=N'pending'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
									<?php echo $rs["roomid"];?>,
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                         <a class = "btn btn-primary" onclick= "return confirm('Bạn có chắc chắn muốn duyệt thông tin này không?')" href="browserRoom.php?username=<?php echo $rs['username'] ?>&roomid=<?php echo $rs["roomid"]?>&datestart=<?php echo $rs['datestart'] ?>&daystart=<?php echo $rs['daystart'] ?>">Duyệt </a>
										<?php 
											}
										?>
                                         </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart=N'2020-07-14'and daystart=N'Sáng' and status=N'pending'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
									<?php echo $rs["roomid"];?>,
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                         <a class = "btn btn-primary" onclick= "return confirm('Bạn có chắc chắn muốn duyệt thông tin này không?')" href="browserRoom.php?username=<?php echo $rs['username'] ?>&roomid=<?php echo $rs["roomid"]?>&datestart=<?php echo $rs['datestart'] ?>&daystart=<?php echo $rs['daystart'] ?>">Duyệt </a>
										<?php 
											}
										?>
                                          </td>
									
								</tbody>
                                <tbody> 
									<td style="text-align: center;"colspan="2" ><b>Chiều</b></td> 
									
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "select u.fullname,br.roomid from borrowroom br join user u on u.username=br.username where datestart=N'2020-07-08' and daystart=N'Chiều' and status = 'pending'";
	                                 	$resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
									<?php echo $rs["roomid"];?>,
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                         <a class = "btn btn-primary" onclick= "return confirm('Bạn có chắc chắn muốn duyệt thông tin này không?')" href="browserRoom.php?username=<?php echo $rs['username'] ?>&roomid=<?php echo $rs["roomid"]?>&datestart=<?php echo $rs['datestart'] ?>&daystart=<?php echo $rs['daystart'] ?>">Duyệt </a>
										<?php 
											}
										?>
                                         </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart=N'2020-07-09'and daystart=N'Chiều' and status=N'pending'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
									<?php echo $rs["roomid"];?>,
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                         <a class = "btn btn-primary" onclick= "return confirm('Bạn có chắc chắn muốn duyệt thông tin này không?')" href="browserRoom.php?username=<?php echo $rs['username'] ?>&roomid=<?php echo $rs["roomid"]?>&datestart=<?php echo $rs['datestart'] ?>&daystart=<?php echo $rs['daystart'] ?>">Duyệt </a>
										<?php 
											}
										?>
                                         </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart=N'2020-07-10'and daystart=N'Chiều' and status=N'pending'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
									<?php echo $rs["roomid"];?>,
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                         <a class = "btn btn-primary" onclick= "return confirm('Bạn có chắc chắn muốn duyệt thông tin này không?')" href="browserRoom.php?username=<?php echo $rs['username'] ?>&roomid=<?php echo $rs["roomid"]?>&datestart=<?php echo $rs['datestart'] ?>&daystart=<?php echo $rs['daystart'] ?>">Duyệt </a>
										<?php 
											}
										?>
                                         </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart=N'2020-07-11'and daystart=N'Chiều' and status=N'pending'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
									<?php echo $rs["roomid"];?>,
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                         <a class = "btn btn-primary" onclick= "return confirm('Bạn có chắc chắn muốn duyệt thông tin này không?')" href="browserRoom.php?username=<?php echo $rs['username'] ?>&roomid=<?php echo $rs["roomid"]?>&datestart=<?php echo $rs['datestart'] ?>&daystart=<?php echo $rs['daystart'] ?>">Duyệt </a>
										<?php 
											}
										?>
                                         </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart=N'2020-07-12'and daystart=N'Chiều' and status=N'pending'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
									<?php echo $rs["roomid"];?>,
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                         <a class = "btn btn-primary" onclick= "return confirm('Bạn có chắc chắn muốn duyệt thông tin này không?')" href="browserRoom.php?username=<?php echo $rs['username'] ?>&roomid=<?php echo $rs["roomid"]?>&datestart=<?php echo $rs['datestart'] ?>&daystart=<?php echo $rs['daystart'] ?>">Duyệt </a>
										<?php 
											}
										?>
                                          </td>  
                                    <td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart=N'2020-07-13'and daystart=N'Chiều' and status=N'pending'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
									<?php echo $rs["roomid"];?>,
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                         <a class = "btn btn-primary" onclick= "return confirm('Bạn có chắc chắn muốn duyệt thông tin này không?')" href="browserRoom.php?username=<?php echo $rs['username'] ?>&roomid=<?php echo $rs["roomid"]?>&datestart=<?php echo $rs['datestart'] ?>&daystart=<?php echo $rs['daystart'] ?>">Duyệt </a>
										<?php 
											}
										?>
                                          </td>
									<td>
                                    <?php 
                                        include("ketnoi2.php");
		                                $sql = "SELECT u.fullname,r.roomname,br.username,br.roomid,br.dateregist,br.datestart, br.daystart, br.formlesson,br.tolesson,br.status FROM borrowroom br join user u on u.username = br.username join room r on r.roomid = br.roomid WHERE datestart=N'2020-07-14'and daystart=N'Chiều' and status=N'pending'";
		                                $resut =mysqli_query($link,$sql);
											while($rs=mysqli_fetch_array($resut))
									    { 
										?>
									<?php echo $rs["roomid"];?>,
                                    	<?php echo $rs["fullname"];?>
                                        <hr />
                                         <a class = "btn btn-primary" onclick= "return confirm('Bạn có chắc chắn muốn duyệt thông tin này không?')" href="browserRoom.php?username=<?php echo $rs['username'] ?>&roomid=<?php echo $rs["roomid"]?>&datestart=<?php echo $rs['datestart'] ?>&daystart=<?php echo $rs['daystart'] ?>">Duyệt </a>
										<?php 
											}
										?>
                                          </td>
									
								</tbody>
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
				classie.toggle( tdis, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOtder( 'showLeftPush' );
			};
			
			function disableOtder( button ) {
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
