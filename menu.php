<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chào mừng bạn đến với trang quản lý tài sản khoa CNTT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../css/style.css"/> 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--	<style type="text/css" media="screen">
      .has-search .form-control {
  padding-left: 2.375rem;
}

.has-search .form-control-feedback {
  position: absolute;
  z-index: 2;
  display: block;
  width: 2.375rem;
  height: 2.375rem;
  line-height: 2.375rem;
  text-align: center;
  pointer-events: none;
  color: #aaa;
}
  .nav-item{
    margin-left:30px ;
  }
  </style>-->
</head>
<?php
include("ketnoi2.php");
 session_start();
 if(!isset($_SESSION['username'])){
    header("location:login.php");
 }
?>

<body>

	<header class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="../images/nen1.jpg" style="width: 100% " alt="" >
			</div><!--col-md-12-->
		</div><!--row-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	
  <a class="navbar-brand fontnav" id="home-tab" data-toggle="tab" href="login.php" style="margin-right: -12px">
  <span class="glyphicon glyphicon-home" style="margin-right:7px;"></span>Trang chủ</a>  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse fontnav" id="collapsibleNavbar"  style="margin-top:7px;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" >
        <a class="nav-link" href="../../Quanlyts/qlts.php"><span style="margin-right:7px;" class="glyphicon glyphicon-folder-open"></span>Quản lý tài sản</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../qlcc/quanlycc.php"><span style="margin-right:7px;" class="glyphicon glyphicon-folder-open"></span>Quản lý công cụ, dụng cụ</a>
      </li>
      
    </ul>
    <ul class="navbar-nav ml-auto">
  		<form class="form-inline" action="/somepage" style="margin-left: 114px;">
        <input class="form-control mr-sm-3" type="text" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
      <li class="nav-item dropdown">

        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-user"  style="margin-right:7px;"></span><?php echo $_SESSION['fullname'] ?></a>
          <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Setting</a>
            <a href="../DangXuat.php" class="dropdown-item">Logout</a>           
          </div>
      </li>
    </ul>
    
              
 </div>  
</nav><!-- Carousel -->
<!--<div id="slides" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#slides" data-slide-to="0" class="active"></li>
    <li data-target="#slides" data-slide-to="1"></li>
    <li data-target="#slides" data-slide-to="2"></li>   
    <li data-target="#slides" data-slide-to="3"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/side0.jpg">
      <div class="carousel-caption">
        <h1 class="display-2">Example</h1>
        <h3>Asset Management</h3>
        <button type="button" class="btn btn-outline-light btn-lg">
          SEE DETAILS
        </button>
        <button type="button" class="btn btn-primary btn-lg">Get started</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/sile2.jpg">
    </div>
    <div class="carousel-item">
      <img src="images/sile3.jpg">
    </div>
    <div class="carousel-item">
      <img src="images/sile2.jpg">
    </div>
  </div>
</div>
 jumbotron 
<div class="container-fluid">
  <div class="jumbotron">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
      <p>This is an example of using Bootstrap to make a responsive Website. This is a tutorial</p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
      <a href="#">
        <button type="button" class="btn btn-outline-secondary">Buy a host</button>
      </a>
    </div>
  </div>
</div>
<div class="container-fluid padding">
  <div class="row welcome text-center">
    <div class="col-12">
      <h1 class="display-4">Build your application</h1>
    </div>-->
    <!-- Horizontal Rule -->
    <!--
    <hr> 
    <div class="col-12">
      <p>Welcome my Bootstrap 4 tutorials. Bootstrap is an open-source and free front-end library with HTML and CSS based design</p>
    </div>
  </div>
</div>
<div class="container-fluid padding">
  <div class="row text-center padding">
    <div class="col-xs-12 col-sm-6 col-md-4 ">
      <i class="fab fa-react"></i>  
      <h3>REACT</h3>
      <p>Build the latest version of React</p>          
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
      <i class="fab fa-angular"></i>      
      <h3>Angular</h3>
      <p>Build your Website and Front-end Application</p>
    </div>
    <div class="col-sm-12 col-md-4">
      <i class="fab fa-css3"></i>     
      <h3>CSS3 , HTML5</h3>
      <p>Customize your web UI with Html5 and Css3</p>
    </div>
  </div>  
  <hr class="my-4"> 
</div>
<div class="container-fluid padding">
  <div class="row padding">
    
    <div class="col-lg-6">
      <img src="images/sile3.jpg" class="img-fluid">
    </div>
    <div class="col-md-12 col-lg-6">
      <h2>If you build it...</h2>
      <p>Arduino is an open-source hardware, software and content platform with a global community. It’s intended for anyone making interactive projects.</p>
      <p>Arduino Education is a dedicated team formed by education experts, content developers, engineers and interaction designers from all around the world</p>
      <br>
    </div>
  </div>
</div>-->
<!--
<hr class="my-2">
<div id="emoji" class="collapse">
  <div class="container-fluid padding">
    <div class="row text-center">
      <div class="col-sm-6 col-md-3">
        <img class="gif" src="images/gif/blinkEyes.gif" width="100" height="100">
      </div>
      <div class="col-sm-6 col-md-3">
        <img class="gif" src="images/gif/blinkGirl.gif" width="100" height="100">
      </div>
      <div class="col-sm-6 col-md-3">
        <img class="gif" src="images/gif/faceHaha.gif" width="100" height="100">
      </div>
      <div class="col-sm-6 col-md-3">
        <img class="gif" src="images/gif/haha.gif" width="100" height="100">
      </div>
    </div>
  </div>
</div>
<div class="container-fluid padding">
  <div class="row welcome text-center">
    <div class="col-12">
      <h1 class="display-4">Meet our team members</h1>
    </div>
  </div>
</div>
<div class="container-fluid padding">
  <div class="row padding">
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="images/sile2.jpg">
        <div class="card-body">
          <h4 class="card-title">Nguyen Duc Hoang</h4>
          <p class="card-text">Nguyen Duc Hoang is a fullstack developer with 12 years of experiences</p>
          <a href="#" class="btn btn-outline-secondary">See profile</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="images/sile2.jpg">
        <div class="card-body">
          <h4 class="card-title">
            John Doe  
          </h4>
          <p class="card-text">John Doe is a web developer, he worked for some startup and technology companies</p>
          <a href="#" class="btn btn-outline-secondary">See profile</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="images/sile2.jpg">
        <div class="card-body">
          <h4 class="card-title">
            Natasha 
          </h4>
          <p class="card-text">Natasha is a web designer, she has 5 years of experiences in UI/UX</p>
          <a href="#" class="btn btn-outline-secondary">See profile</a>
        </div>
      </div>
    </div>
  </div>
</div>
<footer>
  <?php
//include("footer.php");
?>
</footer>
</header>-->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>

