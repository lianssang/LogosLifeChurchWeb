<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link
      rel="icon"
      href="../img/logoslife.png"
      type="image/x-icon"
      sizes="16x16"
    />
    <link rel="stylesheet" href="./dist/css/main.css" />
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/dist/php/"; include($IPATH."cdn.html") ?>
</head>
<body>
    <!--Nav Bar-->
    <?php include($IPATH."navbar.html") ?>
    <br>

    <!--Card Pastor-->
    <div class="container-fluid padding text-center">
        <div class="row padding justify-content-center">
            <div class="col-xs-12 m-2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./img/avatar.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Rev. Dal Lam Mang</h5>
                        <p class="card-text">Senior Pastor of Logos Life</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 m-2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./img/avatar.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Rev. Zam Khan Sang</h5>
                        <p class="card-text">Assistant Pastor of Logos Life</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Board-->
    <div class="container-fluid padding">
        <div class="row padding justify-content-center text-center">
        <div class="col-xs-12 m-2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./img/avatar.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Upa Thang Suan Dam</h5>
                        <p class="card-text">Board Member</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 m-2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./img/avatar.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Upa Kai Khan Pau</h5>
                        <p class="card-text">Board Member</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 m-2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./img/avatar.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Upa Daniel Khai</h5>
                        <p class="card-text">Board Member</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 m-2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./img/avatar.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Upa Nang Hau Khup</h5>
                        <p class="card-text">Board Member</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--Contact Container & Footer Bar-->
    <?php include($IPATH."footerbar.html") ?>
</body>
</html>

<!--
Extra small devices (<768px): width: auto (or no width)
Small Devices (≥768px): width: 750px
Medium Devices (≥992px): width: 970px
Larger Devices (≥1200px): width: 1170px
-->