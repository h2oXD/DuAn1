<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <h4>
                    <?= $title ?? null ?>
                </h4>
                <a href="?act=brands-create"><button class="btn btn-success  mb-2 me-4 btn-lg">Thêm mới</button></a>
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
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="style-3" class="table style-3 dt-table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Brand name</th>
                                                <th>Active</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($brand as $brand): ?>


                                                <tr>
                                                    <td>
                                                        <?= $brand['id'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $brand['name'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $brand['is_active'] ?>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary"
                                                            href="<?= BASE_URL_ADMIN ?>?act=brands-update&id=<?= $brand['id'] ?>">Sửa</a>
                                                        <a class="btn btn-danger"
                                                            onclick="return confirm('Bạn có chắc chắn xóa không')"
                                                            href="<?= BASE_URL_ADMIN ?>?act=brands-delete&id=<?= $brand['id'] ?>">Xóa</a>

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

    </div>
</div>