@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="header-category">
            <div class="list-category mt-3" id="navbarNav">
                <ul class="navbar-nav ul-list-category">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bài viết</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Khuyến mãi</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row main-content w-800">
            <div class="title-post mt-2">
                <h1 class="">CES 2024 diễn ra khi nào? Sau đây là tất tần tật về CES 2024 mà bạn cần biết</h1>
            </div>
            <div class="footer-main-content my-4 d-flex gray">
                <div class="author mr-3">
                    <small>Nguyễn Hoàng Thụ</small>
                </div>
                <div class="date">
                    <small>1 ngày trước</small>
                </div>
            </div>
            <div class="main-content-post">
                <img src="{{ asset('public/img/apple.jpg') }}" class="w-100 h-100" alt="" />
                <div class="desc-img text-center"><small>CES 2024 sẽ diễn ra khi nào? Có gì mới? Tất cả sẽ có trong bài viết
                        dưới đây (Ảnh: Socialsnackbar)</small></div>
                <h1 class="text-center my-3">CES 2024 có gì mới?</h1>
                <p>
                    Chỉ còn vài tuần nữa là bước năm mới 2024, đồng nghĩa với việc sự kiện công nghệ CES sắp được tổ được tổ
                    chức. Với tầm quy mô và sức lan tỏa quốc tế, CES 2024 hứa hẹn mang đến những công nghệ tiên tiến nhất và
                    các xu hướng đổi mới trong lĩnh vực điện tử tiêu dùng. Vậy CES
                    2024 diễn ra khi nào? Sau đây là tất tần tật về CES 2024 mà bạn cần biết!
                </p>
                <img src="{{ asset('public/img/apple.jpg') }}" class="w-100 h-100" alt="" />
                <div class="desc-img text-center"><small>CES 2024 sẽ diễn ra khi nào? Có gì mới? Tất cả sẽ có trong bài viết
                        dưới đây (Ảnh: Socialsnackbar)</small></div>
                <p>
                    Trong số những thương hiệu tham gia, AMD - một trong những nhà sản xuất vi xử lý và card đồ họa hàng đầu
                    được kỳ vọng sẽ giới thiệu APU Ryzen 8000G, nhằm cạnh tranh với Nvidia. Bên cạnh đó, Lenovo được cho là
                    sẽ mang đến một loạt sản phẩm mới, từ máy tính bảng đến laptop,
                    với những thiết kế sáng tạo và cải tiến tiện ích đáng chú ý. LG, một thương hiệu nổi tiếng với các thiết
                    bị điện tử thông minh, thường dùng CES để ra mắt các sản phẩm mới như TV OLED G4 với tần số làm mới cao,
                    hứa hẹn trải nghiệm tuyệt vời cho người dùng và game thủ.
                </p>
                <img src="{{ asset('public/img/apple.jpg') }}" class="w-100 h-100" alt="" />
                <div class="desc-img text-center"><small>CES 2024 sẽ diễn ra khi nào? Có gì mới? Tất cả sẽ có trong bài viết
                        dưới đây (Ảnh: Socialsnackbar)</small></div>
                <p>
                    Nvidia, nhà sản xuất card đồ họa và công nghệ GPU hàng đầu, sẽ có không gian riêng để công bố các sản
                    phẩm mới, có thể bao gồm card đồ họa RTX 4000 Super, với kỳ vọng mang đến cải tiến đáng kể về hiệu suất
                    và trải nghiệm người dùng. Qualcomm, chuyên về việc phát triển các
                    giải pháp công nghệ cho ô tô và di động, dự kiến sẽ tập trung vào các giải pháp ô tô thông minh và có
                    thể đưa ra các thông tin quan trọng về sự thay đổi trong ngành trong năm tới.
                </p>
            </div>
            <style>
                .btn-dangkyngay {
                    margin: auto;
                    width: 250px;
                    padding: 10px;
                    text-align: center;
                    line-height: 20.8px;
                    background: #ff920c;
                    line-height: 2;
                    border-radius: 4px;
                }

                .btn-dangkyngay a {
                    color: #ffff00;
                    font-size: 20px;
                    text-transform: uppercase;
                    font-weight: 700;
                }
            </style>
            <div class="btn-dangkyngay my-4">
                <a class="a-none" href=""> Đăng ký ngay</a>
            </div>
            <div class="list-post-lq">
                <h5 class="ml-3">Bài viết liên quan</h5>
                <div class="row">
                    <div class="col-4 mt-2">
                        <a class="a-none" href="">
                            <img src="public/img/Logo-24h-cong-nghe-58-1200x675.jpg" width="253px" height="140px"
                                alt="" />
                            <div class="mt-1">
                                <p class="mb-0" style="font-size: 16px !important">realme ra mắt hai 'chiến thần giá rẻ'
                                    chạy chip Dimensity 6100 Plus 5G, giá 'ngon</p>
                            </div>
                            <div class="footer-main-content d-flex gray">
                                <div class="date">
                                    <small>1 ngày trước</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 mt-2">
                        <a class="a-none" href="">
                            <img src="public/img/Logo-24h-cong-nghe-58-1200x675.jpg" width="253px" height="140px"
                                alt="" />
                            <div class="mt-1">
                                <p class="mb-0" style="font-size: 16px !important">realme ra mắt hai 'chiến thần giá rẻ'
                                    chạy chip Dimensity 6100 Plus 5G, giá 'ngon</p>
                            </div>
                            <div class="footer-main-content d-flex gray">
                                <div class="date">
                                    <small>1 ngày trước</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 mt-2">
                        <a class="a-none" href="">
                            <img src="public/img/Logo-24h-cong-nghe-58-1200x675.jpg" width="253px" height="140px"
                                alt="" />
                            <div class="mt-1">
                                <p class="mb-0" style="font-size: 16px !important">realme ra mắt hai 'chiến thần giá rẻ'
                                    chạy chip Dimensity 6100 Plus 5G, giá 'ngon</p>
                            </div>
                            <div class="footer-main-content d-flex gray">
                                <div class="date">
                                    <small>1 ngày trước</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 mt-2">
                        <a class="a-none" href="">
                            <img src="public/img/Logo-24h-cong-nghe-58-1200x675.jpg" width="253px" height="140px"
                                alt="" />
                            <div class="mt-1">
                                <p class="mb-0" style="font-size: 16px !important">realme ra mắt hai 'chiến thần giá rẻ'
                                    chạy chip Dimensity 6100 Plus 5G, giá 'ngon</p>
                            </div>
                            <div class="footer-main-content d-flex gray">
                                <div class="date">
                                    <small>1 ngày trước</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 mt-2">
                        <a class="a-none" href="">
                            <img src="public/img/Logo-24h-cong-nghe-58-1200x675.jpg" width="253px" height="140px"
                                alt="" />
                            <div class="mt-1">
                                <p class="mb-0" style="font-size: 16px !important">realme ra mắt hai 'chiến thần giá rẻ'
                                    chạy chip Dimensity 6100 Plus 5G, giá 'ngon</p>
                            </div>
                            <div class="footer-main-content d-flex gray">
                                <div class="date">
                                    <small>1 ngày trước</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 mt-2">
                        <a class="a-none" href="">
                            <img src="public/img/Logo-24h-cong-nghe-58-1200x675.jpg" width="253px" height="140px"
                                alt="" />
                            <div class="mt-1">
                                <p class="mb-0" style="font-size: 16px !important">realme ra mắt hai 'chiến thần giá rẻ'
                                    chạy chip Dimensity 6100 Plus 5G, giá 'ngon</p>
                            </div>
                            <div class="footer-main-content d-flex gray">
                                <div class="date">
                                    <small>1 ngày trước</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
