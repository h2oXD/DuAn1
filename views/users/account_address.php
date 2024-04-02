<main style="margin-bottom: 150px;" >
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
        <h2 class="page-title">Quản lý tài khoản</h2>
        <div class="row">
            <div class="col-lg-3">
                <ul class="account-nav">
                    <li><a href="?act=account_dashboard" class="menu-link menu-link_us-s">Dashboard</a></li>
                    <li><a href="?act=account_order" class="menu-link menu-link_us-s">Đơn mua</a></li>
                    <li><a href="?act=account_detail" class="menu-link menu-link_aus-s">Thông tin cá nhân</a></li>
                    <li><a href="?act=account_address" class="menu-link menu-link_aus-s menu-link_active">Địa chỉ nhận hàng</a></li>
                    <li><a href="?act=logout" class="menu-link menu-link_us-s">Đăng xuất</a></li>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="page-content my-account__dashboard">
                <form action="" method="post" class="needs-validation" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input name="name" value="<?= $user_address['receiver'] ?? null ?>" type="text" class="form-control"
                      id="account_last_name" placeholder="Name" required>
                    <label for="account_name">Họ và tên người nhận hàng</label>
                    <div style="color:rgba(231,74,59,.9)" class=".was-validated ">
                      <?= $_SESSION['errorName'] ?? null ?>
                    </div>
                    <?php unset($_SESSION['errorName']); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input name="phone_number" value="<?= $user_address['phone_number'] ?? null ?>" type="text"
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
                    <input name="email" value="<?= $user_address['email'] ?? null ?>" type="email"
                      class="form-control" id="account_email" placeholder="Email Address" required>
                    <label for="account_email">Địa chỉ Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input name="address" value="<?= $user_address['delivery_address'] ?? null ?>" type="text" class="form-control"
                      id="account_address" placeholder="Address" required>
                    <label for="account_address">Địa chỉ nhận hàng</label>
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
                </div>
            </div>
        </div>
    </section>
</main>