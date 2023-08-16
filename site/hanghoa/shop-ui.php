<head>
    <link rel="stylesheet" href="../../content/css/shops.css">
</head>

<div class="hot-sale">
                    <h2><strong> <?php if(isset($tendm)){ print_r($tendm);}else{
                        echo "Sản phẩm";
                    } ?></strong></h2>
                </div>
<div id="sanpham" class="data ">   

        <?php 
     
        foreach ($sp as $hh) {  
             extract($hh);?>
      
            <div class="flex-row-sp">
                <div class="row-sp">       
                    <a href="../hanghoa/chitietsp.php?ma_hh=<?=$hh['ma_hh']?>"><img src="<?=$img_path?><?php echo $hh['hinh']?>" height= "250" width="100%" ></a>
                    <h5> <a href="../hanghoa/chitietsp.php?ma_hh=<?=$hh['ma_hh']?>"><?=$hh['ten_hh']?> </a> </h5>
                    
                    <div class="gia"> <?=$hh['don_gia']?>$</div>
                    <div class="btn">
  
                        <button class="btn-order"><span>GIỎ HÀNG</span> </button>
                    </div>
                </div>
            </div>
<?php }?></div>