@extends('layouts.layout')
@section('content')
    <div class="content">
        <div class="header-category">
            <div class="list-category mt-3" id="navbarNav">
                <ul class="navbar-nav ul-list-category mb-3">
                    <li class="nav-item">
                        <a class="nav-link" href="">Trang chủ</a>
                    </li>
                    {{-- {{ dd($list_category) }} --}}
                    @foreach ($list_category as $item)
                        <li class="nav-item">
                            {{-- <a class="nav-link"
                                href="{{ route('danh-muc', ['category-name' => $item->name]) }}">{{ $item->name }}</a> --}}
                            {{-- <a class="nav-link" href="{{ url('danh-muc/' . $item->name) }}">{{ $item->name }}</a> --}}
                            <a class="nav-link" href="{{ route('danh_muc', $item->name) }}">{{ $item->name }}</a>

                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

        </div>
        {{-- <div class="row main-content">
            <div class="main-content-8 col-8 row">
                <div class="main-content-left col-8">
                    <a class="a-none" href="">
                        <img src="public/img/thegioididong-1200x628.jpg" width="515px" height="217px" alt="" />
                        <div class="title-post">
                            <p>Samsung Galaxy A35 chưa ra mắt, nhưng tin đồn dự kiến về mức giá cũng như cấu hình của thiết
                                bị này đã thu hút sự chú ý của nhiều người dùng</p>
                        </div>
                        <div class="desc-post black">
                            <p>
                                Bạn đã bao giờ gửi một tin nhắn trên Messenger chỉ để nhận ra rằng bạn đã mắc lỗi chính tả
                                hay gửi nhầm nội dung? Tuy nhiên, ít người biết rằng Messenger có một tính năng giúp bạn sửa
                                tin nhắn đã gửi. Trong bài viết này, chúng ta sẽ khám phá cách sửa tin nhắn
                                đã gửi trên Messenger nha
                            </p>
                        </div>
                        <div class="footer-main-content d-flex gray">
                            <div class="author mr-3">
                                <small>Nguyễn Hoàng Thụ</small>
                            </div>
                            <div class="date">
                                <small>1 ngày trước</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="main-content-right col-4">
                    <div class="main-50-50">
                        <div class="main-50 mb-3">
                            <a class="a-none" href="">
                                <img src="public/img/Logo-24h-cong-nghe-58-1200x675.jpg" width="253px" height="140px"
                                    alt="" />
                                <div class="title-post">
                                    <p style="font-size: 20px !important">realme ra mắt hai 'chiến thần giá rẻ' chạy chip
                                        Dimensity 6100 Plus 5G, giá 'ngon</p>
                                </div>
                                <div class="footer-main-content d-flex gray">
                                    <div class="author mr-3">
                                        <small>Nguyễn Hoàng Thụ</small>
                                    </div>
                                    <div class="date">
                                        <small>1 ngày trước</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="main-50 mb-3">
                            <a class="a-none" href="">
                                <img src="public/img/Logo-24h-cong-nghe-58-1200x675.jpg" width="253px" height="140px"
                                    alt="" />
                                <div class="title-post">
                                    <p style="font-size: 20px !important">realme ra mắt hai 'chiến thần giá rẻ' chạy chip
                                        Dimensity 6100 Plus 5G, giá 'ngon</p>
                                </div>
                                <div class="footer-main-content d-flex gray">
                                    <div class="author mr-3">
                                        <small>Nguyễn Hoàng Thụ</small>
                                    </div>
                                    <div class="date">
                                        <small>1 ngày trước</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content-4 col-4 ml-4">
                <div class="banner-4">
                    <img src="public/img/giarequa.png" width="380px" height="215px" alt="" />
                </div>
                <div class="hot-title d-flex justify-content-between">
                    <div class="my-3">
                        <h6>CHỦ ĐỀ HOT</h6>
                    </div>
                    <div class="my-2 text-right">
                        <a class="a-none" style="color: #288ad6" href=""><small>Xem tất cả chủ đề ></small></a>
                    </div>
                </div>
                <div class="hot-list">
                    <ul class="d-flex pl-0" style="flex-flow: wrap">
                        <li class="">
                            <a href="{{ route('list') }}">Thế giới đồng hồ</a>
                        </li>
                        <li class="">
                            <a href="{{ route('list') }}">Thế giới phụ kiện</a>
                        </li>
                        <li class="">
                            <a href="{{ route('list') }}">Mẹo iOS</a>
                        </li>
                        <li class="">
                            <a href="{{ route('list') }}">Nhà mạng, SIM, thẻ cào</a>
                        </li>
                        <li class="">
                            <a href="{{ route('list') }}">Samsung Galayxy S24 series có gì mới?</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <hr />
        @foreach ($list_post as $item)
            <div class="list-post-main-content row">
                <a class="a-none col-8" href="{{ route('detail_post', $item->id) }}">
                    <div class="post-item d-flex pl-0">
                        <div class="img-post-item col-4">
                            <img src="{{ asset($item->thumb_head) }}" width="250px" height="140px" alt="" />
                        </div>
                        <div class="content-post-item col-8">
                            <div class="title-post">
                                <p style="font-size: 20px !important">{{ $item->title_head }}</p>
                            </div>
                            <div class="footer-main-content d-flex gray">
                                <div class="author mr-3">
                                    <small>{{ $item->author->name }}</small>
                                </div>
                                <div class="date">
                                    <small>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

        {{-- <div class="list-post-main-content row">
            <a class="a-none col-8" href="">
                <div class="post-item d-flex pl-0">
                    <div class="img-post-item col-4">
                        <img src="public/img/apple.jpg" width="250px" height="140px" alt="" />
                    </div>
                    <div class="content-post-item col-8">
                        <div class="title-post">
                            <p style="font-size: 20px !important">realme ra mắt hai 'chiến thần giá rẻ' chạy chip Dimensity
                                6100 Plus 5G, giá 'ngon</p>
                        </div>
                        <div class="footer-main-content d-flex gray">
                            <div class="author mr-3">
                                <small>Nguyễn Hoàng Thụ</small>
                            </div>
                            <div class="date">
                                <small>1 ngày trước</small>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="list-post-main-content row">
            <a class="a-none col-8" href="">
                <div class="post-item d-flex pl-0">
                    <div class="img-post-item col-4">
                        <img src="public/img/apple.jpg" width="250px" height="140px" alt="" />
                    </div>
                    <div class="content-post-item col-8">
                        <div class="title-post">
                            <p style="font-size: 20px !important">realme ra mắt hai 'chiến thần giá rẻ' chạy chip Dimensity
                                6100 Plus 5G, giá 'ngon</p>
                        </div>
                        <div class="footer-main-content d-flex gray">
                            <div class="author mr-3">
                                <small>Nguyễn Hoàng Thụ</small>
                            </div>
                            <div class="date">
                                <small>1 ngày trước</small>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div> --}}
    </div>
@endsection
