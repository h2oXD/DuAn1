<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= BASE_URL_ADMIN ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Quản lý
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-user"></i>
                <span>Quản lý người dùng</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=users' ?>">Danh sách</a>
                    <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=users-create' ?>">Thêm mới</a>
                    <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=user_addresses' ?>">Danh sách địa chỉ</a>
                </div>
            </div>
        </li>


    <!-- Loại hàng -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
            aria-controls="collapseThree">
            <i class="fas fa-box"></i>
            <span>Quản lí loại hàng</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=categories' ?>">Danh sách</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=category-create' ?>">Thêm mới</a>

    <!-- Sản phẩm -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true"
            aria-controls="collapseFour">
            <i class="fas fa-glasses"></i>
            <span>Sản phẩm</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=products' ?>">Danh sách</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=products-create' ?>">Thêm mới</a>
            </div>
        </div>
    </li>
    <!-- Sản phẩm -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="true"
            aria-controls="collapse6">
            <i class="fas fa-fw fa-cog"></i>
            <span>Tags</span>
        </a>
        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=tags' ?>">Danh sách</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=tags-create' ?>">Thêm mới</a>
            </div>
        </div>
    </li>

    <!-- Attributes -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true"
            aria-controls="collapseFive">
            <i class="fas fa-fw fa-cog"></i>
            <span>Thuộc tính sản phẩm</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=colors' ?>">Màu sắc</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=products' ?>">Kho ảnh</a>
            </div>
        </div>
    </li>

    <!-- Orders -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true"
            aria-controls="collapseSix">
            <i class="fas fa-truck"></i>
            <span>Quản lí đơn hàng</span>
        </a>
        <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=orders' ?>">Danh sách</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=order-create' ?>">Thêm mới</a>
    <!-- brand -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true"
            aria-controls="collapseSeven">
            <i class="fas fa-wrench"></i>
            <span>Thương hiệu</span>
        </a>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=brands' ?>">Danh sách</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=brands-create' ?>">Thêm mới</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <!--  Setting -->
    <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL_ADMIN . '?act=setting-form' ?>">
        <i class="fas fa-wrench"></i>
            <span>Setting</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


</ul>