@extends('layouts.layout')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@section('content')
    <div class="content-regis text-center" style="">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>


        <div class="register-container">
            <div class="header-register title-widget-services">
                <h1>Cập nhật tài khoản</h1>
            </div>
            <div class="nav-item">
                {{-- <a class="{{ url()->previous() ? 'nav-link-custom-class' : '' }}" href="{{ url()->previous() }}">Trở
                    về</a> --}}
                <a href="{{ route('dashboard') }}">Trở về</a>
            </div>
            <form action="{{ route('update_account_client', $client->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group w-100 col-md-12">
                    <input type="text" class="form-control input-regis" value="{{ $client->name }}" id="name"
                        placeholder="Tên" name="name" />
                    <div class="text-left">

                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-md-12">
                    <input type="tel" class="form-control input-regis" id="phone" placeholder="Số điện thoại"
                        name="phone" />
                    <div class="text-left">

                        @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <input type="email" class="form-control input-regis" value="{{ $client->email }}" id="email"
                        placeholder="E-mail" name="email" />
                    <div class="text-left">

                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-md-12">
                    <input type="password" class="form-control input-regis" id="password" placeholder="Mật khẩu *"
                        name="password" />
                    <div class="text-left">

                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <input type="password" class="form-control input-regis" id="confirmPassword"
                        placeholder="Xác nhận mật khẩu *" name="confirmPassword" />
                </div>
                <div class="form-group col-md-12 text-left">
                    <label for="img">Ảnh đại diện</label><br>
                    <input type="file" name="img" id="img" placeholder="Ảnh đại diện">
                    <p>
                        <img src="{{ asset($client->img) }}" width="100px" height="100px" alt="">
                    </p>


                </div>

                <div class="row col-12">
                    <div class="form-group col-md-3">
                        <button type="submit"
                            class="update_account_client btn-orange bg-red btn-order text-uppercase w-100 ">Cập
                            nhật</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
