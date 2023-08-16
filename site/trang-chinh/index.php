
<?php
ob_start();
require "../../dao/pdo.php";
require '../../global.php';
require "../../dao/loai.php";
require "../../dao/sanpham.php";
require "../../dao/khach-hang.php";

extract($_REQUEST);
if (exist_param("gioi_thieu")) {
    $VIEW_NAME = "gioithieu.php";
} else if (exist_param("lien_he")) {
    $VIEW_NAME = "lienhe.php";
} else if (exist_param("hoi_dap")) {
    $VIEW_NAME = "trang-chinh/hoi-dap.php";
} else {

    $VIEW_NAME = "trang-chinh/home.php";
}

require '../layout.php';  ?>
        
  

