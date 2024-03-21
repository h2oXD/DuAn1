<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        <?= $title ?? null ?>
    </h1>
    <p class="mb-4">


    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Create
            </h6>
        </div>

        <?php if (isset ($_SESSION['errors'])): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach ($_SESSION['errors'] as $error): ?>
                        <li>
                            <?= $error ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php unset($_SESSION['errors']); ?>
        <?php endif; ?>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                <div class="mb-3 mt-3 col-md-6">
                    <div class="mb-3 mt-3 col-md-6">
                        <label for="thumbnail" class="form-label">Thumbnail:</label>
                        <input type="file" class="form-control" id="thumbnail" placeholder="Enter thumbnail" name="thumbnail">                            
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-danger" href="<?= BASE_URL_ADMIN ?>?act=galleries">Danh sách</a>
                    </div>  
                </div>
            </form>
        </div>
    </div>
</div>
<?php if (isset ($_SESSION['data']))
    unset($_SESSION['data']); ?>