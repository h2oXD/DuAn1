<main>
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
      <h2 class="page-title">Chi tiết hóa</h2>
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
            <table class="orders-table">
              <thead>
                <tr>
                  <th>Mã đơn hàng</th>
                  <th>Người nhận</th>
                  <th>Tổng thanh toán</th>
                  <th>Trạng thái đơn hàng</th>
                  <th>Thông tin chi tiết</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($orders as $order) : ?>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                      <a href=""><button class="btn btn-primary">Danh sách</button></a>
                  </td>
                </tr>
                <?php endforeach; ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </main>