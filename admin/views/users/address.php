<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <h4>
                    <?= $title ?? null ?>
                </h4>
                <a href="?act=users-create"><button class="btn btn-success  mb-2 me-4 btn-lg">Thêm mới</button></a>
            </div>
            <!-- /BREADCRUMB -->
            <div class="seperator-header">
                <!-- <h4 class=""></h4> -->
            </div>

            <div class="row layout-spacing">
                <div class="col-md-6">
                    <label for="account_name">Họ và tên người nhận hàng</label>
                    <input name="name" value="<?= $user_address['receiver'] ?? null ?>" type="text" class="form-control"
                        id="account_last_name" placeholder="" required>

                    <div style="color:rgba(231,74,59,.9)" class=".was-validated ">
                        <?= $_SESSION['errorName'] ?? null ?>
                    </div>
                    <?php unset($_SESSION['errorName']); ?>

                </div>
                <div class="col-md-6">
                    <label for="account_name">Số điện thoại</label>
                    <input name="phone_number" value="<?= $user_address['phone_number'] ?? null ?>" type="text"
                        class="form-control" id="account_last_name" placeholder="" required>

                    <div style="color:rgba(231,74,59,.9)" class=".was-validated">
                        <?= $_SESSION['errorSDT'] ?? null ?>
                    </div>
                    <?php unset($_SESSION['errorSDT']); ?>

                </div>
                <div class="col-md-6 mt-4">
                    <label for="account_email">Địa chỉ Email</label>
                    <input name="email" value="<?= $user_address['email'] ?? null ?>" type="email" class="form-control"
                        id="account_email" placeholder="" required>


                </div>
                <div class="col-md-6 mt-4">
                    <label for="account_address">Địa chỉ nhận hàng</label>
                    <input name="address" value="<?= $user_address['delivery_address'] ?? null ?>" type="text"
                        class="form-control" id="account_address" placeholder="" required>


                </div>
            </div>
        </div>
    </div>