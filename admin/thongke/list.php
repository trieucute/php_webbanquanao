<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../../content/css/hanghoaadminn.css">
    </head>
    <body>
        
        <div class="add-text"><h2>THỐNG KÊ HÀNG HÓA TỪNG LOẠI</h2></div>
        <div class="form-group"  style=" text-align: left;">
        <button type="submit" style=" text-align: left;"><a href="index.php?chart"   >Xem biểu đồ</a></button>
        </div>
        <table  border="1" style="font-size: 17px;margin-top: 30px;" class="sp-table">
          
                <tr>
                    <th>LOẠI HÀNG</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
        
            <?php
                foreach ($items as $item){
                    extract($item);
            ?>
                <tr>
                    <td><?=$ten_loai?></td>
                    <td><?=$so_luong?></td>
                
                    <td>$<?=number_format($gia_max,2)?></td>
                    <td>$<?=number_format($gia_min,2)?></td>
                    <td>$<?=number_format($gia_avg,2)?></td>
                </tr>
            <?php
                }
            ?>
            
        </table>
        
    </body>
</html>
