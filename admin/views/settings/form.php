<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <h4>
                    <?= $title ?? null ?>
                </h4>
                <!-- <a href="?act=users-create"><button class="btn btn-success  mb-2 me-4 btn-lg">Thêm mới</button></a> -->
            </div>
            <!-- /BREADCRUMB -->
            <div class="seperator-header">
                <!-- <h4 class=""></h4> -->
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <form action="<?= BASE_URL_ADMIN . '?act=setting-save' ?>" method="POST">
                                <table class="table">
                                    <tr>
                                        <th>Trường dữ liệu</th>
                                        <th>Dữ liệu</th>
                                    </tr>

                                    <tr>
                                        <td>Logo</td>
                                        <td>
                                            <input type="text" class="form-control" name="logo"
                                                value="<?= $settings['logo'] ?? null ?>">
                                        </td>
                                    </tr>


                                </table>

                                <button type="submit" class="btn btn-success">Lưu</button>

                                <a href="<?= BASE_URL_ADMIN ?>   " class="btn btn-danger">Quay về</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>