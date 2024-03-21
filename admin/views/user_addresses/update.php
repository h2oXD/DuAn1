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
                            <label for="receiver" class="form-label">Receiver:</label>
                            <input value="<?= $user_address['receiver'] ?>" type="name" class="form-control" id="receiver" placeholder="Enter receiver" name="receiver">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="delivery_address" class="form-label">Delivery Address:</label>
                            <input value="<?= $user_address['delivery_address'] ?>" type="text" class="form-control" id="delivery_address" placeholder="Enter delivery_address" name="delivery_address">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input value="<?= $user_address['email'] ?>" type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="phone_number" class="form-label">Phone number:</label>
                            <input value="<?= $user_address['phone_number'] ?>" type="text" class="form-control" id="phone_number"
                                placeholder="Enter phone number" name="phone_number">
                        </div>
                    </div>

                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="<?= BASE_URL_ADMIN ?>?act=user_addresses">Danh sách</a> 
            </form>
        </div>
    </div>
</div>