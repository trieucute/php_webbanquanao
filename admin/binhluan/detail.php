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
<div class="add-text"><h2>CHI TIẾT BÌNH LUẬN</h2></div>
<form action="" method="post">
<div class="form-group" style="   text-align: left;">
                <button type="submit" ><a href="index.php">Tổng hợp bình luận</a> </button>
                

            
          
                <!-- <input type="submit" name="delete" value="Xoá"> -->
                

            </div></form>

<table border="1" style="font-size: 15px;" class="sp-table">
<tr ><h3>Hàng hoá: <?=$list_bl[0]['ten_hh']?></h3></tr>
    <tr>
        <th></th>
       <th>Nội dung</th>
        <th>Ngày bình luận</th>
        
        <th>Người bình luận</th>
  
        
        
     
<th></th>

    </tr>

    <?php


    
    foreach($list_bl as $bl){
        extract($bl);
        $xoa="index.php?xoa_bl&ma_bl=".$bl['ma_bl'];
   
      

        echo '<tr>
        <td style="text-align: center;"><input type="checkbox" name="ma_bl[]"  value="'.$bl['ma_bl'].'  "></td>
           
                
                <td>'.$bl['noi_dung'].'</td>
                <td>'.$bl['ngay_bl'].'</td>
                <td>'.$bl['ma_kh'].'</td>
   
             
                <td style="text-align:center"> <a href=" '.$xoa.'" >Xoá</a></td>
                

            </tr>';
    
    }
    ?>
    <!-- <img src="./1.jpg" alt=""> -->
</table>