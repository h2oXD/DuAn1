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
                            <label for="name" class="form-label">Name:</label>
                            <input value="<?= isset($_SESSION['data']) ? $_SESSION['data']['name'] : null ?>" type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input value="<?= isset($_SESSION['data']) ? $_SESSION['data']['email'] : null ?>" type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="password" class="form-label">Password:</label>
                            <input value="<?= isset($_SESSION['data']) ? $_SESSION['data']['password'] : null ?>" type="password" class="form-control" id="password" placeholder="Enter password"
                                name="password">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="role" class="form-label">Role:</label>
                            <Select class="form-control" class="form-control" name="role">
                                <option <?= isset($_SESSION['data']) && $_SESSION['data']['role'] == 1 ? 'selected' : null ?> value="1">Admin</option>
                                <option <?= isset($_SESSION['data']) && $_SESSION['data']['role'] == 0 ? 'selected' : null ?> value="0">Member</option>
                            </Select>
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="<?= BASE_URL_ADMIN ?>?act=users">Danh sách</a> 
            </form>
        </div>
    </div>
</div>
<?php if(isset($_SESSION['data'])) unset($_SESSION['data']); ?>