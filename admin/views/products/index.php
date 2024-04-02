<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <h4>
                    <?= $title ?? null ?>
                </h4>
                <a href="?act=products-create"><button class="btn btn-success  mb-2 me-4 btn-lg">Thêm mới</button></a>
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
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Sale</th>
                                        <th>Thumbnail</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($products as $product): ?>


                                        <tr>
                                            <td>
                                                <?= $product['id'] ?>
                                            </td>
                                            <td>
                                                <?= $product['title'] ?>
                                            </td>
                                            <td>
                                                <?= $product['name'] ?>
                                            </td>
                                            <td>
                                                <?= $product['price'] ?>
                                            </td>
                                            <td>
                                                <?= $product['sale'] ?>
                                            </td>
                                            <td><img src="<?= BASE_URL . $product['thumbnail'] ?>" width="80px" alt=""></td>
                                            <td>
                                                <a class="btn btn-info"
                                                    href="<?= BASE_URL_ADMIN ?>?act=products-detail&id=<?= $product['id'] ?>">Chi
                                                    tiết</a>
                                                <a class="btn btn-primary"
                                                    href="<?= BASE_URL_ADMIN ?>?act=products-update&id=<?= $product['id'] ?>">Sửa</a>
                                                <a class="btn btn-danger"
                                                    onclick="return confirm('Bạn có chắc chắn xóa không')"
                                                    href="<?= BASE_URL_ADMIN ?>?act=products-delete&id=<?= $product['id'] ?>">Xóa</a>

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