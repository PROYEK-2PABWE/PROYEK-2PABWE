<link rel="stylesheet" href={{ asset('css/header.css') }}>

<script src="{{ asset('js/TweenMax.min.js') }}"></script>
<?php
$listkategori = \App\Models\Kategori::orderBy('nama_kategori', 'asc')
    ->where('status', 'publish')
    ->get();

function totalCart()
{
    $cart = \App\Models\CartDetail::all();
    $totalcart = 0;
    if ($cart->count() !== 0) {
        for ($i = 0; $i < $cart->count(); $i++) {
            $totalcart += $cart->get($i)->qty;
        }
    }

    return $totalcart;
}

$totalcart = totalCart();

?>
<!-- Header -->
<!-- Top Bar -->
<div class="top_bar">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-row justify-content-between">

                <div class="d-flex flex-row">
                    <div class="top_bar_contact_item">
                        <div class="top_bar_icon"><img
                                src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918577/phone.png" alt="">
                        </div>+ 3333 4444 5555
                    </div>
                    <div class="top_bar_contact_item">
                        <div class="top_bar_icon"><img
                                src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918597/mail.png" alt="">
                        </div><a href="mailto:fastsales@gmail.com">info@DelApotek.com</a>
                    </div>
                </div>

                <div class="top_bar_content ml-auto">
                    <div class="top_bar_user">
                        <?php
                        $name = Auth::user()->name;
                        if (Auth::check()) {
                            echo '<div class="dropdown"><button type="button" class="btn btn-default dropdown-toggle px-5 my-2" data-bs-toggle="dropdown" style="box-shadow: 0.5px 1px 0.5px 0.25px grey;">' . $name . '</button><ul class="dropdown-menu"><li><a href="#" class="dropdown-item d-flex" onclick="event.preventDefault(); document.getElementById(`logout-form`).submit();"><i class="nav-icon fas fa-sign-out-alt m-auto"></i><p class="m-auto">Sign Out</p></a></li></ul></div>';
                        } else {
                            echo '<div class="user_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918647/user.svg" alt=""></div><div><a href="register">Register</a></div><div><a href="login">Log in</a></div>';
                        }
                        ?>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
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
                        <a href="{{ route('home') }}" class="color-main">Del Apotek</a>
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
                                    <div class="custom_dropdown_list"> <span class="custom_dropdown_placeholder clc">All
                                            Categories</span> <i class="fas fa-chevron-down"></i>
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
            <!-- Wishlist -->
            <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                    <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                        <div class="wishlist_icon"><img
                                src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918681/heart.png" alt="">
                        </div>
                        <div class="wishlist_content">
                            <div class="wishlist_text"><a href="#">Wishlist</a></div>
                            <div class="wishlist_count">10</div>
                        </div>
                    </div>
                    <!-- Cart -->
                    <div class="cart mt-3">
                        <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                            <div class="cart_icon">
                                <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918704/cart.png"
                                    alt="">
                                <div class="cart_count bg-color-main"><span>{{ $totalcart }}</span></div>
                            </div>
                            <div class="cart_content">
                                <div class="cart_text"><a href="{{ route('cart.index') }}">Cart</a></div>
                                <!-- <div class="cart_price">$185</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- Main Navigation -->
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
                                    @foreach ($listkategori as $kategori)
                                        <li><a href="{{ URL::to('kategori/' . $kategori->slug_kategori) }}">Semua<i
                                                    class="fa fa-angle-down"></i></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{ route('home') }}" class="text-light">Beranda<i
                                        class="fas fa-chevron-down "></i></a></li>
                            <li><a href="{{ route('home.informasi') }}" class="text-light">Informasi<i
                                        class="fas fa-chevron-down"></i></a></li>
                            <li><a href="{{ route('home.kirimResep') }}" class="text-light">Kirim Resep<i
                                        class="fas fa-chevron-down"></i></a></li>
                            <li><a href="{{ route('home.usulkanProduk') }}" class="text-light">Usulkan
                                    Produk<i class="fas fa-chevron-down"></i></a></li>
                            <li><a href="{{ route('home.keluhan') }}" class="text-light">Keluhan<i
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
<!-- Menu -->
<div class="page_menu sticky-top-1">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page_menu_content">
                    <div class="page_menu_search">
                        <form action="#"> <input type="search" required="required" class="page_menu_search_input"
                                placeholder="Search for products..."> </form>
                    </div>
                    <ul class="page_menu_nav">
                        <li class="page_menu_item"> <a href="{{ route('home') }}">Beranda<i
                                    class="fa fa-angle-down"></i></a> </li>
                        <li class="page_menu_item has-children"> <a href="#">Kategori<i
                                    class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                @foreach ($listkategori as $kategori)
                                    <li><a href="{{ URL::to('kategori/' . $kategori->slug_kategori) }}">Semua<i
                                                class="fa fa-angle-down"></i></a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="page_menu_item"> <a href="{{ route('home.informasi') }}">Informasi<i
                                    class="fa fa-angle-down"></i></a> </li>
                        <li class="page_menu_item"><a href="{{ route('home.kirimResep') }}">Kirim Resep<i
                                    class="fa fa-angle-down"></i></a></li>
                        <li class="page_menu_item"><a href="{{ route('home.usulkanProduk') }}">Usulkan
                                Produk<i class="fa fa-angle-down"></i></a></li>
                        <li class="page_menu_item"><a href="{{ route('home.keluhan') }}">Keluhan<i
                                    class="fa fa-angle-down"></i></a></li>
                    </ul>
                    <div class="menu_contact">
                        <div class="menu_contact_item">
                            <div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38
                            + 3333 4444 5555
                        </div>
                        <div class="menu_contact_item">
                            <div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div>
                            <a href="mailto:fastsales@gmail.com">info@DelApotek.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/header.js') }}"></script>
