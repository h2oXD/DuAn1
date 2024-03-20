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
        <div class="card-body">

            <?php if(isset($_SESSION['errors'])) : ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach($_SESSION['errors'] as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php unset($_SESSION['errors']); ?>
            <?php endif; ?>

            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="<?= BASE_URL_ADMIN ?>?act=categories">Danh sách</a> 
            </form>
        </div>
    </div>
</div>
<?php if(isset($_SESSION['data'])) unset($_SESSION['data']); ?>