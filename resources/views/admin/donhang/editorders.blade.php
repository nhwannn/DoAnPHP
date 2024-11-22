@extends('admin.layouts.app')
@section('title', 'Cập Nhật Đơn Hàng')
@section('content1')
<link rel="stylesheet" href="{{ asset('css/editorders.css') }}">
<div class="container">
    <h2 class="h4 mb-3">Cập Nhật Đơn Hàng</h2>
    <form action="#" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="order_code">Mã Đơn Hàng</label>
            <input type="text" class="form-control" id="order_code" name="order_code" value="#" required>
        </div>
        <div class="form-group">
            <label for="customer_name">Tên Khách Hàng</label>
            <input type="text" class="form-control" id="customer_name" name="customer_name" value="#" required>
        </div>
        <div class="form-group">
            <label for="order_status">Trạng Thái Đơn Hàng</label>
            <select class="form-control" id="order_status" name="order_status" required>
                <option value="Đang giao dịch">Đang giao dịch</option>
                <option value="Hoàn thành">Hoàn thành</option>
                <option value="Đã hủy">Đã hủy</option>
            </select>
        </div>
        <div class="form-group">
            <label for="payment_status">Trạng Thái Thanh Toán</label>
            <select class="form-control" id="payment_status" name="payment_status" required>
                <option value="1">Đã thanh toán</option>
                <option value="0">Chưa thanh toán</option>
            </select>
        </div>
        <div class="form-group">
            <label for="created_by">Nhân Viên Tạo Đơn</label>
            <input type="text" class="form-control" id="created_by" name="created_by" value="#" required>
        </div>
        <div class="form-group">
            <label for="note">Ghi Chú Đơn Hàng</label>
            <textarea class="form-control" id="note" name="note"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Cập Nhật Đơn Hàng</button>
    </form>
</div>
@endsection
