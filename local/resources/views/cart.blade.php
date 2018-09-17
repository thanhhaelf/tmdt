@extends('master')
@section('title','View Cart')
@section('body')
    <section class="cart bgwhite p-t-70 p-b-100">
        <div class="container">
            <!-- Cart item -->
            <div class="container-table-cart pos-relative">
                <div class="wrap-table-shopping-cart bgwhite">
                    <table class="table-shopping-cart">
                        <tr class="table-head">
                            <th class="column-1"></th>
                            <th class="column-2">Món ăn</th>
                            <th class="column-3">Giá</th>
                            <th class="column-4 p-l-70">Số lượng</th>
                            <th class="column-5">Thành tiền</th>
                            <th class="column-6">Xóa</th>
                        </tr>
                        <?php
                        $sum = 0;
                        ?>
                        @foreach($product_cart as $item)
                            <tr class="table-row" id="{{$item->MaSP}}">
                                <td class="column-1">
                                    <div class="cart-img-product b-rad-4 o-f-hidden">
                                        <img src="local/resources/views/images/{{$item->Anh}}" alt="IMG-PRODUCT">
                                    </div>
                                </td>
                                <td class="column-2">{{$item->TenSP}}</td>
                                <td class="column-3">{{$item->Gia}} VNĐ</td>
                                <td class="column-4">
                                    <div class="flex-w bo5 of-hidden w-size17">
                                        <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                            <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                        </button>

                                        <input class="size8 m-text18 t-center num-product" type="number"
                                               name="num-product1" value="{{$item->SoLuong}}">

                                        <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                            <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </td>

                                <td class="column-5">{{$item->SoLuong* $item->Gia}} VNĐ</td>
                               <td class="column-6">
                                    <button id="{{$item->MaSP}}" type="submit" class="btn btn-danger btn-remove-product">Remove</button></td>
                                <?php  $sum += $item->SoLuong * $item->Gia; ?>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>

            <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
                <div class="flex-w flex-m w-full-sm">
                    <div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
                        <!-- Button -->
                        <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                            <a href="{{asset('home')}}">Tiếp tục mua hàng</a>

                        </button>
                    </div>
                </div>

                <div class="size10 trans-0-4 m-t-10 m-b-10">
                    <!-- Button -->
                    <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                        Update Giỏ hàng
                    </button>
                </div>
            </div>

            <!-- Total -->
            <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
                <h5 class="m-text20 p-b-24">
                    Thanh toán
                </h5>

                <!--  -->
                <div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Thành tiền
					</span>

                    <span class="m-text21 w-size20 w-full-sm">
						<?php
                        echo $sum
                        ?> VNĐ
					</span>
                </div>

                <!--  -->
                <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>

                    <div class="w-size20 w-full-sm">
                        <p class="s-text8 p-b-23">
                            Miễn phí giao hàng trong khu vực Hà Nội, ship cod ngoại tỉnh tùy thuộc vào địa điểm
                        </p>

                        <span class="s-text19">
							Nhập địa chỉ
						</span>

                        <div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
                            <select class="selection-2" name="country">
                                <option>Chọn tỉnh thành</option>
                                <option>Hà Nội</option>
                                <option>Bắc Ninh</option>
                                <option>Hải Phòng</option>
                            </select>
                        </div>

                        <div class="size13 bo4 m-b-12">
                            <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="state"
                                   placeholder="Quận/huyện">
                        </div>

                        <div class="size13 bo4 m-b-22">
                            <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode"
                                   placeholder="Xã/Phường">
                        </div>

                        <div class="size14 trans-0-4 m-b-10">
                            <!-- Button -->
                            <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                Cập nhật thông tin
                            </button>
                        </div>
                    </div>
                </div>

                <!--  -->
                <div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Tổng tiền
					</span>

                    <span class="m-text21 w-size20 w-full-sm">
						<?php
                        echo $sum
                        ?> VNĐ
					</span>
                </div>
                <form method="post" action="{{route('cart')}}">
                	<div class="size15 trans-0-4">
	                    <!-- Button -->
	                    <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
	                        Đặt hàng
	                    </button>
	                </div>
	                {{csrf_field()}}
                </form>
            </div>
        </div>
    </section>

    <script type="text/javascript"
            src="<?php if (isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript"
            src="<?php if (isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/slick/slick.min.js"></script>
    <script type="text/javascript"
            src="<?php if (isset($idGioHang)) echo('../'); ?>local/resources/views/js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript"
            src="<?php if (isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript"
            src="<?php if (isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/lightbox2/js/lightbox.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript"
            src="<?php if (isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/sweetalert/sweetalert.min.js"></script>

    <script type="text/javascript"
            src="<?php if (isset($idGioHang)) echo('../'); ?>local/resources/views/js/main.js"></script>

    <script type="text/javascript"
            src="<?php if (isset($idGioHang)) echo('../'); ?>local/resources/views/vendor/select2/select2.js"></script>

    <!--===============================================================================================-->
    {{--<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>--}}
    {{--<!--===============================================================================================-->--}}
    {{--<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>--}}
    {{--<!--===============================================================================================-->--}}
    {{--<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>--}}
    {{--<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>--}}
    {{--<!--===============================================================================================-->--}}
    {{--<script type="text/javascript" src="vendor/select2/select2.min.js"></script>--}}

    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });

        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect2')
        });
    </script>
    <!--===============================================================================================-->

@stop