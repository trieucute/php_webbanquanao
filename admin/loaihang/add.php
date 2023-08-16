<head>
    <link rel="stylesheet" href="../../content/css/hanghoaadminn.css">
</head>
<div class="add-sp">
    <div class="add-text">
        <h2> THÊM MỚI LOẠI HÀNG</h2>
    </div>
    <div class="row-add-sp">
        <form action="index.php" method="post" id="form-add-sp">
            <div class="form-group">
                <label for="">Mã loại</label>
                <input type="text" name="ma_loai" value="auto number" class="form-control" disabled >
            </div>
            
                <div class="form-group">
                <label for="">Tên loại</label>
                <input type="text" name="ten_loai" id="">
            </div>
            <div class="form-group">
                <button type="submit" name="themmoi" value="Thêm mới">Thêm mới</button>
                <button type="reset" value="Nhập lại">Nhập lại</button>
                <a href="index.php?loaihang_list" name="list">Danh sách</a>
            </div>
            <?php 
                if(isset($thongbao)&& ($thongbao!=""))
                echo $thongbao;?>
        </form>
    </div>
</div>
<?php

?>