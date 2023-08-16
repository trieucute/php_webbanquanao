<?php   
    require "../../dao/pdo.php";
    require '../../global.php';
    require '../../dao/loai.php';
  require "../../dao/sanpham.php";
    extract($_REQUEST);
    if(exist_param("ma_loai")){
        $sp = sp_one($ma_loai);
        // print_r($sp);  
        $tendm = load_tendmsp($ma_loai);
    }else if(exist_param("tukhoa")){
        $sp=kq_timkiem($tukhoa);

    }else{
        $sp= sp_all();

    }
  
    $VIEW_NAME = "../hanghoa/shop-ui.php";

    require "../layout.php";
    ?> 