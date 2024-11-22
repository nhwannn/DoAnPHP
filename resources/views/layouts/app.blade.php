<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiki Clone Header</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <!-- Top notification bar -->
    @include('layouts.header')

    <div class="container">
        <nav class="sidebar-nav">
            <h3>Danh mục</h3>
            <ul>
                <li>
                    <div><img
                            src="https://salt.tikicdn.com/cache/100x100/ts/category/ed/20/60/afa9b3b474bf7ad70f10dd6443211d5f.png"
                            alt="Nhà Sách Tiki"> Nhà Sách </div>
                </li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/category/f6/22/46/7e2185d2cf1bca72d5aeac385a865b2b.png"
                        alt="Nhà Cửa - Đời Sống"> Nhà Cửa - Đời Sống</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/category/54/c0/ff/fe98a4afa2d3e5142dc8096addc4e40b.png"
                        alt="Điện Thoại - Máy Tính Bảng"> Điện Thoại - Máy Tính Bảng</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/category/13/64/43/226301adcc7660ffcf44a61bb6df99b7.png"
                        alt="Đồ Chơi - Mẹ & Bé"> Đồ Chơi - Mẹ & Bé</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/category/75/34/29/78e428fdd90408587181005f5cc3de32.png"
                        alt="Thiết Bị Số - Phụ Kiện Số"> Thiết Bị Số - Phụ Kiện Số</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/category/61/d4/ea/e6ea3ffc1fcde3b6224d2bb691ea16a2.png"
                        alt="Điện Gia Dụng"> Điện Gia Dụng</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/category/73/0e/89/bf5095601d17f9971d7a08a1ffe98a42.png"
                        alt="Làm Đẹp - Sức Khỏe"> Làm Đẹp - Sức Khỏe</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/category/69/f5/36/c6cd9e2849854630ed74ff1678db8f19.png"
                        alt="Ô Tô - Xe Máy - Xe Đạp"> Ô Tô - Xe Máy - Xe Đạp</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/category/55/5b/80/48cbaafe144c25d5065786ecace86d38.png"
                        alt="Thời trang nữ"> Thời trang nữ</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/category/40/0f/9b/62a58fd19f540c70fce804e2a9bb5b2d.png"
                        alt="Bách Hóa Online"> Bách Hóa Online</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/category/0b/5e/3d/00941c9eb338ea62a47d5b1e042843d8.png"
                        alt="Thể Thao"> Thể Thao - Dã Ngoại</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/category/00/5d/97/384ca1a678c4ee93a0886a204f47645d.png "
                        alt="Thời trang nam"> Thời trang nam</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/category/3c/e4/99/eeee1801c838468d94af9997ec2bbe42.png"
                        alt="Cross Border"> Cross Border - Hàng Quốc Tế</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/category/92/b5/c0/3ffdb7dbfafd5f8330783e1df20747f6.png"
                        alt="Laptop"> Laptop - Máy Vi Tính - Linh kiện</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/category/d6/7f/6c/5d53b60efb9448b6a1609c825c29fa40.png"
                        alt="Giày Dép nam"> Giày - Dép nam</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/category/c8/82/d4/64c561c4ced585c74b9c292208e4995a.png"
                        alt="Điện Tử"> Điện Tử - Điện Lạnh</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/category/cf/ed/e1/5a6b58f21fbcad0d201480c987f8defe.png"
                        alt="Giày Dép nữ"> Giày - Dép nữ</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/category/2d/7c/45/e4976f3fa4061ab310c11d2a1b759e5b.png"
                        alt="Máy Ảnh"> Máy Ảnh - Máy Quay Phim</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/category/ca/53/64/49c6189a0e1c1bf7cb91b01ff6d3fe43.png"
                        alt="Phụ kiện thời trang"> Phụ kiện thời trang</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/category/1e/8c/08/d8b02f8a0d958c74539316e8cd437cbd.png"
                        alt="NGON"> NGON</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/category/8b/d4/a8/5924758b5c36f3b1c43b6843f52d6dd2.png"
                        alt="Đồng hồ và Trang sức"> Đồng hồ và Trang sức</li>
            </ul>
            <br>
            <br>
            <ul class="tien_ich">
                <h3>Tiện ích</h3>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/upload/1e/27/a7/e2c0e40b6dc45a3b5b0a8e59e2536f23.png"
                        alt="Ưu đãi thẻ,ví"> Ưu đãi thẻ, ví</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/upload/4d/a3/cb/c86b6e4f17138195c026437458029d67.png"
                        alt="Đóng tiền, nạp thẻ"> Đóng tiền, nạp thẻ</li>
                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/tmp/6f/4e/41/93f72f323d5b42207ab851dfa39d44fb.png"
                        alt="Mua trước trả sau"> Mua trước trả sau</li>

                <li><img src="https://salt.tikicdn.com/cache/100x100/ts/upload/08/2f/14/fd9d34a8f9c4a76902649d04ccd9bbc5.png"
                        alt="Mua Bán Cùng Chúng TÔi"> Mua Bán Cùng Chúng Tôi</li>
            </ul>
        </nav>

        <section class="main-content">
            <!-- Banner Section -->
            <!-- Carousel Section -->
            <div>
                <div class="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://salt.tikicdn.com/cache/w750/ts/tikimsp/ef/dc/9a/4ab5860380a979f9a226feaa4413ad31.jpg"
                                alt="Image 1">
                            <img src="https://salt.tikicdn.com/cache/w750/ts/tikimsp/b6/e4/f3/29ab482113ca4c0586da637b59a4c32d.jpg"
                                alt="Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://salt.tikicdn.com/cache/w750/ts/tikimsp/b6/e4/f3/29ab482113ca4c0586da637b59a4c32d.jpg"
                                alt="Image 3">
                            <img src="https://salt.tikicdn.com/cache/w750/ts/tikimsp/a4/42/bf/947399f75f38bc8bb78c4282d88a59cf.png"
                                alt="Image 4">
                        </div>
                        <div class="carousel-item">
                            <img src="https://salt.tikicdn.com/cache/w750/ts/tikimsp/a0/0c/53/af46d3117ade83c9c371b4c8cb9756f2.jpg"
                                alt="Image 5">
                            <img src="https://salt.tikicdn.com/cache/w750/ts/tikimsp/b6/e4/f3/29ab482113ca4c0586da637b59a4c32d.jpg "
                                alt="Image 6">
                        </div>
                        <div class="carousel-item">
                            <img src="https://salt.tikicdn.com/cache/w750/ts/tikimsp/a4/42/bf/947399f75f38bc8bb78c4282d88a59cf.png"
                                alt="Image 7">
                            <img src="https://salt.tikicdn.com/cache/w750/ts/tikimsp/ef/dc/9a/4ab5860380a979f9a226feaa4413ad31.jpg"
                                alt="Image 8">
                        </div>
                        <!-- Thêm nhiều carousel-item nếu cần -->
                    </div>

                    <!-- Carousel Controls -->
                    <button class="carousel-control prev" onclick="prevSlide()">❮</button>
                    <button class="carousel-control next" onclick="nextSlide()">❯</button>
                </div>
            </div>


            <!-- Quick Links -->
            <div class="quick-links">
                <div class="quick-link-item">
                    <img src="https://salt.tikicdn.com/ts/upload/2f/52/8e/00ab5fbea9d35fcc3cadbc28d7c6b14e.png"
                        alt="Top Deal">
                    <span>TOP DEAL</span>
                </div>
                <div class="quick-link-item">
                    <img src="https://salt.tikicdn.com/ts/upload/72/8d/23/a810d76829d245ddd87459150cb6bc77.png"
                        alt="Tiki Trading">
                    <span>Tiki Trading</span>
                </div>
                <div class="quick-link-item">
                    <img src="https://salt.tikicdn.com/ts/upload/8b/a4/9f/84d844f70e365515b6e4e3e745dac1d5.png"
                        alt="Coupon">
                    <span>Coupon siêu hot</span>
                </div>
                <div class="quick-link-item">
                    <img src="https://salt.tikicdn.com/ts/upload/67/92/68/00aeeda190357c6c36a028b0d38c0e6e.png"
                        alt="Quay số trúng xu">
                    <span>Quay số trúng xu</span>
                </div>
                <div class="quick-link-item">
                    <img src="https://salt.tikicdn.com/ts/upload/cf/46/d1/e474a9eb803909a59927600ee64ddd4f.png"
                        alt="Hàng ngoại giá hot">
                    <span>Hàng ngoại giá hot</span>
                </div>
                <div class="quick-link-item">
                    <img src="https://salt.tikicdn.com/cache/750x750/ts/upload/d7/b9/cf/185c3ea4d118574d7927f3d191575445.jpg"
                        alt="Cùng mẹ chăm bé">
                    <span>Cùng mẹ chăm bé</span>
                </div>
                <div class="quick-link-item">
                    <img src="https://salt.tikicdn.com/cache/750x750/ts/upload/28/52/b2/e77e55676a38e02c5ac7242cc43f46dc.jpg"
                        alt="Một sách Tiki">
                    <span>Một sách Tiki</span>
                </div>
                <div class="quick-link-item">
                    <img src="https://salt.tikicdn.com/cache/750x750/ts/upload/25/a7/1f/5538b19e95600da86e1241082fb631bf.jpg"
                        alt="Thế giới công nghệ">
                    <span>Thế giới công nghệ</span>
                </div>
                <div class="quick-link-item">
                    <img src="https://salt.tikicdn.com/cache/750x750/ts/upload/03/f9/44/343e3b73c1e600e3c16b97843dc04bb1.jpg"
                        alt="Yêu bếp nghiện nhà">
                    <span>Yêu bếp nghiện nhà</span>
                </div>
                <div class="quick-link-item">
                    <img src="https://salt.tikicdn.com/cache/750x750/ts/upload/ea/d3/81/a4ed0166b6abb19c3cfa3a48fadafd02.jpg"
                        alt="Khỏe đẹp toàn diện">
                    <span>Khỏe đẹp toàn diện</span>
                </div>
            </div>
            <!-- topsele -->
            <div class="container1" <div class="top-deal-section">
                <div class="top-deal-header">
                    <span class="top-deal-title"><i class="fas fa-thumbs-up"></i> TOP DEAL • SIÊU RẺ</span>
                    <a href="#" class="see-all">Xem tất cả</a>
                </div>
                <div class="product-grid">
                    <!-- Product 1 -->
                    <div class="product-card">
                        <img src="https://salt.tikicdn.com/cache/280x280/ts/product/4b/ea/7f/9d93747a715f0248f61946fad58245f9.jpg"
                            alt="Product Image">

                        <div class="product-labels">
                            <span class="label-top-deal">TOP DEAL</span>
                            <span class="label-auth">CHÍNH HÃNG</span>
                        </div>
                        <h3 class="product-title-topdeal">Thay Đổi Tí Hon - Hiệu Quả Bất Ngờ Atomic Habits (Tái Bản)
                        </h3>
                        <div class="product-rating">
                            <span>★★★★★</span> <!-- Thay thế bằng hệ thống sao hoặc icon sao nếu cần -->
                        </div>
                        <div class="product-price">
                            <span class="current-price">145.000₫</span>
                            <span class="discount">-23%</span>
                            <span class="old-price">189.000₫</span>
                        </div>
                        <div class="shipping-info">NOW Giao siêu tốc 2h</div>
                    </div>


                    <div class="product-grid">
                        <!-- Product 1 -->
                        <div class="product-card">
                            <img src="https://salt.tikicdn.com/cache/280x280/ts/product/4b/ea/7f/9d93747a715f0248f61946fad58245f9.jpg"
                                alt="Product Image">

                            <div class="product-labels">
                                <span class="label-top-deal">TOP DEAL</span>
                                <span class="label-auth">CHÍNH HÃNG</span>
                            </div>
                            <h3 class="product-title-topdeal">Thay Đổi Tí Hon - Hiệu Quả Bất Ngờ Atomic Habits (Tái Bản)
                            </h3>
                            <div class="product-rating">
                                <span>★★★★★</span> <!-- Thay thế bằng hệ thống sao hoặc icon sao nếu cần -->
                            </div>
                            <div class="product-price">
                                <span class="current-price">145.000₫</span>
                                <span class="discount">-23%</span>
                                <span class="old-price">189.000₫</span>
                            </div>
                            <div class="shipping-info">NOW Giao siêu tốc 2h</div>
                        </div>
                        <div class="product-grid">
                            <!-- Product 1 -->
                            <div class="product-card">
                                <img src="https://salt.tikicdn.com/cache/280x280/ts/product/4b/ea/7f/9d93747a715f0248f61946fad58245f9.jpg"
                                    alt="Product Image">

                                <div class="product-labels">
                                    <span class="label-top-deal">TOP DEAL</span>
                                    <span class="label-auth">CHÍNH HÃNG</span>
                                </div>
                                <h3 class="product-title-topdeal">Thay Đổi Tí Hon - Hiệu Quả Bất Ngờ Atomic Habits (Tái
                                    Bản)</h3>
                                <div class="product-rating">
                                    <span>★★★★★</span> <!-- Thay thế bằng hệ thống sao hoặc icon sao nếu cần -->
                                </div>
                                <div class="product-price">
                                    <span class="current-price">145.000₫</span>
                                    <span class="discount">-23%</span>
                                    <span class="old-price">189.000₫</span>
                                </div>
                                <div class="shipping-info">NOW Giao siêu tốc 2h</div>
                            </div>
                            <div class="product-grid">
                                <!-- Product 1 -->
                                <div class="product-card">
                                    <img src="https://salt.tikicdn.com/cache/280x280/ts/product/4b/ea/7f/9d93747a715f0248f61946fad58245f9.jpg"
                                        alt="Product Image">

                                    <div class="product-labels">
                                        <span class="label-top-deal">TOP DEAL</span>
                                        <span class="label-auth">CHÍNH HÃNG</span>
                                    </div>
                                    <h3 class="product-title-topdeal">Thay Đổi Tí Hon - Hiệu Quả Bất Ngờ Atomic Habits
                                        (Tái Bản)</h3>
                                    <div class="product-rating">
                                        <span>★★★★★</span> <!-- Thay thế bằng hệ thống sao hoặc icon sao nếu cần -->
                                    </div>
                                    <div class="product-price">
                                        <span class="current-price">145.000₫</span>
                                        <span class="discount">-23%</span>
                                        <span class="old-price">189.000₫</span>
                                    </div>
                                    <div class="shipping-info">NOW Giao siêu tốc 2h</div>
                                </div>
                                <div class="product-grid">
                                    <!-- Product 1 -->
                                    <div class="product-card">
                                        <img src="https://salt.tikicdn.com/cache/280x280/ts/product/4b/ea/7f/9d93747a715f0248f61946fad58245f9.jpg"
                                            alt="Product Image">

                                        <div class="product-labels">
                                            <span class="label-top-deal">TOP DEAL</span>
                                            <span class="label-auth">CHÍNH HÃNG</span>
                                        </div>
                                        <h3 class="product-title-topdeal">Thay Đổi Tí Hon - Hiệu Quả Bất Ngờ Atomic
                                            Habits (Tái Bản)</h3>
                                        <div class="product-rating">
                                            <span>★★★★★</span> <!-- Thay thế bằng hệ thống sao hoặc icon sao nếu cần -->
                                        </div>
                                        <div class="product-price">
                                            <span class="current-price">145.000₫</span>
                                            <span class="discount">-23%</span>
                                            <span class="old-price">189.000₫</span>
                                        </div>
                                        <div class="shipping-info">NOW Giao siêu tốc 2h</div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <!-- Product 1 -->
                                    <div class="product-card">
                                        <img src="https://salt.tikicdn.com/cache/280x280/ts/product/4b/ea/7f/9d93747a715f0248f61946fad58245f9.jpg"
                                            alt="Product Image">

                                        <div class="product-labels">
                                            <span class="label-top-deal">TOP DEAL</span>
                                            <span class="label-auth">CHÍNH HÃNG</span>
                                        </div>
                                        <h3 class="product-title-topdeal">Thay Đổi Tí Hon - Hiệu Quả Bất Ngờ Atomic
                                            Habits (Tái Bản)</h3>
                                        <div class="product-rating">
                                            <span>★★★★★</span> <!-- Thay thế bằng hệ thống sao hoặc icon sao nếu cần -->
                                        </div>
                                        <div class="product-price">
                                            <span class="current-price">145.000₫</span>
                                            <span class="discount">-23%</span>
                                            <span class="old-price">189.000₫</span>
                                        </div>
                                        <div class="shipping-info">NOW Giao siêu tốc 2h</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="flash-sale-section">
                <!-- Flash Sale Header -->
                <div class="flash-sale-header">
                    <span class="flash-sale-title">Flash Sale</span>
                    <div class="flash-sale-timer">
                        <span class="timer-box">00</span> :
                        <span class="timer-box">30</span> :
                        <span class="timer-box">46</span>
                    </div>
                    <a href="#" class="see-all " stlye=" margin-left: 820px">Xem tất cả</a>
                </div>


                <!-- Product Grid -->
                <div class="flash-sale-product-grid">
                    <!-- Product Card Example -->
                    <div class="flash-sale-product-card">
                        <div class="discount-badge">-15%</div>
                        <img src="https://salt.tikicdn.com/cache/280x280/ts/product/a3/17/5b/3c82016d2769eef0253240b8ac668357.jpg"
                            alt="Product Image">
                        <h3 class="product-title">Cà phê rang xay nguyên chất</h3>
                        <div class="product-price">
                            <span class="current-price">115.000₫</span>
                        </div>
                        <div class="sale-status">Vừa mở bán</div>
                    </div>
                    <div class="flash-sale-product-card">
                        <div class="discount-badge">-15%</div>
                        <img src="https://salt.tikicdn.com/cache/280x280/ts/product/a3/17/5b/3c82016d2769eef0253240b8ac668357.jpg"
                            alt="Product Image">
                        <h3 class="product-title">Cà phê rang xay nguyên chất</h3>
                        <div class="product-price">
                            <span class="current-price">115.000₫</span>
                        </div>
                        <div class="sale-status">Vừa mở bán</div>
                    </div>
                    <div class="flash-sale-product-card">
                        <div class="discount-badge">-15%</div>
                        <img src="https://salt.tikicdn.com/cache/280x280/ts/product/a3/17/5b/3c82016d2769eef0253240b8ac668357.jpg"
                            alt="Product Image">
                        <h3 class="product-title">Cà phê rang xay nguyên chất</h3>
                        <div class="product-price">
                            <span class="current-price">115.000₫</span>
                        </div>
                        <div class="sale-status">Vừa mở bán</div>
                    </div>
                    <div class="flash-sale-product-card">
                        <div class="discount-badge">-15%</div>
                        <img src="https://salt.tikicdn.com/cache/280x280/ts/product/a3/17/5b/3c82016d2769eef0253240b8ac668357.jpg"
                            alt="Product Image">
                        <h3 class="product-title">Cà phê rang xay nguyên chất</h3>
                        <div class="product-price">
                            <span class="current-price">115.000₫</span>
                        </div>
                        <div class="sale-status">Vừa mở bán</div>
                    </div>
                    <div class="flash-sale-product-card">
                        <div class="discount-badge">-15%</div>
                        <img src="https://salt.tikicdn.com/cache/280x280/ts/product/a3/17/5b/3c82016d2769eef0253240b8ac668357.jpg"
                            alt="Product Image">
                        <h3 class="product-title">Cà phê rang xay nguyên chất</h3>
                        <div class="product-price">
                            <span class="current-price">115.000₫</span>
                        </div>
                        <div class="sale-status">Vừa mở bán</div>
                    </div>
                    <div class="flash-sale-product-card">
                        <div class="discount-badge">-15%</div>
                        <img src="https://salt.tikicdn.com/cache/280x280/ts/product/a3/17/5b/3c82016d2769eef0253240b8ac668357.jpg"
                            alt="Product Image">
                        <h3 class="product-title">Cà phê rang xay nguyên chất</h3>
                        <div class="product-price">
                            <span class="current-price">115.000₫</span>
                        </div>
                        <div class="sale-status">Vừa mở bán</div>
                    </div>


                    <!-- danhsachsp -->
                </div>
            </div>
            <div class="container1">
                <div class="brand-section">
                    <!-- Header -->
                    <div class="brand-header">
                        <span class="brand-title">Thương hiệu nổi bật</span>
                    </div>

                    <!-- Nút Trái/Phải cho carousel sản phẩm nằm ngoài brand-carousel -->
                    <button class="product-carousel-control product-prev" onclick="scrollProductCarousel(-1)">❮</button>
                    <button class="product-carousel-control product-next" onclick="scrollProductCarousel(1)">❯</button>
                    <!-- Product Carousel Container -->
                    <div class="brand-carousel" id="productCarousel">
                        <!-- Product Cards -->
                        <div class="brand-product-card">
                            <img src="https://salt.tikicdn.com/ts/tikimsp/5e/c1/2a/2ce5cc21ffe9efa7e7dafb21e6823d92.png"
                                alt="Product Image">
                            <div class="product-description">
                                Chính hãng giảm 100K <br> Mua 1 Tặng 1
                            </div>
                        </div>
                        <div class="brand-product-card">
                            <img src="https://salt.tikicdn.com/ts/tikimsp/5e/c1/2a/2ce5cc21ffe9efa7e7dafb21e6823d92.png"
                                alt="Product Image">
                            <div class="product-description">
                                Chính hãng giảm 100K <br> Mua 1 Tặng 1
                            </div>
                        </div>
                        <div class="brand-product-card">
                            <img src="https://salt.tikicdn.com/ts/tikimsp/5e/c1/2a/2ce5cc21ffe9efa7e7dafb21e6823d92.png"
                                alt="Product Image">
                            <div class="product-description">
                                Chính hãng giảm 100K <br> Mua 1 Tặng 1
                            </div>
                        </div>
                        <div class="brand-product-card">
                            <img src="https://salt.tikicdn.com/ts/tikimsp/5e/c1/2a/2ce5cc21ffe9efa7e7dafb21e6823d92.png"
                                alt="Product Image">
                            <div class="product-description">
                                Chính hãng giảm 100K <br> Mua 1 Tặng 1
                            </div>
                        </div>
                        <div class="brand-product-card">
                            <img src="https://salt.tikicdn.com/ts/tikimsp/5e/c1/2a/2ce5cc21ffe9efa7e7dafb21e6823d92.png"
                                alt="Product Image">
                            <div class="product-description">
                                Chính hãng giảm 100K <br> Mua 1 Tặng 1
                            </div>
                        </div>
                        <div class="brand-product-card">
                            <img src="https://salt.tikicdn.com/ts/tikimsp/5e/c1/2a/2ce5cc21ffe9efa7e7dafb21e6823d92.png"
                                alt="Product Image">
                            <div class="product-description">
                                Chính hãng giảm 100K <br> Mua 1 Tặng 1
                            </div>
                        </div>
                        <div class="brand-product-card">
                            <img src="https://salt.tikicdn.com/ts/tikimsp/5e/c1/2a/2ce5cc21ffe9efa7e7dafb21e6823d92.png"
                                alt="Product Image">
                            <div class="product-description">
                                Chính hãng giảm 100K <br> Mua 1 Tặng 1
                            </div>
                        </div>
                        <div class="brand-product-card">
                            <img src="https://salt.tikicdn.com/ts/tikimsp/5e/c1/2a/2ce5cc21ffe9efa7e7dafb21e6823d92.png"
                                alt="Product Image">
                            <div class="product-description">
                                Chính hãng giảm 100K <br> Mua 1 Tặng 1
                            </div>
                        </div>
                        <div class="brand-product-card">
                            <img src="https://salt.tikicdn.com/ts/tikimsp/5e/c1/2a/2ce5cc21ffe9efa7e7dafb21e6823d92.png"
                                alt="Product Image">
                            <div class="product-description">
                                Chính hãng giảm 100K <br> Mua 1 Tặng 1
                            </div>
                        </div>
                        <div class="brand-product-card">
                            <img src="https://salt.tikicdn.com/ts/tikimsp/5e/c1/2a/2ce5cc21ffe9efa7e7dafb21e6823d92.png"
                                alt="Product Image">
                            <div class="product-description">
                                Chính hãng giảm 100K <br> Mua 1 Tặng 1
                            </div>
                        </div>
                        <div class="brand-product-card">
                            <img src="https://salt.tikicdn.com/ts/tikimsp/5e/c1/2a/2ce5cc21ffe9efa7e7dafb21e6823d92.png"
                                alt="Product Image">
                            <div class="product-description">
                                Chính hãng giảm 100K <br> Mua 1 Tặng 1
                            </div>
                        </div>
                        <!-- Repeat other product cards... -->
                    </div>
                </div>
            </div>
            <!-- khuyenmainoibat -->

            <div class="container1">
                <div class="promotion-section">
                    <div class="promotion-header">
                        <span class="promotion-title">Khuyến mãi nổi bật</span>
                    </div>
                    <div class="promotion-grid">
                        <!-- Promotion Card -->
                        <div class="promotion-card">
                            <div class="promotion-content">
                                <img src="https://salt.tikicdn.com/cache/w280/ts/tikimsp/36/cb/8d/76b397b92e5a3db16cb837788eb53ea9.png"
                                    alt="Product Image">
                                <div class="promotion-description">
                                    <strong>Quay số trúng xu</strong> <br> Flash sale giá sốc
                                </div>
                            </div>
                        </div>

                        <!-- Repeat các thẻ promotion-card khác -->
                        <div class="promotion-card">
                            <div class="promotion-content">
                                <img src="https://salt.tikicdn.com/cache/w280/ts/tikimsp/36/cb/8d/76b397b92e5a3db16cb837788eb53ea9.png"
                                    alt="Product Image">
                                <div class="promotion-description">
                                    <strong>Gia dụng chính hãng</strong> <br> Giảm đến 50%
                                </div>
                            </div>
                        </div>
                        <div class="promotion-card">
                            <div class="promotion-content">
                                <img src="https://salt.tikicdn.com/cache/w280/ts/tikimsp/36/cb/8d/76b397b92e5a3db16cb837788eb53ea9.png"
                                    alt="Product Image">
                                <div class="promotion-description">
                                    <strong>Gia dụng chính hãng</strong> <br> Giảm đến 50%
                                </div>
                            </div>
                        </div>
                        <div class="promotion-card">
                            <div class="promotion-content">
                                <img src="https://salt.tikicdn.com/cache/w280/ts/tikimsp/36/cb/8d/76b397b92e5a3db16cb837788eb53ea9.png"
                                    alt="Product Image">
                                <div class="promotion-description">
                                    <strong>Gia dụng chính hãng</strong> <br> Giảm đến 50%
                                </div>
                            </div>
                        </div>
                        <div class="promotion-card">
                            <div class="promotion-content">
                                <img src="https://salt.tikicdn.com/cache/w280/ts/tikimsp/36/cb/8d/76b397b92e5a3db16cb837788eb53ea9.png"
                                    alt="Product Image">
                                <div class="promotion-description">
                                    <strong>Gia dụng chính hãng</strong> <br> Giảm đến 50%
                                </div>
                            </div>
                        </div>
                        <div class="promotion-card">
                            <div class="promotion-content">
                                <img src="https://salt.tikicdn.com/cache/w280/ts/tikimsp/36/cb/8d/76b397b92e5a3db16cb837788eb53ea9.png"
                                    alt="Product Image">
                                <div class="promotion-description">
                                    <strong>Gia dụng chính hãng</strong> <br> Giảm đến 50%
                                </div>
                            </div>
                        </div>
                        <div class="promotion-card">
                            <div class="promotion-content">
                                <img src="https://salt.tikicdn.com/cache/w280/ts/tikimsp/36/cb/8d/76b397b92e5a3db16cb837788eb53ea9.png"
                                    alt="Product Image">
                                <div class="promotion-description">
                                    <strong>Gia dụng chính hãng</strong> <br> Giảm đến 50%
                                </div>
                            </div>
                        </div>
                        <div class="promotion-card">
                            <div class="promotion-content">
                                <img src="https://salt.tikicdn.com/cache/w280/ts/tikimsp/36/cb/8d/76b397b92e5a3db16cb837788eb53ea9.png"
                                    alt="Product Image">
                                <div class="promotion-description">
                                    <strong>Gia dụng chính hãng</strong> <br> Giảm đến 50%
                                </div>
                            </div>
                        </div>
                        <div class="promotion-card">
                            <div class="promotion-content">
                                <img src="https://salt.tikicdn.com/cache/w280/ts/tikimsp/36/cb/8d/76b397b92e5a3db16cb837788eb53ea9.png"
                                    alt="Product Image">
                                <div class="promotion-description">
                                    <strong>Gia dụng chính hãng</strong> <br> Giảm đến 50%
                                </div>
                            </div>
                        </div>
                        <div class="promotion-card">
                            <div class="promotion-content">
                                <img src="https://salt.tikicdn.com/cache/w280/ts/tikimsp/36/cb/8d/76b397b92e5a3db16cb837788eb53ea9.png"
                                    alt="Product Image">
                                <div class="promotion-description">
                                    <strong>Gia dụng chính hãng</strong> <br> Giảm đến 50%
                                </div>
                            </div>
                        </div>

                        <!-- Thêm các thẻ khác theo ý muốn -->
                    </div>
                </div>

            </div>
            <!-- footer -->
            @include('layouts.footer')
    </div>

    </div>

    </div>

    </div>
    </section>
</body>
<script src="{{ asset('js/carousel.js') }}"></script>

</html>