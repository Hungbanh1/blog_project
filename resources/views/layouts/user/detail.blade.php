@extends('layouts.layout')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@section('content')
    @php
        // dd(Auth::guard('tbc')->check());
        $currentURL = url()->current();
        // Tách URL thành mảng các phần tử bằng dấu '/'
        $segments = explode('/', $currentURL);

        $lastSegment = end($segments);
        // echo $lastSegment;
    @endphp


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
                </ul>
            </div>
        </div>
        <div class="row main-content w-800">
            @foreach ($post_item_id as $item)
                <div class="title-post col-12 mt-2 pl-0">
                    <h1 class="">{{ $item->title_head }}</h1>

                </div>
                <div class="footer-main-content my-4 d-flex gray">
                    <div class="author mr-3">
                        <small>{{ $item->author->name }}</small>
                    </div>
                    <div class="date">
                        <small>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</small>
                    </div>
                </div>

                <div class="main-content-post">
                    <img src="{{ asset($item->thumb_head) }}" class="w-100 h-100" alt="" />
                    <div class="text-center">
                        {!! $item->content !!}
                    </div>
                </div>
                <div class="card-footer col-12  border-0" style="background-color: #f8f9fa;">
                    <form action="{{ route('post_comment', ['id_client' => $id_client, 'id_post' => $item->id]) }}"
                        method="POST">
                        @csrf

                        <div class="d-flex flex-start w-100">
                            <img class="rounded-circle shadow-1-strong mr-3"
                                src="{{ asset('public/img/default-user.webp') }}" alt="avatar" width="40"
                                height="40" />
                            <div class="form-outline w-100">
                                <textarea class="form-control" name="comment" id="textAreaExample" rows="4" style="background: #fff;">Message</textarea>
                                <label class="form-label" for="textAreaExample"></label>
                            </div>
                        </div>
                        <div class="float-end mt-2 pt-1">
                            <button type="submit" class="btn btn-primary btn-sm">Post comment</button>
                            <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
                        </div>
                    </form>
                </div>
            @endforeach
            {{-- <div class="btn-dangkyngay my-4">
                <a class="a-none" href=""> Đăng ký ngay</a>
            </div> --}}

            <div id="commentsContainer"></div>
            <div class="list- col-12 mt-3 pb-3" style="background-color: #f8f9fa;">
                <div class="all-comment my-3">
                    <h4 class="">Tất cả ({{ $count_list_cmt_by_id }})</h4>
                </div>
                <div class="list-main-comment">
                    @foreach ($list_cmt_by_id as $item)
                        <div class="main-comment-item mb-3">
                            <div class="header-main-content d-flex algn-center mb-3">
                                <div class="img-user mr-2">
                                    {{-- <img class="rounded-circle shadow-1-strong me-3" src="{{ asset($item->client->img) }}"
                                        alt="avatar" width="25" height="25" /> --}}
                                    <img class="rounded-circle shadow-1-strong me-3"
                                        src="{{ $item->client->img ? asset($item->client->img) : asset('public/img/default-user.webp') }}"
                                        alt="avatar" width="25" height="25" />
                                </div>
                                <div class="name-user-comment">
                                    <span class=""
                                        style="font-weight: bold">{{ $item->client->name }}({{ $item->client->title }})</span>
                                </div>

                            </div>
                            <div class="content-comment">
                                <p>{{ $item->comment }}</p>
                            </div>
                            <div class="dated-comment">
                                {{-- <small style="color:#b8a7a7">{{ $item->comment_date }}</small> --}}
                                <small
                                    style="color:#b8a7a7">{{ \Carbon\Carbon::parse($item->comment_date)->diffForHumans() }}</small>

                            </div>

                        </div>
                    @endforeach

                </div>

            </div>
        </div>

    </div>
@endsection
