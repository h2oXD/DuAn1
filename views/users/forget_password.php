<main style="margin-bottom: 200px;">
    <div class="mb-4 pb-4"></div>
    <section class="login-register container">
        <h2 class="d-none">Login & Register</h2>
        <ul class="nav nav-tabs mb-5" id="login_register" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link nav-link_underscore active" id="login-tab" data-bs-toggle="tab"
                    href="#tab-item-login" role="tab" aria-controls="tab-item-login" aria-selected="true">Quên mật khẩu</a>
            </li>
        </ul>
        <div class="tab-content pt-2" id="login_register_tab_content">
            <div class="tab-pane fade show active" id="tab-item-login" role="tabpanel" aria-labelledby="login-tab">
                <div class="login-form">
                    <form action="" method="post" name="login-form" class="needs-validation" novalidate>
                        <div class="form-floating mb-3">
                            <input name="reset_email" type="email" class="form-control form-control_gray"
                                id="customerNameEmailInput1" placeholder="Email address *" required>
                            <label for="customerNameEmailInput1">Email *</label>
                        </div>

                        <div class="pb-3"></div>

                        <button class="btn btn-primary w-100 text-uppercase" type="submit">Quên mật khẩu</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>