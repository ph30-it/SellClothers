@extends('public.layouts.master')
@section('content')
<div>
    <section class="how-overlay2 bg-img1" style="background-image: url(/source/images/post.jpg);">
        <div class="container">
            <div class="txt-center p-t-160 p-b-165">
                <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                    Shop
                </h2>
                <span class="txt-m-201 cl0 flex-c-m flex-w">
                <a href="/" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                @lang('index.welcome_home')
                </a>
                <span>
                / Sản phẩm
                </span>
                </span>
            </div>
        </div>
    </section>
    <section class="bg0 p-t-85 p-b-45">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-4 col-lg-3 m-rl-auto p-b-50">
                    <div class="leftbar p-t-15">
                        <!--  -->
                        <div class="size-a-21 pos-relative">
                            <input class="s-full bo-all-1 bocl15 p-rl-20" type="text" name="search" placeholder="Search sảm phẩm...">
                            <button class="flex-c-m fs-18 size-a-22 ab-t-r hov11">
                            <img class="hov11-child trans-04" src="/source/images/icons/icon-search.png" alt="ICON">
                            </button>
                        </div>
                        <div class="p-t-45">
                            <h4 class="txt-m-101 cl3">
                                LỌC THEO GIÁ
                            </h4>
                            <div class="filter-price p-t-32">
                                <div class="wra-filter-bar">
                                    <div id="filter-bar"></div>
                                </div>
                                <div class="flex-sb-m flex-w p-t-16">
                                    <div class="txt-s-115 cl9 p-t-10 p-b-10 m-r-20">
                                        Giá: <span id="value-lower">8</span> - <span id="value-upper">20</span>
                                    </div>
                                    <div>
                                        <a href="#" class="txt-s-107 cl6 hov-cl10 trans-04">
                                        Lọc
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <!--  -->
                        <div>
                            <h4 class="txt-m-101 cl3 p-b-20">
                                DANH MỤC
                            </h4>
                            <ul>
                                <li class="p-b-5">
                                    <a href="#" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
                                    <span class="m-r-10">
                                    Rau Củ
                                    </span>
                                    <span>
                                    3
                                    </span>
                                    </a>
                                </li>
                                <li class="p-b-5">
                                    <a href="#" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
                                    <span class="m-r-10">
                                    Trái cây đặc sản Việt Nam
                                    </span>
                                    <span>
                                    5
                                    </span>
                                    </a>
                                </li>
                                <li class="p-b-5">
                                    <a href="#" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
                                    <span class="m-r-10">
                                    Trái cây nhập khẩu
                                    </span>
                                    <span>
                                    9
                                    </span>
                                    </a>
                                </li>
                                <li class="p-b-5">
                                    <a href="#" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
                                    <span class="m-r-10">
                                    Đồ khô
                                    </span>
                                    <span>
                                    9
                                    </span>
                                    </a>
                                </li>
                                <li class="p-b-5">
                                    <a href="#" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
                                    <span class="m-r-10">
                                    Khác
                                    </span>
                                    <span>
                                    2
                                    </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <hr/>
                        <!--  -->
                        <div>
                            <h4 class="txt-m-101 cl3 p-b-20">
                                THƯƠNG HIỆU
                            </h4>
                            <ul>
                                <li class="p-b-5">
                                    <label>
                                    <input class="brand"  type="checkbox" value="">
                                    Đà Lạt
                                    </label>
                                </li>
                                <li class="p-b-5">
                                    <label>
                                    <input class="brand" type="checkbox" value="">
                                    Huế mộng mơ
                                    </label>
                                </li>
                                <li class="p-b-5">
                                    <label>
                                    <input class="brand" type="checkbox" value="">
                                    Sóc Trăng
                                    </label>
                                </li>
                                <li class="p-b-5">
                                    <label>
                                    <input class="brand" type="checkbox" value="">
                                    Đà Nẵng
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <hr/>
                        <!--Rating -->
                        <div>
                            <h4 class="txt-m-101 cl3 p-b-20">
                                ĐÁNH GIÁ
                            </h4>
                            <div class="rating-wrap-post" style="cursor: pointer">
                                <i id="1" class="fa fa-star" onclick="set('1')"></i>
                                <i id="2" class="fa fa-star" onclick="set('2')"></i>
                                <i id="3" class="fa fa-star" onclick="set('3')"></i>
                                <i id="4" class="fa fa-star" onclick="set('4')"></i>
                                <i id="5" class="fa fa-star" onclick="set('5')"></i>
                                Trở lên
                                <input style="display: none" type="number" style="width:50px;"  value=""  id="star">
                            </div>
                            <script language="javascript">
                                function set(id)
                                {
                                	for(var i=1;i<=5;i++)
                                	document.getElementById(i).style.color = '#333';
                                	for(var i=1;i<=id;i++)
                                	document.getElementById(i).style.color = 'yellow';
                                	document.getElementById('star').value = id;
                                }
                            </script>
                        </div>
                        <hr/>
                        <!--  -->
                        <div>
                            <h4 class="txt-m-101 cl3 p-b-20">
                                THEO TAGS
                            </h4>
                            <div class="flex-w m-r--10">
                                <a href="#" class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                Trái cây
                                </a>
                                <a href="#" class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                Green
                                </a>
                                <a href="#" class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                Rau củ
                                </a>
                                <a href="#" class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                Organic
                                </a>
                                <a href="#" class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                Đồ khô
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-8 col-lg-9 m-rl-auto p-b-50">
                    <div>
                        <div class="flex-w flex-r-m p-b-45 flex-row-rev">
                            <div class="flex-w flex-m p-tb-8">
                                <div class="rs1-select2 bg0 size-w-52 bo-all-1 bocl15 m-tb-7 m-r-15">
                                    <select class="js-select2" name="sort">
                                        <option>Sắp xếp theo độ phổ biến</option>
                                        <option>Sắp xếp theo giá từ thấp đến cao</option>
                                        <option>Sắp xếp theo giá từ cao đến thấp</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <div class="flex-w flex-m m-tb-7">
                                    <button class="dis-block lh-00 pos-relative how-icon1 m-r-15 js-show-list">
                                    <img class="icon-main trans-04" src="/source/images/icons/icon-menu-list.png" alt="ICON">
                                    <img class="ab-t-l icon-hov trans-04" src="/source/images/icons/icon-menu-list1.png" alt="ICON">
                                    </button>
                                    <button class="dis-block lh-00 pos-relative how-icon1 menu-active js-show-grid">
                                    <img class="icon-main trans-04" src="/source/images/icons/icon-grid.png" alt="ICON">
                                    <img class="ab-t-l icon-hov trans-04" src="/source/images/icons/icon-grid1.png" alt="ICON">
                                    </button>
                                </div>
                            </div>
                            <span class="txt-s-101 cl9 m-r-30 size-w-53">
                            Show 1–12 trong 23 sản phẩm
                            </span>
                        </div>
                        <!-- Shop grid -->
                        <div class="shop-grid">
                            <div class="row">
                                @foreach($product_type as $item)
                                <div class="col-sm-6 col-lg-4 p-b-30">
                                    <!-- Block1 -->
                                    <div class="block1">
                                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                            <img src="{{$item->image_list}}" alt="IMG">
                                            <div class="block1-content flex-col-c-m p-b-46">
                                                <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                                {{$item->name}}
                                                </a>
                                                <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                                                {{$item->price}}
                                                </span>
                                                <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                                    <a href="product-single.html" class="block1-icon flex-c-m wrap-pic-max-w">
                                                    <img src="/source/images/icons/icon-view.png" alt="ICON">
                                                    </a>
                                                    <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                                    <img src="/source/images/icons/icon-cart.png" alt="ICON">
                                                    </a>
                                                    <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                                    <img class="icon-addwish-b1" src="/source/images/icons/icon-heart.png" alt="ICON">
                                                    <img class="icon-addedwish-b1" src="/source/images/icons/icon-heart2.png" alt="ICON">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                            <div class="flex-w flex-c-m p-t-47">{{$product_type}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
