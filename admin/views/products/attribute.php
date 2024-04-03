<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <h4>
                    <?= $title ?? null ?>
                </h4>
            </div>
            <!-- /BREADCRUMB -->
            <div class="seperator-header">
                <!-- <h4 class=""></h4> -->
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <table id="style-3" class="table style-3 dt-table-hover">
                            <h4>Sản phẩm: <?= $attributes['0']['title'] ?></h4>
                                <h5>Màu sắc và kích thước hiện tại</h5>
                                
                                <tr>
                                    <th>Màu sắc</th>
                                    <th>Kích thước</th>
                                    <th>Action</th>
                                </tr>
                                <?php foreach ($attributes as $at) : ?>
                                    <tr>
                                        <td><?= $at['name'] ?></td>
                                        <td><?= $at['size'] ?></td>
                                        <td><a onclick="return confirm('Bạn có chắc chắn xóa không')" class="btn btn-danger" href="?act=delete-attribute&id=<?= $at['product_id']?>,<?= $at['product_color_id']?>,<?= $at['product_size_id']?>">Xóa</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                            <?php if (isset($_SESSION['errors'])): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php foreach ($_SESSION['errors'] as $error): ?>
                                            <li>
                                                <?= $error ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <?php unset($_SESSION['errors']); ?>
                            <?php endif; ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="mb-3 mt-3 col-md-4">
                                    <label for="colors" class="form-label">Colors:</label>
                                    <Select class="form-select" class="form-control" name="colors">
                                        <option value="">--Chọn-Màu-Sắc--</option>
                                        <?php foreach ($colors as $color) : ?>
                                            <option value="<?= $color['id'] ?>">
                                                <?= $color['name'] ?>
                                            </option>
                                        <?php endforeach ?>
                                    </Select>
                                </div>
                                <div class="mb-3 mt-3 col-md-4">
                                    <label for="sizes" class="form-label">Sizes:</label>
                                    <Select class="form-select" class="form-control" name="sizes">
                                        <option value="">--Chọn-Kích-Thước--</option>
                                        <?php foreach ($sizes as $size) : ?>
                                            <option value="<?= $size['id'] ?>">
                                                <?= $size['size'] ?>
                                            </option>
                                        <?php endforeach ?>
                                    </Select>
                                </div>
                                <button name="submit" type="submit" class="btn btn-primary">Thêm thuộc tính</button>
                                <a class="btn btn-info" href="?act=products">Quay về trang Danh sách</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>