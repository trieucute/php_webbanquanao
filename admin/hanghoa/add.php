<head>
    <link rel="stylesheet" href="../../content/css/hanghoaadmins.css">
</head>

<div class="add-sp">
    <div class="add-text"><h2>THÊM MỚI HÀNG HOÁ</h2></div>
    <div class="row-add-sp">
        <form action="index.php" method="post" id="form-add-sp" enctype="multipart/form-data">
            <div class="forms-group">
            <label for="">Mã hàng hoá</label>
                <input type="text" name="ma_hh"  readonly disabled class="form-contronls">  
            </div>
            <div class="forms-group">
               <label for=""> Danh mục </label>
                <select name="ma_loai" id=""class="form-contronls">

                    <?php 
                      $listdanhmuc = loai_select_all();
                      foreach ($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        echo '<option value=" '.$ma_loai.'">" '.$ten_loai.'"</option>';
                    } ?>
                </select>
            </div>
            
           
            <div class="forms-group">
            <label for=""> Tên hàng hoá</label>
                <input type="text" name="ten_hh" class="form-contronls">
            </div>
         
            <div class="forms-group">
            <label for="">Giá</label>
                <input type="number" name="don_gia" id=""class="form-contronls" >  
            </div>
            <div class="forms-group">
            <label for="">Giảm giá</label>
                <input type="number" name="giam_gia"class="form-contronls">  
            </div>
          
            <div class="forms-group">
            <label for="">Hình </label>
                <input type="file"  name="hinh" id="" class="form-contronls">

            </div>
            <div class="forms-group">
            <label for="">Đặc biệt</label>
                <input type="radio" name="dac_biet" id="" value="1">Đặc biệt
                <input type="radio" name="dac_biet" id="" value="0" checked>Bình thường  

            </div>
            <div class="forms-group">
            <label for="">Ngày nhập</label>
                <input type="date" name="ngay_nhap" id=""class="form-contronls" >  
            </div>
            <div class="forms-group">
            <label for="">Số lượt xem</label>
                <input type="number" name="luot_xem" id="" class="form-contronls">  
            </div>
            <div class="forms-group">
            <label for="">Mô tả</label>
            
            <textarea name="mo_ta" id="" rows="5"  class="form-contronls"></textarea>
                
            </div>
            <div class="forms-group">
                <button type="submit" name="themmoi" value="Thêm mới">Thêm mới</button>
                
                <button type="reset">Nhập lại</button>
                <a href="index.php?hanghoa_list" name="list">  Danh sách</a>
            </div>
            <div class="forms-group">
            <?php 
                if(isset($thongbao)&& ($thongbao!=""))
                echo $thongbao;?></div>
        </form>
    </div>
</div>