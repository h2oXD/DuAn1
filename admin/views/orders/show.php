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
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sản phẩm</th>
                                            <th scope="col">Giá</th>
                                            <th scope="col">Số lượng</th>
                                            <th class="text-center" scope="col">Tổng tiền</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($orderDetails as $order): ?>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="avatar me-2">
                                                        <img alt="avatar" src="<?= BASE_URL .$order['thumbnail'] ?>" class="rounded-circle" />
                                                    </div>
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0"><?= $order['title'] ?></h6>
                                                        <span><?= $order['color'] ?> / <?= $order['size'] ?> </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>$<?= $order['sale'] ?></p>
                                            </td>
                                            <td class="text-center">
                                                <p><?= $order['quantity'] ?></p>
                                            </td>
                                            <td class="text-center">
                                                <p>$<?= $order['sale']*$order['quantity'] ?></p>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <a class="btn btn-danger" href="<?= BASE_URL_ADMIN ?>?act=orders">Danh sách</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>