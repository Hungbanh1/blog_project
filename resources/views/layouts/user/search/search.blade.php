@extends('layouts.layout')
@section('content')
    <div class="content">
        <div class="header-category">
            <div class="list-category mt-3" id="navbarNav">
                <ul class="navbar-nav ul-list-category">
                    <li class="nav-item">
                        <a class="nav-link" href="">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ url()->previous() ? 'nav-link-custom-class' : '' }}" href="{{ url()->previous() }}">Trở
                            về</a>
                    </li>


                </ul>
            </div>
        </div>
        {{-- <div class="row main-content">

      
        </div> --}}
        <div class="head-client-search d-flex row" style="justify-content: space-between">

            <h3 class="col-6">Từ khóa tìm kiếm <strong>"{{ $keyword }}"</strong></h3>
            <div class="form-filter col-6">
                {{-- <form method="GET" action="{{ route('sort', $item->id) }}"> --}}
                <form method="GET" class="d-flex" action="{{ route('sort', $keyword) }}">
                    @csrf
                    <select class="form-select form-control form-select-sm mb-3 w-50 h-100" name="select"
                        aria-label=".form-select-sm">
                        <option name="0" value="{{ request()->input('select') }}}}">Sắp xếp</option>

                        <option value="A-Z" {{ request()->input('select') === 'A-Z' ? 'selected' : '' }}>Từ A-Z</option>
                        <option value="Z-A" {{ request()->input('select') === 'Z-A' ? 'selected' : '' }}>Từ Z-A</option>
                        <option value="newest" {{ request()->input('select') === 'newest' ? 'selected' : '' }}>Bài viết mới
                        </option>
                        <option value="latest" {{ request()->input('select') === 'latest' ? 'selected' : '' }}>Bài viết cũ
                        </option>
                    </select>
                    {{-- <select class="form-select w-50" name="select" aria-label="Default select example">
                        <option value="">Sắp xếp</option>
                        <option value="A-Z" {{ request()->input('select') === 'A-Z' ? 'selected' : '' }}>Từ A-Z</option>
                        <option value="Z-A" {{ request()->input('select') === 'Z-A' ? 'selected' : '' }}>Từ Z-A</option>
                    </select> --}}
                    <div class="form-group">
                        <button
                            style="color: #ee0033 !important;
                    background-color: #fff;
                    border-color: #ee0033;
                    white-space: pre;
                    padding: 0px 17px;
                    height:36px"
                            type="submit" class="ml-2 position-relative h-35 p-17 btn btn-add">Lọc</button>
                    </div>

                </form>
                {{-- <form method="GET" action="{{ route('sort', $keyword) }}">
                    @csrf
                    <select name="select">
                        <option name="0" value="{{ request()->input('select') }}}}">Sắp xếp</option>
                        <option name="A-Z" value="A-Z">Từ A-Z</option>
                        <option name="Z-A" value="Z-A">Từ Z-A</option>

                    </select>
                    <button type="submit">Lọc</button>
                </form> --}}

            </div>
        </div>
        <hr />
        @foreach ($list_post_search as $item)
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


    </div>
@endsection
