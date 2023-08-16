<head>
    <link rel="stylesheet" href="../../content/css/hanghoaadminn.css">
</head>
    <!-- </select>
    <input type="submit" name="listok" value="Submit">
</form>  -->
<div class="add-text"><h2>DANH SÁCH HÀNG HOÁ</h2></div>
<form action="" method="post">
<div class="form-group" style="   text-align: left;">
                <button type="submit" name="themmoi" value="Thêm mới"><a href="index.php">Thêm mới hàng hoá</a> </button>
            </div></form>
<?php if(isset($_POST['delete']) && isset($_POST['deleteid'])  ){
    foreach($_POST['deleteid'] as $deleteid){
       $delete = "delete from hanghoa where ma_hh= $deleteid";
       pdo_execute($delete);
    }
}?>
<table border="1" style="font-size: 17px;" class="sp-table">
    <tr>
        <th></th>
       <th>Mã</th>
        <th>Tên hàng hoá</th>
        
        <th>Hình</th>
        <th>Giá</th>
        <th>Giảm giá</th>

        <th>Lượt xem</th>
        
        <th></th>
<th></th>

    </tr>

    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'x-shop');
    // BƯỚC 2: TÌM TỔNG SỐ RECORDS
    $result = mysqli_query($conn, 'select count(ma_hh) as total from hanghoa');
    $row = mysqli_fetch_assoc($result);
    $total_records = $row['total'];

    // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 4;

    // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
    // tổng số trang
    $total_page = ceil($total_records / $limit);

    // Giới hạn current_page trong khoảng 1 đến total_page
    if ($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }

    // Tìm Start
    $start = ($current_page - 1) * $limit;

    // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
    // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
    $result = mysqli_query($conn, "SELECT * FROM hanghoa LIMIT $start, $limit");

    ?>
    <div>
      
        <?php 
        // PHẦN HIỂN THỊ TIN TỨC
        // BƯỚC 6: HIỂN THỊ DANH SÁCH TIN TỨC
        while ($sp = mysqli_fetch_assoc($result)){
            $suasp="index.php?hanghoa_sua&ma_hh=".$sp['ma_hh'];
                $xoasp="index.php?hanghoa_xoa&ma_hh=".$sp['ma_hh'];
                $urlHinhpath=$img_path . $sp['hinh']; // đường dẫn hình
                // $urlHinhss=trim($urlHinhpath);
                if(is_file($urlHinhpath)){
                  
                    $urlHinhs="<img src='".$urlHinhpath."' height='70'>";
                }else{
                    $urlHinhs="NO PHOTO";
                }
            echo '<tr>
            <td style="text-align: center;"><input type="checkbox" name="deleteid[]"  value="'.$sp['ma_hh'].'  "></td>
                    <td>'.$sp['ma_hh'].'</td>
                    
                    <td>'.$sp['ten_hh'].'</td>
                   
                    <td>'.$urlHinhs.'</td>
                    <td>'.$sp['don_gia'].'$</td>
                    <td>'.$sp['giam_gia'].'$</td>
    
                    <td>'.$sp['luot_xem'].'</td>
                    <td><a href=" '.$xoasp.' " value="xoa">Xóa</a> </td>
                    <td> <a href=" '.$suasp.'">Sửa</a></td>
                    
    
                </tr>';
        }
        ?>
    </div></table>
    <nav aria-label="Page navigation example">
    <ul class="pagination">
       <?php 
        // PHẦN HIỂN THỊ PHÂN TRANG
        // BƯỚC 7: HIỂN THỊ PHÂN TRANG

        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
        if ($current_page > 1 && $total_page > 1){
            echo '<li class="page-item"><a class="page-link" href="index.php?hanghoa_list&page='.($current_page-1).'">Previous</a></li> ';
        }

        // Lặp khoảng giữa
        for ($i = 1; $i <= $total_page; $i++){
            // Nếu là trang hiện tại thì hiển thị thẻ span  
            // if ($i == $current_page){
            //     echo '<span>'.$i.'</span> | ';
            // }
            // else{
                echo ' <li class="page-item"><a class="page-link" href="index.php?hanghoa_list&page='.$i.'">'.$i.'</a> </li> ';
            // }
        }

        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
        if ($current_page < $total_page && $total_page > 1){
            echo ' <li class="page-item"><a class="page-link" href="index.php?hanghoa_list&page='.($current_page+1).'">Next</a> </li> ';
        }


    ?></ul>
    </nav>  
    <!-- <img src="./1.jpg" alt=""> -->

