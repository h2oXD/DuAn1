<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <h4>
                    <?= $title ?? null ?>
                </h4>
                <!-- <a href="?act=order-create"><button class="btn btn-success  mb-2 me-4 btn-lg">Thêm mới</button></a> -->
            </div>
            <!-- /BREADCRUMB -->
            <div class="seperator-header">
                <!-- <h4 class=""></h4> -->
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="simple-pill">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">Chờ xác nhận</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">Chờ lấy hàng</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">Đang giao</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria-selected="false">Đã giao</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-5-tab" data-bs-toggle="pill" data-bs-target="#pills-5" type="button" role="tab" aria-controls="pills-5" aria-selected="false">Đã hủy</button>
                                    </li>

                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <!-- Chờ xác nhận -->
                                    <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab" tabindex="0">
                                        <table id="style-3" class="table style-3 dt-table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="font-size: 13px;" >ID</th>
                                                    <th style="font-size: 13px;">Người nhận</th>
                                                    <th style="font-size: 13px;">Địa chỉ</th>
                                                    <th style="font-size: 13px;">SĐT & Email</th>
                                                    <th style="font-size: 13px;">Tổng tiền</th>
                                                    <th style="font-size: 13px;">Trạng thái</th>
                                                    <th style="font-size: 13px;">Ngày đặt hàng</th>
                                                    <th style="font-size: 13px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($orders as $order) : ?>

                                                    <?php if ($order['status'] == 0) : ?>
                                                        <tr>
                                                            <td>
                                                                <?= $order['orderID'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $order['nguoiNhan'] ?>   
                                                            </td>
                                                            <td>
                                                                <?= $order['diaChiNhan'] ?>
                                                            </td>
                                                            <td>
                                                                <div class="media">
                                                                    <div class="media-body align-self-center">
                                                                        <h6><?= $order['sdt'] ?></h6>
                                                                        <span><?= $order['email'] ?></span>
                                                                    
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                $<?= $order['total_money'] ?>
                                                            </td>
                                                            <td>
                                                                <?php 
                                                                    if($order['status'] == 0){echo "<span class='badge badge-warning mb-2 me-4'>Chờ xác nhận</span>";} 
                                                                ?>
                                                            </td>
                                                            <td style="font-size: 10px;">
                                                                <?= $order['order_date'] ?>         
                                                            </td>

                                                            <td>
                                                                <a style="font-size: 11px; padding: 7px;" class="btn btn-info" href="<?= BASE_URL_ADMIN ?>?act=order-detail&id=<?= $order['orderID'] ?>">Chi
                                                                    tiết</a>
                                                                <a style="font-size: 11px; padding: 7px;" class="btn btn-success" href="<?= BASE_URL_ADMIN ?>?act=orderStatus&id=<?= $order['orderID'] ?>&trangthai=1">Xác
                                                                    nhận đơn hàng</a>
                                                                <a style="font-size: 11px; padding: 7px;" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn hủy không')" href="<?= BASE_URL_ADMIN ?>?act=orderStatus&id=<?= $order['orderID'] ?>&trangthai=4">Hủy</a>

                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Chờ lấy hàng -->
                                    <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab" tabindex="0">
                                        <table id="style-3" class="table style-3 dt-table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="font-size: 13px;" >ID</th>
                                                    <th style="font-size: 13px;">Người nhận</th>
                                                    <th style="font-size: 13px;">Địa chỉ</th>
                                                    <th style="font-size: 13px;">SĐT & Email</th>
                                                    <th style="font-size: 13px;">Tổng tiền</th>
                                                    <th style="font-size: 13px;">Trạng thái</th>
                                                    <th style="font-size: 13px;">Ngày đặt hàng</th>
                                                    <th style="font-size: 13px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($orders as $order) : ?>

                                                    <?php if ($order['status'] == 1) : ?>
                                                        <tr>
                                                            <td>
                                                                <?= $order['orderID'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $order['nguoiNhan'] ?>   
                                                            </td>
                                                            <td>
                                                                <?= $order['diaChiNhan'] ?>
                                                            </td>
                                                            <td>
                                                                <div class="media">
                                                                    <div class="media-body align-self-center">
                                                                        <h6><?= $order['sdt'] ?></h6>
                                                                        <span><?= $order['email'] ?></span>
                                                                    
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                $<?= $order['total_money'] ?>
                                                            </td>
                                                            <td>
                                                                <?php 
                                                                    if($order['status'] == 1){echo "<span class='badge badge-secondary mb-2 me-4'>Chờ lấy hàng</span>";} 
                                                                ?>
                                                            </td>
                                                            <td style="font-size: 10px;">
                                                                <?= $order['order_date'] ?>         
                                                            </td>

                                                            <td>
                                                                <a style="font-size: 11px; padding: 7px;" class="btn btn-info" href="<?= BASE_URL_ADMIN ?>?act=order-detail&id=<?= $order['orderID'] ?>">Chi
                                                                    tiết</a>
                                                                <a style="font-size: 11px; padding: 7px;" class="btn btn-success" href="<?= BASE_URL_ADMIN ?>?act=orderStatus&id=<?= $order['orderID'] ?>&trangthai=2">Xác
                                                                    nhận lấy hàng</a>
                                                                <a style="font-size: 11px; padding: 7px;" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn hủy không')" href="<?= BASE_URL_ADMIN ?>?act=orderStatus&id=<?= $order['orderID'] ?>&trangthai=4">Hủy</a>

                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>       
                                    </div>
                                    <!-- Chờ giao hàng -->
                                    <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab" tabindex="0">
                                        <table id="style-3" class="table style-3 dt-table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="font-size: 13px;" >ID</th>
                                                    <th style="font-size: 13px;">Người nhận</th>
                                                    <th style="font-size: 13px;">Địa chỉ</th>
                                                    <th style="font-size: 13px;">SĐT & Email</th>
                                                    <th style="font-size: 13px;">Tổng tiền</th>
                                                    <th style="font-size: 13px;">Trạng thái</th>
                                                    <th style="font-size: 13px;">Ngày đặt hàng</th>
                                                    <th style="font-size: 13px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($orders as $order) : ?>

                                                    <?php if ($order['status'] == 2) : ?>
                                                        <tr>
                                                            <td>
                                                                <?= $order['orderID'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $order['nguoiNhan'] ?>   
                                                            </td>
                                                            <td>
                                                                <?= $order['diaChiNhan'] ?>
                                                            </td>
                                                            <td>
                                                                <div class="media">
                                                                    <div class="media-body align-self-center">
                                                                        <h6><?= $order['sdt'] ?></h6>
                                                                        <span><?= $order['email'] ?></span>
                                                                    
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                $<?= $order['total_money'] ?>
                                                            </td>
                                                            <td>
                                                                <?php 
                                                                
                                                                    if($order['status'] == 2){echo "<span class='badge badge-secondary mb-2 me-4'>Đang giao</span>";} 
                                                                    
                                                                ?>
                                                            </td>
                                                            <td style="font-size: 10px;">
                                                                <?= $order['order_date'] ?>         
                                                            </td>

                                                            <td>
                                                                <a style="font-size: 11px; padding: 7px;" class="btn btn-info" href="<?= BASE_URL_ADMIN ?>?act=order-detail&id=<?= $order['orderID'] ?>">Chi
                                                                    tiết</a>
                                                                <a style="font-size: 11px; padding: 7px;" class="btn btn-success" 
                                                                href="<?= BASE_URL_ADMIN ?>?act=orderStatus&id=<?= $order['orderID'] ?>&trangthai=3">Xác nhận đã giao hàng</a>
                                                                    
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Đã giao hàng -->
                                    <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab" tabindex="0">
                                        <table id="style-3" class="table style-3 dt-table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="font-size: 13px;" >ID</th>
                                                    <th style="font-size: 13px;">Người nhận</th>
                                                    <th style="font-size: 13px;">Địa chỉ</th>
                                                    <th style="font-size: 13px;">SĐT & Email</th>
                                                    <th style="font-size: 13px;">Tổng tiền</th>
                                                    <th style="font-size: 13px;">Trạng thái</th>
                                                    <th style="font-size: 13px;">Ngày đặt hàng</th>
                                                    <th style="font-size: 13px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($orders as $order) : ?>

                                                    <?php if ($order['status'] == 3) : ?>
                                                        <tr>
                                                            <td>
                                                                <?= $order['orderID'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $order['nguoiNhan'] ?>   
                                                            </td>
                                                            <td>
                                                                <?= $order['diaChiNhan'] ?>
                                                            </td>
                                                            <td>
                                                                <div class="media">
                                                                    <div class="media-body align-self-center">
                                                                        <h6><?= $order['sdt'] ?></h6>
                                                                        <span><?= $order['email'] ?></span>
                                                                    
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                $<?= $order['total_money'] ?>
                                                            </td>
                                                            <td>
                                                                <?php 
                                                                  
                                                                    if($order['status'] == 3){echo "<span class='badge badge-success  mb-2 me-4'>Đã giao</span>";} 
                                                                    
                                                                ?>
                                                            </td>
                                                            <td style="font-size: 10px;">
                                                                <?= $order['order_date'] ?>         
                                                            </td>

                                                            <td>
                                                                <a style="font-size: 11px; padding: 7px;" class="btn btn-info" href="<?= BASE_URL_ADMIN ?>?act=order-detail&id=<?= $order['orderID'] ?>">Chi
                                                                    tiết</a>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Đã hủy -->
                                    <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab" tabindex="0">
                                        <table id="style-3" class="table style-3 dt-table-hover">   
                                            <thead>
                                                <tr>
                                                    <th style="font-size: 13px;" >ID</th>
                                                    <th style="font-size: 13px;">Người nhận</th>
                                                    <th style="font-size: 13px;">Địa chỉ</th>
                                                    <th style="font-size: 13px;">SĐT & Email</th>
                                                    <th style="font-size: 13px;">Tổng tiền</th>
                                                    <th style="font-size: 13px;">Trạng thái</th>
                                                    <th style="font-size: 13px;">Ngày đặt hàng</th>
                                                    <th style="font-size: 13px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($orders as $order) : ?>

                                                    <?php if ($order['status'] == 4) : ?>
                                                        <tr>
                                                            <td>
                                                                <?= $order['orderID'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $order['nguoiNhan'] ?>   
                                                            </td>
                                                            <td>
                                                                <?= $order['diaChiNhan'] ?>
                                                            </td>
                                                            <td>
                                                                <div class="media">
                                                                    <div class="media-body align-self-center">
                                                                        <h6><?= $order['sdt'] ?></h6>
                                                                        <span><?= $order['email'] ?></span>
                                                                    
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                $<?= $order['total_money'] ?>
                                                            </td>
                                                            <td>
                                                                <?php 
                                                                    if($order['status'] == 0){echo "<span class='badge badge-secondary mb-2 me-4'>Chờ xác nhận</span>";} 
                                                                    if($order['status'] == 1){echo "<span class='badge badge-secondary mb-2 me-4'>Chờ lấy hàng</span>";} 
                                                                    if($order['status'] == 2){echo "<span class='badge badge-secondary mb-2 me-4'>Đang giao</span>";} 
                                                                    if($order['status'] == 3){echo "<span class='badge badge-secondary mb-2 me-4'>Đã giao</span>";} 
                                                                    if($order['status'] == 4){echo "<span class='badge badge-danger mb-2 me-4'>Đã hủy</span>";} 
                                                                ?>
                                                            </td>
                                                            <td style="font-size: 10px;">
                                                                <?= $order['order_date'] ?>         
                                                            </td>

                                                            <td>
                                                                <a style="font-size: 11px; padding: 7px;" class="btn btn-info" href="<?= BASE_URL_ADMIN ?>?act=order-detail&id=<?= $order['orderID'] ?>">Chi
                                                                    tiết</a>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
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
</div>