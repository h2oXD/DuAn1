<main>
    <section class="full-width_padding">
        <div class="full-width_border border-2" style="border-color: #eee">
            <div class="shop-banner position-relative ">
                <div class="background-img" style="background-color: #eee">
                    <img loading="lazy" src="<?= BASE_URL ?>assets/images/shop/shop_banner8.png" width="1759" height="420" alt="Pattern"
                        class="slideshow-bg__img object-fit-cover">
                </div>

                <div class="shop-banner__content container position-absolute start-50 top-50 translate-middle">
                    <h2 class="h1 stroke-text smooth-16 text-uppercase fw-bold mb-3 mb-xl-4">Shop</h2>
                    <ul class="d-flex flex-wrap list-unstyled text-uppercase h6">
                        <li class="me-3 me-xl-4 pe-1"><a href="#"
                                class="menu-link menu-link_us-s menu-link_active">StayHome</a></li>
                        <li class="me-3 me-xl-4 pe-1"><a href="#" class="menu-link menu-link_us-s">New In</a></li>
                        <li class="me-3 me-xl-4 pe-1"><a href="#" class="menu-link menu-link_us-s">Jackets</a></li>
                        <li class="me-3 me-xl-4 pe-1"><a href="#" class="menu-link menu-link_us-s">Hoodies</a></li>
                        <li class="me-3 me-xl-4 pe-1"><a href="shop4.html" class="menu-link menu-link_us-s">Men</a></li>
                        <li class="me-3 me-xl-4 pe-1"><a href="shop5.html" class="menu-link menu-link_us-s">Women</a>
                        </li>
                        <li class="me-3 me-xl-4 pe-1"><a href="#" class="menu-link menu-link_us-s">Trousers</a></li>
                        <li class="me-3 me-xl-4 pe-1"><a href="shop3.html"
                                class="menu-link menu-link_us-s">Accessories</a></li>
                        <li class="me-3 me-xl-4 pe-1"><a href="#" class="menu-link menu-link_us-s">Shoes</a></li>
                    </ul>
                </div><!-- /.shop-banner__content -->
            </div><!-- /.shop-banner position-relative -->
        </div><!-- /.full-width_border -->
    </section><!-- /.full-width_padding-->

    <div class="mb-4 pb-lg-3"></div>

    <section class="shop-main container">
        <div class="d-flex justify-content-between mb-4 pb-md-2">
            <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
                <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">Home</a>
                <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
                <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">The Shop</a>
            </div><!-- /.breadcrumb -->

            <div class="shop-acs d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1">
                <select class="shop-acs__select form-select w-auto border-0 py-0 order-1 order-md-0"
                    aria-label="Sort Items" name="total-number">
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

                <div class="col-size align-items-center order-1 d-none d-lg-flex">
                    <span class="text-uppercase fw-medium me-2">View</span>
                    <button class="btn-link fw-medium me-2 js-cols-size" data-target="products-grid-1"
                        data-cols="2">2</button>
                    <button class="btn-link fw-medium me-2 js-cols-size" data-target="products-grid-1"
                        data-cols="3">3</button>
                    <button class="btn-link fw-medium js-cols-size" data-target="products-grid-1"
                        data-cols="4">4</button>
                </div><!-- /.col-size -->

                <div class="shop-asc__seprator mx-3 bg-light d-none d-lg-block order-md-1"></div>

                <div class="shop-filter d-flex align-items-center order-0 order-md-3">
                    <button class="btn-link btn-link_f d-flex align-items-center ps-0 js-open-aside"
                        data-aside="shopFilter">
                        <svg class="d-inline-block align-middle me-2" width="14" height="10" viewBox="0 0 14 10"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_filter" />
                        </svg>
                        <span class="text-uppercase fw-medium d-inline-block align-middle">Filter</span>
                    </button>
                </div><!-- /.col-size d-flex align-items-center ms-auto ms-md-3 -->
            </div><!-- /.shop-acs -->
        </div><!-- /.d-flex justify-content-between -->

        <div class="products-grid">
            <h2 class="section-title fw-normal mb-3 pb-2">List Style v1</h2>
            <div class="row row-cols-2 row-cols-lg-3 row-cols-xl-4" id="products-grid-1">
                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_1-1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                            <button
                                class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Cropped Faux Leather Jacket</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$29</span>
                            </div>
                            <div class="product-card__review d-sm-flex align-items-center">
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
                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">8k+ reviews</span>
                            </div>

                            <button
                                class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_2.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_2-1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                            <button
                                class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Calvin Shorts</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$62</span>
                            </div>

                            <div class="d-flex align-items-center mt-1">
                                <a href="#" class="swatch-color pc__swatch-color" style="color: #222222"></a>
                                <a href="#" class="swatch-color swatch_active pc__swatch-color"
                                    style="color: #b9a16b"></a>
                                <a href="#" class="swatch-color pc__swatch-color" style="color: #f5e6e0"></a>
                            </div>

                            <button
                                class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>
                        </div>

                        <div class="pc-labels position-absolute top-0 start-0 w-100 d-flex justify-content-between">
                            <div class="pc-labels__right ms-auto">
                                <span class="pc-label pc-label_sale d-block text-white">-67%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_3.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_3-1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                            <button
                                class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Kirby T-Shirt</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$17</span>
                            </div>

                            <button
                                class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_4.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_4-1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                            <button
                                class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Cableknit Shawl</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price price-old">$129</span>
                                <span class="money price price-sale">$99</span>
                            </div>

                            <button
                                class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>
                        </div>
                        <div class="pc-labels position-absolute top-0 start-0 w-100 d-flex justify-content-between">
                            <div class="pc-labels__left">
                                <span class="pc-label pc-label_new d-block bg-white">NEW</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4 mb-xl-5"></div>

            <h2 class="section-title fw-normal mb-3 pb-2">List Style v2</h2>
            <div class="row row-cols-2 row-cols-lg-3 row-cols-xl-4" id="products-grid-2">
                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product-26-1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product-26-2.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                            <div
                                class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                <button
                                    class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">Add To Cart
                                </button>
                                <button
                                    class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                    View</button>
                            </div>
                            <button
                                class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category text-beige">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Colorful Jacket</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$29</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product-27-1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product-27-2.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                            <div
                                class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                <button
                                    class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">Add To Cart
                                </button>
                                <button
                                    class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                    View</button>
                            </div>
                            <button
                                class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category text-beige">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Shirt In Botanical Cheetah Print</a>
                            </h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$62</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product-28-1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product-28-2.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>

                            <div
                                class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                <button
                                    class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">Add To Cart
                                </button>
                                <button
                                    class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                    View</button>
                            </div>
                            <button
                                class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category text-beige">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Cotton Jersey T-Shirt</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$17</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product-29-1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product-29-2.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>

                            <div
                                class="anim_appear-bottom position-absolute bottom-0 start-0 w-100 d-none d-sm-flex align-items-center">
                                <button
                                    class="btn btn-primary flex-grow-1 fs-base ps-3 ps-xxl-4 pe-0 border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">Add To Cart
                                </button>
                                <button
                                    class="btn btn-primary flex-grow-1 fs-base ps-0 pe-3 pe-xxl-4 border-0 text-uppercase fw-medium js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">Quick
                                    View</button>
                            </div>
                            <button
                                class="pc__btn-wl position-absolute bg-body rounded-circle border-0 text-primary js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category text-beige">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Zessi Dresses</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price price-old">$129</span>
                                <span class="money price price-sale">$99</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4 mb-xl-5"></div>

            <h2 class="section-title fw-normal mb-3 pb-2">List Style v3</h2>
            <div class="row row-cols-2 row-cols-lg-3 row-cols-xl-4" id="products-grid-3">
                <div class="product-card-wrapper">
                    <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_9.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket"
                                                class="pc__img object-position-top"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_9-1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <h6 class="pc__title"><a href="product1_simple.html">Cropped Faux Leather Jacket</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$29</span>
                            </div>
                            <div class="product-card__review d-sm-flex align-items-center">
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
                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">8k+ reviews</span>
                            </div>

                            <div
                                class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                                <button
                                    class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <span class="d-none d-xxl-block">Quick View</span>
                                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_view" />
                                        </svg></span>
                                </button>
                                <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_10.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket"
                                                class="pc__img object-position-top"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_10-1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <h6 class="pc__title"><a href="product1_simple.html">Calvin Shorts</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$62</span>
                            </div>

                            <div
                                class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                                <button
                                    class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <span class="d-none d-xxl-block">Quick View</span>
                                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_view" />
                                        </svg></span>
                                </button>
                                <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_11.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket"
                                                class="pc__img object-position-top"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_11-1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <h6 class="pc__title"><a href="product1_simple.html">Kirby T-Shirt</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$17</span>
                            </div>

                            <div
                                class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                                <button
                                    class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <span class="d-none d-xxl-block">Quick View</span>
                                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_view" />
                                        </svg></span>
                                </button>
                                <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_12.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket"
                                                class="pc__img object-position-top"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_12-1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <h6 class="pc__title"><a href="product1_simple.html">Cableknit Shawl</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price price-old">$129</span>
                                <span class="money price price-sale">$99</span>
                            </div>

                            <div
                                class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                                <button
                                    class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <span class="d-none d-xxl-block">Quick View</span>
                                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_view" />
                                        </svg></span>
                                </button>
                                <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4 mb-xl-5"></div>

            <h2 class="section-title fw-normal mb-3 pb-2">List Style v4</h2>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4" id="products-grid-4">
                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_13.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket"
                                                class="pc__img object-position-top"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product-22-1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product-22-2.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                            <div class="anim_appear-bottom position-absolute w-100 text-center mb-3">
                                <button
                                    class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">
                                    <svg class="d-inline-block" width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_cart" />
                                    </svg>
                                </button>
                                <button
                                    class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <svg class="d-inline-block" width="18" height="18" viewBox="0 0 18 18"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_view" />
                                    </svg>
                                </button>
                                <button class="btn btn-round btn-hover-red border-0 text-uppercase js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Colorful Jacket</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$29</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_14.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket"
                                                class="pc__img object-position-top"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_14-1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket"
                                                class="pc__img object-position-top"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>

                            <div class="anim_appear-bottom position-absolute w-100 text-center mb-3">
                                <button
                                    class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">
                                    <svg class="d-inline-block" width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_cart" />
                                    </svg>
                                </button>
                                <button
                                    class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <svg class="d-inline-block" width="18" height="18" viewBox="0 0 18 18"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_view" />
                                    </svg>
                                </button>
                                <button class="btn btn-round btn-hover-red border-0 text-uppercase js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Shirt In Botanical Cheetah Print</a>
                            </h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$62</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_15.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket"
                                                class="pc__img object-position-top"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_15-1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>

                            <div class="anim_appear-bottom position-absolute w-100 text-center mb-3">
                                <button
                                    class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">
                                    <svg class="d-inline-block" width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_cart" />
                                    </svg>
                                </button>
                                <button
                                    class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <svg class="d-inline-block" width="18" height="18" viewBox="0 0 18 18"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_view" />
                                    </svg>
                                </button>
                                <button class="btn btn-round btn-hover-red border-0 text-uppercase js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Cotton Jersey T-Shirt</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$17</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_16.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket"
                                                class="pc__img object-position-top"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_16-1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>

                            <div class="anim_appear-bottom position-absolute w-100 text-center mb-3">
                                <button
                                    class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">
                                    <svg class="d-inline-block" width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_cart" />
                                    </svg>
                                </button>
                                <button
                                    class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <svg class="d-inline-block" width="18" height="18" viewBox="0 0 18 18"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_view" />
                                    </svg>
                                </button>
                                <button class="btn btn-round btn-hover-red border-0 text-uppercase js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Zessi Dresses</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price price-old">$129</span>
                                <span class="money price price-sale">$99</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4 mb-xl-5"></div>

            <h2 class="section-title fw-normal mb-3 pb-2">List Style v5</h2>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5" id="products-grid-5">
                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_1.jpg" width="258" height="313"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_1-1.jpg" width="258" height="313"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                            <button
                                class="pc__atc btn btn-lg anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                            <div class="anim_appear-right position-absolute top-0 mt-2 me-2">
                                <button
                                    class="btn btn-round-sm btn-hover-red d-block border-0 text-uppercase mb-2 js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <svg class="d-inline-block" width="14" height="14" viewBox="0 0 18 18"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_view" />
                                    </svg>
                                </button>
                                <button
                                    class="btn btn-round-sm btn-hover-red d-block border-0 text-uppercase js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Colorful Jacket</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$29</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_2.jpg" width="258" height="313"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_2-1.jpg" width="258" height="313"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                            <button
                                class="pc__atc btn btn-lg anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                            <div class="anim_appear-right position-absolute top-0 mt-2 me-2">
                                <button
                                    class="btn btn-round-sm btn-hover-red d-block border-0 text-uppercase mb-2 js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <svg class="d-inline-block" width="14" height="14" viewBox="0 0 18 18"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_view" />
                                    </svg>
                                </button>
                                <button
                                    class="btn btn-round-sm btn-hover-red d-block border-0 text-uppercase js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Shirt In Botanical Cheetah Print</a>
                            </h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$62</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_3.jpg" width="258" height="313"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_3-1.jpg" width="258" height="313"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                            <button
                                class="pc__atc btn btn-lg anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                            <div class="anim_appear-right position-absolute top-0 mt-2 me-2">
                                <button
                                    class="btn btn-round-sm btn-hover-red d-block border-0 text-uppercase mb-2 js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <svg class="d-inline-block" width="14" height="14" viewBox="0 0 18 18"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_view" />
                                    </svg>
                                </button>
                                <button
                                    class="btn btn-round-sm btn-hover-red d-block border-0 text-uppercase js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Cotton Jersey T-Shirt</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$17</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_4.jpg" width="258" height="313"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_4-1.jpg" width="258" height="313"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                            <button
                                class="pc__atc btn btn-lg anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                            <div class="anim_appear-right position-absolute top-0 mt-2 me-2">
                                <button
                                    class="btn btn-round-sm btn-hover-red d-block border-0 text-uppercase mb-2 js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <svg class="d-inline-block" width="14" height="14" viewBox="0 0 18 18"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_view" />
                                    </svg>
                                </button>
                                <button
                                    class="btn btn-round-sm btn-hover-red d-block border-0 text-uppercase js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Zessi Dresses</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price price-old">$129</span>
                                <span class="money price price-sale">$99</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_6.jpg" width="258" height="313"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_6-1.jpg" width="258" height="313"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                            <button
                                class="pc__atc btn btn-lg anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                            <div class="anim_appear-right position-absolute top-0 mt-2 me-2">
                                <button
                                    class="btn btn-round-sm btn-hover-red d-block border-0 text-uppercase mb-2 js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <svg class="d-inline-block" width="14" height="14" viewBox="0 0 18 18"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_view" />
                                    </svg>
                                </button>
                                <button
                                    class="btn btn-round-sm btn-hover-red d-block border-0 text-uppercase js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Shirt In Bontanical Cheetah Print</a>
                            </h6>
                            <div class="product-card__price d-flex">
                                <span class="money price price-old">$129</span>
                                <span class="money price price-sale">$99</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4 mb-xl-5"></div>

            <h2 class="section-title fw-normal mb-3 pb-2">List Style v6</h2>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4" id="products-grid-6">
                <div class="product-card-wrapper overflow-hidden">
                    <div class="product-card product-card_style6 hover-container mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_13.jpg" width="330" height="400"
                                                alt="Colorful Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product-22-1.jpg" width="330" height="400"
                                                alt="Colorful Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product-22-2.jpg" width="330" height="400"
                                                alt="Colorful Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                        </div>

                        <div class="pc__info position-relative bg-body">
                            <div class="position-relative">
                                <p class="pc__category">Dresses</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Colorful Jacket</a></h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">$29</span>
                                </div>

                                <div class="hover__content d-flex align-items-center top-0 end-0 bg-body w-auto">
                                    <a href="#" class="swatch-color pc__swatch-color" style="color: #f5e6e0"></a>
                                    <a href="#" class="swatch-color swatch_active pc__swatch-color"
                                        style="color: #b9a16b"></a>
                                    <a href="#" class="swatch-color pc__swatch-color" style="color: #222222"></a>
                                </div>

                                <div
                                    class="d-none d-flex align-items-center hover__content position-relative mt-3 mt-sm-0">
                                    <button
                                        class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-none d-xxl-block">Quick View</span>
                                        <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_view" />
                                            </svg></span>
                                    </button>
                                    <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist"
                                        title="Add To Wishlist">
                                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_heart" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper overflow-hidden">
                    <div class="product-card product-card_style6 hover-container mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_14.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_14-1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                        </div>

                        <div class="pc__info position-relative bg-body">
                            <div class="position-relative">
                                <p class="pc__category">Dresses</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Colorful Jacket</a></h6>
                                <div class="product-card__price d-flex mb-1">
                                    <span class="money price">$29</span>
                                </div>

                                <div class="hover__content d-flex align-items-center top-0 end-0 bg-body w-auto">
                                    <a href="#" class="swatch-color pc__swatch-color" style="color: #f5e6e0"></a>
                                    <a href="#" class="swatch-color swatch_active pc__swatch-color"
                                        style="color: #b9a16b"></a>
                                    <a href="#" class="swatch-color pc__swatch-color" style="color: #222222"></a>
                                </div>

                                <div
                                    class="d-none d-flex align-items-center hover__content position-relative mt-3 mt-sm-0">
                                    <button
                                        class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-none d-xxl-block">Quick View</span>
                                        <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_view" />
                                            </svg></span>
                                    </button>
                                    <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist"
                                        title="Add To Wishlist">
                                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_heart" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper overflow-hidden">
                    <div class="product-card product-card_style6 hover-container mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_15.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_15-1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                        </div>

                        <div class="pc__info position-relative bg-body">
                            <div class="position-relative">
                                <p class="pc__category">Dresses</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Colorful Jacket</a></h6>
                                <div class="product-card__price d-flex mb-1">
                                    <span class="money price">$29</span>
                                </div>

                                <div class="hover__content d-flex align-items-center top-0 end-0 bg-body w-auto">
                                    <a href="#" class="swatch-color pc__swatch-color" style="color: #222222"></a>
                                    <a href="#" class="swatch-color pc__swatch-color" style="color: #f5e6e0"></a>
                                    <a href="#" class="swatch-color swatch_active pc__swatch-color"
                                        style="color: #b9a16b"></a>
                                </div>

                                <div
                                    class="d-none d-flex align-items-center hover__content position-relative mt-3 mt-sm-0">
                                    <button
                                        class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-none d-xxl-block">Quick View</span>
                                        <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_view" />
                                            </svg></span>
                                    </button>
                                    <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist"
                                        title="Add To Wishlist">
                                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_heart" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper overflow-hidden">
                    <div class="product-card product-card_style6 hover-container mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_16.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_16-1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                        </div>

                        <div class="pc__info position-relative bg-body">
                            <div class="position-relative">
                                <p class="pc__category">Dresses</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Colorful Jacket</a></h6>
                                <div class="product-card__price d-flex mb-1">
                                    <span class="money price">$29</span>
                                </div>

                                <div
                                    class="d-none d-flex align-items-center hover__content position-relative mt-3 mt-sm-0">
                                    <button
                                        class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button
                                        class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-none d-xxl-block">Quick View</span>
                                        <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_view" />
                                            </svg></span>
                                    </button>
                                    <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist"
                                        title="Add To Wishlist">
                                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_heart" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4 mb-xl-5"></div>

            <h2 class="section-title fw-normal mb-3 pb-2">List Style v7</h2>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4" id="products-grid-7">
                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product-30-1.jpg" width="330" height="400"
                                                alt="Wildhorse 6" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">NIKE</p>
                            <h6 class="pc__title mb-2"><a href="product1_simple.html">Wildhorse 6</a></h6>
                            <div class="product-card__price d-flex mb-1">
                                <span class="money price">$29</span>
                            </div>

                            <button
                                class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>

                            <div
                                class="anim_appear-bottom position-absolute bottom-0 start-0 d-flex align-items-center bg-body">
                                <button
                                    class="btn-link btn-link_lg me-3 me-sm-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                <button class="btn-link btn-link_lg text-uppercase fw-medium js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <span class="d-none d-xl-block">Quick View</span>
                                    <span class="d-block d-xl-none"><svg width="18" height="18" viewBox="0 0 18 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_view" />
                                        </svg></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product-31-1.jpg" width="330" height="400"
                                                alt="Gray Vintage Chair" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_6-1.jpg" width="330" height="400"
                                                alt="Gray Vintage Chair" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">PUMA</p>
                            <h6 class="pc__title mb-2"><a href="product1_simple.html">Gray Vintage Chair</a></h6>
                            <div class="product-card__price d-flex mb-1">
                                <span class="money price">$62</span>
                            </div>

                            <button
                                class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>

                            <div
                                class="anim_appear-bottom position-absolute bottom-0 start-0 d-flex align-items-center bg-body">
                                <button
                                    class="btn-link btn-link_lg me-3 me-sm-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                <button class="btn-link btn-link_lg text-uppercase fw-medium js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <span class="d-none d-xl-block">Quick View</span>
                                    <span class="d-block d-xl-none"><svg width="18" height="18" viewBox="0 0 18 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_view" />
                                        </svg></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product-32-1.jpg" width="330" height="400"
                                                alt="Indy Icon Clash" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_7-1.jpg" width="330" height="400"
                                                alt="Indy Icon Clash" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">REEBOK</p>
                            <h6 class="pc__title mb-2"><a href="product1_simple.html">Indy Icon Clash</a></h6>
                            <div class="product-card__price d-flex mb-1">
                                <span class="money price price-old">$129</span>
                                <span class="money price price-sale">$99</span>
                            </div>

                            <button
                                class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>

                            <div
                                class="anim_appear-bottom position-absolute bottom-0 start-0 d-flex align-items-center bg-body">
                                <button
                                    class="btn-link btn-link_lg me-3 me-sm-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                <button class="btn-link btn-link_lg text-uppercase fw-medium js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <span class="d-none d-xl-block">Quick View</span>
                                    <span class="d-block d-xl-none"><svg width="18" height="18" viewBox="0 0 18 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_view" />
                                        </svg></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product-33-1.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="<?= BASE_URL ?>assets/images/products/product_10.jpg" width="330" height="400"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title mb-2"><a href="product1_simple.html">Colorful Jacket</a></h6>
                            <div class="product-card__price d-flex mb-1">
                                <span class="money price">$29</span>
                            </div>

                            <button
                                class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>

                            <div
                                class="anim_appear-bottom position-absolute bottom-0 start-0 d-flex align-items-center bg-body">
                                <button
                                    class="btn-link btn-link_lg me-3 me-sm-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                <button class="btn-link btn-link_lg text-uppercase fw-medium js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <span class="d-none d-xl-block">Quick View</span>
                                    <span class="d-block d-xl-none"><svg width="18" height="18" viewBox="0 0 18 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_view" />
                                        </svg></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4 mb-xl-5"></div>

            <h2 class="section-title fw-normal mb-3 pb-2">List Style v8</h2>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4" id="products-grid-8">
                <div class="product-card-wrapper">
                    <div class="product-card product-card_style8 mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                            <a href="product1_simple.html"><img loading="lazy" src="<?= BASE_URL ?>assets/images/products/product-37-1.jpg"
                                    width="328" height="298"
                                    alt="Toshiba TF-43A810U21 43-inch 4K UHD TV - Fire TV Edition" class="pc__img"></a>
                        </div><!-- /.pc__img-wrapper -->

                        <div class="pc__info position-relative">
                            <p class="pc__category">Television & Video</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Toshiba TF-43A810U21 43-inch 4K UHD TV
                                    - Fire TV Edition</a></h6>
                            <div class="product-card__review d-sm-flex align-items-center">
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
                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                            </div>
                            <div class="product-card__price d-flex">
                                <span class="money price fs-5">$29</span>
                            </div>

                            <div
                                class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                <button
                                    class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                <button class="btn-link btn-link_lg text-uppercase fw-medium js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <span class="d-none d-xxl-block">Quick View</span>
                                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_view" />
                                        </svg></span>
                                </button>
                                <button class="pc__btn-wl bg-transparent border-0 ms-3 ms-xxl-auto js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card product-card_style8 mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                            <a href="product1_simple.html"><img loading="lazy" src="<?= BASE_URL ?>assets/images/products/product-35-1.jpg"
                                    width="328" height="298"
                                    alt="Wyze Cam 1080p HD Indoor Wireless Smart Home Camera with Night Vision..."
                                    class="pc__img"></a>
                        </div><!-- /.pc__img-wrapper -->

                        <div class="pc__info position-relative">
                            <p class="pc__category">Camera & Photo</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Wyze Cam 1080p HD Indoor Wireless Smart
                                    Home Camera with Night Vision...</a></h6>
                            <div class="product-card__review d-sm-flex align-items-center">
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
                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                            </div>
                            <div class="product-card__price d-flex">
                                <span class="money price fs-5">$62</span>
                            </div>

                            <div
                                class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                <button
                                    class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                <button class="btn-link btn-link_lg text-uppercase fw-medium js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <span class="d-none d-xxl-block">Quick View</span>
                                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_view" />
                                        </svg></span>
                                </button>
                                <button class="pc__btn-wl bg-transparent border-0 ms-3 ms-xxl-auto js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card product-card_style8 mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                            <a href="product1_simple.html"><img loading="lazy" src="<?= BASE_URL ?>assets/images/products/product-36-1.jpg"
                                    width="328" height="298"
                                    alt="NUBWO Gaming headsets PS4 N7 Stereo Xbox one Headset Gaming"
                                    class="pc__img"></a>
                        </div><!-- /.pc__img-wrapper -->

                        <div class="pc__info position-relative">
                            <p class="pc__category">Audio</p>
                            <h6 class="pc__title"><a href="product1_simple.html">NUBWO Gaming headsets PS4 N7 Stereo
                                    Xbox one Headset Gaming...</a></h6>
                            <div class="product-card__review d-sm-flex align-items-center">
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
                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                            </div>
                            <div class="product-card__price d-flex">
                                <span class="money price fs-5">$17</span>
                            </div>

                            <div
                                class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                <button
                                    class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                <button class="btn-link btn-link_lg text-uppercase fw-medium js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <span class="d-none d-xxl-block">Quick View</span>
                                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_view" />
                                        </svg></span>
                                </button>
                                <button class="pc__btn-wl bg-transparent border-0 ms-3 ms-xxl-auto js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card product-card_style8 mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                            <a href="product1_simple.html"><img loading="lazy" src="<?= BASE_URL ?>assets/images/products/product-37-1.jpg"
                                    width="328" height="298"
                                    alt="Echo Dot (3rd Gen) - Smart speaker with Alexa - Charcoal" class="pc__img"></a>
                        </div><!-- /.pc__img-wrapper -->

                        <div class="pc__info position-relative">
                            <p class="pc__category">Bluetooth Speakers</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Echo Dot (3rd Gen) - Smart speaker with
                                    Alexa - Charcoal</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price price-old fs-5">$129</span>
                                <span class="money price price-sale fs-5">$99</span>
                            </div>

                            <div
                                class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                <button
                                    class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                <button class="btn-link btn-link_lg text-uppercase fw-medium js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <span class="d-none d-xxl-block">Quick View</span>
                                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_view" />
                                        </svg></span>
                                </button>
                                <button class="pc__btn-wl bg-transparent border-0 ms-3 ms-xxl-auto js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4 mb-xl-5"></div>

            <h2 class="section-title fw-normal mb-3 pb-2">List Style v9</h2>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-5" id="products-grid-9">
                <div class="product-card-wrapper">
                    <div class="product-card product-card_style9 border rounded-3 mb-3 mb-md-4 mb-xxl-5">
                        <div class="position-relative pb-3">
                            <div class="pc__img-wrapper pc__img-wrapper_wide3">
                                <a href="product1_simple.html"><img loading="lazy"
                                        src="<?= BASE_URL ?>assets/images/products/product-38-1.jpg" width="256" height="201"
                                        alt="Cropped Faux leather Jacket" class="pc__img"></a>
                            </div>
                            <div class="anim_appear-bottom position-absolute w-100 text-center">
                                <button
                                    class="btn btn-round btn-hover-red border-0 text-uppercase me-2 js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">
                                    <svg class="d-inline-block" width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_cart" />
                                    </svg>
                                </button>
                                <button class="btn btn-round btn-hover-red border-0 text-uppercase me-2 js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <svg class="d-inline-block" width="18" height="18" viewBox="0 0 18 18"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_view" />
                                    </svg>
                                </button>
                                <button class="btn btn-round btn-hover-red border-0 text-uppercase js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Fruits</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Organic Bartlett Pear</a></h6>
                            <div class="product-card__review d-sm-flex align-items-center">
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
                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                            </div>
                            <div class="product-card__price d-flex">
                                <span class="money price fs-5">$35.90</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card product-card_style9 border rounded-3 mb-3 mb-md-4 mb-xxl-5">
                        <div class="position-relative pb-3">
                            <div class="pc__img-wrapper pc__img-wrapper_wide3">
                                <a href="product1_simple.html"><img loading="lazy"
                                        src="<?= BASE_URL ?>assets/images/products/product-39-1.jpg" width="256" height="201"
                                        alt="Cropped Faux leather Jacket" class="pc__img"></a>
                            </div>
                            <div class="anim_appear-bottom position-absolute w-100 text-center">
                                <button
                                    class="btn btn-round btn-hover-red border-0 text-uppercase me-2 js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">
                                    <svg class="d-inline-block" width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_cart" />
                                    </svg>
                                </button>
                                <button class="btn btn-round btn-hover-red border-0 text-uppercase me-2 js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <svg class="d-inline-block" width="18" height="18" viewBox="0 0 18 18"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_view" />
                                    </svg>
                                </button>
                                <button class="btn btn-round btn-hover-red border-0 text-uppercase js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Fruits</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Organic Strawberries, 1 lb</a></h6>
                            <div class="product-card__review d-sm-flex align-items-center">
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
                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                            </div>
                            <div class="product-card__price d-flex">
                                <span class="money price fs-5">$79.99</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card product-card_style9 border rounded-3 mb-3 mb-md-4 mb-xxl-5">
                        <div class="position-relative pb-3">
                            <div class="pc__img-wrapper pc__img-wrapper_wide3">
                                <a href="product1_simple.html"><img loading="lazy"
                                        src="<?= BASE_URL ?>assets/images/products/product-40-1.jpg" width="256" height="201"
                                        alt="Cropped Faux leather Jacket" class="pc__img"></a>
                            </div>
                            <div class="anim_appear-bottom position-absolute w-100 text-center">
                                <button
                                    class="btn btn-round btn-hover-red border-0 text-uppercase me-2 js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">
                                    <svg class="d-inline-block" width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_cart" />
                                    </svg>
                                </button>
                                <button class="btn btn-round btn-hover-red border-0 text-uppercase me-2 js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <svg class="d-inline-block" width="18" height="18" viewBox="0 0 18 18"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_view" />
                                    </svg>
                                </button>
                                <button class="btn btn-round btn-hover-red border-0 text-uppercase js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Fruits</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Blueberry Organic, 6 Ounce</a></h6>
                            <div class="product-card__review d-sm-flex align-items-center">
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
                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                            </div>
                            <div class="product-card__price d-flex">
                                <span class="money price fs-5">$929.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card product-card_style9 border rounded-3 mb-3 mb-md-4 mb-xxl-5">
                        <div class="position-relative pb-3">
                            <div class="pc__img-wrapper pc__img-wrapper_wide3">
                                <a href="product1_simple.html"><img loading="lazy"
                                        src="<?= BASE_URL ?>assets/images/products/product-41-1.jpg" width="256" height="201"
                                        alt="Cropped Faux leather Jacket" class="pc__img"></a>
                            </div>
                            <div class="anim_appear-bottom position-absolute w-100 text-center">
                                <button
                                    class="btn btn-round btn-hover-red border-0 text-uppercase me-2 js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">
                                    <svg class="d-inline-block" width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_cart" />
                                    </svg>
                                </button>
                                <button class="btn btn-round btn-hover-red border-0 text-uppercase me-2 js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <svg class="d-inline-block" width="18" height="18" viewBox="0 0 18 18"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_view" />
                                    </svg>
                                </button>
                                <button class="btn btn-round btn-hover-red border-0 text-uppercase js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Fruits</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Kiwi Organic, 1 Each</a></h6>
                            <div class="product-card__review d-sm-flex align-items-center">
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
                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                            </div>
                            <div class="product-card__price d-flex">
                                <span class="money price fs-5">$729.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card product-card_style9 border rounded-3 mb-3 mb-md-4 mb-xxl-5">
                        <div class="position-relative pb-3">
                            <div class="pc__img-wrapper pc__img-wrapper_wide3">
                                <a href="product1_simple.html"><img loading="lazy"
                                        src="<?= BASE_URL ?>assets/images/products/product-42-1.jpg" width="256" height="201"
                                        alt="Cropped Faux leather Jacket" class="pc__img"></a>
                            </div>
                            <div class="anim_appear-bottom position-absolute w-100 text-center">
                                <button
                                    class="btn btn-round btn-hover-red border-0 text-uppercase me-2 js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">
                                    <svg class="d-inline-block" width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_cart" />
                                    </svg>
                                </button>
                                <button class="btn btn-round btn-hover-red border-0 text-uppercase me-2 js-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                    <svg class="d-inline-block" width="18" height="18" viewBox="0 0 18 18"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_view" />
                                    </svg>
                                </button>
                                <button class="btn btn-round btn-hover-red border-0 text-uppercase js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Fruits</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Organic Banana</a></h6>
                            <div class="product-card__review d-sm-flex align-items-center">
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
                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                            </div>
                            <div class="product-card__price d-flex">
                                <span class="money price fs-5">$399.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="section-title fw-normal mb-3 pb-2">List Style v10</h2>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4" id="products-grid-10">
                <div class="product-card-wrapper">
                    <div class="product-card product-card_style10 mb-3 mb-md-4 mb-xxl-5">
                        <div class="position-relative pb-3">
                            <div class="pc__img-wrapper pc__img-wrapper_wide3">
                                <a href="product1_simple.html"><img loading="lazy"
                                        src="<?= BASE_URL ?>assets/images/products/product-43.png" width="256" height="201"
                                        alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                <button
                                    class="pc__btn-wl position-absolute rounded-circle border-0 text-secondary js-add-wishlist bg-transparent"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div
                            class="pc__info position-relative d-flex flex-column align-items-center mb-3 mb-md-4 mb-xxl-5">
                            <h6 class="pc__title text-uppercase fw-semi-bold"><a href="product1_simple.html">Aviator
                                    Classic</a></h6>
                            <div class="product-card__price d-flex text-secondary mb-2">
                                <span class="money price">$429</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="swatch-color swatch_active pc__swatch-color"
                                    style="color: #BABABA"></a>
                                <a href="#" class="swatch-color pc__swatch-color" style="color: #D76B67"></a>
                                <a href="#" class="swatch-color pc__swatch-color" style="color: #BFDCC4"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card product-card_style10 mb-3 mb-md-4 mb-xxl-5">
                        <div class="position-relative pb-3">
                            <div class="pc__img-wrapper pc__img-wrapper_wide3">
                                <a href="product1_simple.html"><img loading="lazy"
                                        src="<?= BASE_URL ?>assets/images/products/product-44.png" width="256" height="201"
                                        alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                <button
                                    class="pc__btn-wl position-absolute rounded-circle border-0 text-secondary js-add-wishlist bg-transparent"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div
                            class="pc__info position-relative d-flex flex-column align-items-center mb-3 mb-md-4 mb-xxl-5">
                            <h6 class="pc__title text-uppercase fw-semi-bold"><a href="product1_simple.html">New
                                    Wayfarer Classic</a></h6>
                            <div class="product-card__price d-flex text-secondary mb-2">
                                <span class="money price">$429</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="swatch-color swatch_active pc__swatch-color"
                                    style="color: #BABABA"></a>
                                <a href="#" class="swatch-color pc__swatch-color" style="color: #D76B67"></a>
                                <a href="#" class="swatch-color pc__swatch-color" style="color: #BFDCC4"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card product-card_style10 mb-3 mb-md-4 mb-xxl-5">
                        <div class="position-relative pb-3">
                            <div class="pc__img-wrapper pc__img-wrapper_wide3">
                                <a href="product1_simple.html"><img loading="lazy"
                                        src="<?= BASE_URL ?>assets/images/products/product-45.png" width="256" height="201"
                                        alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                <button
                                    class="pc__btn-wl position-absolute rounded-circle border-0 text-secondary js-add-wishlist bg-transparent"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div
                            class="pc__info position-relative d-flex flex-column align-items-center mb-3 mb-md-4 mb-xxl-5">
                            <h6 class="pc__title text-uppercase fw-semi-bold"><a href="product1_simple.html">New
                                    Wayfarer Classic</a></h6>
                            <div class="product-card__price d-flex text-secondary mb-2">
                                <span class="money price">$429</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="swatch-color swatch_active pc__swatch-color"
                                    style="color: #BABABA"></a>
                                <a href="#" class="swatch-color pc__swatch-color" style="color: #D76B67"></a>
                                <a href="#" class="swatch-color pc__swatch-color" style="color: #BFDCC4"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card-wrapper">
                    <div class="product-card product-card_style10 mb-3 mb-md-4 mb-xxl-5">
                        <div class="position-relative pb-3">
                            <div class="pc__img-wrapper pc__img-wrapper_wide3">
                                <a href="product1_simple.html"><img loading="lazy"
                                        src="<?= BASE_URL ?>assets/images/products/product-46.png" width="256" height="201"
                                        alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                <button
                                    class="pc__btn-wl position-absolute rounded-circle border-0 text-secondary js-add-wishlist bg-transparent"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div
                            class="pc__info position-relative d-flex flex-column align-items-center mb-3 mb-md-4 mb-xxl-5">
                            <h6 class="pc__title text-uppercase fw-semi-bold"><a href="product1_simple.html">New
                                    Wayfarer Classic</a></h6>
                            <div class="product-card__price d-flex text-secondary mb-2">
                                <span class="money price">$429</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="swatch-color swatch_active pc__swatch-color"
                                    style="color: #BABABA"></a>
                                <a href="#" class="swatch-color pc__swatch-color" style="color: #D76B67"></a>
                                <a href="#" class="swatch-color pc__swatch-color" style="color: #BFDCC4"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.shop-main container -->
</main>