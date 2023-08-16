

<?php

$kq=load_sp_db();

?>


<div id="sanpham" class="data ">   
        <?php foreach ($kq as $hh) { ?>
            <div class="flex-row-sp">
                <div class="row-sp">       
                    <a href="index.php?page=chitiet&ma_hh=<?=$hh['ma_hh']?>"><img src="<?=$img_path?><?php echo $hh['hinh']?>" height= "250" width="100%" ></a>
                    <h5> <a href="index.php?page=chitiet&ma_hh=<?=$hh['ma_hh']?>"><?=$hh['ten_hh']?> </a> </h5>
                    
                    <div class="gia"> <?=$hh['don_gia']?>$</div>
                    <div class="btn">
  
                        <button class="btn-order"><span>GIỎ HÀNG</span> </button>
                    </div>
                </div>
            </div>
<?php }?>
</div>