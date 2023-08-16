<head>
    <link rel="stylesheet" href="../../content/css/khachhangadmin.css">
</head>
<?php
$urlHinhpath=$img_path.$hinh; // đường dẫn hình
        if(is_file($urlHinhpath)){
            $urlHinhs ="<img src=' ".$urlHinhpath." ' height='50'>";
        }else{
            $urlHinhs="NO PHOTO";
        }?>
<div class="add-sp">
    <div class="add-text"><h2>CẬP NHẬT KHÁCH HÀNG</h2></div>
    <div class="row-add-sp">
        <form action="index.php" method="post" id="form-add-sp" enctype="multipart/form-data">
            <div class="forms-group-col2 ">
            <label for="">Mã khách hàng (Tên đăng nhập)</label>
                <input type="text" name="ma_kh"   class="form-contronls" value="<?=$ma_kh?>" readonly disabled>  
            </div>
            <div class="forms-group-col2 ">
               <label for=""> Họ tên </label>
                <input name="ho_ten"  type="text" id=""class="form-contronls"value="<?=$ho_ten?>">
            </div>
            
           
            <div class="forms-group-col2 ">
            <label for=""> Mật khẩu</label>
                <input type="password" name="mat_khau" class="form-contronls" value="<?=$mat_khau?>">
            </div>
            <div class="forms-group-col2 ">
            <label for=""> Xác nhận mật khẩu</label>
                <input type="password" name="mat_khau2" class="form-contronls" value="<?=$mat_khau?>">
            </div>
         
            <div class="forms-group-col2 ">
            <label for="">Email</label>
                <input type="email" name="email" id=""class="form-contronls" value="<?=$email?> ">  
            </div>
          
            <div class="forms-group-col2 ">
            <label for="">Hình </label>
                <input type="file"  name="hinh" id="" class="form-contronls" value="<?=$hinh?> ">
            <?=$urlHinhs?>
            </div>
            <div class="forms-group-col2 ">
            <label for="">Kích hoạt</label>
            <input type="radio" name="kich_hoat"  value="0" <?=$vai_tro==0? "checked" : ""?>>Chưa kích hoạt
                <input type="radio" name="kich_hoat"  value="1" <?=$vai_tro==1? "checked" : ""?>>Kích hoạt
                

            </div>
            <div class="forms-group-col2 ">
            <label for="">Vai trò</label>
            <input type="radio" name="vai_tro" value="0" <?=$vai_tro==0? "checked" : ""?>>Khách hàng
            <input type="radio" name="vai_tro"  value="1"<?=$vai_tro==1? "checked" : ""?> >Nhân viên
            

            </div>
           
            <div class="forms-group-col2 ">
            <input type="" name="ma_kh"  hidden class="form-contronls" value="<?=$ma_kh?>" >  
                <button type="submit" name="capnhat" >Cập nhật</button>
                
                <button type="reset">Nhập lại</button>
                <a href="index.php?kh_list" name="list">  Danh sách</a>
            </div>
            <div class="forms-group-col2 ">
            <?php 
                if(isset($thongbao)&& ($thongbao!=""))
                echo $thongbao;?></div>
        </form>
    </div>
</div>