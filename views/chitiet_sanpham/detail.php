<main>
  <div class="mb-md-1 pb-md-3"></div>
  <section class="product-single container">
    <div class="row">
      <div class="col-lg-7">
        <div class="product-single__media" data-media-type="vertical-thumbnail">
          <div class="product-single__image">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide product-single__image-item">
                  <img loading="lazy" class="h-auto" src="<?= $product['thumbnail'] ?>" width="674" height="674" alt="">
                </div>
              </div>
              <div class="swiper-button-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_prev_sm" />
                </svg></div>
              <div class="swiper-button-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_next_sm" />
                </svg></div>
            </div>
          </div>
          <!-- <div class="product-single__thumbnail">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide product-single__image-item"><img loading="lazy" class="h-auto" src="<?= BASE_URL ?>assets/images/products/product_0.jpg" width="104" height="104" alt=""></div>
                  <div class="swiper-slide product-single__image-item"><img loading="lazy" class="h-auto" src="<?= BASE_URL ?>assets/images/products/product_0-1.jpg" width="104" height="104" alt=""></div>
                  <div class="swiper-slide product-single__image-item"><img loading="lazy" class="h-auto" src="<?= BASE_URL ?>assets/images/products/product_0-2.jpg" width="104" height="104" alt=""></div>
                  <div class="swiper-slide product-single__image-item"><img loading="lazy" class="h-auto" src="<?= BASE_URL ?>assets/images/products/product_0-3.jpg" width="104" height="104" alt=""></div>
                </div>
              </div>
            </div> -->
        </div>
      </div>
      <div class="col-lg-5">
        <div class="d-flex justify-content-between mb-4 pb-md-2">
          <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
            <a href="<?= BASE_URL ?>" class="menu-link menu-link_us-s text-uppercase fw-medium">Trang chủ</a>
            <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
            <a href="?act=list_sp" class="menu-link menu-link_us-s text-uppercase fw-medium">Sản phẩm</a>
            <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
            <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">Chi tiết sản phẩm</a>
          </div><!-- /.breadcrumb -->
        </div>
        <h1 class="product-single__name"><?= $product['title'] ?></h1>

        <div class="product-single__price">
          <span class="current-price"><?= $product['sale'] ?>$</span>
        </div>
        <form action="?act=add-cart&id=<?= $product['id'] ?>" name="addtocart-form" method="post">
          <div class="product-single__swatches">
            <div class="product-swatch text-swatches">
              <label>Color</label>
              <div class="swatch-list">
                <?php foreach ($color as $key => $value) : ?>
                  <input <?php ?> value="<?= $key ?>" type="radio" name="color" id="swatch-<?= $key ?>">
                  <label class="swatch js-swatch" for="swatch-<?= $key ?>" aria-label="<?= $value ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $value ?>"><?= $value ?></label>
                <?php endforeach; ?>
              </div>
              <span><?= $_SESSION['errors']['errorColor'] ?? null ?></span>
              <?php unset($_SESSION['errors']['errorColor']); ?>
            </div>
            <div class="product-swatch text-swatches">
              <label>Sizes</label>
              <div class="swatch-list">
                <?php foreach ($size as $key => $value) : ?>
                  <input value="<?= $key ?>" type="radio" name="size" id="swatch-<?= $key ?>">
                  <label class="swatch js-swatch" for="swatch-<?= $key ?>" aria-label="<?= $value ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $value ?>"><?= $value ?></label>
                <?php endforeach; ?>
              </div>
              <span><?= $_SESSION['errors']['errorSize'] ?? null ?></span>
              <?php unset($_SESSION['errors']['errorSize']); ?>
            </div>
          </div>
          <div class="product-single__addtocart">
            <div class="qty-control position-relative">
              <input type="number" name="quantity" value="1" min="1" class="qty-control__number text-center">
              <div class="qty-control__reduce">-</div>
              <div class="qty-control__increase">+</div>
            </div><!-- .qty-control -->
            <button type="submit" id="submitBtn" class="btn btn-primary btn-addtocart hover">Thêm vào giỏ hàng</button>
          </div>
        </form>
        <div class="product-single__meta-info">
          <div class="meta-item">
            <label>Kiểu dáng:</label>
            <span><?= $product['c_name'] ?></span>
          </div>
          <div class="meta-item">
            <label>Thương hiệu:</label>
            <span><?= $product['b_name'] ?></span>
          </div>
          <div class="meta-item">
            <label>Tags:</label>
            <span><?= $tag ?></span>
          </div>
        </div>
      </div>
    </div>
    <div class="product-single__details-tab">
      <ul class="nav nav-tabs" id="myTab1" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore active" id="tab-description-tab" data-bs-toggle="tab" href="#tab-description" role="tab" aria-controls="tab-description" aria-selected="true">Mô tả</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore" id="tab-additional-info-tab" data-bs-toggle="tab" href="#tab-additional-info" role="tab" aria-controls="tab-additional-info" aria-selected="false">Additional Information</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore" id="tab-reviews-tab" data-bs-toggle="tab" href="#tab-reviews" role="tab" aria-controls="tab-reviews" aria-selected="false">Reviews (2)</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="tab-description" role="tabpanel" aria-labelledby="tab-description-tab">
          <div class="product-single__description">
            <p><?= $product['description'] ?></p>
          </div>
        </div>
        <div class="tab-pane fade" id="tab-additional-info" role="tabpanel" aria-labelledby="tab-additional-info-tab">
          <div class="product-single__addtional-info">
            <div class="item">
              <label class="h6">Weight</label>
              <span>1.25 kg</span>
            </div>
            <div class="item">
              <label class="h6">Dimensions</label>
              <span>90 x 60 x 90 cm</span>
            </div>
            <div class="item">
              <label class="h6">Size</label>
              <span>XS, S, M, L, XL</span>
            </div>
            <div class="item">
              <label class="h6">Color</label>
              <span>Black, Orange, White</span>
            </div>
            <div class="item">
              <label class="h6">Storage</label>
              <span>Relaxed fit shirt-style dress with a rugged</span>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="tab-reviews-tab">
          <h2 class="product-single__reviews-title">Reviews</h2>
          <div class="product-single__reviews-list">
            <div class="product-single__reviews-item">
              <div class="customer-avatar">
                <img loading="lazy" src="<?= BASE_URL ?>assets/images/avatar.jpg" alt="">
              </div>
              <div class="customer-review">
                <div class="customer-name">
                  <h6>Janice Miller</h6>
                  <div class="reviews-group d-flex">
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                  </div>
                </div>
                <div class="review-date">April 06, 2023</div>
                <div class="review-text">
                  <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est…</p>
                </div>
              </div>
            </div>
            <div class="product-single__reviews-item">
              <div class="customer-avatar">
                <img loading="lazy" src="<?= BASE_URL ?>assets/images/avatar.jpg" alt="">
              </div>
              <div class="customer-review">
                <div class="customer-name">
                  <h6>Benjam Porter</h6>
                  <div class="reviews-group d-flex">
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                  </div>
                </div>
                <div class="review-date">April 06, 2023</div>
                <div class="review-text">
                  <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est…</p>
                </div>
              </div>
            </div>
          </div>
          <div class="product-single__review-form">
            <form name="customer-review-form">
              <h5>Be the first to review “Message Cotton T-Shirt”</h5>
              <p>Your email address will not be published. Required fields are marked *</p>
              <div class="select-star-rating">
                <label>Your rating *</label>
                <span class="star-rating">
                  <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                  </svg>
                  <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                  </svg>
                  <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                  </svg>
                  <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                  </svg>
                  <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                  </svg>
                </span>
                <input type="hidden" id="form-input-rating" value="">
              </div>
              <div class="mb-4">
                <textarea id="form-input-review" class="form-control form-control_gray" placeholder="Your Review" cols="30" rows="8"></textarea>
              </div>
              <div class="form-label-fixed mb-4">
                <label for="form-input-name" class="form-label">Name *</label>
                <input id="form-input-name" class="form-control form-control-md form-control_gray">
              </div>
              <div class="form-label-fixed mb-4">
                <label for="form-input-email" class="form-label">Email address *</label>
                <input id="form-input-email" class="form-control form-control-md form-control_gray">
              </div>
              <div class="form-check mb-4">
                <input class="form-check-input form-check-input_fill" type="checkbox" value="" id="remember_checkbox">
                <label class="form-check-label" for="remember_checkbox">
                  Save my name, email, and website in this browser for the next time I comment.
                </label>
              </div>
              <div class="form-action">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="products-carousel container">
    <h2 class="h3 text-uppercase mb-4 pb-xl-2 mb-xl-4">Related <strong>Products</strong></h2>

    <div id="related_products" class="position-relative">
      <div class="swiper-container js-swiper-slider" data-settings='{
            "autoplay": false,
            "slidesPerView": 4,
            "slidesPerGroup": 4,
            "effect": "none",
            "loop": true,
            "pagination": {
              "el": "#related_products .products-pagination",
              "type": "bullets",
              "clickable": true
            },
            "navigation": {
              "nextEl": "#related_products .products-carousel__next",
              "prevEl": "#related_products .products-carousel__prev"
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "slidesPerGroup": 2,
                "spaceBetween": 14
              },
              "768": {
                "slidesPerView": 3,
                "slidesPerGroup": 3,
                "spaceBetween": 24
              },
              "992": {
                "slidesPerView": 4,
                "slidesPerGroup": 4,
                "spaceBetween": 30
              }
            }
          }'>
        <div class="swiper-wrapper">
          <div class="swiper-slide product-card">
            <div class="pc__img-wrapper">
              <a href="product1_simple.html">
                <img loading="lazy" src="<?= BASE_URL ?>assets/images/products/product_3.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                <img loading="lazy" src="<?= BASE_URL ?>assets/images/products/product_3-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
              </a>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Kirby T-Shirt</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$17</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_heart" />
                </svg>
              </button>
            </div>
          </div>

          <div class="swiper-slide product-card">
            <div class="pc__img-wrapper">
              <a href="product1_simple.html">
                <img loading="lazy" src="<?= BASE_URL ?>assets/images/products/product_1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                <img loading="lazy" src="<?= BASE_URL ?>assets/images/products/product_1-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
              </a>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Cropped Faux Leather Jacket</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$29</span>
              </div>
              <div class="product-card__review d-flex align-items-center">
                <div class="reviews-group d-flex">
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_star" />
                  </svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_star" />
                  </svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_star" />
                  </svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_star" />
                  </svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_star" />
                  </svg>
                </div>
                <span class="reviews-note text-lowercase text-secondary ms-1">8k+ reviews</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_heart" />
                </svg>
              </button>
            </div>
          </div>

          <div class="swiper-slide product-card">
            <div class="pc__img-wrapper">
              <a href="product1_simple.html">
                <img loading="lazy" src="<?= BASE_URL ?>assets/images/products/product_2.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                <img loading="lazy" src="<?= BASE_URL ?>assets/images/products/product_2-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
              </a>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Calvin Shorts</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$62</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_heart" />
                </svg>
              </button>
            </div>
          </div>

          <div class="swiper-slide product-card">
            <div class="pc__img-wrapper">
              <a href="product1_simple.html">
                <img loading="lazy" src="<?= BASE_URL ?>assets/images/products/product_6.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                <img loading="lazy" src="<?= BASE_URL ?>assets/images/products/product_6-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
              </a>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Shirt In Botanical Cheetah Print</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$62</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_heart" />
                </svg>
              </button>
            </div>
          </div>

          <div class="swiper-slide product-card">
            <div class="pc__img-wrapper">
              <a href="product1_simple.html">
                <img loading="lazy" src="<?= BASE_URL ?>assets/images/products/product_7.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                <img loading="lazy" src="<?= BASE_URL ?>assets/images/products/product_7-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
              </a>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Cotton Jersey T-Shirt</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$17</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_heart" />
                </svg>
              </button>
            </div>
          </div>

          <div class="swiper-slide product-card">
            <div class="pc__img-wrapper">
              <a href="product1_simple.html">
                <img loading="lazy" src="<?= BASE_URL ?>assets/images/products/product_4.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                <img loading="lazy" src="<?= BASE_URL ?>assets/images/products/product_4-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
              </a>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Cableknit Shawl</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price price-old">$129</span>
                <span class="money price price-sale">$99</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_heart" />
                </svg>
              </button>
            </div>
          </div>

          <div class="swiper-slide product-card">
            <div class="pc__img-wrapper">
              <a href="product1_simple.html">
                <img loading="lazy" src="<?= BASE_URL ?>assets/images/products/product_5.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                <img loading="lazy" src="<?= BASE_URL ?>assets/images/products/product_5-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
              </a>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Colorful Jacket</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$29</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_heart" />
                </svg>
              </button>
            </div>
          </div>

          <div class="swiper-slide product-card">
            <div class="pc__img-wrapper">
              <a href="product1_simple.html">
                <img loading="lazy" src="<?= BASE_URL ?>assets/images/products/product_8.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                <img loading="lazy" src="<?= BASE_URL ?>assets/images/products/product_8-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
              </a>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Zessi Dresses</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price price-old">$129</span>
                <span class="money price price-sale">$99</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_heart" />
                </svg>
              </button>
            </div>
          </div>
        </div><!-- /.swiper-wrapper -->
      </div><!-- /.swiper-container js-swiper-slider -->

      <div class="products-carousel__prev position-absolute top-50 d-flex align-items-center justify-content-center">
        <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
          <use href="#icon_prev_md" />
        </svg>
      </div><!-- /.products-carousel__prev -->
      <div class="products-carousel__next position-absolute top-50 d-flex align-items-center justify-content-center">
        <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
          <use href="#icon_next_md" />
        </svg>
      </div><!-- /.products-carousel__next -->

      <div class="products-pagination mt-4 mb-5 d-flex align-items-center justify-content-center"></div>
      <!-- /.products-pagination -->
    </div><!-- /.position-relative -->

  </section><!-- /.products-carousel container -->
</main>