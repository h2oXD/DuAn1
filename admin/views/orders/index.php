<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <h4>
                    <?= $title ?? null ?>
                </h4>
                <!-- <a href="?act=order-create"><button class="btn btn-success  mb-2 me-4 btn-lg">Thêm mới</button></a> -->
            </div>
            <!-- /BREADCRUMB -->
            <div class="seperator-header">
                <!-- <h4 class=""></h4> -->
            </div>

            <div class="row layout-spacing">
                <!-- <div class="col-lg-12"> -->
                    <!-- <div class="statbox widget box box-shadow"> -->
                        <!-- <div class="widget-content widget-content-area"> -->
                            <?php if (isset($_SESSION['success'])): ?>
                                <div class="alert alert-success">
                                    <ul>

                                        <li>
                                            <?= $_SESSION['success'] ?>
                                        </li>

                                    </ul>
                                </div>
                                <?php unset($_SESSION['success']); ?>
                            <?php endif; ?>
                            <!-- <table id="style-3" class="table style-3 dt-table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User_ID</th>
                                        <th>Phone_number</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Order date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($orders as $order): ?>


                                        <tr>
                                            <td>
                                                <?= $order['id'] ?>
                                            </td>
                                            <td>
                                                <?= $order['user_id'] ?>
                                            </td>
                                            <td>
                                                <?= $order['phone_number'] ?>
                                            </td>
                                            <td>
                                                <?= $order['address'] ?>
                                            </td>
                                            <td>
                                                <?= $order['email'] ?>
                                            </td>
                                            <td>
                                                <?= $order['order_date'] ?>
                                            </td>
                                            <td>
                                                <?= $order['status'] ?>
                                            </td>

                                            <td>
                                                <a class="btn btn-info"
                                                    href="<?= BASE_URL_ADMIN ?>?act=order-detail&id=<?= $order['id'] ?>">Chi
                                                    tiết</a>
                                                <a class="btn btn-primary"
                                                    href="<?= BASE_URL_ADMIN ?>?act=order-update&id=<?= $order['id'] ?>">Xác
                                                    nhận đơn hàng</a>
                                                <a class="btn btn-danger"
                                                    onclick="return confirm('Bạn có chắc chắn xóa không')"
                                                    href="<?= BASE_URL_ADMIN ?>?act=order-delete&id=<?= $order['id'] ?>">Xóa</a>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table> -->

                        <!-- </div> -->
                    <!-- </div> -->
                <!-- </div> -->
                <div class="simple-pill">

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Chờ xác nhận</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Chờ lấy hàng</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Đang giao</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Đã giao</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Đã hủy</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            <table id="style-3" class="table style-3 dt-table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User_ID</th>
                                        <th>Phone_number</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Order date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($orders as $order): ?>


                                        <tr>
                                            <td>
                                                <?= $order['id'] ?>
                                            </td>
                                            <td>
                                                <?= $order['user_id'] ?>
                                            </td>
                                            <td>
                                                <?= $order['phone_number'] ?>
                                            </td>
                                            <td>
                                                <?= $order['address'] ?>
                                            </td>
                                            <td>
                                                <?= $order['email'] ?>
                                            </td>
                                            <td>
                                                <?= $order['order_date'] ?>
                                            </td>
                                            <td>
                                                <?= $order['status'] ?>
                                            </td>

                                            <td>
                                                <a class="btn btn-info "
                                                    href="<?= BASE_URL_ADMIN ?>?act=order-detail&id=<?= $order['id'] ?>">Chi
                                                    tiết</a><br>
                                                <a class="btn btn-primary"
                                                    href="<?= BASE_URL_ADMIN ?>?act=order-update&id=<?= $order['id'] ?>">Xác
                                                    nhận đơn hàng</a><br>
                                                <a class="btn btn-danger"
                                                    onclick="return confirm('Bạn có chắc chắn xóa không')"
                                                    href="<?= BASE_URL_ADMIN ?>?act=order-delete&id=<?= $order['id'] ?>">Hủy đơn hàng</a>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">
                            <table id="style-3" class="table style-3 dt-table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User_ID</th>
                                        <th>Phone_number</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Order date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($orders as $order): ?>
                                        <tr>
                                            <td>
                                                <?= $order['id'] ?>
                                            </td>
                                            <td>
                                                <?= $order['user_id'] ?>
                                            </td>
                                            <td>
                                                <?= $order['phone_number'] ?>
                                            </td>
                                            <td>
                                                <?= $order['address'] ?>
                                            </td>
                                            <td>
                                                <?= $order['email'] ?>
                                            </td>
                                            <td>
                                                <?= $order['order_date'] ?>
                                            </td>
                                            <td>
                                                <?= $order['status'] ?>
                                            </td>

                                            <td>
                                                <a class="btn btn-info"
                                                    href="<?= BASE_URL_ADMIN ?>?act=order-detail&id=<?= $order['id'] ?>">Chi
                                                    tiết</a>
                                                <a class="btn btn-primary"
                                                    href="<?= BASE_URL_ADMIN ?>?act=order-update&id=<?= $order['id'] ?>">Xác
                                                    nhận đơn hàng</a>
                                                <a class="btn btn-danger"
                                                    onclick="return confirm('Bạn có chắc chắn xóa không')"
                                                    href="<?= BASE_URL_ADMIN ?>?act=order-delete&id=<?= $order['id'] ?>">Xóa</a>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab" tabindex="0">
                            <p class="mt-3">In diam odio, ullamcorper vitae dolor vel, lobortis rhoncus odio. Nullam
                                lacinia euismod ex vitae ullamcorper. Integer fringilla arcu nunc, et tempus sapien
                                ornare sed. Nam fringilla velit nec bibendum consectetur. Etiam pellentesque eu nulla
                                vel tincidunt. </p>
                            <p>Ut nec nunc sed risus viverra vehicula non non purus. Nunc semper sem ut ante suscipit
                                vulputate. Integer tempus ornare ligula, sed lacinia leo posuere eu. </p>
                        </div>
                        <div class="tab-pane fade" id="pills-disabled" role="tabpanel"
                            aria-labelledby="pills-disabled-tab" tabindex="0">
                            <p class="mt-3">Nullam feugiat, sapien a lacinia condimentum, libero nibh fermentum lectus,
                                eu dictum justo ex sit amet neque. Sed felis arcu, efficitur eget diam eget, maximus
                                dapibus enim. Sed vitae varius lorem. Fusce non accumsan diam, quis porttitor dolor.
                            </p>
                            <p>Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante
                                eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna
                                eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget
                                faucibus quam dignissim vel.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>