<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
</style>


</head>
	<?php
		include("ketnoi2.php");
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
        
	<?php 
$thongbao ="";
 	$password="";
    $password_new="";
   	if(isset($_POST["them"]))
{

    $password= $_POST["password"];
    $password_new=$_POST["password_new"];
    

 $sql="select * from user where password='$password' and username='$user'";
  $result=mysqli_query($link,$sql);
  if(mysqli_num_rows($result)!=1)
  {
    $thongbao="Mật khẩu của bạn nhập không đúng !";
  }else{
  
  $sql="update user set password='$password_new' where username='$user'";
  $result=mysqli_query($link,$sql);
  echo("<script > alert('Thay đổi mật khẩu thành công !');
window.location='personalPage_admin.php';
</script>");
  		}
	}

    if((!isset($_POST["them"]))|| ($thongbao!="")){
?>
<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Thay đổi mật khẩu</h2>
					<div class="bs-example widget-shadow" data-example-id="bordered-table"> 
					 <form action="" id="form0" method="post" >  	
						<table class="table table-bordered"> 
							
							<tbody> 
							
								<tr> 
									 
									<td ><b>Mật khẩu hiện tại: 	</b><input class="form-control"  required="required" placeholder="Password" name="password" type="password" value="<?php echo $password ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User name';}"  /></td> 
								
								</tr>
                                <tr>
                                <td style="color: red"><?php echo $thongbao; ?></td>
                                </tr>
                                <tr> 
									
									<td><b>Mật khẩu mới:</b><input class="form-control"  required="required" placeholder="Password" id="password_new" name="password_new" type="password" value="<?php echo $password_new ?>"/></td> 
									
								</tr>
       	                        <tr> 
									
									<td><b>Nhập lại mật khẩu mới:</b><input class="form-control"   required="required"placeholder="Password" id="password_new1" name="password_new1" onchange="password()"type="password" value=""/></td> 
									
								</tr>
                                <tr>
                                <td>
                                	<div id="z-password_new1"></div>
                                </td>
                                </tr>
                                <tr>
                                <td align="center">
							<button style="background: #0080FF;color: white; text-align: center;" type='submit' class="btn btn-success edit" name="them">
                        Lưu</button>
                        <button style="background: red;color: white; text-align: center;" type='submit' class="btn btn-success edit">
                        <a href="personalPage.php" style="color: white;">Hủy Bỏ</a></button>
                        </td>
								</tr>
							</tbody>	
						</table>
                        
						
                        <script type="text/javascript">
                                function password() {
                                        var fpw = document.getElementById("password_new").value;
                                        var spw = document.getElementById("password_new1").value;
                                     
                                        if (fpw==spw) {
                                            document.getElementById('z-password_new1').innerHTML = "<span style='color:blue;'>Mật khẩu khớp</span>";
                                            
                                        } else {
                                            document.getElementById('z-password_new1').innerHTML = "<span style='color:red;'>Mật khẩu chưa khớp ! Vui lòng kiểm tra</span>";
                                        }
                                    }
                        </script>
						</form>
					</div>
					
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
	   </div>
        <!--//footer-->
	</div>
    
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
