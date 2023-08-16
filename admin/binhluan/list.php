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
<div class="add-text"><h2>TỔNG HỢP BÌNH LUẬN</h2></div>


<table border="1" style="font-size: 17px;margin-top: 30px" class="sp-table" >
    <tr>
        <th></th>
       <th>Hàng hoá</th>
        <th>Số bình luận</th>
        
        <th>Mới nhất</th>
        <th>Cũ nhất</th>
        
        
     
<th></th>

    </tr>

    <?php


    
    foreach($list_bl as $bl){
        extract($bl);
        $chitiet="index.php?ma_hh=".$bl['ma_hh'];
   
      

        echo '<tr>
        <td style="text-align: center;"><input type="checkbox" name="ma_hh[]"  value="'.$bl['ma_hh'].'  "></td>
           
                
                <td>'.$bl['ten_hh'].'</td>
                <td>'.$bl['so_luong'].'</td>
                <td>'.$bl['cu_nhat'].'</td>
                <td>'.$bl['moi_nhat'].'</td>
             
                <td style="text-align:center"> <a href=" '.$chitiet.'" style="text-ailgn:center">Chi tiết</a></td>
                

            </tr>';
    
    }
    ?>
    <!-- <img src="./1.jpg" alt=""> -->
</table>