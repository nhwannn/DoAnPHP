@extends('admin.layouts.app')
@section('title', 'Cập Nhật Danh Mục')
@section('content1')
<link rel="stylesheet" href="{{ asset('css/editcategory.css') }}">
<div class="container">
    <h2 class="h4 mb-3">Cập Nhật Danh Mục</h2>
    <form action="#" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="order_code">Tên Danh Mục</label>
            <input type="text" class="form-control" id="order_code" name="order_code" value="#" required>
        </div>
        <div class="form-group">
            <label for="customer_name">Mô Tả</label>
            <input type="text" class="form-control" id="customer_name" name="customer_name" value="#" required>
        </div>
        <div class="form-group">
            <label for="order_status">Slug</label>
            <input type="text" class="form-control" id="customer_name" name="customer_name" value="#" required>
        </div>
        <div class="form-group">
            <label for="payment_status">Trạng Thái</label>
            <select class="form-control" id="payment_status" name="payment_status" required>
                <option value="1">Hiển Thị</option>
                <option value="0">Ẩn</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Cập Nhật Danh Mục</button>
    </form>
</div>
@endsection