window.onload = function(){
    var inputs = document.forms['dn'].getElementsByTagName('input');
    var run_onchange = false;
    function valid(){
      var errors = false; 
      var reg_mail = /^[A-Za-z0-9]+([_\.\-]?[A-Za-z0-9])*@[A-Za-z0-9]+([\.\-]?[A-Za-z0-9]+)*(\.[A-Za-z]+)+$/;
      for(var i=0; i<inputs.length; i++){
        var value = inputs[i].value;
        var id = inputs[i].getAttribute('id');
        
        // Tạo phần tử span lưu thông tin lỗi
        var span = document.createElement('span');
        // Nếu span đã tồn tại thì remove
        var p = inputs[i].parentNode;
        if(p.lastChild.nodeName == 'SPAN') {p.removeChild(p.lastChild);}
        
        // Kiểm tra rỗng
        if(value == ''){
          span.innerHTML ='Thông tin được yêu cầu';
        }
        
        // Nếu có lỗi thì span vào hồ sơ, chạy onchange, submit return false, highlight border
        if(span.innerHTML != ''){
          inputs[i].parentNode.appendChild(span);
          errors = true;
          run_onchange = true;
          inputs[i].style.border = '1px solid #c6807b';
          inputs[i].style.background = '#fffcf9';
        }
      }// end for
      return !errors;
    }// end valid()
    
    // Chay ham kiem tra
    var register = document.getElementById('dn');
    register.onclick = function(){
      return valid();
    }
    
    // Kiểm tra lỗi với sự kiện onchange -> gọi lại hàm valid()
      for(var i=0; i<inputs.length; i++){
        var id = inputs[i].getAttribute('id');
        inputs[i].onchange = function(){
          if(run_onchange == true){
            this.style.border = '1px solid #999';
            this.style.background = '#fff';
            valid();
          }
        }
      }// end for
}// end onload