<?php session_start(); ?>
<?php include 'template/head.php'; ?>
<?php include 'template/header.php'; ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card animate__animated animate__fadeInUp">
                <div class="card-header text-center bg-primary text-white py-4">
                    <h3 class="font-weight-bold mb-0"><i class="fas fa-sign-in-alt mr-2"></i>ĐĂNG NHẬP</h3>
                </div>
                <div class="card-body px-4 pb-4">
                    <?php if (isset($_SESSION['success'])): ?>
                        <div class="alert alert-success"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></div>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['error'])): ?>
                        <div class="alert alert-danger"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
                    <?php endif; ?>
                    <form action="controller/c_signin.php" method="post">
                        <div class="form-group">
                            <label>Tên người dùng</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Nhớ mật khẩu</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block py-2">
                            <i class="fas fa-unlock-alt mr-2"></i>Đăng nhập
                        </button>
                    </form>
                </div>
                <div class="card-footer text-center bg-light">
                    <p class="mb-0">Chưa có tài khoản? <a href="signup.php" class="text-primary">Đăng ký ngay</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'template/footer.php'; ?>