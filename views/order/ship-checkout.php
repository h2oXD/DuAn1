<main>
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
            <span>Xác nhận thanh toán</span>
            <em></em>
          </span>
        </a>
      </div>
      <form name="checkout-form" action="https://uomo-html.flexkitux.com/Demo13/shop_order_complete.html">
        <div class="checkout-form">
          <div class="billing-info__wrapper">
            <h4>Hoàn thiện hóa đơn thanh toán</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-floating my-3">
                  <input name="receiver" value="<?= $user_address['receiver'] ?? null ?>" type="text" class="form-control" id="checkout_first_name" placeholder="Name">
                  <label for="checkout_first_name">Tên người nhận</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating my-3">
                  <input name="phone_number" value="<?= $user_address['phone_number'] ?? null ?>" type="text" class="form-control" id="checkout_phone" placeholder="Phone *">
                  <label for="checkout_phone">Số điện thoại *</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating mt-3 mb-3">
                  <input name="delivery_address" value="<?= $user_address['delivery_address'] ?? null ?>" type="text" class="form-control" id="checkout_street_address" placeholder="Delivery address*">
                  <label for="checkout_company_name">Địa chỉ nhận hàng *</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating my-3">
                  <input name="email" value="<?= $user_address['email'] ?? null ?>" type="email" class="form-control" id="checkout_email" placeholder="Your Mail *">
                  <label for="checkout_email">Email *</label>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mt-3">
                <textarea name="note" class="form-control form-control_gray" placeholder="Note" cols="30" rows="8"></textarea>
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
                      <th>PRODUCT</th>
                      <th>SUBTOTAL</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        Zessi Dresses x 2
                      </td>
                      <td>
                        $32.50
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Kirby T-Shirt
                      </td>
                      <td>
                        $29.90
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table class="checkout-totals">
                  <tbody>
                    <tr>
                      <th>SUBTOTAL</th>
                      <td>$62.40</td>
                    </tr>
                    <tr>
                      <th>SHIPPING</th>
                      <td>Free shipping</td>
                    </tr>
                    <tr>
                      <th>VAT</th>
                      <td>$19</td>
                    </tr>
                    <tr>
                      <th>TOTAL</th>
                      <td>$81.40</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="checkout__payment-methods">
                <div class="form-check">
                  <input class="form-check-input form-check-input_fill" type="radio" name="checkout_payment_method" id="checkout_payment_method_1" checked>
                  <label class="form-check-label" for="checkout_payment_method_1">
                    Thanh toán khi nhận hàng
                    <span class="option-detail d-block">
                    </span>
                  </label>
                </div>
              </div>
              <a class="btn btn-primary btn-checkout" href="?act=confirm">Thanh toán</a>
            </div>
          </div>
        </div>
      </form>
    </section>
  </main>
