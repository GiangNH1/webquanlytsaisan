<style type="text/css">
	.logomenu {
    overflow: hidden;
    padding: 16px 30px 12px 30px;
    background: #2a3f54;
    color: #fff;
    font-weight: bold;
}
	.container-fluid{
		background-color: #106bb4;
		color: #FFF;
	}
	.navbar-default .navbar-brand{
		color: #FFF;
	}
	.navbar-default .navbar-nav > li > a{
		color: #FFF;
	}
	.menuli {
    float: left;
    padding: 0px 7px 0px 8px;
    background: url(http://quanly.pdu.edu.vn/images/border-02.gif) no-repeat left;
	}
	body { padding-top: 75px; }
</style>

<nav class="navbar navbar-default navbar-fixed-top navback" role="navigation">
	<div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="../index_user.php" style="margin-left:100px;"> Trang chủ</a>
		</div>
		
	<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse navbar-right">
			<ul class="nav navbar-nav">
				<li class="menuli"><a href="information.php"> Đăng kí phòng thực hành</a></li>
				<li class="menuli"><a href="TKBPractice.php"> Thời khóa biểu thực hành</a></li>
				<li class="menuli"><a href="../personalPage_user.php"> Thông tin cá nhân</a></li>
				<li class="drop-down menuli">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">User name<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#"> Cài đặt</a></li>
						<li><a href="../changePassword_user.php"> Thây đổi mật khẩu</a></li>
						<li><a href="../logout.php"> Đăng xuất</a></li>		
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>
