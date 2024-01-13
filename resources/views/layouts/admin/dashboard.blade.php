@extends('layouts.admin.admin')
@section('content')
    <div class="container-fluid py-5">

        <div class="row">

            <div class="col">
                <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header">BÀi VIẾT XỬ LÝ</div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">Số lượng bài viết đang xử lý</p>
                    </div>
                </div>
            </div>
            {{-- <div class="col">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">ĐANG VẬN CHUYỂN</div>
                    <div class="card-body">
                        <h5 class="card-title" name="Đang vận chuyển"></h5>
                        <p class="card-text">Số đơn đang vận chuyển trong hệ thống</p>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="col">
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header">DOANH SỐ</div>
                    <div class="card-body">
                        <h5 class="card-title">110.902.002 Triệu</h5>
                        <p class="card-text">Doanh số hệ thống</p>
                    </div>
                </div>
            </div> --}}
            <div class="col">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">BÀi VIẾT THÀNH CÔNG</div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">Bài viết thành công</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">BÀi VIẾT HỦY</div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">Bài viết bị hủy trong hệ thống</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end analytic  -->
        <div class="card">
            <div class="card-header font-weight-bold">
                Dashboard
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            {{-- {{dd($order->get('format'))}} --}}
            <style>
                .list-style-none {
                    list-style: none
                }

                .list-style-none li {
                    margin: 10px 0px;
                    font-size: 18px !important;
                    /* cursor: pointer; */
                }
            </style>
            <div class="card-body">
                <div class="list-style-none">
                    <li>
                        <a href="{{ url('admin/author/list') }}">Quản lý Tác giả</a>
                    </li>
                    <li> <a href="{{ url('admin/post/list') }}">Quản lý Bài viết</a></li>
                    <li>
                        <a href="{{ url('admin/user/list') }}">Quản lý Users</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/role/list') }}">Quản lý Role</a>
                    </li>
                </div>






                <table class="table table-striped">
                    <thead>
                        <tr>
                            {{-- <th scope="col">#</th>
                            <th scope="col">Mã</th>
                            <th scope="col">Khách hàng</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Tổng tiền</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Thời gian</th>
                            <th scope="col">Chi tiết</th> --}}
                            {{-- <th scope="col">Tác vụ</th> --}}
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @php
                            $t = 0;
                        @endphp
                        @foreach ($order as $item)
                            @php
                                $t++;
                            @endphp
                            <tr>
                                <th scope="row">{{ $t }}</th>
                                <td>{{ $item->code }}</td>
                                <td>
                                    {{ $item->name }} <br>
                                </td>
                                <td>0{{ $item->phone }} </td>
                                <td>{{ $item->total }}VNĐ </td>
                                <td>
                                    @if ($item->format == 'Đang xử lý')
                                        <span class="badge badge-warning">Đang xử lý</span>
                                    @elseif($item->format == 'Đang vận chuyển')
                                        <span class="badge badge-info">Đang vận chuyển</span>
                                    @elseif($item->format == 'Đã giao hàng')
                                        <span class="badge badge-success">Đã giao hàng</span>
                                    @else
                                        <span class="badge badge-dark">Hủy đơn hàng</span>
                                    @endif
                                </td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a href="{{ route('detail_order', $item->id) }}">Chi tiết</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody> --}}
                </table>
                {{-- {{ $order->links() }} --}}

            </div>
        </div>

    </div>
@endsection
