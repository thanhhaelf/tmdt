<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/fonts/elegant-font/html-css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/css/main.css">
    <!--===============================================================================================-->

</head>
<body class="animsition">

<!-- Header -->
<header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header">
        <div class="topbar">
            <div class="topbar-social">
                <a href="#" class="topbar-social-item fa fa-facebook"></a>
                <a href="#" class="topbar-social-item fa fa-instagram"></a>
                <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
            </div>

            <span class="topbar-child1">
					Miễn phí giao hàng với hóa đơn trên 200K
				</span>

            <div class="topbar-child2">
					<span class="topbar-email">
						fashe@example.com
					</span>

                <div class="topbar-language rs1-select2">
                    <select class="selection-1" name="time">
                        <option>VND</option>
                        <option>USD</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="wrap_header">
            <!-- Logo -->
            <a href="index.html" class="logo">
                <img src="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/images/icons/logo.png" alt="IMG-LOGO">
            </a>

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="{{asset('home')}}">Trang chủ</a>

                        </li>

                        <li>
                            <a href="{{asset('product')}}">Sản phẩm</a>
                        </li>

                        <li>
                            <a href="product.html">Khuyến mại</a>
                        </li>

                        <li>
                            <a href="{{asset('cart')}}">Giỏ hàng</a>
                        </li>

                        <li>
                            <a href="blog.html">Blog</a>
                        </li>

                        <li>
                            <a href="about.html">Giới thiệu</a>
                        </li>

                        <li>
                            <a href="contact.html">Liên hệ</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Search -->
            <div >
                    <form methods="get" id="form_search" action="{{route('search')}}">
                        <div class="input-group" style="border: 1px solid #e5e5e5; border-radius: 7px; margin-left: 10px;">
                            <input type="text" class="form-control" name="key" id="key" style="width:300px" placeholder="Nhập từ khóa tìm kiếm..." />
                            <div class="show-product">
                            </div>
                            <button  type="submit"> <i class="fa fa-search" ></i> </button>
                        </div>
                    </form>
            </div>
            <!-- Header Icon -->
            <div class="header-icons">
                <a href="#" class="header-wrapicon1 dis-block">
                    <img src="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">

                </a>

                <span class="linedivide1"></span>

                <div class="header-wrapicon2">
                    <img src="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/images/icons/icon-header-02.png"
                         class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti">
						<?php
                        echo sizeof($product_cart);
                        ?></span>

                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <ul class="header-cart-wrapitem">
                            <?php
                            $sum = 0;
                            ?>
                            @foreach($product_cart as $item)
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/images/{{$item->Anh}}" alt="IMG-PRODUCT">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            {{$item->TenSP}}
                                        </a>

                                        <span class="header-cart-item-info">
											{{$item->SoLuong}}X {{$item->Gia}}K

                                            <?php
                                            $sum += $item->SoLuong * $item->Gia;
                                            ?>
										</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                        <div class="header-cart-total">

                            Tổng tiền: <?php
                            echo $sum
                            ?>
                        </div>

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="{{asset('cart')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    Xem giỏ hàng
                                </a>
                            </div>
                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="{{route('cart')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        Đặt hàng
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
@yield('body')
<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <div class="flex-w p-b-90">
        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                GET IN TOUCH
            </h4>

            <div>
                <p class="s-text7 w-size27">
                    Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on
                    (+1) 96 716 6879
                </p>

                <div class="flex-m p-t-30">
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
                </div>
            </div>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Categories
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Men
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Women
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Dresses
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Sunglasses
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Links
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Search
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        About Us
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Contact Us
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Returns
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Help
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Track Order
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Returns
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Shipping
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        FAQs
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                Newsletter
            </h4>

            <form>
                <div class="effect1 w-size9">
                    <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                    <span class="effect1-line"></span>
                </div>

                <div class="w-size2 p-t-20">
                    <!-- Button -->
                    <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                        Subscribe
                    </button>
                </div>

            </form>
        </div>
    </div>

    <div class="t-center p-l-15 p-r-15">
        <a href="#">
            <img class="h-size2" src="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/images/icons/paypal.png" alt="IMG-PAYPAL">
        </a>

        <a href="#">
            <img class="h-size2" src="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/images/icons/visa.png" alt="IMG-VISA">
        </a>

        <a href="#">
            <img class="h-size2" src="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/images/icons/mastercard.png" alt="IMG-MASTERCARD">
        </a>

        <a href="#">
            <img class="h-size2" src="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/images/icons/express.png" alt="IMG-EXPRESS">
        </a>

        <a href="#">
            <img class="h-size2" src="<?php if(isset($idGioHang)) echo('../'); ?><?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/images/icons/discover.png" alt="IMG-DISCOVER">
        </a>

        <div class="t-center s-text8 p-t-20">
            Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o"
                                                                                  aria-hidden="true"></i> by <a
                    href="https://colorlib.com" target="_blank">Colorlib</a>
        </div>
    </div>
</footer>


<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>


<!--===============================================================================================-->
<script type="text/javascript" src="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/select2/select2.min.js"></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">

    $('.block2-btn-addcart').each(function () {
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function () {
            var idProduct = $(this).parent().parent().parent().parent().find('.block2').attr('id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "http://localhost:81/tmdt/addtocart",
                data: {idProduct: idProduct},
                success: function (response) {
                    console.log(response);
                    swal(nameProduct, "is added to cart !", "success");
                    location.reload();
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                    swal(nameProduct, "add to cart fail!", "error");

                }
            });
        });
    });

    $('.block2-btn-addwishlist').each(function () {
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function () {
            swal(nameProduct, "is added to wishlist !", "success");
        });
    });
</script>

<!--===============================================================================================-->
<script src="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/js/main.js"></script>
<script type="text/javascript" src="<?php if(isset($idGioHang)) echo('../'); ?>local/resources/views/js/search.js"></script>
    <script type="text/javascript" src="local/resources/views/vendor/jqueryui/jquery-ui.js"></script>
</body>
</html>
