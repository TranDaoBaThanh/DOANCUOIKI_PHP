<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="index.php">
            <i class="fas fa-mobile-alt mr-2"></i>TechStore
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Trang chủ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        Sản phẩm
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Điện thoại</a>
                        <a class="dropdown-item" href="#">Laptop</a>
                        <a class="dropdown-item" href="#">Máy tính bảng</a>
                        <a class="dropdown-item" href="#">Phụ kiện</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Khuyến mãi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hỗ trợ</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 mr-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Tìm kiếm...">
                    <div class="input-group-append">
                        <button class="btn btn-light" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> <span class="badge badge-light">0</span></a>
                </li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                            <i class="fas fa-user-circle"></i> <?php echo htmlspecialchars($_SESSION['username']); ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Tài khoản</a>
                            <a class="dropdown-item" href="#">Đơn hàng</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="controller/c_logout.php"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                        </div>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="signin.php">
                            <i class="fas fa-sign-in-alt mr-1"></i>Đăng nhập
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>