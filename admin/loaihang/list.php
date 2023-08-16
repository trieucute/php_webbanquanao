<head>
    <link rel="stylesheet" href="../../content/css/hanghoaadminn.css">
</head>
<div class="add-text"><h2>DANH SÁCH LOẠI HÀNG</h2></div>
<div class="form-group" style="   text-align: left;">
                <button type="submit" value="Thêm mới"><a href="index.php?themmoi">Thêm mới sản phẩm</a> </button>
                

            </div>

        <table border="1" style="font-size: 17px;" class="sp-table" >
            <tr>
                <th></th>
            <th>STT</th>
                <th>MÃ LOẠI</th>
                <th>TÊN LOẠI</th>
                <th>Xóa</th>
                <th>Sửa</th>
               
            </tr>
            <?php
            $i=1;
            foreach ($listdanhmuc as $key => $danhmuc) {
                extract($danhmuc);
                $suadm="index.php?loaihang_sua&ma_loai=".$ma_loai;
                $xoadm="index.php?loaihang_xoa&ma_loai=".$ma_loai;
                echo'<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$i.'</td>
                <td>'.$ma_loai.'</td>
                <td>'.$ten_loai.'</td>
                <td><a href=" '.$xoadm.' " value="xoa">Xóa</a> </td>
                <td> <a href=" '.$suadm.'">Sửa</a></td>
            </tr>';
            $i++;
            }
            
            
            
            ?>

        </table>
   
   
