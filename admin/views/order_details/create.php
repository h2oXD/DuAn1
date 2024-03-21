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
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="price" class="form-label">Price:</label>
                            <input value="<?= isset($_SESSION['data']) ? $_SESSION['data']['price'] : null ?>" type="text" class="form-control" id="price" placeholder="Enter Price" name="price">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="quantity" class="form-label">Quantity:</label>
                            <input value="<?= isset($_SESSION['data']) ? $_SESSION['data']['quantity'] : null ?>" type="number" class="form-control" id="quantity" placeholder="Enter Quantity" name="quantity">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="order_id" class="form-label">Order_ID:</label>
                            <Select class="form-control" class="form-control" name="order_id">
                                <option value="" selected>---Chọn---</option>
                                <?php foreach($orders as $order) : ?>
                                <option value="<?= $order['id'] ?>"><?= $order['frist_name'] ?></option>
                                <?php endforeach; ?>
                            </Select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="product_id" class="form-label">Product_ID:</label>
                            <Select class="form-control" class="form-control" name="product_id">
                                <option value="" selected>---Chọn---</option>
                                <?php foreach($products as $product) : ?>
                                <option value="<?= $product['id'] ?>"><?= $product['title'] ?></option>
                                <?php endforeach; ?>
                            </Select>
                        </div>
                    </div>

                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="<?= BASE_URL_ADMIN ?>?act=order_details">Danh sách</a> 
            </form>
        </div>
    </div>
</div>
<?php if(isset($_SESSION['data'])) unset($_SESSION['data']); ?>