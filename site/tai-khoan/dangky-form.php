<!DOCTYPE html>
<html lang="en">



    <head>
        <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="../../content/css/dk-form.css">
     
        <style>
            @font-face {
    font-family: Mergeblack;
    src: url(../MergeBlack.woff);
}

            .error{
                color:red;
                font-family: Mergeblack;

            }
            .success {
                color:green;

            }
            .form-control{
                margin: 10px 0;
            }
        </style>
      <!-- <script>
    function setError(ele, message) {
    let parentEle = ele.parentNode;
    parentEle.classList.add('error');
    parentEle.querySelector('small').innerText = message;
}
function setSuccess(ele) {
    ele.parentNode.classList.add('success');
    
}
            function vali(){
                var ma_kh=document.getElementById('ma_kh');
                var mat_khau=document.getElementById('mat_khau');
                var mat_khau2=document.getElementById('mat_khau2');
                var ho_ten=document.getElementById('ho_ten');
                var email=document.getElementById('email')
            
                let isCheck = true;
                if(ma_kh.value==""){
                    setError (ma_kh, "Mời nhập tên đăng nhập");
                     isCheck = false;
                }else if(ma_kh.value.length>13){
                    setError (ma_kh, "Tên đăng nhập không quá 13 ký tự");
                    isCheck = false;
                    
                }else {
                    setSuccess(ma_kh);
                 
                }
                if(mat_khau.value==""){
                    setError (mat_khau, "Mời nhập mật khẩu");
                     isCheck = false;
                    
                }else if(mat_khau.value.length<8){
                    setError (mat_khau, "Mật khẩu quá ngắn");
                     isCheck = false;

                }else {
                    setSuccess(mat_khau);}
                // }
                // if(mat_khau2.value==""){
                //     setError (mat_khau2, "Mời nhập mật khẩu");
                //      isCheck = false;
                    
                // }else if(mat_khau2.value!= mat_khau.value){
                //     setError (mat_khau2, "Xác nhận mật khẩu sai");
                //      isCheck = false;
                // }else {
                //     setSuccess(mat_khau2);
                // }
               
                // if(ho_ten.value==""){
                //     setError (ho_ten, "Mời nhập họ tên");
                //      isCheck = false;
                // }else {
                //     setSuccess(ho_ten);
                // }
                // if (email.value== '') {
                //     setError(email, 'Email không được để trống');
                //     isCheck = false;
                // } else if (!isEmail(email.value)) {
                //     setError(email, 'Email không đúng định dạng');
                //     isCheck = false;
                // } else {
                //     setSuccess(email);
                // }
                return isCheck
            }
        </script> -->
    </head>
<body>
    <div class="row_login_center">
        <h2 class="alert alert-danger">ĐĂNG KÝ THÀNH VIÊN</h2>
      
        <form action="dangky.php" method="post" enctype='multipart/form-data'  onsubmit="return vali()">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input name="ma_kh" class="form-control"  id="ma_kh" value="<?=$ma_kh?>" maxlength="14">
                <small></small>
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input name="mat_khau" type="password" id="mat_khau" class="form-control"  value="<?=$mat_khau?>" > 
                <small></small>
            </div>
            <div class="form-group">
                <label>Xác nhận mật khẩu</label>
                <input name="mat_khau2" type="password" class="form-control" id="mat_khau2"  value="<?=$mat_khau2?>">
                <small></small>
            </div>
            <div class="form-group">
                <label>Họ và tên</label>
                <input name="ho_ten" class="form-control" id="ho_ten"  value="<?=$ho_ten?>">
                <small></small>
            </div>
            <div class="form-group">
                <label>Địa chỉ email</label>
                <input name="email" class="form-control" type="email" id="email"  value="<?=$email?>">
                <small></small>
            </div>
            <div class="form-group">
                <label>Hình</label>
                <input name="hinh" class="form-control" type="file" >
               
            </div>
            <div class="btns-login">
                <input name="dang-ky" type="submit" class="btn-login" value="Đăng ký" >
                <a class="back" href="../trang-chinh/index.php"><i class="fa-solid fa-circle-arrow-left"></i><span>Quay lại trang chủ</span></a>
            

            </div>
 
           
            <!-- Giá trị mặc định-->
            <input name="vai_tro" value="0" type="hidden">
            <input name="kich_hoat" value="0" type="hidden">
            <div class="thongbao" style="text-align:center;font-family: Mergeblack; ">
<?php
   if(isset($thongbao)&& ($thongbao!=""))
   echo $thongbao;
   ?>
        </form> 
        
             
        
    
           
       
</div>





</body>
</html>
<?php 
// require_once "../../dao/khach-hang.php";
 

// if (isset($_POST["dang-ky"])) {
//     //lấy thông tin từ các form bằng phương thức POST
//     $ma_kh = $_POST["ma_kh"];
//     $mat_khau = $_POST["mat_khau"];
//     $mat_khau2 = $_POST["mat_khau2"];

//     $ho_ten = $_POST["ho_ten"];
//     $email = $_POST["email"];
//     $hinh = $_FILES['hinh']['name'];
//     $target_dir = "../../content/uploads/";
//     $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
//     if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
//         // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
//     } else {
//         //    echo "Sorry, there was an error uploading your file.";
//     }

//     if ($ma_kh == "" && $mat_khau == "" && $ho_ten == "" &&$email == "") {
//         echo"Bạn vui lòng nhập đầy đủ thông tin <br/>";
//     }else   if ($ma_kh == "" || $mat_khau == "" || $ho_ten == "" || $email == ""){
//         if(strlen($ma_kh)==0) {
//             echo "Mời nhập tên đăng nhập<br/>";  
//         }else if(strlen($ma_kh)>11) {
//             echo "Tên đăng nhập quá dài <br/>";
//         }else   if(strlen($ma_kh)<4) {
//             echo "Tên đăng nhập quá ngắn <br/>";
//         }
//         if(strlen($mat_khau)==0) {
//             echo "Mời nhập mật khẩu<br/>"; 
//         }else if(strlen($mat_khau)<5) {
//             echo "Mật khẩu quá ngắn <br/>";
//         }else  if($mat_khau != $mat_khau2){
//             echo"Xác nhận mật khẩu không đúng! <br/>";
//         }
        
      
//         $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
  
//         if(strlen($ho_ten)==0) {
//             echo "Mời nhập họ tên <br/>";
//         }
//         if(strlen($email)==0) {
//             echo "Mời nhập email<br/>"; 
        
//         }else  if(!preg_match($regex, $email)) {
            
//             echo "Email nhập không đúng<br/>"; 
        
            
//         }
       
//     }else{
//             // Kiểm tra tài khoản đã tồn tại chưa

//             // $user=checkusers($ma_kh);
            

//           if(khach_hang_exist($ma_kh)){
//             echo "Tài khoản đã tồn tại <br/>";
//           }else{
//               //thực hiện việc lưu trữ dữ liệu vào db
//             //   $sql = "INSERT INTO  khachhang( ma_kh, mat_khau, ho_ten,email, hinh  ) VALUES ('$ma_kh', '$mat_khau',  '$ho_ten', '$email','$hinh' )";
//             //   // thực thi câu $sql với biến conn lấy từ file connection.php
//             //      mysqli_query($conn,$sql);
//             $kh = khachhang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh);
//             // header("Location: ../trang-chinh/index.php?page=dangky");
//                  echo "Chúc mừng bạn đã đăng ký thành công";
//           }
                              
          
//     }
// }  ?>   </div>
