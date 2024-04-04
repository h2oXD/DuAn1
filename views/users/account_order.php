<main>
  <div class="mb-4 pb-4"></div>
  <section class="my-account container">
    <h2 class="page-title">Đơn mua</h2>
    <div class="row">
      <div class="col-lg-3">
        <ul class="account-nav">
          <li><a href="?act=account_dashboard" class="menu-link menu-link_us-s">Dashboard</a></li>
          <li><a href="?act=account_order" class="menu-link menu-link_us-s menu-link_active">Đơn mua</a></li>
          <li><a href="?act=account_detail" class="menu-link menu-link_us-s">Thông tin cá nhân</a></li>
          <li><a href="?act=account_address" class="menu-link menu-link_aus-s">Địa chỉ nhận hàng</a></li>
          <li><a href="?act=logout" class="menu-link menu-link_us-s">Đăng xuất</a></li>
        </ul>
      </div>
      <div class="col-lg-9">
        <div class="page-content my-account__orders-list">
          <h6>
          <a <?php if(!isset($_GET['status']) && !isset($_GET['detail'])){echo "style='text-decoration: underline'";} ?> href="?act=account_order">Chờ xác nhận</a>/ 
          <a <?php if(isset($_GET['status']) && $_GET['status'] == 1){echo "style='text-decoration: underline'";} ?> href="?act=account_order&status=1">Chờ lấy hàng</a> / 
          <a <?php if(isset($_GET['status']) && $_GET['status'] == 2){echo "style='text-decoration: underline'";} ?> href="?act=account_order&status=2">Đang giao</a> / 
          <a <?php if(isset($_GET['status']) && $_GET['status'] == 3){echo "style='text-decoration: underline'";} ?> href="?act=account_order&status=3">Đã giao</a> /
          <a <?php if(isset($_GET['status']) && $_GET['status'] == 4){echo "style='text-decoration: underline'";} ?> href="?act=account_order&status=4">Đã hủy</a> 
        </h6>
          <?php if (isset($_GET['detail']) && ($_GET['detail']) == 1) { ?>
            <table class="orders-table">
              <thead>
                <tr>
                  <th>Mã hóa đơn</th>
                  <th>Sản phẩm</th>
                  <th>Thumbnail</th>
                  <th>Color</th>
                  <th>Size</th>
                  <th>Giá</th>
                  <th>Số lượng</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($ordersDetail as $od): ?>
                  <tr>
                    <td><?= $_GET['id'] ?></td>
                    <td><?= $od['title'] ?></td>
                    <td><img src="<?= $od['thumbnail'] ?>" alt="" width="200px"></td>
                    <td><?= $od['color'] ?></td>
                    <td><?= $od['size'] ?></td>
                    <td><?= $od['sale'] ?></td>
                    <td><?= $od['quantity'] ?></td>
                  </tr>
                <?php endforeach; ?>

              </tbody>
            </table>
          <?php } elseif(!isset($_GET['status'])) { ?>
            <table class="orders-table">
              <thead>
                <tr>
                  <th>Mã đơn hàng</th>
                  <th>Người nhận</th>
                  <th>Địa chỉ nhận</th>
                  <th>SĐT</th>
                  <th>Tổng thanh toán</th>
                  <th>Trạng thái đơn hàng</th>
                  <th>Thông tin chi tiết</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($orders as $order): ?>
                <?php if($order['status'] == 0): ?>
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
                      <?= $order['sdt'] ?>
                    </td>
                    <td>
                      <?= $order['total_money'] ?>
                    </td>
                    <td>
                      <?php
                      if ($order['status'] == 0) {
                        echo "Chờ xác nhận";
                      } else if ($order['status'] == 1) {
                        echo "Chờ lấy hàng";
                      } else if ($order['status'] == 2) {
                        echo "Đang giao hàng";
                      } else if ($order['status'] == 3) {
                        echo "Đã giao";
                      } else {
                        echo "Đơn hàng đã bị hủy";
                      }
                      ?>
                    </td>
                    <td>
                      <a href="?act=account_order&detail=1&id=<?= $order['orderID'] ?>"><button>Xem</button></a>  
                      <a href="?act=huydon&id=<?= $order['orderID'] ?>"><button>Hủy đơn hàng</button></a>  
                    </td>
                  </tr>
                <?php endif ?>
                <?php endforeach; ?>

              </tbody>
            </table>
          <?php }elseif(isset($_GET['status']) && $_GET['status'] == 1){ ?>
            <table class="orders-table">
              <thead>
                <tr>
                  <th>Mã đơn hàng</th>
                  <th>Người nhận</th>
                  <th>Địa chỉ nhận</th>
                  <th>SĐT</th>
                  <th>Tổng thanh toán</th>
                  <th>Trạng thái đơn hàng</th>
                  <th>Thông tin chi tiết</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($orders as $order): ?>
                <?php if($order['status'] == 1): ?>
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
                      <?= $order['sdt'] ?>
                    </td>
                    <td>
                      <?= $order['total_money'] ?>
                    </td>
                    <td>
                      <?php
                      if ($order['status'] == 0) {
                        echo "Chờ xác nhận";
                      } else if ($order['status'] == 1) {
                        echo "Chờ lấy hàng";
                      } else if ($order['status'] == 2) {
                        echo "Đang giao hàng";
                      } else if ($order['status'] == 3) {
                        echo "Đã giao";
                      } else {
                        echo "Đơn hàng đã bị hủy";
                      }
                      ?>
                    </td>
                    <td>
                      <a href="?act=account_order&detail=1&id=<?= $order['orderID'] ?>"><button>Xem</button></a>
                      <a href="?act=huydon&id=<?= $order['orderID'] ?>"><button>Hủy đơn hàng</button></a>
                    </td>
                  </tr>
                <?php endif ?>
                <?php endforeach; ?>

              </tbody>
            </table>
          <?php }elseif(isset($_GET['status']) && $_GET['status'] == 2){ ?>
            <table class="orders-table">
              <thead>
                <tr>
                  <th>Mã đơn hàng</th>
                  <th>Người nhận</th>
                  <th>Địa chỉ nhận</th>
                  <th>SĐT</th>
                  <th>Tổng thanh toán</th>
                  <th>Trạng thái đơn hàng</th>
                  <th>Thông tin chi tiết</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($orders as $order): ?>
                <?php if($order['status'] == 2): ?>
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
                      <?= $order['sdt'] ?>
                    </td>
                    <td>
                      <?= $order['total_money'] ?>
                    </td>
                    <td>
                      <?php
                      if ($order['status'] == 0) {
                        echo "Chờ xác nhận";
                      } else if ($order['status'] == 1) {
                        echo "Chờ lấy hàng";
                      } else if ($order['status'] == 2) {
                        echo "Đang giao hàng";
                      } else if ($order['status'] == 3) {
                        echo "Đã giao";
                      } else {
                        echo "Đơn hàng đã bị hủy";
                      }
                      ?>
                    </td>
                    <td>
                      <a href="?act=account_order&detail=1&id=<?= $order['orderID'] ?>"><button class="btn btn-primary">Xem</button></a>
                    </td>
                  </tr>
                <?php endif ?>
                <?php endforeach; ?>

              </tbody>
            </table>
          <?php }elseif(isset($_GET['status']) && $_GET['status'] == 3){ ?>
            <table class="orders-table">
              <thead>
                <tr>
                  <th>Mã đơn hàng</th>
                  <th>Người nhận</th>
                  <th>Địa chỉ nhận</th>
                  <th>SĐT</th>
                  <th>Tổng thanh toán</th>
                  <th>Trạng thái đơn hàng</th>
                  <th>Thông tin chi tiết</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($orders as $order): ?>
                <?php if($order['status'] == 3): ?>
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
                      <?= $order['sdt'] ?>
                    </td>
                    <td>
                      <?= $order['total_money'] ?>
                    </td>
                    <td>
                      <?php
                      if ($order['status'] == 0) {
                        echo "Chờ xác nhận";
                      } else if ($order['status'] == 1) {
                        echo "Chờ lấy hàng";
                      } else if ($order['status'] == 2) {
                        echo "Đang giao hàng";
                      } else if ($order['status'] == 3) {
                        echo "Đã giao";
                      } else {
                        echo "Đơn hàng đã bị hủy";
                      }
                      ?>
                    </td>
                    <td>
                      <a href="?act=account_order&detail=1&id=<?= $order['orderID'] ?>"><button class="btn btn-primary">Xem</button></a>
                    </td>
                  </tr>
                <?php endif ?>
                <?php endforeach; ?>

              </tbody>
            </table>
          <?php }elseif(isset($_GET['status']) && $_GET['status'] == 4){ ?>
            <table class="orders-table">
              <thead>
                <tr>
                  <th>Mã đơn hàng</th>
                  <th>Người nhận</th>
                  <th>Địa chỉ nhận</th>
                  <th>SĐT</th>
                  <th>Tổng thanh toán</th>
                  <th>Trạng thái đơn hàng</th>
                  <th>Thông tin chi tiết</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($orders as $order): ?>
                <?php if($order['status'] == 4): ?>
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
                      <?= $order['sdt'] ?>
                    </td>
                    <td>
                      <?= $order['total_money'] ?>
                    </td>
                    <td>
                      <?php
                      if ($order['status'] == 0) {
                        echo "Chờ xác nhận";
                      } else if ($order['status'] == 1) {
                        echo "Chờ lấy hàng";
                      } else if ($order['status'] == 2) {
                        echo "Đang giao hàng";
                      } else if ($order['status'] == 3) {
                        echo "Đã giao";
                      } else {
                        echo "Đơn hàng đã bị hủy";
                      }
                      ?>
                    </td>
                    <td>
                      <a href="?act=account_order&detail=1&id=<?= $order['orderID'] ?>"><button class="btn btn-primary">Xem</button></a>
                    </td>
                  </tr>
                <?php endif ?>
                <?php endforeach; ?>

              </tbody>
            </table>
          <?php }?>
        </div>
      </div>
    </div>
  </section>
</main>