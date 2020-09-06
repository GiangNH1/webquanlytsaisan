<?php
	include "ketnoi2.php";
	$user = $_SESSION['username']; 
	$sql = "select COUNT(*) as count FROM notification WHERE receiver = '$user' and status = 'not seen'";
	$sqlnoti = "select COUNT(*) as count FROM borrowroom WHERE status = 'pending'";
	$result = mysqli_query($link,$sql);
	$resultnoti = mysqli_query($link,$sqlnoti);
	$count = "";
	$countnoti = "";
	while($rs=mysqli_fetch_array($result))
	{
		$count = $rs["count"];
	}
	while($rs=mysqli_fetch_array($resultnoti))
	{
		$countnoti = $rs["count"];
	} 
?>
<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge"><?php echo $count; ?></span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>bạn có <?php echo $count; ?> tin nhắn mới</h3>
									</div>
								</li>
							<?php
								
								$sql = "select * FROM notification WHERE receiver = '$user' and status = 'not seen'";
								$result = mysqli_query($link,$sql);
								$count = "";
								while($rs=mysqli_fetch_array($result))
								{
								
							?>
								<li><a href="#">
								   <div class="user_img"><img src="images/user.jpg" alt=""></div>
								   <div class="notification_desc">
									<p><?php echo $rs["contents"]; ?></p>
									<p><span>ngày gửi <?php echo $rs["sendate"]; ?></span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
							<?php 
								}
							?>
								<li>
									<div class="notification_bottom">
										<a href="managerNotification/listNotification.php">Xem tất cả tin nhắn</a>
									</div> 
								</li>
							</ul>
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue"><?php echo $countnoti; ?></span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>bạn có <?php echo $countnoti; ?> thông báo mới</h3>
									</div>
								</li>
								<?php
								
								$sql = "select br.username,br.roomid,br.dateregist,br.datestart,br.formlesson,br.tolesson,br.status,r.roomname FROM borrowroom br join room r on r.roomid = br.roomid WHERE  br.status = 'pending'";
								$result = mysqli_query($link,$sql);
								$count = "";
								while($rs=mysqli_fetch_array($result))
								{
								
							?>
								<li><a href="managerBorrowRoom/listBorrowRoom.php">
								   <div class="user_img"><img src="images/user.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Phòng <?php echo $rs["roomname"]; ?> mới đăng ký</p>
									<p><span>ngày <?php echo $rs["dateregist"]; ?></span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
							<?php 
								}
							?>
						
								 <li>
									<div class="notification_bottom">
										<a href="managerBorrowRoom/listBorrowRoom.php">Xem tất cả thông báo</a>
									</div> 
								</li>
							</ul>
						</li>	
					</li>	
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div><!--//end-search-box-->
				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/2.jpg" alt=""> </span> 
									<div class="user-name">
										<p>Admin Name</p>
										<span><?php echo $user ?></span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="personalPage_admin.php"><i class="fa fa-user"></i> My Account</a> </li> 
								<li> <a href="changePassword_admin.php"><i class="fa fa-suitcase"></i> Change Password</a> </li> 
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->