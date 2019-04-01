@extends('public.layouts.master')
@section('content')
<div>
    <div>
        <section class="how-overlay2 bg-img1" style="background-image: url(images/post.jpg);">
            <div class="container">
                <div class="txt-center p-t-160 p-b-165">
                    <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                        SẢN PHẨM YÊU THÍCH
                    </h2>

                    <span class="txt-m-201 cl0 flex-c-m flex-w">
                        <a href="home.htm" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                            Home
                        </a>

                        <span>
                            / Wishlist
                        </span>
                    </span>
                </div>
            </div>
        </section>
    </div>

    <div>
        <div class="bg0 p-t-100 p-b-80">
            <div class="container">
                <div class="wrap-table-shopping-cart rs1-table">
                    <table class="table-shopping-cart">
                        <tr class="table_head bg12">
                            <th class="column-1 p-l-30">Tên sản phẩm</th>
                            <th class="column-2">Giá</th>
                            <th class="column-3">Tình trạng</th>
                            <th class="column-4">Thêm vào giỏ</th>
                        </tr>

                        <tr class="table_row">
                            <td class="column-1">
                                <div class="flex-w flex-m">
                                    <div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
                                        <img src="images/best-sell-01.jpg" alt="IMG">
                                    </div>

                                    <span>
                                        Cheery
                                    </span>
                                </div>
                            </td>
                            <td class="column-2">
                                18000vnd
                            </td>
                            <td class="column-3">
                                <div class="flex-t">
                                    <img class="m-t-4 m-r-8" src="images/icons/icon-list3.png" alt="IMG">
                                    <span class="size-w-53 txt-m-104 cl6">
                                        Còn hàng
                                    </span>
                                </div>
                            </td>
                            <td class="column-4">
                                <div class="flex-w flex-sb-m">
                                    <a href="#" class="flex-c-m txt-s-103 cl6 size-a-2 how-btn1 bo-all-1 bocl11 hov-btn1 trans-04">
                                        Thanh toán
                                        <span class="lnr lnr-chevron-right m-l-7"></span>
                                        <span class="lnr lnr-chevron-right"></span>
                                    </a>

                                    <div class="fs-15 hov-cl10 pointer">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="table_row">
                            <td class="column-1">
                                <div class="flex-w flex-m">
                                    <div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
                                        <img src="images/best-sell-02.jpg" alt="IMG">
                                    </div>

                                    <span>
                                        Asparagus
                                    </span>
                                </div>
                            </td>
                            <td class="column-2">
                                12000vnd
                            </td>
                            <td class="column-3">
                                <div class="flex-t">
                                    <img class="m-t-4 m-r-8" src="images/icons/icon-list3.png" alt="IMG">
                                    <span class="size-w-53 txt-m-104 cl6">
                                        Còn hàng
                                    </span>
                                </div>
                            </td>
                            <td class="column-4">
                                <div class="flex-w flex-sb-m">
                                    <a href="#" class="flex-c-m txt-s-103 cl6 size-a-2 how-btn1 bo-all-1 bocl11 hov-btn1 trans-04">
                                        Thanh toán
                                        <span class="lnr lnr-chevron-right m-l-7"></span>
                                        <span class="lnr lnr-chevron-right"></span>
                                    </a>
                                    <div class="fs-15 hov-cl10 pointer">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="flex-w flex-sb-m p-t-30">
                    <div class="flex-w flex-m m-r-50 m-tb-10">
                        <div class="flex-c-m txt-s-103 cl6 size-h-9 how-btn1 bo-all-1 bocl11 hov-btn1 trans-04 pointer p-rl-29 m-tb-10 m-r-30">
                            Xóa tất cả
                        </div>

                        <div class="flex-c-m txt-s-103 cl6 size-h-9 how-btn1 bo-all-1 bocl11 hov-btn1 trans-04 pointer p-rl-29 m-tb-10">
                            Cập nhật
                        </div>
                    </div>

                    <a href="shop-sidebar-grid.html" class="flex-c-m txt-s-103 cl0 bg10 size-h-9 hov-btn2 trans-04 pointer p-rl-29 m-tb-10">
                        Tiếp tục mua hàng
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
