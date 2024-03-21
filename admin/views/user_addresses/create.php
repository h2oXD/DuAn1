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
                            <label for="receiver" class="form-label">Receiver:</label>
                            <input value="<?= isset($_SESSION['data']) ? $_SESSION['data']['receiver'] : null ?>" type="text" class="form-control" id="receiver" placeholder="Enter receiver" name="receiver">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="delivery_address" class="form-label">Delivery Address:</label>
                            <input value="<?= isset($_SESSION['data']) ? $_SESSION['data']['delivery_address'] : null ?>" type="text" class="form-control" id="delivery_address" placeholder="Enter delivery address" name="delivery_address">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input value="<?= isset($_SESSION['data']) ? $_SESSION['data']['email'] : null ?>" type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="phone_number" class="form-label">Phone number:</label>
                            <input value="<?= isset($_SESSION['data']) ? $_SESSION['data']['phone_number'] : null ?>" type="text" class="form-control" id="phone_number" placeholder="Enter phone number"
                                name="phone_number">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="user_id" class="form-label">User_ID:</label>
                            <Select class="form-control" class="form-control" name="user_id">
                                <option value="" selected>---Chọn---</option>
                                <?php foreach($user_addresses as $user_address) : ?>
                                <option value="<?= $user_address['id'] ?>"><?= $user_address['name'] ?></option>
                                <?php endforeach; ?>
                            </Select>
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="<?= BASE_URL_ADMIN ?>?act=user_addresses">Danh sách</a> 
            </form>
        </div>
    </div>
</div>
<?php if(isset($_SESSION['data'])) unset($_SESSION['data']); ?>