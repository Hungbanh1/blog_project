<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script>

    <link rel="stylesheet" href="{{ asset('public/css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/fontawesome/all.min.css') }}">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="{{ asset('public/js/search.js') }}"></script>
    <script src="{{ asset('public/js/app.js') }}"></script>
    <script src="{{ asset('public/bootstrap/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Document</title>

</head>

<body>

    <div id="wp-content">
        <div class="header">
            <div class="banner-header" sthle>
                <img src="{{ asset('public/img/banner-head.webp') }}" class="w-100" alt="" />
            </div>
            <div class="main-header">
                <div class="logo-header">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('public/img/logo.png') }}" width="229px" height="52px" alt="" />
                    </a>
                </div>
                <div class="search-header w-50" style="margin-top: 2%">
                    <form class="" method="GET" action="{{ route('search') }}">
                        <div class="form-input d-flex posi-rela">
                            <input class="keyword form-control me-2" name="keyword" id="s" type="text"
                                placeholder="Bạn tìm gì ..." aria-label="Search" />
                            <button class="btn-none posi-rela" type="submit"><i
                                    class="fa-solid fa-magnifying-glass posi-ab"></i></button>
                        </div>
                    </form>
                    <ul id="search-data" class="pl-0"
                        style="display:none;border-radius:0.25rem;position: absolute;width:600px;z-index:100">
                        <li class="clearfix">
                            <a href="" class="a-none">
                                <div class="thumb-info fl-left">
                                    <img src="" alt="" width="80px" height="50px">
                                </div>
                                <div class="ml-2 info-product fl-left">
                                    <p class="product_name mb-1"></p>
                                    <p class="price"></p>
                                </div>
                            </a>
                        </li>
                        {{-- <li class="clearfix" style="">
                            <a href="" class="a-none d-flex pt-2">
                                <div class="thumb-info fl-left">
                                    <img src="http://localhost/project_datn/public/img/apple.jpg" width="80px"
                                        height="50px" alt="">
                                </div>
                                <div class="ml-2 info-product fl-left ">
                                    <p class="product_name mb-1">realme ra mắt hai 'chiến thần giá rẻ' chạy chip
                                        Dimensity
                                        6100 Plus 5G, giá 'ngon</p>
                                    <small class="price">Nguyễn Hoàng Thụ</small>
                                </div>
                            </a>
                        </li>
                        <li class="clearfix" style="">
                            <a href="a-none" class="d-flex pt-2">
                                <div class="thumb-info fl-left">
                                    <img src="http://localhost/project_datn/public/img/apple.jpg" width="80px"
                                        height="50px" alt="">
                                </div>
                                <div class="ml-2 info-product fl-left ">
                                    <p class="product_name mb-1">realme ra mắt hai 'chiến thần giá rẻ' chạy chip
                                        Dimensity
                                        6100 Plus 5G, giá 'ngon</p>
                                    <small class="price">Nguyễn Hoàng Thụ</small>
                                </div>
                            </a>
                        </li> --}}
                    </ul>
                </div>
                <div class="account-header d-flex">
                    <div class="logo-user">
                        <img src="" alt="" />
                    </div>
                    <div class="account d-flex center-all">
                        <div class="logo-user mr-2">
                            <i class="fa-regular fa-circle-user"></i>
                        </div>

                        @if (auth()->guard('client')->check())
                            {{ auth()->guard('client')->user()->name }}
                            <div class="dropdown">
                                <li class="nav-ite" type="button" id="dropdownMenuButton user" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <img class="ico-notify" src="{{ asset('public/img/icon-user.png') }}" alt />
                                    <i _ngcontent-gaw-c7="" style="width: 8px; height: 14px"
                                        class="fa fa-caret-down ml-2"></i>

                                </li>
                                <style>
                                    .left-144 {
                                        left: -144px !important;
                                    }
                                </style>
                                <div class="dropdown-menu dropdown-menu-left mr-5 left-144"
                                    aria-labelledby="dropdownMenuButton">
                                    <a href="{{ route('account',auth()->guard('client')->user()->id) }}"
                                        class="dropdown-item">
                                        Cài đặt
                                        tài khoản </a>
                                    @if (auth()->guard('client')->check())
                                        <a class="dropdown-item" href="{{ route('logout_client') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form-client').submit();">
                                            {{ __('Đăng xuất') }}
                                        </a>
                                        <form id="logout-form-client" action="{{ route('logout_client') }}"
                                            method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    @endif

                                </div>
                            </div>
                        @else
                            <div class="register">
                                <a class="a-none" href="">Đăng ký /</a>
                            </div>
                            <div class="login">
                                <a class="a-none ml-2" href="{{ route('client') }}">Đăng nhập</a>
                            </div>
                        @endif

                    </div>

                </div>
            </div>
        </div>
        <div class="wp-main-content">
            @yield('content')

        </div>
        {{-- footer --}}
        <footer class="mt-4">
            <div class="text-center">
                <p>&copy; 2023 Tên Công Ty. Tất cả quyền được bảo lưu.</p>
            </div>
        </footer>
    </div>
</body>

</html>
