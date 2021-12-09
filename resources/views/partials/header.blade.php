<link rel="stylesheet" href={{ asset('css/header.css') }}>

<script src="{{ asset('js/TweenMax.min.js') }}"></script>
<!-- Header -->
<header class="header">
    <!-- Top Bar -->
    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-row justify-content-between">

                    <div class="d-flex flex-row">
                        <div class="top_bar_contact_item">
                            <div class="top_bar_icon"><img
                                    src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918577/phone.png"
                                    alt=""></div>+ 3333 4444 5555
                        </div>
                        <div class="top_bar_contact_item">
                            <div class="top_bar_icon"><img
                                    src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918597/mail.png" alt="">
                            </div><a href="mailto:fastsales@gmail.com">info@DelApotek.com</a>
                        </div>
                    </div>

                    <div class="top_bar_content ml-auto">
                        <div class="top_bar_user">
                            <div class="user_icon"><img
                                    src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918647/user.svg" alt="">
                            </div>
                            <div><a href="{{ URL::to('register') }}">Register</a></div>
                            <div><a href="{{ URL::to('login') }}">Log in</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Header Main -->
    <div class="header_main">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="col-lg-2 col-sm-3 col-3 order-1">
                    <div class="logo_container">
                        <div class="logo">
                            <a href="{{ route('beranda') }}" class="color-main">Del Apotek</a>
                        </div>
                    </div>
                </div> <!-- Search -->
                <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                    <div class="header_search">
                        <div class="header_search_content">
                            <div class="header_search_form_container">
                                <form action="#" class="header_search_form clearfix"> <input type="search"
                                        required="required" class="header_search_input"
                                        placeholder="Search for products...">
                                    <div class="custom_dropdown" style="display: none;">
                                        <div class="custom_dropdown_list"> <span
                                                class="custom_dropdown_placeholder clc">All Categories</span> <i
                                                class="fas fa-chevron-down"></i>
                                            <ul class="custom_list clc">
                                                <li><a class="clc" href="#">All Categories</a></li>
                                                <li><a class="clc" href="#">Computers</a></li>
                                                <li><a class="clc" href="#">Laptops</a></li>
                                                <li><a class="clc" href="#">Cameras</a></li>
                                                <li><a class="clc" href="#">Hardware</a></li>
                                                <li><a class="clc" href="#">Smartphones</a></li>
                                            </ul>
                                        </div>
                                    </div> <button type="submit" class="header_search_button trans_300 bg-color-main"
                                        value="Submit"><img
                                            src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918770/search.png"
                                            alt=""></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cart -->
                <div class="cart">
                    <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                        <div class="cart_icon">
                            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918704/cart.png" alt="">
                            <div class="cart_count bg-color-main"><span>3</span></div>
                        </div>
                        <div class="cart_content">
                            <div class="cart_text"><a href="#">Cart</a></div>
                            <!-- <div class="cart_price">$185</div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Main Navigation -->
    <!-- Menu -->
    <div class="page_menu">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page_menu_content">
                        <div class="page_menu_search">
                            <form action="#"> <input type="search" required="required" class="page_menu_search_input"
                                    placeholder="Search for products..."> </form>
                        </div>
                        <ul class="page_menu_nav">
                            <li class="page_menu_item"> <a href="{{ route('beranda') }}">Beranda<i
                                        class="fa fa-angle-down"></i></a> </li>
                            <li class="page_menu_item has-children"> <a href="#">Kategori<i
                                        class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="{{ route('beranda.kategori') }}">Semua<i
                                                class="fa fa-angle-down"></i></a>
                                    </li>
                                    <li><a href="#">Obat<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Alat Kesehatan<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Obat Herbal<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item"> <a href="{{ route('informasi') }}">Informasi<i
                                        class="fa fa-angle-down"></i></a> </li>
                            <li class="page_menu_item"><a href="{{ route('kirimResep') }}">Kirim Resep<i
                                        class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item"><a href="{{ route('usulkanProduk') }}">Usulkan Produk<i
                                        class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item"><a href="{{ route('keluhan') }}">Keluhan<i
                                        class="fa fa-angle-down"></i></a></li>
                        </ul>
                        <div class="menu_contact">
                            <div class="menu_contact_item">
                                <div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38
                                + 3333 4444 5555
                            </div>
                            <div class="menu_contact_item">
                                <div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a
                                    href="mailto:fastsales@gmail.com">info@DelApotek.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<nav class="main_nav sticky-top bg-color-main">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="main_nav_content d-flex flex-row">
                    <!-- Categories Menu -->
                    <!-- Main Nav Menu -->
                    <div class="main_nav_menu">
                        <ul class="standard_dropdown main_nav_dropdown">
                            <li class="hassubs"> <a href="#" class="text-light">Kategori<i
                                        class="fas fa-chevron-down"></i></a>
                                <ul>
                                    <li><a href="{{ route('beranda.kategori') }}">Semua<i
                                                class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="#">Obat<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="#">Alat Kesehatan<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="#">Obat Herbal<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="#">Suplemen<i class="fas fa-chevron-down"></i></a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('beranda') }}" class="text-light">Beranda<i
                                        class="fas fa-chevron-down "></i></a></li>
                            <li><a href="{{ route('informasi') }}" class="text-light">Informasi<i
                                        class="fas fa-chevron-down"></i></a></li>
                            <li><a href="{{ route('kirimResep') }}" class="text-light">Kirim Resep<i
                                        class="fas fa-chevron-down"></i></a></li>
                            <li><a href="{{ route('usulkanProduk') }}" class="text-light">Usulkan Produk<i
                                        class="fas fa-chevron-down"></i></a></li>
                            <li><a href="{{ route('keluhan') }}" class="text-light">Keluhan<i
                                        class="fas fa-chevron-down"></i></a>
                            </li>
                        </ul>
                    </div> <!-- Menu Trigger -->
                    <div class="menu_trigger_container ml-auto">
                        <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                            <div class="menu_burger">
                                <div class="menu_trigger_text">menu</div>
                                <div class="cat_burger menu_burger_inner">
                                    <span></span><span></span><span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<script src="{{ asset('js/header.js') }}"></script>
