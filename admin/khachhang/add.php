<head>
    <link rel="stylesheet" href="../../content/css/khachhangadmin.css">
</head>

<div class="add-sp">
    <div class="add-text"><h2>THÊM MỚI KHÁCH HÀNG</h2></div>
    <div class="row-add-sp">
        <form action="index.php" method="post" id="form-add-sp" enctype="multipart/form-data">
            <div class="forms-group-col2 ">
            <label for="">Mã khách hàng (Tên đăng nhập)</label>
                <input type="text" name="ma_kh"   class="form-contronls">  
            </div>
            <div class="forms-group-col2 ">
               <label for=""> Họ tên </label>
                <input name="ho_ten"  type="text" id=""class="form-contronls">
            </div>
            
           
            <div class="forms-group-col2 ">
            <label for=""> Mật khẩu</label>
                <input type="password" name="mat_khau" class="form-contronls">
            </div>
            <div class="forms-group-col2 ">
            <label for=""> Xác nhận mật khẩu</label>
                <input type="password"class="form-contronls" name="mat_khau2">
            </div>
         
            <div class="forms-group-col2 ">
            <label for="">Email</label>
                <input type="email" name="email" id=""class="form-contronls" >  
            </div>
          
            <div class="forms-group-col2 ">
            <label for="">Hình </label>
                <input type="file"  name="hinh" id="" class="form-contronls">

            </div>
            <div class="forms-group-col2 ">
            <label for="">Kích hoạt</label>
            <input type="radio" name="kich_hoat"  value="0" >Chưa kích hoạt
                <input type="radio" name="kich_hoat"  value="1" checked>Kích hoạt
                

            </div>
            <div class="forms-group-col2 ">
            <label for="">Vai trò</label>
            <input type="radio" name="vai_tro" value="0" checked>Khách hàng
            <input type="radio" name="vai_tro"  value="1" >Nhân viên
            

            </div>
           
            <div class="forms-group-col2 ">
                <button type="submit" name="themmoi" value="Thêm mới">Thêm mới</button>
                
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