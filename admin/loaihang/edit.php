<head>
    <link rel="stylesheet" href="../../content/css/hanghoaadminn.css">
</head>



<div class="add-sp">
    <div class="add-text">
        <h2> CẬP NHẬT LOẠI HÀNG</h2>
    </div>
    <div class="row-add-sp">
        <form action="index.php" method="post" id="form-add-sp" autofocus>
            <div class="form-group">
                <label for="">Mã loại</label>
                <input type="text" name="ma_loai" value="auto number" class="form-control" disabled >
            </div>
            <div class="form-group">
                <label for="">Tên loại</label>
                <input type="text" name="ten_loai" value="<?=$ten_loai?>">
            </div>
           
            <div class="form-group">
                <input type="hidden" name="ma_loai" value="<?= $ma_loai?>">
                <button  name="capnhat"  type="submit">Cập nhật</button>
                <button type="reset" value="Nhập lại">Nhập lại</button>
                <a href="index.php?loaihang_list" name="loaihang_list">  Danh sách</a>
            </div>
            <?php 
                if(isset($thongbao)&& ($thongbao!=""))
                echo $thongbao;?>
        </form>
    </div>
</div>
<?php

?>