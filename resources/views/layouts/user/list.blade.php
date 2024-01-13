@extends('layouts.layout')
@section('content')
    <div class="content">
        <div class="header-category">
            <div class="list-category mt-3" id="navbarNav">
                <ul class="navbar-nav ul-list-category">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Trang chủ</a>
                    </li>
                    @foreach ($list_category as $item)
                        <li class="nav-item">
                            {{-- <a class="nav-link"
                            href="{{ route('danh-muc', ['category-name' => $item->name]) }}">{{ $item->name }}</a> --}}
                            {{-- <a class="nav-link" href="{{ url('danh-muc/' . $item->name) }}">{{ $item->name }}</a> --}}
                            <a class="nav-link" href="{{ route('danh_muc', $item->name) }}">{{ $item->name }}</a>

                        </li>
                    @endforeach

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Bài viết</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Khuyến mãi</a>
                    </li> --}}
                </ul>
            </div>
        </div>

        <div class="slug-head-h1 mt-3">
            <h4>{{ $category_name }}</h4>
        </div>
        <hr />
        <div class="list-post-main-content row">
            @foreach ($list_post as $item)
                <a class="a-none col-8" href="{{ route('detail_post', $item->id) }}">
                    <div class="post-item d-flex pl-0">
                        <div class="img-post-item col-4">
                            <img src="{{ asset($item->thumb_head) }}" width="250px" height="140px" alt="" />
                        </div>
                        <div class="content-post-item col-8">
                            <div class="title-post">
                                <p style="font-size: 20px !important">{{ $item->desc }}</p>
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
            @endforeach

        </div>

        {{-- <div class="post-item col-8 d-flex pl-0">
                <div class="img-post-item col-4">
                    <img src="public/img/apple.jpg" width="250px" height="140px" alt="" />
                </div>
                <div class="content-post-item col-8">
                    <div class="title-post">
                        <p style="font-size: 20px !important">realme ra mắt hai 'chiến thần giá rẻ' chạy chip Dimensity 6100
                            Plus 5G, giá 'ngon</p>
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
            <div class="post-item col-8 d-flex pl-0">
                <div class="img-post-item col-4">
                    <img src="public/img/apple.jpg" width="250px" height="140px" alt="" />
                </div>
                <div class="content-post-item col-8">
                    <div class="title-post">
                        <p style="font-size: 20px !important">realme ra mắt hai 'chiến thần giá rẻ' chạy chip Dimensity 6100
                            Plus 5G, giá 'ngon</p>
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
            </div> --}}

    </div>
@endsection
