
    


   <head>
    <link rel="stylesheet" href="../../content/css/mains.css">
    <link rel="stylesheet" href="../../content/css/shops.css">
    <style>
        .dishes a{
            font-family: Mergeblack;

        }
    </style>
</head>

<section class="banner">
        <?php require_once "banner.php"?>
    </section>
<section class="module">
            <div class="new">
            <h2><span>NEW</span><span>ARRIVALS</span>  </h2>
            <h2><span>NEW</span><span>ARRIVALS</span>  </h2>
                <h2><span>NEW</span><span>ARRIVALS</span>  </h2>
            </div>
            <div class="module-content">
                <a href="index.php?page=shop&" class="img-box"><img src="https://theme.hstatic.net/1000306633/1000891824/14/block_home_category1_new.png?v=41" alt="" style="height: 600px; border-radius: 15px"></a>
            </a>
            
           
                <a class="img-box" href="index.php?page=shop&">
                    <img src="https://theme.hstatic.net/1000306633/1000891824/14/block_home_category2_new.png?v=41" style="height: 600px;border-radius: 15px"alt="">
                </a>
            
         
                <a class="img-box" href="index.php?page=shop&">
                    <img src="https://theme.hstatic.net/1000306633/1000891824/14/block_home_category3_new.png?v=41" style="height: 600px;border-radius: 15px" alt="">
               
                </a>
        </div>
        </section>
        <section class="content">
          
      
<?php
   $kq= load_sp_db();
?>

<div class="hot-sale">
                    <h2>HOT SALE</h2>
                </div>
<div id="sanpham" class="data ">   
        <?php foreach ($kq as $hh) { ?>
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
<?php }?>
</div>
        </section>
 
        <section class="last-line">
            <div class="text-line">
                <h2><span class="ani-text ani-text-1"> STREETWEAR</span>
                         <span class="ani-text ani-text-2">BAND</span> 
                         <span class="ani-text ani-text-3"> LIMITED</span>

                </h2>
            </div>
        </section>
