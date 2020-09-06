<style type="text/css" media="screen">
  .rdiv1
  {
    width:auto;
    height:254px;
    clear:both;
    margin:10px auto auto auto;
    border-radius:5px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
    border:1px solid #106bb4;
    position:relative;
  }
  .rdangnhap
  {
    width:200px;
    height:25px;  
    margin:-10px auto auto 65px;  
    border-radius:5px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
    border:1px solid #106bb4;
    background:#106bb4 repeat top center;
    position:relative;
  }
  .rspanbg
  {
    line-height:21px;
    top:0px;
    left:10px;
    text-align:left;
    font-weight:bold;
    font-size:1.2em;
    position:absolute;
      white-space:nowrap;
  }
  .textbox {
      font-size: 13px;
      height: 30px;
      width: 140px;
      margin-bottom: 20px;
      border-radius: 5px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border: 1px solid #106bb4 !important;
  }
  .rtaikhoan1
  {
    width:260px;
    height:20px;
    margin-top:10px;
    line-height:29px;
    margin-left:20px;
  }
  .rtaikhoan
  {
    width:260px;
    height:20px;
    margin-top:20px;
    line-height:29px; 
    margin-left:20px;
    
  }
  .rtaikhoan3
  {
    width:260px;
    height:20px;
    margin-top:60px;
    line-height:29px; 
    margin-left:20px;
    text-align: left;
  }
  .rtaikhoan2
  {
    width:260px;
    height:25px;
    margin-top:25px;
    line-height:29px;
    margin-left:20px;  
  }
  .rtleft
  {
    width:100px;
    height:30px;
    float:left;

    border-radius:5px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
    border:1px solid #106bb4;
  }
  .rtleft2
  {
    width:100px;
    height:30px;
    float:left;
    border-radius:5px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
    border:1px solid #106bb4;
  }
  .rtleft2 span
  {

    font-size:1.2em;
  }
  .rtleft span
  {
    font-size:1.2em;
  }
  .rtright
  {
    width:153px;
    height:20px;
    font-size:1.2em;
    float:right;
  }
  </style>
<!-- Carousel -->
<div class="row text-center padding">
    <div class="col-xs-12 col-sm-12 col-md-8 ">
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
    <!-- start form login -->
    <div class="col-sm-12  col-md-4">
      <form class="form-inline" action="" method="post">
        <div class="rdiv1">
          <div class="rdangnhap"><span class="rspanbg">Thông tin đăng nhập</span></div>
          <div class="rtaikhoan1">
              <div class="rtleft"><span>Tài khoản: </span></div>
              <div class="rtright">
                  <input name="txtUser" type="text" required="required" class="textbox"  value="Nhập user"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User name';}" />
                  <span id="ctl00_reqtaikhoan" style="color:Red;visibility:hidden;">*</span>
              </div>
          </div>
          <div class="rtaikhoan">
              <div class="rtleft"><span>Mật khẩu: </span></div>
              <div class="rtright">
                  <input   required="required" name="txtPassword" type="password" class="textbox" value="Nhập password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User name';}" />
                  <span id="ctl00_reqmatkhau" style="color:Red;visibility:hidden;">*</span>
              </div>
          </div>

          <div class="rtaikhoan2">
             <div style="color: red;"><?php echo $ThongBao ?></div>
              <div class="rtleft2">
                  <span>Nhớ tôi: </span>
                  <input id="ctl00_chknhomatkhau" type="checkbox" name="ctl00$chknhomatkhau" />
              </div>
              <div class="rtright2">
                  <button style="width:140px; height: 30px;" type="submit" class="btn btn-primary mb-2" name="submit">Đăng nhập</button>
              </div>
          </div>
          <div class="rtaikhoan3">
              <a href="#" style="" >
               <span>Quên mật khẩu ?</span></a>
          </div>
        </div>
      </form> 
    </div>
   <!--  end login -->
  </div>
  <!-- class ///////////////////////////////-->
  <div class="row welcome text-center">
    <div class="col-12">
      <h1 class="display-4"></h1>
    </div>
    <!-- Horizontal Rule -->
    <hr> 
  </div>
<div class="container">
  <div class="row text-center padding">
    <div class="col-xs-12 col-sm-6 col-md-6 ">
      <i class="fab fa-react"></i>  
      <h3>Trường ĐH Phạm Văn Đồng</h3>
      <img src="images/DHPVD.jpg" width="560px" height="270px" alt="">        
    </div>
    <div class="col-sm-12 col-md-6">
      <i class="fab fa-angular"></i>      
      <h3>Tuyển sinh đại học</h3>
      <img src="images/tuyensinh.jpg" width="560px" height="270px" alt="">
    </div>
  </div>  
  <hr class="my-4"> 
</div>