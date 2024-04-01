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
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3 mt-3">
                                                <label for="name" class="form-label">Name:</label>
                                                <input value="<?= $category['name'] ?>" type="name" class="form-control"
                                                    id="name" placeholder="Enter name" name="name">
                                            </div>
                                            <div class="mb-3 mt-3">
                                                <label for="name" class="form-label">Is_active:</label>
                                                <input value="<?= $category['is_active'] ?>" type="text"
                                                    class="form-control" id="is_active" placeholder="Enter active"
                                                    name="is_active">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3 mt-3">
                                                <label for="image" class="form-label">Image:</label>
                                                <input value="" type="file" class="form-control" id="thumbnail" name="thumbnail">
                                            </div>

                                            <div class="mb-3 mt-3">
                                                <label for="image" class="form-label">Old image:</label>
                                                <img src="<?= BASE_URL ?><?= $category['thumbnail'] ?>" alt="" width="100px">
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a class="btn btn-danger" href="<?= BASE_URL_ADMIN ?>?act=categories">Danh sách</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>