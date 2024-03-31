<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <h4>
                    <?= $title ?? null ?>
                </h4>
                <a href="?act=order-create"><button class="btn btn-success  mb-2 me-4 btn-lg">Thêm mới</button></a>
            </div>
            <!-- /BREADCRUMB -->
            <div class="seperator-header">
                <!-- <h4 class=""></h4> -->
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">

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
                                                    href="<?= BASE_URL_ADMIN ?>?act=order-update&id=<?= $order['id'] ?>">Xác nhận đơn hàng</a>
                                                <a class="btn btn-danger"
                                                    onclick="return confirm('Bạn có chắc chắn xóa không')"
                                                    href="<?= BASE_URL_ADMIN ?>?act=order-delete&id=<?= $order['id'] ?>">Xóa</a>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>