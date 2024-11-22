@extends('admin.layouts.app')
@section('content1')
<link rel="stylesheet" href="{{ asset('css/addcategory.css') }}">
<div>
    <div>
        <div>
            @csrf
            <div>
                <div class="form-group">
                    <label for="name">Tên Danh Mục</label>
                    <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Nhập tên"
                        required>a
                </div>
                <div class="form-group">
                    <label for="description">Mô tả</label>
                    <input type="text" class="form-control" id="customer_name" name="customer_name" value="" required>
                </div>
                <div class="form-group">
                    <label for="image">Hình ảnh</label>
                    <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug"
                        placeholder="Nhập slug (URL thân thiện)" required>
                </div>
                <div class="form-group">
                    <label for="status">Trạng thái</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="1">Hiển thị</option>
                        <option value="0">Ẩn</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="parent_id">Danh mục cha</label>
                    <select class="form-control" id="parent_id" name="parent_id">
                        <option value="">Không có</option>
                        <!-- Thêm các tùy chọn danh mục cha từ database -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="sort_order">Thứ tự hiển thị</label>
                    <input type="number" class="form-control" id="sort_order" name="sort_order"
                        placeholder="Nhập thứ tự hiển thị">
                </div>
                <div class="form-group">
                    <label for="meta_keywords">Từ khóa SEO</label>
                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords"
                        placeholder="Nhập từ khóa SEO">
                </div>
                <div class="form-group">
                    <label for="meta_description">Mô tả SEO</label>
                    <textarea class="form-control" id="meta_description" name="meta_description"
                        placeholder="Nhập mô tả SEO"></textarea>
                </div>
                <div class="form-group">
                    <label for="created_at">Ngày tạo</label>
                    <input type="datetime-local" class="form-control" id="created_at" name="created_at" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary" id="saveItemButton">Lưu</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection