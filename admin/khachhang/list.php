<head>
    <link rel="stylesheet" href="../../content/css/hanghoaadminn.css">
</head>
<!-- <form action="index.php?act=sanpham" method="post">
    <input type="text" name="kw">
    <select name="iddm" >
        <option value="0" selected>Tất cả</option>
    <?php
        //  foreach ($listdanhmuc as $danhmuc){
        // extract($danhmuc);
        // echo '<option value="'.$id.'">"'.$tenDM.'"</option>';
        // } 
        ?>

    </select>
    <input type="submit" name="listok" value="Submit">
</form> -->
<div class="add-text"><h2>DANH SÁCH KHÁCH HÀNG</h2></div>
<form action="" method="post">
<div class="form-group" style="   text-align: left;">
                <button type="submit" name="themmoi" value="Thêm mới"><a href="index.php">Thêm mới khách hàng</a> </button>
                

            
          
                <!-- <input type="submit" name="delete" value="Xoá"> -->
                

            </div></form>

<table border="1" style="font-size: 17px;" class="sp-table">
    <tr>
        <th></th>
       <th>Mã KH</th>
        <th>Họ và tên</th>
        
        <th>Email</th>
        <th>Hình ảnh</th>
        <th>Vai trò</th>

        
        
        <th></th>
<th></th>

    </tr>

    <?php

    $i=1;
    
    foreach($listkh as $kh){
        extract($kh);
        $suakh="index.php?kh_sua&ma_kh=".$kh['ma_kh'];
        $xoakh="index.php?kh_xoa&ma_kh=".$kh['ma_kh'];
        $urlHinhpath=$img_path . $hinh; // đường dẫn hình
        // $urlHinhss=trim($urlHinhpath);
        if(is_file($urlHinhpath)){
          
            $urlHinhs="<img src='".$urlHinhpath."' height='80'>";
        }else{
            $urlHinhs="NO PHOTO";
        }


        echo '<tr>
        <td style="text-align: center;"><input type="checkbox" name="deleteid[]"  value="'.$kh['ma_kh'].'  "></td>
                <td>'.$kh['ma_kh'].'</td>
                
                <td>'.$kh['ho_ten'].'</td>
               <td>'.$kh['email'].'</td>
                <td>'.$urlHinhs.'</td>';
        ?>
                <td><?=($vai_tro==1)? "Nhân viên" : "Khách hàng"?></td>

       <?php
              echo'  <td><a href=" '.$xoakh.' " value="xoa">Xóa</a> </td>
                <td> <a href=" '.$suakh.'">Sửa</a></td>
                

            </tr>';
        $i++;
     
    }
    ?>
    <!-- <img src="./1.jpg" alt=""> -->
</table>