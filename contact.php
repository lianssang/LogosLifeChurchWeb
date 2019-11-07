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
    <?php include($IPATH."navbar.html") ?>

    <div class="container-fluid padding">
        <div class="row padding">
    <div class="card col-xs-12 col-sm-6 col-md-3" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
        </div>
    </div>
    </div>
    </div>

    <?php include($IPATH."contactbar.html") ?>
    <?php include($IPATH."footerbar.html") ?>
</body>
</html>