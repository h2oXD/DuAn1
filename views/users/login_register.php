<main style="margin-bottom: 50px;">
    <div class="mb-4 pb-4"></div>
    <section class="login-register container">
        <h2 class="d-none">Login & Register</h2>
        <ul class="nav nav-tabs mb-5" id="login_register" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link nav-link_underscore active" id="login-tab" data-bs-toggle="tab"
                    href="#tab-item-login" role="tab" aria-controls="tab-item-login" aria-selected="true">Đăng nhập</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link nav-link_underscore" id="register-tab" data-bs-toggle="tab" href="#tab-item-register"
                    role="tab" aria-controls="tab-item-register" aria-selected="false">Đăng ký</a>
            </li>
        </ul>
        <div class="tab-content pt-2" id="login_register_tab_content">
            <div class="tab-pane fade show active" id="tab-item-login" role="tabpanel" aria-labelledby="login-tab">
                <div class="login-form">
                    <form action="" method="post" name="login-form" class="needs-validation" novalidate>
                        <div class="form-floating mb-3">
                            <input name="login_email" type="email" class="form-control form-control_gray"
                                id="customerNameEmailInput1" placeholder="Email address *" required>
                            <label for="customerNameEmailInput1">Email *</label>
                            <div style="color:rgba(231,74,59,.9)" class=".was-validated">
                                <?= $_SESSION['errorEmail'] ?? null ?>
                            </div>
                            <?php unset($_SESSION['errorEmail']); ?>
                        </div>

                        <div class="pb-3"></div>

                        <div class="form-floating mb-3">
                            <input name="login_password" type="password" class="form-control form-control_gray"
                                id="customerPasswodInput" placeholder="Password *" required>
                            <label for="customerPasswodInput">Mật khẩu *</label>
                            <div style="color:rgba(231,74,59,.9)" class=".was-validated">
                                <?= $_SESSION['errorPass'] ?? null ?>
                            </div>
                            <?php unset($_SESSION['errorPass']); ?>
                        </div>

                        <div class="d-flex align-items-center mb-3 pb-2">
                            <div class="form-check mb-0">
                                <input name="remember" class="form-check-input form-check-input_fill" type="checkbox"
                                    value="" id="flexCheckDefault1">
                                <label class="form-check-label text-secondary" for="flexCheckDefault1">Ghi nhớ đăng
                                    nhập</label>
                            </div>
                            <a href="?act=forget-password" class="btn-text ms-auto">Quên mật khẩu?</a>
                        </div>
                        <span style="color: red;">
                            <?= $_SESSION['faillogin'] ?? null ?>
                        </span>
                        <?php unset($_SESSION['faillogin']); ?>
                        <button class="btn btn-primary w-100 text-uppercase" name="login" type="submit">Đăng
                            nhập</button>
                        <div class="customer-option mt-4 text-center">
                            <span class="text-secondary">Bạn chưa có tài khoản?</span>
                            <a href="#register-tab" class="btn-text js-show-register">Đăng ký</a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Register -->
            <div class="tab-pane fade" id="tab-item-register" role="tabpanel" aria-labelledby="register-tab">
                <div class="register-form">
                    <form action="" method="post" name="register-form" class="needs-validation" novalidate>
                        <div class="form-floating mb-3">
                            <input name="register_email" type="email" class="form-control form-control_gray"
                                id="customerEmailRegisterInput" placeholder="Email address *" required>
                            <label for="customerEmailRegisterInput">Email *</label>
                            <div style="color:rgba(231,74,59,.9)" class=".was-validated">
                                <?= $_SESSION['errorEmail'] ?? null ?>
                            </div>
                            <?php unset($_SESSION['errorEmail']); ?>
                        </div>


                            <div class="form-floating my-3">
                                <input name="name" type="text" class="form-control" id="account_last_name"
                                    placeholder="Name" required>
                                <label for="account_name">Họ và tên *</label>
                                <div style="color:rgba(231,74,59,.9)" class=".was-validated ">
                                    <?= $_SESSION['errorName'] ?? null ?>
                                </div>
                                <?php unset($_SESSION['errorName']); ?>
                            </div>
                        <div class="pb-3"></div>

                        <div class="form-floating mb-3">
                            <input name="register_password" type="password" class="form-control form-control_gray"
                                id="customerPasswodRegisterInput" placeholder="Password *" required>
                            <label for="customerPasswodRegisterInput">Mật khẩu *</label>
                            <div style="color:rgba(231,74,59,.9)" class=".was-validated ">
                                    <?= $_SESSION['errorPass'] ?? null ?>
                                </div>
                                <?php unset($_SESSION['errorPass']); ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="confirm_password" type="password" class="form-control form-control_gray"
                                id="customerPasswodRegisterInput" placeholder="Password *" required>
                            <label for="customerPasswodRegisterInput">Xác nhận mật khẩu *</label>
                            <div style="color:rgba(231,74,59,.9)" class=".was-validated ">
                                    <?= $_SESSION['errorCfPass'] ?? null ?>
                                </div>
                                <?php unset($_SESSION['errorCfPass']); ?>
                        </div>

                        <div class="d-flex align-items-center mb-3 pb-2">
                            <p class="m-0">Dữ liệu cá nhân của bạn sẽ được sử dụng để hỗ trợ trải nghiệm của bạn trên
                                toàn bộ trang web này, để quản lý quyền truy cập vào tài khoản của bạn và cho các mục
                                đích khác được mô tả trong chính sách bảo mật của chúng tôi.</p>
                        </div>
                        
                        <div style="color:rgba(231,74,59,.9)" class=".was-validated ">
                                    <?= $_SESSION['registerSuccess'] ?? null ?>
                                </div>
                                <?php unset($_SESSION['registerSuccess']); ?>

                        <button class="btn btn-primary w-100 text-uppercase" name="register" type="submit">Đăng
                            ký</button>
                            
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>