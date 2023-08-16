<head>
    <link rel="stylesheet" href="../../content/css/chitiet.css">
    <link rel="stylesheet" href="../../content/css/shops.css">

</head>
<?php

?>
    <div class="chitietsp">
        <div class="img-sp">
            <img src="<?=$img_path?><?= $loadsp['hinh'] ?>">
        </div>
        <div class="list-sp">
            <h1 class="name"><?= $loadsp['ten_hh']; ?></h1>
            <div class="gias"> <?= $loadsp['don_gia'] ?>$</div>
            <div class="size">
                <span>Size: </span>
                <select name="size" id="size-sp">
                    <option value="0" checked>Chọn size</option>
                    <option value="1">Size 1</option>
                    <option value="2">Size 2</option>
                    <option value="3">Size 3</option>
                    <option value="3">Size 4</option>
                </select>
            </div>
            <div class="sl">
                <span>Số lượng: </span><a href="">-</a><span>1</span><a href="">+</a>
            </div>
            <div class="btn-sp">
                <button class="btn-one"><span>THÊM VÀO GIỎ</span> </button>
            </div>
            <div class="mota">
            <?= $loadsp['mo_ta']; ?>
            </div>
        </div>
    </div>
    
    <?php
    require "binhluan.php";
    $kq=sp_one($ma_loai);

?>
 <hr style="margin: 30px 0">
<div class="hot-sale">
                    <h4 style="color: blue">SẢN PHẨM CÙNG LOẠI</h4>
                </div>
<div id="sanpham" class="data ">   
        <?php foreach ($kq as $hh) { ?>
            <div class="flex-row-sp">
                <div class="row-sp">       
                    <a href="index.php?chitietsp&ma_hh=<?=$hh['ma_hh']?>"><img src="<?=$img_path?><?php echo $hh['hinh']?>" height= "250" width="100%" ></a>
                    <h5> <a href="index.php?chitietsp&ma_hh=<?=$hh['ma_hh']?>"><?=$hh['ten_hh']?> </a> </h5>
                    
                    <div class="gia"> <?=$hh['don_gia']?>$</div>
                    <div class="btn">
  
                        <button class="btn-order"><span>GIỎ HÀNG</span> </button>
                    </div>
                </div>
            </div>
<?php }?>
</div>
