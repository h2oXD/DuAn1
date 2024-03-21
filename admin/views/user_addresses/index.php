<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        <?= $title ?? null ?>
        <a class="btn btn-primary" href="<?= BASE_URL_ADMIN ?>?act=user_address-create">Thêm mới</a> 
    </h1>
    <p class="mb-4">
        
        
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Datatable
            </h6>
        </div>
        <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success">
            <ul>
                
                <li><?= $_SESSION['success'] ?></li>
                
            </ul>
        </div> <?php unset($_SESSION['success']); ?>
        <?php endif; ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User_ID</th>
                            <th>Receiver</th>
                            <th>Delivery_Address</th>
                            <th>Phone_number</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($user_addresses as $user_address): ?>
                        
                        
                        <tr>
                            <td><?= $user_address['id']?></td>
                            <td><?= $user_address['user_id']?></td>
                            <td><?= $user_address['receiver']?></td>
                            <td><?= $user_address['delivery_address']?></td>
                            <td><?= $user_address['phone_number']?></td>
                            <td><?= $user_address['email']?></td>
                            
                            <td>
                                <a class="btn btn-info" href="<?= BASE_URL_ADMIN ?>?act=user_address-detail&id=<?= $user_address['id']?>">Chi tiết</a> 
                                <a class="btn btn-primary" href="<?= BASE_URL_ADMIN ?>?act=user_address-update&id=<?= $user_address['id']?>">Sửa</a> 
                                <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa không')" href="<?= BASE_URL_ADMIN ?>?act=user_address-delete&id=<?= $user_address['id']?>">Xóa</a> 
                                
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>
