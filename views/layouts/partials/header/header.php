<header id="header" class="header header_sticky header-fullwidth">
  <div class="header-desk header-desk_type_4 header-desk_sm">
    <?php require PATH_VIEW . "layouts/partials/header/logo.php"; ?>

    <nav class="navigation">
      <ul class="navigation__list list-unstyled d-flex">
        <li class="navigation__item">
          <a href="<?= BASE_URL ?>" class="navigation__link">Trang chủ</a>
        </li>
        <li class="navigation__item">
          <a href="?act=list_sp" class="navigation__link">Sản phẩm</a>
        </li>

        <li class="navigation__item">
          <a href="?act=show_about" class="navigation__link">About</a>
        </li>
      </ul><!-- /.navigation__list -->
    </nav><!-- /.navigation -->

    <div class="header-tools d-flex align-items-center">
      <div class="header-tools__item hover-container">
        <div class="js-hover__open position-relative">
          <a class="js-search-popup search-field__actor" href="#">
            <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_search" />
            </svg>
            <i class="btn-icon btn-close-lg"></i>
          </a>
        </div>

        <div class="search-popup js-hidden-content">
          <form action="https://uomo-html.flexkitux.com/Demo13/search_result.html" method="GET"
            class="search-field container">
            <p class="text-uppercase text-secondary fw-medium mb-4">What are you looking for?</p>
            <div class="position-relative">
              <input class="search-field__input search-popup__input w-100 fw-medium" type="text" name="search-keyword"
                placeholder="Search products">
              <button class="btn-icon search-popup__submit" type="submit">
                <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_search" />
                </svg>
              </button>
              <button class="btn-icon btn-close-lg search-popup__reset" type="reset"></button>
            </div>

            <div class="search-popup__results">
              <div class="sub-menu search-suggestion">
                <h6 class="sub-menu__title fs-base">Quicklinks</h6>
                <ul class="sub-menu__list list-unstyled">
                  <li class="sub-menu__item"><a href="shop2.html" class="menu-link menu-link_us-s">New Arrivals</a></li>
                  <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Dresses</a></li>
                  <li class="sub-menu__item"><a href="shop3.html" class="menu-link menu-link_us-s">Accessories</a></li>
                  <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Footwear</a></li>
                  <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Sweatshirt</a></li>
                </ul>
              </div>

              <div class="search-result row row-cols-5"></div>
            </div>
          </form><!-- /.header-search -->
        </div><!-- /.search-popup -->
      </div><!-- /.header-tools__item hover-container -->
      <?php if(!isset($_SESSION['user'])){ ?>
        <a href="?act=login" class="header-tools__item header-tools__cart">
      <?php }else{?>
      <a href="?act=view-cart" class="header-tools__item header-tools__cart">
        <?php } ?>
        <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <use href="#icon_cart" />
        </svg>
        <span class="cart-amount d-block position-absolute js-cart-items-count">0</span>
      </a>
            <!-- USER -->
            <?php if (!isset($_SESSION['user'])) { ?>
        <div class="header-tools__item hover-container">
          <a class="header-tools__item" href="?act=login">
            <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_user" />
            </svg>
          </a>
          <?php if(!isset($_SESSION['user'])): ?>
          <div style="display: flex;">
          <a href="?act=login">Đăng nhập</a> /
          <a href="?act=login">Đăng ký</a>
          </div>
          <?php endif; ?>
        </div>
      <?php } else { ?>
        <div class="header-tools__item hover-container">
          <a class="header-tools__item" href="?act=account_detail">
            <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_user" />
            </svg>
          </a>
        </div>
      <?php }
      ; ?>
      <?php if (isset($_SESSION['user']['role']) && $_SESSION['user']['role'] == 1): ?>
        <a style="margin-right: 20px;" href="<?= BASE_URL ?>/admin">Truy cập Admin</a>
      <?php endif; ?>
      <?php if (isset($_SESSION['user'])): ?>
      <a href="?act=logout">Đăng xuất</a>
      <?php endif; ?>
    </div><!-- /.header__tools -->
  </div><!-- /.header-desk header-desk_type_1 -->
</header>
<div id="toast"></div>