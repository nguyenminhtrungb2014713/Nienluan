<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị viên</title>
    <link rel="stylesheet" href="../view/css/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <link rel="icon" href="../view/img/sir.png">

</head>

<body>
    <div class="boxcenter">
        <div class="row1 mb headerADMIN" style="display: flex;">
            <p class="p2">Quản trị viên</p>
        </div>
        <div class="row1 mb ">
            <!-- <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=adddm">Danh mục</a></li>
                <li><a href="index.php?act=addsp">Sản phẩm</a></li>
                <li><a href="index.php?act=dskh">Thành viên</a></li>
                <li><a href="index.php?act=dsbl">Bình luận</a></li>
                <li><a href="../index.php">Shop</a></li>
            </ul> -->
            <nav class="navbar navbar-expand-lg " style="background-color: rgb(42, 59, 173);">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php?act=home" style="font-size: 13pt;color:white ;">TRANG CHỦ</a>
                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a type="button" class="nav-link active " aria-current="page" href="index.php?act=listdm" style="font-size: 13pt;color:white ;">DANH MỤC</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?act=listsp" style="font-size: 13pt;color:white ;">SẢN PHẨM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?act=dskh" style="font-size: 13pt;color:white ;">THÀNH VIÊN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?act=dsbl" style="font-size: 13pt;color:white ;">BÌNH LUẬN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?act=listbill" style="font-size: 13pt;color:white ;">DANH SÁCH ĐƠN HÀNG</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../index.php" style="font-size: 13pt;color:white ;">POSTER SHOP</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>