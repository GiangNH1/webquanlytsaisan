
  function valid(){
  var inputs = document.forms['register'];
  var run_onchange = false;
   var errors = false;
   var sLTT = inputs["sLToiThieu"].value;
   var sLTD = inputs["sLToiDa"].value;
   var reg_madv = /^(HD\d+)$/;
   var reg_phone = /^\+?[(]?(84|0)\)?[)]?((90|91|32)([0-9]{7}))$/;
   var reg_mail = /^[A-Za-z0-9]+([_\.\-]?[A-Za-z0-9])*@[A-Za-z0-9]+([\.\-]?[A-Za-z0-9]+)*(\.[A-Za-z]+)+$/;
   for(var i=0; i<inputs.length; i++){
    var value = inputs[i].value;
    var id = inputs[i].getAttribute('id');
    // Tạo phần tử span lưu thông tin lỗi
    var span = document.createElement('span');
    span.style='color:red; float:right;font-size:14px;';
    span.setAttribute("class","fas fa-exclamation-triangle");
    // Nếu span đã tồn tại thì remove
    var p = inputs[i].parentNode;
    if(p.lastChild.nodeName == 'SPAN') {p.removeChild(p.lastChild);}
   
    // Kiểm tra rỗng
    if(value == ''){
     span.innerHTML ='Thông tin được yêu cầu';
    
    }else{
    // Kiểm tra các trường hợp khác
      if(id=='maHD'){
         if(reg_madv.test(value)== false){
           span.innerHTML ='Ma dich vu không hợp lệ (vi du: DV01..)';
           inputs["maHD"].focus();
         }
       }
       //ktra email
     if(id == 'email'){
      if(reg_mail.test(value) == false){
        span.innerHTML ='Email không hợp lệ (ví dụ: abc@gmail.com)';
        inputs["email"].focus();
      }
      
     }
     // Kiểm tra phone
     if(id =='sdt'){
       if(reg_phone.test(value) == false){
         span.innerHTML ='Số điện thoại không hợp lệ';
         inputs["sdt"].focus();
       }
     }
     if(id=='sLToiThieu'){
       if(sLTT < 1){
         span.innerHTML ='Số lượng tối thiểu phải lơn hơn không !';
         inputs["sLToiThieu"].focus();
       }else if(sLTT > sLTD){
         span.innerHTML ='Số lượng tối thiểu phải nhỏ hơn số lượng tối đa!';
         inputs["sLToiThieu"].focus();
       }
       
     }
     if(id=='sLToiDa'){
       if(sLTD < 1){
         span.innerHTML ='Số lượng tối đa phải lơn hơn không!';
         inputs["sLToiDa"].focus();
       }
     }
    }
    // Nếu có lỗi thì chèn span vào hồ sơ, chạy onchange, submit return false, highlight border
    if(span.innerHTML != ''){
       inputs[i].parentNode.appendChild(span);
       errors = true;
       run_onchange = true;
       inputs[i].style.border = '1px solid #c6807b';
       inputs[i].style.background = '#fffcf9';
       inputs[i].style.color = 'red';
    }
   }//end for

   for(var i=0; i<inputs.length; i++){
     var id = inputs[i].getAttribute('id');
     inputs[i].onchange = function(){
       if(run_onchange == true){
        this.style.border = '1px solid #999';
        this.style.background = '#fff';
        this.style.color = 'inherit';
        valid();
       }
    }
   }// end for
   return !errors;
  }// end valid()
  
function validaChk(){
  document.getElementById('assetid').onclick = function(e){
                if (this.checked== false){
                  return false;
                    alert("vui lòng chọn 1 dòng");

                }else
                return true;
            };

}

function validateForm() {
    var myForm = document.forms["register"];
    var dateR = myForm["dateR"].value;
    var date = new Date(dateR);
    var dateUser = myForm["datestart"].value;
    var dateU = new Date(dateUser);
     
    if (date < dateU) {
      document.getElementById("errorUser").innerHTML = "";
    } else {
      document.getElementById("errorUser").innerHTML = "Ngày sử dụng không được nhỏ hơn ngày đăng ký" + date;
      myForm["datestart"].focus();
      return false;
    }
    return true;
}
 
 function Refuse(){
	 var name = prompt("gửi thông báo đến người đăng ký");
     // In ra trình duyệt
   	document.write("<input type=text name=status value = " + name +"");
   }
/*function validDateUser(){
	
	var timeRegist = $("#timeUser").val();
	var dateUser = $("#dateUser").val();
	var dateU = new Date(dateUser);
	var date = new Date(dateRegist);
	var time = timeRegist.replace(/:/, '');
	if( time > 1000){
		alert(time - 1000);
	}
	
	 * if(date <= dateU){ document.getElementById("errorUser").innerHTML = "";
	 * 
	 * }else{ document.getElementById("errorUser").innerHTML = "Ngày sử dụng
	 * không được nhỏ hơn ngày đăng ký"; }
	 
}*/
function check(){
    if(document.getElementById('assetid').checked == false){
      alert("Chon ít nhất 1 truòng");
      return false;
    }
    else {
      return confirm('Bạn có chắc chắn xóa dữ liệu này không?');
      return true;
    }
    
  }
function ConfirmXoa()
{
  return confirm('Bạn có chắc chắn xóa dữ liệu này không?');
}
function ConfirmMove()
{
  return confirm('Bạn có chắc chắn chuyển dữ liệu này không?');
}
function ConfirmHuy()
{
  return confirm('Ban co chac chan muon huy?');
}
function ConfirmStatistic()
{
  return confirm('Chức năng này đang phát triển! Chung toi sẽ sớm hoàn thiện?');
}
