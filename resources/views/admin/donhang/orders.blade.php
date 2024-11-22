@extends('admin.layouts.app')
@section('content1')
<link rel="stylesheet" href="{{ asset('css/orders.css') }}">
<div class="header-bottom d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3">Danh Sách Đơn Hàng</h1>
</div>
<div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Ngày tạo đơn</th>
                    <th>Trạng thái Thanh toán</th>
                    <th>Tên khách hàng</th>
                    <th>Trạng thái đơn hàng</th>
                    <th>Trạng thái Xuất kho</th>
                    <th>Nhân viên tạo đơn</th>
                    <th>Ghi chú đơn hàng</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="/admin/donhang/editorders" style="color: #6c757d">Sửa</a> |
                    <form action="#" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link style=" color: #007BFF p-0 m-0 align-baseline"
                            onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                    </form>
                </td>
            </tbody>
        </table>
    </div>
</div>
@endsection