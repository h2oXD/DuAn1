  <main style="margin-bottom: 50px;">
    <section class="shop-main container d-flex pt-4 pt-xl-5">
      <div class="shop-sidebar side-sticky bg-body" id="shopFilter">
        <div class="aside-header d-flex d-lg-none align-items-center">
          <h3 class="text-uppercase fs-6 mb-0">Filter By</h3>
          <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
        </div><!-- /.aside-header -->

        <div class="pt-4 pt-lg-0"></div>

        <div class="accordion" id="categories-list">
          <div class="accordion-item mb-4 pb-3">
            <h5 class="accordion-header" id="accordion-heading-11">
              <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-filter-1" aria-expanded="true" aria-controls="accordion-filter-1">
               Loại kính
                <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z"/>
                  </g>
                </svg>
              </button>
            </h5>
            <div id="accordion-filter-1" class="accordion-collapse collapse show border-0" aria-labelledby="accordion-heading-11" data-bs-parent="#categories-list">
              <div class="accordion-body px-0 pb-0 pt-3">
                <ul class="list list-inline mb-0">
                  <li class="list-item">
                    <?php foreach($categories as $category): ?>
                    <a href="?act=list_sp&category=<?= $category['id'] ?>" class="menu-link py-1"><?= $category['name'] ?></a><br>
                    <?php endforeach; ?>
                  </li>
                </ul>
              </div>
            </div>
          </div><!-- /.accordion-item -->
        </div><!-- /.accordion-item -->


        <div class="accordion" id="color-filters">
          <div class="accordion-item mb-4 pb-3">
            <h5 class="accordion-header" id="accordion-heading-1">
              <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-filter-2" aria-expanded="true" aria-controls="accordion-filter-2">
                Màu sắc
                <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z"/>
                  </g>
                </svg>
              </button>
            </h5>
            <div id="accordion-filter-2" class="accordion-collapse collapse show border-0" aria-labelledby="accordion-heading-1" data-bs-parent="#color-filters">
              <div class="accordion-body px-0 pb-0">
                <div class="d-flex flex-wrap">
                  <?php foreach($colors as $color): ?>
                    <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter"><?= $color['name'] ?></a>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div><!-- /.accordion-item -->
        </div><!-- /.accordion -->
        <div class="accordion" id="size-filters">
          <div class="accordion-item mb-4 pb-3">
            <h5 class="accordion-header" id="accordion-heading-size">
              <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-filter-size" aria-expanded="true" aria-controls="accordion-filter-size">
                Kích thước
                <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z"/>
                  </g>
                </svg>
              </button>
            </h5>
            <div id="accordion-filter-size" class="accordion-collapse collapse show border-0" aria-labelledby="accordion-heading-size" data-bs-parent="#size-filters">
              <div class="accordion-body px-0 pb-0">
                <div class="d-flex flex-wrap">
                  <?php foreach($sizes as $size): ?>
                  <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter"><?= $size['size'] ?></a>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div><!-- /.accordion-item -->
        </div>
        <div class="accordion" id="brand-filters">
          <div class="accordion-item mb-4 pb-3">
            <h5 class="accordion-header" id="accordion-heading-brand">
              <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-filter-brand" aria-expanded="true" aria-controls="accordion-filter-brand">
                Thương hiệu
                <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z"/>
                  </g>
                </svg>
              </button>
            </h5>
            <div id="accordion-filter-brand" class="accordion-collapse collapse show border-0" aria-labelledby="accordion-heading-brand" data-bs-parent="#brand-filters">
              <div class="search-field multi-select accordion-body px-0 pb-0">
                <div class="search-field__input-wrapper mb-3">
                  <input type="text" name="search_text" class="search-field__input form-control form-control-sm border-light border-2" placeholder="SEARCH">
                </div>
                <ul class="multi-select__list list-unstyled">
                  <?php foreach($brands as $brand): ?>
                    <li class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                      <span class="me-auto"><?= $brand['name'] ?></span>
                      <span class="text-secondary"><?= $brand['SLsp'] ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div><!-- /.accordion-item -->
        </div><!-- /.accordion -->


        <div class="accordion" id="price-filters">
          <div class="accordion-item mb-4">
            <h5 class="accordion-header mb-2" id="accordion-heading-price">
              <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-filter-price" aria-expanded="true" aria-controls="accordion-filter-price">
                Giá
                <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z"/>
                  </g>
                </svg>
              </button>
            </h5>
            <div id="accordion-filter-price" class="accordion-collapse collapse show border-0" aria-labelledby="accordion-heading-price" data-bs-parent="#price-filters">
              <input class="price-range-slider" type="text" name="price_range" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[0,1000]" data-currency="$">
              <div class="price-range__info d-flex align-items-center mt-2">
                <div class="me-auto">
                  <span class="text-secondary">Min Price: </span>
                  <span class="price-range__min">$<?= $min_price['PriceMin'] ?></span>
                </div>
                <div>
                  <span class="text-secondary">Max Price: </span>
                  <span class="price-range__max">$<?= $max_price['PriceMax'] ?></span>
                </div>
              </div>
            </div>
          </div><!-- /.accordion-item -->
        </div><!-- /.accordion -->
      </div><!-- /.shop-sidebar -->

      <div class="shop-list flex-grow-1">
        <div class="mb-3 pb-2 pb-xl-3"></div>

        <div class="d-flex justify-content-between mb-4 pb-md-2">
          <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
            <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium" >Home</a>
            <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
            <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium" >The Shop</a>
          </div><!-- /.breadcrumb -->

          <div class="shop-acs d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1">
            <select class="shop-acs__select form-select w-auto border-0 py-0 order-1 order-md-0" aria-label="Sort Items" name="total-number">
              <option selected>Default Sorting</option>
              <option value="1">Featured</option>
              <option value="2">Best selling</option>
              <option value="3">Alphabetically, A-Z</option>
              <option value="3">Alphabetically, Z-A</option>
              <option value="3">Price, low to high</option>
              <option value="3">Price, high to low</option>
              <option value="3">Date, old to new</option>
              <option value="3">Date, new to old</option>
            </select>

            <div class="shop-asc__seprator mx-3 bg-light d-none d-md-block order-md-0"></div>


            <div class="shop-filter d-flex align-items-center order-0 order-md-3 d-lg-none">
              <button class="btn-link btn-link_f d-flex align-items-center ps-0 js-open-aside" data-aside="shopFilter">
                <svg class="d-inline-block align-middle me-2" width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_filter" /></svg>
              <span class="text-uppercase fw-medium d-inline-block align-middle">Filter</span>
              </button>
            </div><!-- /.col-size d-flex align-items-center ms-auto ms-md-3 -->
          </div><!-- /.shop-acs -->
        </div><!-- /.d-flex justify-content-between -->

        <div class="products-grid row row-cols-2 row-cols-md-3 row-cols-xl-4 row-cols-lg-4" id="products-grid" >
          <?php foreach($products as $product): ?>
          <div class="product-card-wrapper">
            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
              <div class="pc__img-wrapper">
                <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <a href="?act=chitiet&id=<?= $product['id'] ?>"><img loading="lazy" src="<?= $product['thumbnail'] ?>" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                    </div><!-- /.pc__img-wrapper -->
                  </div>
                </div>
                <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart" data-aside="cartDrawer" title="Thêm vào giỏ hàng"><a href="?act=chitiet&id=<?= $product['id'] ?>">Chi tiết</a></button>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category">Dresses</p>
                <h6 class="pc__title"><a href="?act=chitiet&id=<?= $product['id'] ?>"><?= $product['title'] ?></a></h6>
                <div class="product-card__price d-flex">
                  <span class="money price"><?= $product['sale'] ?>$</span>
                </div>
                <div class="product-card__review d-flex align-items-center">
                 
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div><!-- /.products-grid row -->

        <nav class="shop-pages d-flex justify-content-between mt-3" aria-label="Page navigation">
          <a href="#" class="btn-link d-inline-flex align-items-center">
            <svg class="me-1" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg>
            <span class="fw-medium">PREV</span>
          </a>
          <ul class="pagination mb-0">
            <li class="page-item"><a class="btn-link px-1 mx-2 btn-link_active" href="#">1</a></li>
            <li class="page-item"><a class="btn-link px-1 mx-2" href="#">2</a></li>
            <li class="page-item"><a class="btn-link px-1 mx-2" href="#">3</a></li>
            <li class="page-item"><a class="btn-link px-1 mx-2" href="#">4</a></li>
          </ul>
          <a href="#" class="btn-link d-inline-flex align-items-center">
            <span class="fw-medium me-1">NEXT</span>
            <svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg>
          </a>
        </nav>
      </div>
    </section><!-- /.shop-main container -->
  </main>