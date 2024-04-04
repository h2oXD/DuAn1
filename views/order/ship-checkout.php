<main style="margin-bottom: 150px;" >
  <div class="mb-4 pb-4"></div>
  <section class="shop-checkout container">
    <h2 class="page-title">Thanh toán</h2>
    <div class="checkout-steps">
      <a href="?act=view-cart" class="checkout-steps__item active">
        <span class="checkout-steps__item-number">01</span>
        <span class="checkout-steps__item-title">
          <span>Giỏ hàng</span>
          <em>Quản lý giỏ hàng</em>
        </span>
      </a>
      <a href="?act=ship-checkout" class="checkout-steps__item active">
        <span class="checkout-steps__item-number">02</span>
        <span class="checkout-steps__item-title">
          <span>Thanh toán</span>
          <em>Thanh toán cho sản phẩm</em>
        </span>
      </a>
      <a href="?act=confirm" class="checkout-steps__item">
        <span class="checkout-steps__item-number">03</span>
        <span class="checkout-steps__item-title">
          <span>Hoàn tất đặt hàng</span>
          <em></em>
        </span>
      </a>
    </div>
    <form name="checkout-form" method="post" action="<?= BASE_URL ?>?act=confirm">
      <div class="checkout-form">
        <div class="billing-info__wrapper">
          <h4>Địa chỉ nhận hàng</h4>
          <a class="saveAddress" href="<?= BASE_URL ?>?act=ship-checkout&saveAddress=1">Sử dụng địa chỉ đã lưu</a>
          <div class="row">
            <?php if(isset($_GET['saveAddress']) && $_GET['saveAddress']=1){?>
            <div class="col-md-6">
              <div class="form-floating my-3">
                <input name="receiver" value="<?= $user_address['receiver'] ?? null ?>" type="text" class="form-control" id="checkout_first_name" placeholder="Name">
                <label for="checkout_first_name">Tên người nhận</label>
                <div style="color:rgba(231,74,59,.9)" class=".was-validated">
                  <?= $_SESSION['errors']['errorReceiver'] ?? null ?>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating my-3">
                <input name="phone_number" value="<?= $user_address['phone_number'] ?? null ?>" type="text" class="form-control" id="checkout_phone" placeholder="Phone *">
                <label for="checkout_phone">Số điện thoại *</label>
                <div style="color:rgba(231,74,59,.9)" class=".was-validated">
                  <?= $_SESSION['errors']['phone_number'] ?? null ?>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mt-3 mb-3">
                <input name="delivery_address" value="<?= $user_address['delivery_address'] ?? null ?>" type="text" class="form-control" id="checkout_street_address" placeholder="Delivery address*">
                <label for="checkout_company_name">Địa chỉ nhận hàng *</label>
                <div style="color:rgba(231,74,59,.9)" class=".was-validated">
                  <?= $_SESSION['errors']['delivery_address'] ?? null ?>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating my-3">
                <input name="email" value="<?= $user_address['email'] ?? null ?>" type="email" class="form-control" id="checkout_email" placeholder="Your Mail *">
                <label for="checkout_email">Email *</label>
                <div style="color:rgba(231,74,59,.9)" class=".was-validated">
                  <?= $_SESSION['errors']['email'] ?? null ?>
                </div>
              </div>
            </div>
            <?php }else{?>
              <div class="col-md-6">
              <div class="form-floating my-3">
                <input name="receiver"  type="text" class="form-control" id="checkout_first_name" placeholder="Name">
                <label for="checkout_first_name">Tên người nhận</label>
                <div style="color:rgba(231,74,59,.9)" class=".was-validated">
                  <?= $_SESSION['errors']['errorReceiver'] ?? null ?>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating my-3">
                <input name="phone_number"  type="text" class="form-control" id="checkout_phone" placeholder="Phone *">
                <label for="checkout_phone">Số điện thoại *</label>
                <div style="color:rgba(231,74,59,.9)" class=".was-validated">
                  <?= $_SESSION['errors']['phone_number'] ?? null ?>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mt-3 mb-3">
                <input name="delivery_address"  type="text" class="form-control" id="checkout_street_address" placeholder="Delivery address*">
                <label for="checkout_company_name">Địa chỉ nhận hàng *</label>
                <div style="color:rgba(231,74,59,.9)" class=".was-validated">
                  <?= $_SESSION['errors']['delivery_address'] ?? null ?>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating my-3">
                <input name="email"  type="email" class="form-control" id="checkout_email" placeholder="Your Mail *">
                <label for="checkout_email">Email *</label>
                <div style="color:rgba(231,74,59,.9)" class=".was-validated">
                  <?= $_SESSION['errors']['email'] ?? null ?>
                </div>
              </div>
            </div>
            <?php }  ?>
          </div>
          <div class="col-md-12">
            <div class="mt-3">
              <textarea name="note" class="form-control form-control_gray" placeholder="Ghi chú đơn hàng" cols="30" rows="8"></textarea>
            </div>
          </div>
          <div class="col-md-12">
            <div class="mt-3">
              <input type="checkbox" name="saveAddress" value="1">
              <label for="">Lưu thông tin địa chỉ nhận hàng</label>
            </div>
          </div>
        </div>
        <div class="checkout__totals-wrapper">
          <div class="sticky-content">
            <div class="checkout__totals">
              <h3>Your Order</h3>
              <table class="checkout-cart-items">
                <thead>
                  <tr>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Tổng giá</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($cartUser as $c) : ?>
                    <tr>
                      <td>
                        <?= $c['title'] ?>
                      </td>
                      <td><?= number_format($c['sale']) ?></td>
                      <td>x<?= $c['quantity'] ?></td>
                      <td>
                        $<?= $c['quantity'] * $c['sale'] ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <table class="checkout-totals">
                <tbody>
                  <tr>
                    <th>SHIPPING</th>
                    <td>Free shipping</td>
                  </tr>
                  <tr>
                    <th>Tổng tiền thanh toán</th>
                    <td>$<?php $total = 0;
                          foreach ($cartUser as $c) {
                            $total += ($c['quantity'] * $c['sale']);
                          }
                          echo number_format($total); ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="checkout__payment-methods">
              <input hidden name="total_money" value="<?php $total = 0;
                          foreach ($cartUser as $c) {
                            $total += ($c['quantity'] * $c['sale']);
                          }
                          echo($total); ?>" type="text">
              <div class="form-check">
                <input class="form-check-input form-check-input_fill" type="radio" name="checkout_payment_method" id="checkout_payment_method_1" checked>
                <label class="form-check-label" for="checkout_payment_method_1">
                  Thanh toán khi nhận hàng
                  <span class="option-detail d-block">
                  </span>
                </label>
              </div>
            </div>
            <button type="submit" name='thanhtoan' class="btn btn-primary btn-checkout">Thanh toán</button>
          </div>
        </div>
      </div>
    </form>
  </section>
</main>
<?php unset($_SESSION['errors']); ?>