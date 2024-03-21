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
                            <label for="frist_name" class="form-label">First name:</label>
                            <input value="<?= isset($_SESSION['data']) ? $_SESSION['data']['frist_name'] : null ?>" type="text" class="form-control" id="frist_name" placeholder="Enter First name" name="frist_name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="last_name" class="form-label">Last name:</label>
                            <input value="<?= isset($_SESSION['data']) ? $_SESSION['data']['last_name'] : null ?>" type="text" class="form-control" id="last_name" placeholder="Enter Last name" name="last_name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="phone_number" class="form-label">Phone number:</label>
                            <input value="<?= isset($_SESSION['data']) ? $_SESSION['data']['phone_number'] : null ?>" type="text" class="form-control" id="phone_number" placeholder="Enter Phone number" name="phone_number">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="address" class="form-label">Address:</label>
                            <input value="<?= isset($_SESSION['data']) ? $_SESSION['data']['address'] : null ?>" type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input value="<?= isset($_SESSION['data']) ? $_SESSION['data']['email'] : null ?>" type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="note" class="form-label">Note:</label>
                            <input value="" type="text" class="form-control" id="note" placeholder="Enter Note" name="note">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="order_date" class="form-label">Order date:</label>
                            <input value="<?= isset($_SESSION['data']) ? $_SESSION['data']['order_date'] : null ?>" type="datetime-local" class="form-control" id="order_date" name="order_date">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="status" class="form-label">Status:</label>
                            <input value="<?= isset($_SESSION['data']) ? $_SESSION['data']['status'] : null ?>" type="number" class="form-control" id="status" placeholder="Enter Status"
                                name="status">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="user_id" class="form-label">User_ID:</label>
                            <Select class="form-control" class="form-control" name="user_id">
                                <option value="" selected>---Chọn---</option>
                                <?php foreach($users as $user) : ?>
                                <option value="<?= $user['id'] ?>"><?= $user['name'] ?></option>
                                <?php endforeach; ?>
                            </Select>
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="<?= BASE_URL_ADMIN ?>?act=orders">Danh sách</a> 
            </form>
        </div>
    </div>
</div>
<?php if(isset($_SESSION['data'])) unset($_SESSION['data']); ?>