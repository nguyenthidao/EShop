<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Thế giới máy tính</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container-fluid">
    <header class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-2">
                    Logo
                </div>
                <div class="col-lg-10">
                    <div class="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-warning" type="button">Go!</button>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <nav class="col-lg-10">
                    <ul class="menu">
                        <li><a>Xu hướng</a></li>
                        <li><a>Khuyến mãi</a></li>
                        <li><a>Bán chạy</a></li>
                        <li><a>Thương hiệu</a></li>
                    </ul>
                </nav>
                <div class="col-lg-2">
                    <div class="row">
                        <div class="col-lg-2 cart">
                            <span class="badge">42</span>
                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Cart
                        </div>
                        <div class="col-lg-3">
                            <?php
                                if (isset($_SESSION['email']) && $_SESSION['email']){
                                    echo 'Hello '.$_SESSION['email']."<br/>";
                                    echo '<a href="">Logout</a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="row">
        <aside class="col-lg-1"></aside>
        <section class="col-lg-10">
            <div class="row">
                <article class="banner">
                    banner
                </article>
            </div>
            <div class="row">
                <article class="col-lg-3 signin">
                    <div class="jumbotron">
                        <h3 class="text-center">Welcome</h3>
                        <p class="text-center"><small>Sign in for the best experience</small></p>
                        <p class="text-center"><a class="btn btn-warning btn-lg" href="/eshop/user/signin" role="button">Sign in securely</a></p>
                        <hr>
                        <div>
                            <p class="text-center"><small>New to Eshop? <a class="" href="/eshop/user/register">Start here</a></small></p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-6 product-shoping">
                    <div class="col-lg-6">
                        <div class="thumbnail">
                            <a href="#"><img src="assets/images/8d60dcbdf734d644aaf1f8d76ff04356.jpg" alt="..."></a>
                            <div class="caption">
                                <h3 class="text-center">Apple</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumbnail">
                            <a href="#"><img src="assets/images/HP-608x420.jpg" alt="..."></a>
                            <div class="caption">
                                <h3 class="text-center">HP</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumbnail">
                            <a href="#"><img src="assets/images/dell-computer-618x420.jpg" alt="..."></a>
                            <div class="caption">
                                <h3 class="text-center">Dell</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumbnail">
                            <a href="#"><img src="assets/images/asus-laptop-560x420.jpg" alt="..."></a>
                            <div class="caption">
                                <h3 class="text-center">Asus</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumbnail">
                            <a href="#"><img src="assets/images/lenovo-computer.jpg" alt="..."></a>
                            <div class="caption">
                                <h3 class="text-center">Lenovo</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumbnail">
                            <a href="#"><img src="assets/images/HP-608x420.jpg" alt="..."></a>
                            <div class="caption">
                                <h3 class="text-center">Acer</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumbnail">
                            <a href="#"><img src="assets/images/toshiba-computer.jpg" alt="..."></a>
                            <div class="caption">
                                <h3 class="text-center">Toshiba</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumbnail">
                            <a href="#"><img src="assets/images/samsung-computer-561x420.jpg" alt="..."></a>
                            <div class="caption">
                                <h3 class="text-center">Samsung</h3>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-lg-3 us-activity">
                    <div class="col-lg-6">
                        Action big
                    </div>
                    <div class="col-lg-6">
                        <div class="col-lg-6">
                            Actyion1
                        </div>
                        <div class="col-lg-6">
                            Actyion2
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <aside class="col-lg-1">

        </aside>
    </div>
    <div class="row">
        <div class="col-lg-12 back-to-top">
            <p class="text-center"><a href="#">Back to top</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 eshop-introduce">
            <div class="col-lg-3"></div>
            <div class="col-lg-3">
                <ul class="about-us">
                    <li><h3>Eshop Việt Nam</h3></li>
                    <li><a>Về Eshop Việt</a></li>
                    <li><a>Thương hiệu tại Eshop</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <ul class="about-us">
                    <li><h3>Liên hệ với Eshop</h3></li>
                    <li>Thứ 2 - CN: 7h-21h</li>
                    <li><a>Trung tâm hỗ trợ</a></li>
                    <li><a>Thanh toán</a></li>
                    <li><a>Hướng dẫn đặt hàng</a></li>
                    <li><a>Giao hàng & nhận hàng</a></li>
                    <li><a>Hướng dẫn đổi trả hàng</a></li>
                    <li><span class="glyphicon glyphicon-chevron-right"></span><a>Xem thêm</a></li>
                </ul>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
    <footer class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-8">
            <div class="media">
                <div class="media-left media-middle logo">
                    <a href="#">
                        <img class="media-object" src="assets/images/149763463262282.png" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading copy-right">© 1994-2017, Eshop.vn</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </footer>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

