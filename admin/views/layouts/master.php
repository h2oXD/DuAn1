<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/html/modern-dark-menu/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 07:06:00 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Admin - <?= $title ?? null ?> </title>
    <link rel="icon" type="image/x-icon" href="https://designreset.com/cork/html/src/assets/img/favicon.ico" />
    <link href="<?= BASE_URL ?>assets/admin/layouts/modern-dark-menu/css/light/loader.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= BASE_URL ?>assets/admin/layouts/modern-dark-menu/css/dark/loader.css" rel="stylesheet"
        type="text/css" />
    <script src="<?= BASE_URL ?>assets/admin/layouts/modern-dark-menu/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?= BASE_URL ?>assets/admin/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASE_URL ?>assets/admin/layouts/modern-dark-menu/css/light/plugins.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= BASE_URL ?>assets/admin/layouts/modern-dark-menu/css/dark/plugins.css" rel="stylesheet"
        type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <?php
    if (isset($style) && $style) {
        require_once PATH_VIEW_ADMIN . 'styles/' . $style . '.php';
    }
    if (isset($style2) && $style2) {
        require_once PATH_VIEW_ADMIN . $style2 . '.php';
    }
    ?>
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body class="layout-boxed"  >
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <?php require_once PATH_VIEW_ADMIN . 'layouts/partials/navbar.php' ?>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <?php require_once PATH_VIEW_ADMIN . 'layouts/partials/sidebar.php' ?>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <?php require_once PATH_VIEW_ADMIN . $view . '.php' ?>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?= BASE_URL ?>assets/admin/src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_URL ?>assets/admin/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= BASE_URL ?>assets/admin/src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="<?= BASE_URL ?>assets/admin/src/plugins/src/waves/waves.min.js"></script>
    <script src="<?= BASE_URL ?>assets/admin/layouts/modern-dark-menu/app.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <?php
    if (isset($script) && $script) {
        require_once PATH_VIEW_ADMIN . 'scripts/' . $script . '.php';
    }
    if (isset($script2) && $script2) {
        require_once PATH_VIEW_ADMIN . $script2 . '.php';
    }
    ?>

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

<!-- Mirrored from designreset.com/cork/html/modern-dark-menu/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 07:06:34 GMT -->

</html>