@extends('admin.layouts.app')
@section('content1')
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
<div class="header-bottom d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3">Danh Sách Danh Mục</h1>
    <div>
        <!-- Button to add a new category -->
        <button type="button" class="btn btn-primary" onclick="window.location.href='/admin/danhmuc/addcategory'">
            Thêm Danh Mục
        </button>
    </div>
</div>
<div class="container-fluid">
    <div class="search-box">
        <input type="text" class="form-control" placeholder="Nhập tên danh mục" style="width:20%">
        <button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg></i></button>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Tên Danh Mục</th>
                    <th>Mô Tả</th>
                    <th>Slug</th>
                    <th>Trạng Thái</th>
                    <th>Ngày Tạo</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <!-- Mẫu để lặp qua dữ liệu -->
                <tr>
                    <td style="color: #607d8b">1</td>
                    <td style="color: #607d8b">Quần</td>
                    <td style="color: #607d8b">Quần đẹp</td>
                    <td style="color: #607d8b">quan</td>
                    <td style="color: #607d8b"></td>
                    <td style="color: #007BFF"></td>
                    <td>
                        <a href="#" style="color: #607d8b">Xem</a> |
                        <a href="/admin/danhmuc/editcategory" style="color: #607d8b">Sửa</a> |
                        <form action="#" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link style="color: #607d8b p-0 m-0 align-baseline"
                                onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    @endsection