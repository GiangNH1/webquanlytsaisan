<div class="MenuTSX" style="background-color: #333">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li><a class="btn "  href="../index.php">Home</a></li>
      <li><a class="btn "  href="createDetails.php?roomid=<?php echo $roomid ?>">Thêm mới</a></li>
      <li><button class="btn Menubutton" id="submit" type="submit" value="edit" name="submit" onclick="return check()">Chỉnh sửa</button></li>
      <li><button class="btn Menubutton" type="submit" value="move" name="submit" onclick="return check()"> Chuyển </button></li>
      <li><button class="btn Menubutton" type="submit" value="delete" id="delete" name="submit" onclick="return check();"> Xóa </button></li>
      <li><a  onclick="history.go(-1);">Quay lại</a></li>
    </ul>
  </div>
</nav>
</div>