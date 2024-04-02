<main>
  <div class="mb-4 pb-4"></div>
  <section class="my-account container">
    <h2 class="page-title">Thông tin cá nhân</h2>
    <div class="row">
      <div class="col-lg-3">
        <ul class="account-nav">
          <li><a href="?act=account_dashboard" class="menu-link menu-link_us-s">Dashboard</a></li>
          <li><a href="?act=account_order" class="menu-link menu-link_us-s">Đơn mua</a></li>
          <li><a href="?act=account_detail" class="menu-link menu-link_us-s menu-link_active">Thông tin cá nhân</a></li>
          <li><a href="?act=account_address" class="menu-link menu-link_aus-s">Địa chỉ nhận hàng</a></li>
          <li><a href="?act=logout" class="menu-link menu-link_us-s">Đăng xuất</a></li>
        </ul>
      </div>
      <div class="col-lg-9">
        <div class="page-content my-account__edit">
          <div class="my-account__edit-form">
            <form action="" method="post" class="needs-validation" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input name="name" value="<?= $_SESSION['user']['name'] ?>" type="text" class="form-control"
                      id="account_last_name" placeholder="Name" required>
                    <label for="account_name">Họ và tên</label>
                    <div style="color:rgba(231,74,59,.9)" class=".was-validated ">
                      <?= $_SESSION['errorName'] ?? null ?>
                    </div>
                    <?php unset($_SESSION['errorName']); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input name="phone_number" value="<?= $_SESSION['user']['phone_number'] ?>" type="text"
                      class="form-control" id="account_last_name" placeholder="Name" required>
                    <label for="account_name">Số điện thoại</label>
                    <div style="color:rgba(231,74,59,.9)" class=".was-validated">
                      <?= $_SESSION['errorSDT'] ?? null ?>
                    </div>
                    <?php unset($_SESSION['errorSDT']); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input disabled name="email" value="<?= $_SESSION['user']['email'] ?>" type="email"
                      class="form-control" id="account_email" placeholder="Email Address" required>
                    <label for="account_email">Địa chỉ Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input name="address" value="<?= $_SESSION['user']['address'] ?>" type="text" class="form-control"
                      id="account_address" placeholder="Address" required>
                    <label for="account_address">Địa chỉ</label>
                  </div>
                </div>
                <div style="color:#22bb33" class=".was-validated ">
                  <?= $_SESSION['successUpdateUser'] ?? null ?>
                </div>
                <?php unset($_SESSION['successUpdateUser']); ?>
                <div style="color:#ffc107" class=".was-validated ">
                  <?= $_SESSION['nothing'] ?? null ?>
                </div>
                <?php unset($_SESSION['nothing']); ?>
                <div class="col-md-12">
                  <div class="my-3">
                    <button name="account_edit_form" type="submit" class="btn btn-primary">Lưu thay đổi</button>
                  </div>
                </div>
            </form>
            <form action="" method="post"></form>
            <div class="col-md-12">
              <div class="my-3">
                <h5 class="text-uppercase mb-0">Thay đổi mật khẩu</h5>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-floating my-3">
                <input name="password" type="password" class="form-control" id="account_current_password"
                  placeholder="Mật khẩu hiện tại" required>
                <label for="account_current_password">Mật khẩu hiện tại</label>
                <div style="color:rgba(231,74,59,.9)" class=".was-validated">
                  <?= $_SESSION['errorPass'] ?? null ?>
                </div>
                <?php unset($_SESSION['errorPass']); ?>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-floating my-3">
                <input name="new_password" type="password" class="form-control" id="account_new_password"
                  placeholder="Mật khẩu mới" required>
                <label for="account_new_password">Mật khẩu mới</label>
                <div style="color:rgba(231,74,59,.9)" class=".was-validated">
                  <?= $_SESSION['errorNewPass'] ?? null ?>
                </div>
                <?php unset($_SESSION['errorNewPass']); ?>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-floating my-3">
                <input name="confirm_new_password" type="password" class="form-control"
                  data-cf-pwd="#account_new_password" id="account_confirm_password" placeholder="Xác nhận mật khẩu mới"
                  required>
                <label for="account_confirm_password">Xác nhận mật khẩu mới</label>
                <div class="invalid-feedback">Mật khẩu không đúng!</div>
                <div style="color:rgba(231,74,59,.9)" class=".was-validated">
                  <?= $_SESSION['confirmPass'] ?? null ?>
                </div>
                <?php unset($_SESSION['confirmPass']); ?>
              </div>
            </div>
            <div style="color:#22bb33" class=".was-validated">
              <?= $_SESSION['successResetPass'] ?? null ?>
            </div>
            <?php unset($_SESSION['successResetPass']); ?>
            <div class="col-md-12">
              <div class="my-3">
                <button name="reset_pass" type="submit" class="btn btn-primary">Đổi mật khẩu</button>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </section>
</main>