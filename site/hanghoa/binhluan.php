<style>
    .binhluan{
    font-family: Mergeblack;
        text-align: center;
        border: 1px solid gray;
        width: 90%;
        margin: 0 auto;
        border-radius: 10px;
    }
    .binhluan h3{
        text-align: left;
        padding: 0 10px;
        background-color: gray;
        margin: 0 0;
        border-radius: 10px 10px 0 0;
        color: white;
    }
    .form-bl{
        width: 100%;
    }
    .form-bl input{
        width: 90%;
        border-radius: 10px 0 0 10px;
        height: 30px;
        margin: 10px 0;
    }
    .form-bl button{
    font-family: Mergeblack;
    padding: 6px 10px;
    
    }
    .binhluan li:first-child{
        list-style:circle;
    }
    .binhluan li:last-child{
        padding-right: 10px;
    }
    .binhluan ul{
        display: flex;
        justify-content: space-between;
    }
</style>
<div class="binhluan">
    <h3>Bình luận</h3>
<?php
require_once "../../global.php";
require_once "../../dao/binh-luan.php";
//--------------------------------//

foreach($bl_list as $bl){
    echo ' <ul>
    <li>'.$bl['noi_dung'].'</li>
            <li><i><b>'.$bl['ma_kh'].' </b> : '.$bl['ngay_bl'].'</i></li>
    </ul>';
}
if(!isset($_SESSION['user'])){
    echo '<b><a href="../tai-khoan/dangnhap.php" style="color:blue;">Đăng nhập </a>để bình luận về sản phẩm này</b>';
}else{
    ?>
<form action="<?=$_SERVER["REQUEST_URI"]?>" method="post" class="form-bl">
<input type="text" name="noi_dung" value=""><button type="submit">Gửi</button>

</form>
<?php }?>
</div>