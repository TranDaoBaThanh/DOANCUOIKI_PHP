<?php session_start(); ?>
<?php include 'template/head.php'; ?>
<?php include 'template/header.php'; ?>

<main class="pb-5">
    <!-- Hero Section -->
    <div class="hero-section py-5 text-white">
        <div class="container text-center">
            <h1 class="display-4 mb-4 animate__animated animate__fadeInDown">
                <i class="fas fa-mobile-alt mr-3"></i>TechStore
            </h1>
            <p class="lead mb-4">Thiết bị công nghệ chính hãng với giá tốt nhất</p>
            <?php if (!isset($_SESSION['user_id'])): ?>
                <div class="mt-4">
                    <a href="signup.php" class="btn btn-lg btn-primary px-5 py-3 shadow">
                        <i class="fas fa-user-plus mr-2"></i>Khám phá ngay
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Danh mục sản phẩm -->
    <section class="py-4 bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <div class="category-box p-3">
                        <i class="fas fa-mobile-alt fa-3x text-primary mb-3"></i>
                        <h5>Điện thoại</h5>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="category-box p-3">
                        <i class="fas fa-laptop fa-3x text-primary mb-3"></i>
                        <h5>Laptop</h5>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="category-box p-3">
                        <i class="fas fa-tablet-alt fa-3x text-primary mb-3"></i>
                        <h5>Máy tính bảng</h5>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="category-box p-3">
                        <i class="fas fa-headphones fa-3x text-primary mb-3"></i>
                        <h5>Phụ kiện</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sản phẩm nổi bật -->
    <section class="py-5" id="featured">
        <div class="container">
            <h2 class="text-center mb-5 text-primary"><i class="fas fa-star mr-2"></i>Sản phẩm nổi bật</h2>
            <div class="row">
                <!-- Sản phẩm 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow product-card">
                        <div class="badge-overlay">
                            <span class="badge badge-danger top-left">New</span>
                        </div>
                        <img src="media/iphone-15-pro-max.jpg" class="card-img-top" alt="iPhone">
                        <div class="card-body">
                            <h5 class="card-title">iPhone 15 Pro</h5>
                            <p class="card-text">Chip A17 Pro, Camera 48MP, 8GB RAM</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">28.990.000đ</span>
                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Sản phẩm 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow product-card">
                        <div class="badge-overlay">
                            <span class="badge badge-warning top-left">-10%</span>
                        </div>
                        <img src="media/samsung-galaxy-s24.jpg" class="card-img-top" alt="Samsung Galaxy">
                        <div class="card-body">
                            <h5 class="card-title">Samsung Galaxy S24 Ultra</h5>
                            <p class="card-text">Snapdragon 8 Gen 3, 12GB RAM, 200MP Camera</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">26.990.000đ</span>
                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Sản phẩm 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow product-card">
                        <img src="media/apple-macbook-pro-14-inch-m3-pro-2023.jpg" class="card-img-top" alt="MacBook Pro">
                        <div class="card-body">
                            <h5 class="card-title">MacBook Pro M3</h5>
                            <p class="card-text">Apple M3, 16GB RAM, 512GB SSD</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">39.990.000đ</span>
                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner khuyến mãi -->
    <section class="py-4 bg-primary text-white text-center">
        <div class="container">
            <h3><i class="fas fa-bolt mr-2"></i>Khuyến mãi sốc - Giảm đến 50%</h3>
            <p>Chỉ áp dụng online đến hết ngày 15/06/2025</p>
            <a href="#" class="btn btn-light">Xem ngay</a>
        </div>
    </section>
</main>

<?php include 'template/footer.php'; ?>