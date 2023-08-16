
<head>
    <link rel="stylesheet" href="../../content/css/headerss.css">
    <link rel="stylesheet" href="../../content/fontawesome-free-6.1.1-web/css/all.css">

</head>
<style>


</style>
<?php
session_start();
// $username = [];
// $user = (isset($_SESSION['user'])) ? $_SESSION['user'] : [];
// $user= $_SESSION['ma_kh'];
?>

<div class="header fix">

    <div class="logo">
        <a href="../trang-chinh/"><img src="https://theme.hstatic.net/1000378196/1000788468/14/logo.png?v=61" alt="logo"></a>
    </div>
    <div class="menu">
        <ul class="menu-list">

            <li><a href="../trang-chinh/">HOME</a></li>
            <li class="menu-shop-block"><a href="../hanghoa/shop.php">SHOP</a>
                <ul class="menu-shop">
                    <?php
                    $listdanhmuc = loai_select_all();
                    foreach ($listdanhmuc as $dm) {

      
                        echo '
                              <li><a href="../hanghoa/shop.php?ma_loai=' . $dm['ma_loai'] . '" >' . $dm['ten_loai'] . '</a></li>';
                              
                            
                    }
                    ?>
                   
                </ul>
            </li>
           
            
            <li><a href="../trang-chinh?gioi_thieu">ABOUT US</a></li>

            <li><a href="../trang-chinh?lien_he">CONTACT</a></li>
            <li><a href="">OUTFITS</a></li>
        </ul>

    </div>
    <div class="user">
        <ul>
            <li>
                <form method="POST" action="../hanghoa/shop.php">
                    <input type="hidden">
                    <input type="text"  name="tukhoa" placeholder="Tìm kiếm">
                    <button type="submit" name="timkiem"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </li>
            <li><a href=""><i class="fa-solid fa-cart-shopping"></i></a></li>


            <li>
          
               
            <li> 
            <?php   if(isset($_SESSION['user']['ma_kh']) && ($_SESSION['user']['ma_kh'])!=""){?>
            <a href="../tai-khoan/dangnhap.php?infor"><?=$_SESSION['user']['ma_kh']?></a>
                   <ul class="drop-menu-login">
                    <li><a href="../tai-khoan/dangnhap.php?infor">Tài khoản</a></li>
                    <li><a href="../tai-khoan/dangnhap.php?btn_logoff">Đăng xuất</a></li>

                </ul>
                
                <?php }else{
                ?><a href="../tai-khoan/dangnhap.php">LOGIN</a>
                    
                <ul class="drop-menu-login">
            
                    <li><a href="../tai-khoan/dangky.php">Đăng ký</a></li>
                    <li><a href="../tai-khoan/dangnhap.php">Đăng nhập</a></li>

                </ul>
                <?php }?>
            </li>

        </li>



        </ul>
    </div>


</div>