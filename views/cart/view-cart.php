<main>
  <div class="mb-4 pb-4"></div>
  <section class="shop-checkout container">
    <h2 class="page-title">Giỏ hàng</h2>
    <div class="checkout-steps">
      <a href="?act=view-cart" class="checkout-steps__item active">
        <span class="checkout-steps__item-number">01</span>
        <span class="checkout-steps__item-title">
          <span>Giỏ hàng của bạn</span>
          <em>Quản lý giỏ hàng</em>
        </span>
      </a>
      <a href="?act=ship-checkout" class="checkout-steps__item">
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
          <!-- <em>Review And Submit Your Order</em> -->
        </span>
      </a>
    </div>
    <div class="shopping-cart">
      <div class="cart-table__wrapper">
        <table class="cart-table">
          <thead>
            <tr>
              <th>Sản phẩm</th>
              <th></th>
              <th>Giá</th>
              <th>Số lượng</th>
              <th>Tổng giá</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($cartUser as $cU) : ?>
              <tr>
                <td>
                  <div class="shopping-cart__product-item">
                    <a href="product1_simple.html">
                      <img loading="lazy" src="<?= $cU['thumbnail'] ?>" width="120" height="120" alt="">
                    </a>
                  </div>
                </td>
                <td>
                  <div class="shopping-cart__product-item__detail">
                    <h4><a href="product1_simple.html"><?= $cU['title'] ?></a></h4>
                    <ul class="shopping-cart__product-item__options">
                      <li>Color: <?= $cU['name'] ?></li>
                      <li>Size: <?= $cU['size'] ?></li>
                    </ul>
                  </div>
                </td>
                <td>
                  <span class="shopping-cart__product-price">$<?= number_format($cU['sale']) ?></span>
                </td>
                <td>
                  <div class="qty-control position-relative">
                    <input type="number" name="quantity" value="<?= number_format($cU['quantity']) ?>" min="1" class="qty-control__number text-center">
                    <a  class="qty-control__reduce">-</a>
                    <a  class="qty-control__increase">+</a>
                  </div><!-- .qty-control -->
                </td>
                <td>
                  <span class="shopping-cart__subtotal">$<?= number_format($cU['quantity'] * $cU['sale']) ?></span>
                </td>
                <td>
                  <a href="?act=delete-cart&item=<?= $cU['item'] ?>">
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="#767676" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.259435 8.85506L9.11449 0L10 0.885506L1.14494 9.74056L0.259435 8.85506Z" />
                      <path d="M0.885506 0.0889838L9.74057 8.94404L8.85506 9.82955L0 0.97449L0.885506 0.0889838Z" />
                    </svg>
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <div class="cart-table-footer">
          <form action="" class="position-relative bg-body">
            <input class="form-control" type="text" name="coupon_code" placeholder="Coupon Code">
            <input class="btn-link fw-medium position-absolute top-0 end-0 h-100 px-4" type="submit" value="APPLY COUPON">
          </form>
          <button class="btn btn-light">Cập nhật giỏ hàng</button>
        </div>
      </div>
      <div class="shopping-cart__totals-wrapper">
        <div class="sticky-content">
          <div class="shopping-cart__totals">
            <h3>Đơn hàng của bạn</h3>
            <table class="cart-totals">
              <tbody>
                <tr>
                  <th>Sản phẩm</th>
                  <th>Đơn giá</th>
                  <th>Số lượng</th>
                  <th>Tổng giá</th>
                </tr>
                <?php foreach ($cartUser as $cU) : ?>
                  <tr>
                    <td><?= $cU['title'] ?></td>
                    <td>$<?= $cU['sale'] ?></td>
                    <td>x<?= $cU['quantity'] ?></td>
                    <td>$<?= $cU['quantity'] * $cU['sale'] ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <div class="mobile_fixed-btn_wrapper">
            <div class="button-wrapper container">
              <a class="btn btn-primary btn-checkout" href="?act=ship-checkout">Thanh toán</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>