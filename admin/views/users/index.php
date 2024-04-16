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
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <?php if (isset($_SESSION['xoakhongthanhcong'])) : ?>
                                <div class="alert alert-warning alert-dismissible fade show mb-4" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                    <strong>Không thành công!</strong> Vui lòng xóa các đơn hàng của người dùng này trước.
                                </div>
                            <?php endif;
                            unset($_SESSION['xoakhongthanhcong']); ?>
                            <?php if (isset($_SESSION['success'])) : ?>
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
                                        <th class="checkbox-column text-center"> ID </th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th class="text-center">Role</th>
                                        <th class="text-center">Active</th>
                                        <th class="text-center dt-no-sorting">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user) : ?>
                                        <tr>
                                            <td class="checkbox-column text-center">
                                                <?= $user['id'] ?>
                                            </td>
                                            <td>
                                                <?= $user['name'] ?>
                                            </td>
                                            <td>
                                                <?= $user['email'] ?>
                                            </td>
                                            <td class="text-center">
                                                <?= $user['role'] == 1 ? '<span class="shadow-none badge badge-success">Admin</span>' : '<span class="shadow-none badge badge-warning">Member</span>' ?>
                                            </td>
                                            <td class="text-center">
                                                <?= $user['is_active'] == 1 ? '<span class="shadow-none badge badge-primary">Active</span>' : '<span class="shadow-none badge badge-danger">Block</span>' ?></span>
                                            </td>
                                            <td class="text-center">
                                                <ul class="table-controls">
                                                    <a href="?act=users-address-detail&id=<?= $user['id'] ?>"><button class="btn btn-dark   mb-2 me-1">Địa chỉ nhận hàng</button></a>
                                                    <a href="?act=users-detail&id=<?= $user['id'] ?>"><button class="btn btn-info mb-2 me-1">Chi tiết</button></a>
                                                    <a href="?act=users-update&id=<?= $user['id'] ?>"><button class="btn btn-secondary mb-2 me-1">Sửa</button></a>
                                                    <a onclick="return confirm('Bạn có chắc muốn xóa')" href="?act=users-delete&id=<?= $user['id'] ?>"><button class="btn btn-danger mb-2 me-1">Xóa</button></a>
                                                </ul>
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