<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <h4>
                    <?= $title ?? null ?>
                </h4>
                <a href="?act=category-create"><button class="btn btn-success  mb-2 me-4 btn-lg">Thêm mới</button></a>
            </div>
            <!-- /BREADCRUMB -->
            <div class="seperator-header">
                <!-- <h4 class=""></h4> -->
            </div>
            <?php if(isset($_SESSION['xoakhongthanhcong'])): ?>
            <div class="alert alert-warning alert-dismissible fade show mb-4" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                <strong>Không thành công!</strong> Vui lòng xóa các sản phẩm đang có danh mục này trước.
            </div>
            <?php endif; unset($_SESSION['xoakhongthanhcong']); ?>
            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">

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
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Thumbnail</th>
                                        <th>Active</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($categories as $category) : ?>


                                        <tr>
                                            <td>
                                                <?= $category['id'] ?>
                                            </td>
                                            <td>
                                                <?= $category['name'] ?>
                                            </td>
                                            <td>
                                                <img src="<?= BASE_URL ?><?= $category['thumbnail'] ?>" alt="" width="100px">
                                            </td>
                                            <td>
                                                <?= $category['is_active']
                                                    ? '<span class="badge badge-success">Active</span>'
                                                    : '<span class="badge badge-danger">Block</span>' ?>
                                            </td>

                                            <td>
                                                <a class="btn btn-primary" href="<?= BASE_URL_ADMIN ?>?act=category-update&id=<?= $category['id'] ?>">Sửa</a>
                                                <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa không')" href="<?= BASE_URL_ADMIN ?>?act=category-delete&id=<?= $category['id'] ?>">Xóa</a>

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