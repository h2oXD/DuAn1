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
                            <table id="style-3" class="table style-3 dt-table-hover">
                                <?php foreach ($order as $fieldName => $value): ?>
                                    <tr>
                                        <th>
                                            <?= ucfirst($fieldName) ?>
                                        </th>
                                        <th>
                                            <?php switch ($fieldName) {
                                                case 'password':
                                                    echo "********";
                                                    break;
                                                case 'role':
                                                    echo $value
                                                        ? '<span class="badge badge-success">Admin</span>'
                                                        : '<span class="badge badge-warning">Member</span>';
                                                    break;

                                                default:
                                                    echo $value;
                                                    break;
                                            } ?>

                                        </th>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                            <a class="btn btn-danger" href="<?= BASE_URL_ADMIN ?>?act=orders">Danh sách</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>