
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> -->
    <title>Document</title>
    <link rel="stylesheet" href="../content/MergeBlack.woff">
    <!-- <link rel="stylesheet" href="../content/css/indexs.css"> -->
    <link rel="stylesheet" href="../content/css/indexs.css">

    <link rel="stylesheet" href="../content/fontawesome-free-6.1.1-web/css/all.css">
    

 
    <style>
        .containers{
            width: 100%;
        }


header{
    height: 100px;
}.contents-list{
    margin-top: 20px;
}
</style>

</head>
<?php 
    // require_once "../../dao/connect.php";
    require_once "../../dao/pdo.php";
    require_once "../../global.php";
    require_once "../../dao/loai.php";
    require_once "../../dao/sanpham.php";
    require_once "../../dao/khach-hang.php";
    
?>
<body> 
    <div class="containers">
    <header>
            <?php require_once "layout/header.php"?>
        </header>
   
        
       
        <main> <div class="contents-list">
        <?php include $VIEW_NAME?>
     
</div>
        </main>
        
        <footer>
            <?php require_once "layout/footer.php"?>
        </footer>
    </div>

</body>
</html>
