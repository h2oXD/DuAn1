<section class="category-carousel full-width_padding">
      <h2 class="section-title text-uppercase text-center mb-1 mb-md-3 pb-xl-2 mb-xl-4">CÁC LOẠI KÍNH THEO <strong>KIỂU DÁNG</strong></h2>

      <div class="position-relative">
        <div class="swiper-container js-swiper-slider"
          data-settings='{
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": 6,
            "slidesPerGroup": 6,
            "effect": "none",
            "loop": true,
            "pagination": false,
            "navigation": false,
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
                "slidesPerGroup": 1,
                "spaceBetween": 30,
                "pagination": false
              },
              "1200": {
                "slidesPerView": 6,
                "slidesPerGroup": 1,
                "spaceBetween": 30,
                "pagination": false
              }
            }
          }'>
          <div class="swiper-wrapper">

          <?php foreach($categories as $category) : ?>
            <div class="swiper-slide">
              <img loading="lazy" class="w-100 h-auto mb-3" src="<?= $category['thumbnail'] ?>" width="270" height="182" alt="">
              <div class="text-center border-top py-4">
                <a href="?act=list_sp&id=<?= $category['id'] ?>" class="menu-link menu-link_us-s text-uppercase fw-semi-bold"><?= $category['name'] ?></a>
              </div>
            </div>
          <?php endforeach; ?>

          </div><!-- /.swiper-wrapper -->
        </div><!-- /.swiper-container js-swiper-slider -->
      </div><!-- /.position-relative -->
    </section>