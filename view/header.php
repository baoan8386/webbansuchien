<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../view/images/logo_icon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../view/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Fahip - Áo Polo</title>

</head>

<body>
    <div class="container">
        <div class="header">

            <div class="logo">
                <div class="logo">
                   <img src="../view/images/tbo-logo1.jpg"  style="width: 60px; height: 60px; margin-left: 6rem;" alt="">
                </div>
            </div>

            <div class="header-menu">
                <div class="responsive-menu"><i class="fa fa-bars"></i></div>
                <ul class="responsive-sub-menu">
                    <!-- <li><a href="#" class="menu-active"><i class="fa fa-home"></i></a></li> -->
                    <li><a href="../controller/index.php">Trang Chủ</a></li>
                    <li><a href="../controller/about.php">Giới Thiệu</a></li>
                        <?php 
                            $dsdanhmmuc = danhmuc_showAll();
                            foreach($dsdanhmmuc as $row){
                            echo '<li><a href="../controller/index.php?act=sanpham&id=' . $row['iddanhmuc'] . '">' . $row['tendanhmuc'] . '</a></li>';}
                        ?>
                    <li><a href="../controller/contac.php">Liên Hệ</a></li>
                    <li>
                        <form style="display: inline-flex;" action="../controller/search.php" method="GET" class="search-form">
                            <input type="text" name="query" class="search-box" placeholder="Tìm kiếm..." style="display: block;" >
                        </form>
                    </li>
                    <li>
                        <a href="../controller/index.php?act=login" class="menu-active menu-user"><i
                                class='bx bx-user'></i></a>
                    </li>
                    <li><a href="../controller/index.php?act=cart" class="menu-active menu-user"><i
                                class='bx bx-cart'></i></a></li>
                </ul>
            </div>

            <div class="head-social-link">
                <!-- <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            </ul> -->
            </div>
        </div>
    </div>



<style>
    /* Tổng quát cho form tìm kiếm */
.search-form {
    display: flex;
    align-items: center;
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    border-radius: 25px;
    padding: 5px 10px;
    transition: box-shadow 0.3s ease;
}

.search-form:hover {
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
}

/* Biểu tượng tìm kiếm */
.search-form i.fa-search {
    color: #555;
    font-size: 16px;
    margin-right: 10px;
}

/* Ô nhập liệu tìm kiếm */
.search-box {
    border: none;
    outline: none;
    background: none;
    font-size: 14px;
    color: #333;
    flex: 1; /* Giúp ô nhập liệu giãn ra đầy đủ */
}

/* Định dạng ô nhập liệu khi focus */
.search-box:focus {
    outline: none;
}

/* Căn chỉnh trong các màn hình nhỏ */
@media (max-width: 768px) {
    .search-form {
        width: 100%;
        padding: 5px;
    }
}

</style>