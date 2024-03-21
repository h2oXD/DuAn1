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
                Update
            </h6>
        </div>
        
        <?php if(isset($_SESSION['errors'])): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach($_SESSION['errors'] as $error): ?>
                <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div> <?php unset($_SESSION['errors']); ?>
        <?php endif; ?>
        <div class="card-body">
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3 mt-3">
                            <label for="price" class="form-label">Price:</label>
                            <input value="<?= $order_detail['price'] ?>" type="name" class="form-control" id="price" placeholder="Enter Price" name="price">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="quantity" class="form-label">Quantity:</label>
                            <input value="<?= $order_detail['quantity'] ?>" type="number" class="form-control" id="quantity" placeholder="Enter Quantity" name="quantity">
                        </div>
                    </div>

                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="<?= BASE_URL_ADMIN ?>?act=order_details">Danh sách</a> 
            </form>
        </div>
    </div>
</div>