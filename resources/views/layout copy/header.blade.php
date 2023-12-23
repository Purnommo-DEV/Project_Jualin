<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta Tag -->
        <meta charset="utf-8">
        <meta name ="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name='copyright' content=''>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Title Tag -->
        <title>Eshop - eCommerce HTML5 Template.</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="images/favicon.png">
        <!-- Web Font -->
        <link
            href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
            rel="stylesheet">

        <!-- StyleSheet -->
        <!-- Google Font: Source Sans Pro -->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- DataTables -->
        <link
            rel="stylesheet"
            href="{{asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link
            rel="stylesheet"
            href="{{asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
        <link
            rel="stylesheet"
            href="{{asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
        <!-- Bootstrap -->
        {{-- <link rel="stylesheet" href="{{asset('elshop/css/bootstrap.css')}}"> --}}
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{asset('elshop/css/magnific-popup.min.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('elshop/css/font-awesome.css')}}">
        <!-- Fancybox -->
        <link rel="stylesheet" href="{{asset('elshop/css/jquery.fancybox.min.css')}}">
        <!-- Themify Icons -->
        <link rel="stylesheet" href="{{asset('elshop/css/themify-icons.css')}}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{asset('elshop/css/niceselect.css')}}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('elshop/css/animate.css')}}">
        <!-- Flex Slider CSS -->
        <link rel="stylesheet" href="{{asset('elshop/css/flex-slider.min.css')}}">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{asset('elshop/css/owl-carousel.css')}}">
        <!-- Slicknav -->
        <link rel="stylesheet" href="{{asset('elshop/css/slicknav.min.css')}}">
        <link href="{{asset('eshopper/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('eshopper/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('eshopper/css/prettyPhoto.css')}}" rel="stylesheet">
        <link href="{{asset('eshopper/css/price-range.css')}}" rel="stylesheet">
        <link href="{{asset('eshopper/css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('eshopper/css/main.css')}}" rel="stylesheet">

        <!-- Eshop StyleSheet -->
        <link rel="stylesheet" href="{{asset('elshop/css/reset.css')}}">
        <link rel="stylesheet" href="{{asset('elshop/style.css')}}">
        <link rel="stylesheet" href="{{asset('elshop/css/responsive.css')}}">
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link
            href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">

        <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
         <link rel="stylesheet" href="{{asset('frontends/style.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/promo.css')}}">
        {{-- carousel css --}}
        <link rel="stylesheet" href="slick.css"/>
        {{-- akhir carousel css --}}
    </head>
<script language="JavaScript">
    function checkChoice(whichbox){
    with (whichbox.form){
        if (whichbox.checked == false)
            hiddentotal.value = eval(hiddentotal.value) - eval(whichbox.value);
        else
            hiddentotal.value = eval(hiddentotal.value) + eval(whichbox.value);
            return(formatCurrency(hiddentotal.value));
        }
    }
    function formatCurrency(num){
    num = num.toString().replace(/\$|\,/g,'');
        if(isNaN(num)) num = "0";
            cents = Math.floor((num*100+0.5)%100);
            num = Math.floor((num*100+0.5)/100).toString();
        if(cents < 10) cents = "0" + cents;
        for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
            num = num.substring(0,num.length-(4*i+3))+'.'+num.substring(num.length-(4*i+3));
            return ("Rp. " + num + "," + cents);
    }
</script>
    <body class="hold-transition layout-top-nav">
        <!-- Header -->
        <header class="header shop">
            <!-- Topbar -->
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-12">
                            <!-- Top Left -->
                            <div class="top-left">
                                <ul class="list-main">
                                    <a href="{{route('/')}}" style="text-decoration: none; font-size: 14px;">
                                        <i class="fa fa-home"></i>&nbsp;Beranda</a>
                                    <a href="{{route('promo')}}" style="text-decoration: none;margin-left: 20px; font-size:14px;">
                                        <i class="fa fa-tag"></i>&nbsp;Promo UMKM</a>
                                    <a href="{{route('umkm')}}" style="text-decoration: none;margin-left: 20px; font-size:14px;">
                                        <i class="fa fa-shopping-basket"></i>&nbsp;UMKM</a>
                                    <a href="" style="text-decoration: none;margin-left: 20px; font-size:14px;">
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Produk terlaris</a>
                                    <a href="{{route('tentang')}}" style="text-decoration: none;margin-left: 20px; font-size:14px;">Tentang Jualin</a>
                                </ul>
                            </div>
                            <!--/ End Top Left -->
                        </div>
                        <div class="col-lg-4 col-md-12 col-12">
                            <!-- Top Right -->
                            <div class="right-content">
                                <ul class="list-main">
                                    <a href="">Informasi Kontak</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Topbar -->
                <div class="middle-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-12">
                                <!-- Logo -->
                                <div class="logo">
                                    <a href="index.html"><img src="{{asset('elshop/images/jualins_logo.png')}}" alt="logo"></a>
                                </div>
                                <!--/ End Logo -->
                                <!-- Search Form -->
                                <div class="search-top">
                                    <div class="top-search">
                                        <a href="#0">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <!-- Search Form -->
                                    <div class="search-top">
                                        <form class="search-form">
                                            <input type="text" placeholder="Search here..." name="search">
                                            <button value="search" type="submit">
                                                <i class="ti-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <!--/ End Search Form -->
                                </div>
                                <!--/ End Search Form -->
                                <div class="mobile-nav"></div>
                            </div>
                <div class="col-lg-6 col-md-5 col-12">                    
                    <form action="/pencarian" method="GET">
                    <div class="search-bar-top">
                        <div class="search-bar">
                            <select name="cari">
                                    <option selected="selected" value=" ">All Category</option>
                                @foreach ($kategori as $kategoris)
                                    <option value="{{$kategoris->kategori}}">{{$kategoris->kategori}}</option>
                                @endforeach
                            </select>
                                <input name="cari2" placeholder="Search Products Here....." type="search">
                                <button type="submit" class ="btnn" style="text-decoration: none;"><i class="ti-search"></i></button>
                        </form>
                        </div>
                    </div>
                </div>
                                <div class="col-lg-1 col-md- col-12">
                                    <div class="right-bar">
                                        <!-- Search Form -->
                                        @if($LoggedUserInfo['id'] == "")
                                        @else
                                        <div class="sinlge-bar shopping">
                                            <a href="#" class="single-icon">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span class="total-count">2</span></a>
                                            <!-- Shopping Item -->
                                            <div class="shopping-item">
                                                <div class="dropdown-cart-header">
                                                    <span>2 Items</span>
                                                    <a href="#" style="">View Cart</a>
                                                </div>
                                                <ul class="shopping-list">
                                                    <li>
                                                        <a href="#" class="remove" title="Remove this item">
                                                            <i class="fa fa-remove"></i>
                                                        </a>
                                                        <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
                                                        <h4>
                                                            <a href="#">Woman Ring</a>
                                                        </h4>
                                                        <p class="quantity">1x -
                                                            <span class="amount">$99.00</span></p>
                                                    </li>
                                                </ul>
                                                <div class="bottom">
                                                    <div class="total">
                                                        <span>Total</span>
                                                        <span class="total-amount">$134.00</span>
                                                    </div>
                                                    <a href="{{route('keranjang')}}" class="btn animate">Checkout</a>
                                                </div>
                                            </div>
                                            <!--/ End Shopping Item -->
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md- col-12">
                                <div class="button-bar">
                                   @if($LoggedUserInfo['id'] == "")
                                    <div class="col-sm-6 col-6">
                                        <a href="{{ route('backend_login') }}">
                                        <button type="button" class="btn btn-link">Login</button>
                                        </a>
                                    </div>
                                <div class="col-md-6 col-6">
                                    <a href="{{ route('register') }}">
                                        <button type="button" class="btn btn-primary">Daftar</button>
                                    </a>
                                </div>
                                @else
                                <div class="dropdown">
                                        <button class="dropbtn"><img src="/profile/{{$LoggedUserInfo['foto']}}"><p>{{$LoggedUserInfo['username']}}</p></button>
                                        <div class="dropdown-content">
                                        <form method="post" action="{{route('logout')}}">
                                            @csrf
                                            <a href="{{ route('umum_profile') }}">Akun Saya</a>
                                            <button type="submit" class="btn-transparent " style="border:none">Logout</button>
                                        </form>
                                        </div>
                                      </div>  
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--/ End Header -->
        @yield('content')
@include('layout.footer')