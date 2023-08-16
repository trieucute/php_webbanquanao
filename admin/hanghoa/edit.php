<head>
    <link rel="stylesheet" href="../../content/css/hanghoaadmins.css">
</head>

<?php 
  
      
        $urlHinhpath=$img_path.$hinh; // đường dẫn hình
        if(is_file($urlHinhpath)){
            $urlHinhs ="<img src=' ".$urlHinhpath." ' height='50'>";
        }else{
            $urlHinhs="NO PHOTO";
        }
        ?>
<div class="add-sp">
    <div class="add-text"><h2>CẬP NHẬT HÀNG HOÁ</h2></div>
    <div class="row-add-sp">
        <form action="index.php" method="post" id="form-add-sp" enctype="multipart/form-data" autofocus>
           
            <div class="forms-group">
            <label for="">Mã hàng hoá</label>
                <input type="text" name="ma_hh" readonly class="form-contronls"  value="<?=$ma_hh?>" readonly disabled>  
            </div>
           
            
            <div class="forms-group">
               <label for=""> Danh mục </label>
               <select name="ma_loai" id="">
                    <?php
                     $listdanhmuc = loai_select_all();
                    foreach ($listdanhmuc as $danhmuc){
                        // extract($danhmuc);
                        if($danhmuc['ma_loai']==$ma_loai) 
                           
                            echo "<option value= ' {$danhmuc['ma_loai'] }' selected  >'{$danhmuc['ten_loai']}' </option>";
                        else
                         echo "
                         <option value= ' {$danhmuc['ma_loai'] }'  >' {$danhmuc['ten_loai']}' </option>";
                      
                    } ?>
                </select>
            </div>
            <div class="forms-group">
            <label for=""> Tên hàng hoá</label>
                <input type="text" name="ten_hh" class="form-contronls"  value="<?=$ten_hh?>">
            </div>
         
            <div class="forms-group">
            <label for="">Giá</label>
                <input type="number" name="don_gia" id=""class="form-contronls"  value="<?=$don_gia?>">  
            </div>
            <div class="forms-group">
            <label for="">Giảm giá</label>
                <input type="number" name="giam_gia"class="form-contronls"  value="<?=$giam_gia?>">  
            </div>
          
            <div class="forms-group">
            <label for="">Hình </label>
                <input type="file"  name="hinh" id="" class="form-contronls"  value="<?=$hinh?>">
          <?=$urlHinhs?>
            </div>
            <div class="forms-group">
            <label for="">Đặc biệt</label>
                <input type="radio" name="dac_biet" id="" value="1" <?=$dac_biet==1? "checked" : ""?>>Đặc biệt
                <input type="radio" name="dac_biet" id="" value="0" <?=$dac_biet==0? "checked" : ""?>>Bình thường  

            </div>
            <div class="forms-group">
            <label for="">Ngày nhập</label>
                <input type="date" name="ngay_nhap" id=""class="form-contronls" value="<?=$ngay_nhap?>">  
            </div>
            <div class="forms-group">
            <label for="">Số lượt xem</label>
                <input type="number" name="luot_xem" id="" class="form-contronls"  value="<?=$luot_xem?>">  
            </div>
            <div class="forms-group">
            <label for="">Mô tả</label>
            
            <textarea name="mo_ta" id="" rows="5"  class="form-contronls"><?=$mo_ta?></textarea>
                
            </div>
            <div class="forms-group">
                <input type="" hidden name="ma_hh" value="<?=$ma_hh?>">
                <button type="submit" name="capnhat" >Cập nhật</button>
                
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