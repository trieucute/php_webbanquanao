<?php 
require_once "../../global.php";
// require_once "../../dao/sanpham.php";
// require_once "../../dao/loai.php";
// require_once "../../dao/connect.php";
// require_once "../../global.php";

$VIEW_NAME = "trangchinh/home.php";
require "../index.php";

            // if (isset($_GET['act'])) {
            //     $act = $_GET['act'];
            //     switch ($act) {
                    // case 'login':
                    //     if (isset($_POST['login']) && ($_POST['login'])) {
                    //         $ma_kh = $_POST['ma_kh'];
                    //         $mat_khau = $_POST['mat_khau'];
                    //         $conn = new PDO("mysql:host=localhost;dbname=x-shop;charset=utf8","root","");
                    //         $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    //         $sql = "select * from khachhang where ma_kh= ? and mat_khau= ? and vai_tro=1";
                    //         $stmt= $conn->prepare($sql);
                    //         $stmt->execute([ $ma_kh,$mat_khau]);
                    //         if( $stmt->rowCount()==1){
                    //             $user=$stmt->fetch();
                    //             $_SESSION['login-users']=$user['ma_kh'];
                    //             $_SESSION['login-mk']=$user['mat_khau'];
                    //             $_SESSION['login-vt']=$user['vai_tro'];

                    //             echo "thanh cong";
                    //             header('Location: ../../admin/index.php');
                    //             exit();
                    //         }
                    //         else{
                    //             echo "dang nhap sai";
                    //             header('Location: ../../site/tai-khoan/dangnhap-form.php');
                    //             exit();
                    //         }
                    
                    //     }
                    // case 'loaihang':
                        
                    //         if (isset($_POST['themmoi'])&&(($_POST['themmoi']))) {
                    //             $ten_loai=$_POST['ten_loai'];
                    //             loai_insert($ten_loai);
                    //             $thongbao = "Thêm thành công";
                               
                    //         }
                    //         include "../loaihang/add.php";

                    //         break;
                    //     case 'loaihang_list':
                        
                    //        $listdanhmuc = loai_select_all();


                    //         include "../loaihang/list.php";
                           
                    //         break;
                    //     case 'loaihang_xoa':
                    //         if (isset($_GET['ma_loai'])&&($_GET['ma_loai']>0)) {
                    //            loai_delete($_GET['ma_loai']);
                    //         $thongbao = "Đã xoá thành công";

                    //         }
                        
                    //         $listdanhmuc=loai_select_all();
                    //         include "../loaihang/list.php";

                    //         break;
                    //     case 'loaihang_sua':
                    //         if (isset($_GET['ma_loai'])&&($_GET['ma_loai']>0)) {
                             
                    //             $capnhatdm= loai_select_by_id($_GET['ma_loai']);
                    //             $thongbao = "Đã lấy thành công";
                
                    //         }
                    //         include "../loaihang/update.php";

                    //         break;
                    //     case 'updatelh':
                    //         if (isset($_POST['capnhat'])&&(($_POST['capnhat']))) {
                    //             $ten_loai=$_POST['ten_loai'];
                    //             $ma_loai=$_POST['ma_loai'];
                    //             loai_update($ma_loai, $ten_loai);
                    //             $thongbao='Cập nhật thành công';
                    //             $capnhatdm= loai_select_by_id($_POST['ma_loai']);

                    //             // echo $tb;
                    //         }
                       
                    //         $listdanhmuc=loai_select_all();
                    //         include "../loaihang/update.php";
                    //         break;
                    //     break;
            //         case 'hanghoa':
            //             if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
            //                 $ma_loai = $_POST['ma_loai'];
            //                 $ten_hh = $_POST['ten_hh'];
            //                 $don_gia = $_POST['don_gia'];
            //                 $mo_ta = $_POST['mo_ta'];
            //                 $hinh = $_FILES['hinh']['name'];
            //                 $target_dir = "../../content/uploads/";
            //                 $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            //                 if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
            //                     // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            //                 } else {
            //                     //    echo "Sorry, there was an error uploading your file.";
            //                 }
            //                 insert_sp($ten_hh, $hinh, $don_gia, $mo_ta, $ma_loai);
            //                 $thongbao = "Thêm thành công";
            //             }


            //             $listdanhmuc = loai_select_all();
            //             include "../hanghoa/add.php";
            //             break;
            //         case 'hanghoa_list':

            //             $listsp = sp_all();


            //             include "../hanghoa/list.php";
            //             break;
            //         case 'hanghoa_xoa':
            //             if (isset($_GET['ma_hh']) && ($_GET['ma_hh'] > 0)) {
            //                 xoa_sp($_GET['ma_hh']);
            //                 $thongbao = "Đã xoá thành công";
            //             }
            //             $listsp = sp_all();
            //             include "../hanghoa/list.php";
            //             break;
            //         case 'hanghoa_sua':
            //             if (isset($_GET['ma_hh']) && ($_GET['ma_hh'] > 0)) {
            //                 $sanpham =  load_onesp($_GET['ma_hh']);
            //                 $thongbao = "Đã lấy thành công";
            //             }
            //             $listdanhmuc = loai_select_all();


            //             include "../hanghoa/update.php";
            //             break;
            //         case 'updatehh':
            //             if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            //                 $ma_loai = $_POST['ma_loai'];
            //                 $ma_hh = $_POST['ma_hh'];
            //                 $ten_hh = $_POST['ten_hh'];
            //                 $mo_ta = $_POST['mo_ta'];
            //                 $don_gia = $_POST['don_gia'];
            //                 $hinh = $_FILES['hinh']['name'];
            //                 $target_dir = "../../content/uploads/";
            //                 $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            //                 if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
            //                     // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            //                 } else {
            //                     //    echo "Sorry, there was an error uploading your file.";
            //                 }
            //                 update_sp($ma_hh, $ma_loai, $ten_hh, $don_gia, $mo_ta, $hinh);
            //                 $sanpham =load_onesp($_POST['ma_hh']);
            //                 $thongbao = "Đã cập nhật thành công";

                           
            //             }
                      
            //             $listdanhmuc = loai_select_all();



                        

            //             include "../hanghoa/update.php";


            //             break;
                     
            //         default:
            //             include "../trangchinh/home.php";
            //             break;
            //     }
            // } else {
            //     include "../trangchinh/home.php";
            // }


            ?>