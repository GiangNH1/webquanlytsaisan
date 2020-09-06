<?php
session_start();
include "ketnoi2.php";
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
<link href="css/mystyle.css" rel="stylesheet">

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
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
.ddiv5 
{
	font-size:100%;
	margin-top: 10px;	
}
.ddiv5 img
{
	width: 20px; 
	height: 20px;
	margin-left: 10px; 
	margin-bottom:0px;
}
.ddiv5 a
{
	margin-left:10px;
	text-decoration:none;
	font-weight:bold;	
}
.ddiv5 a:hover
{	
	text-decoration:none;
}
.ddiv5 a:hover span
{
	color:#51A9FF;	
    font-style:italic;
}
.ddiv5 a span
{	
	color:#51A9FF;
}
</style>
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
<body class="cbp-spmenu-push">
<?php
	include "header_menu_user.php";
?>
		
	<div class="container">
	<div class="row">
          <div class="col-sm-8" >
            <h2>Tin tức mới nhất</h2>
				<?php 
					$sqlNews = "select * from news ";
					$resutNews = mysqli_query($link,$sqlNews);
					while($rs=mysqli_fetch_array($resutNews))
						{ 
				?>
				<div class="ddiv5">
                	<img src="http://quanly.pdu.edu.vn/images/bantay.jpg" alt="<?php echo $rs['contents'] ?>" style="width: 20px; height: 20px;" /><a href='ChiTietTinTuc.aspx?ID=94'><span> <?php echo $rs["contents"] ?></span></a>
                </div>
                <?php 
                    }
                ?>
                            <div class="ddiv5">
                                <img src="http://quanly.pdu.edu.vn/images/bantay.jpg" alt='Thông báo về việc triển khai các biện pháp phòng, chống dịch bệnh Covid-19 trong tình hình mới' style="width: 20px; height: 20px;" /><a href='ChiTietTinTuc.aspx?ID=101'><span>Thông báo về việc triển khai các biện pháp phòng, chống dịch bệnh Covid-19 trong tình hình mới</span></a>
                            </div>
                            <div class="ddiv5">
                                <img src="http://quanly.pdu.edu.vn/images/bantay.jpg" alt='Thông báo v/v triển khai các biện pháp cấp bách phòng, chống dịch bệnh Covid-19' style="width: 20px; height: 20px;" /><a href='ChiTietTinTuc.aspx?ID=102'><span>Thông báo v/v triển khai các biện pháp cấp bách phòng, chống dịch bệnh Covid-19</span></a>
                            </div>
                            <div class="ddiv5">
                                <img src="http://quanly.pdu.edu.vn/images/bantay.jpg" alt='Thông báo về lễ bế giảng và trao bằng cho sv tốt nghiệp đợt tháng 6/2018' style="width: 20px; height: 20px;" /><a href='ChiTietTinTuc.aspx?ID=100'><span>Thông báo về lễ bế giảng và trao bằng cho sv tốt nghiệp đợt tháng 6/2018</span></a>
                            </div>
                            <div class="ddiv5">
                                <img src="http://quanly.pdu.edu.vn/images/bantay.jpg" alt='Danh sách lớp chính thức, danh sách SV nhận lại tiền, thời khóa biểu học kỳ hè năm học 2017-2018' style="width: 20px; height: 20px;" /><a href='ChiTietTinTuc.aspx?ID=98'><span>Danh sách lớp chính thức, danh sách SV nhận lại tiền, thời khóa biểu học kỳ hè năm học 2017-2018</span></a>
                            </div>
                            
          </div>
        <div class="col-sm-4" data-aos="fade-left" data-aos-delay="200">
			<h2>Thông báo mới nhất</h2>         
				<?php 
					$sqlRoom = "select * from notification where status = 'đã gửi' and receiver = '$user'";
					$resutRoom =mysqli_query($link,$sqlRoom);
					while($rs=mysqli_fetch_array($resutRoom))
						{ 
				?>
				<div class="ddiv5">
                	<img src="http://quanly.pdu.edu.vn/images/bantay.jpg" alt='' style="width: 20px; height: 20px;" /><a href="register/detailNotification.php?notificationid=<?php echo $rs['notificationid'] ?>"><span>Xem thông báo</span></a>
                </div>
                <?php 
                    }
                ?>
                            
          </div>
        </div>

		<div class="charts">		
			<div class="mid-content-top charts-grids">
				<div class="middle-content">
						<h4 class="title">Carousel Slider</h4>
					<!-- start content_slider -->
					<div id="owl-demo" class="owl-carousel text-center">
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider1.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider2.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider3.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider4.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider5.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider6.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider7.jpg" alt="name">
						</div>
						
					</div>
				</div>
					<!--//sreen-gallery-cursual---->
			</div>
		</div>
	</div>
	<?php include "footer.php"; ?>
	<!-- new added graphs chart js-->
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- for index page weekly sales java script -->
	<script src="js/SimpleChart.js"></script>
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	
</body>
</html>
<?php
}else{
  session_destroy();
  echo("<script > alert('Bạn không đủ quyền truy cập vào trang này!');
  window.location='index.php';</script>");
}
?>
