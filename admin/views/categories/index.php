<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        <?= $title ?? null ?>
        <a class="btn btn-primary" href="<?= BASE_URL_ADMIN ?>?act=category-create">Thêm mới</a> 
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
                            <th>Name</th>
                            <th>Active</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($categories as $category): ?>
                        
                        
                        <tr>
                            <td><?= $category['id']?></td>
                            <td><?= $category['name']?></td>
                            <td><?= $category['is_active'] 
                                            ? '<span class="badge badge-success">Active</span>' 
                                                : '<span class="badge badge-danger">Block</span>'?></td>
                            
                            <td>
                                <a class="btn btn-primary" href="<?= BASE_URL_ADMIN ?>?act=category-update&id=<?= $category['id']?>">Sửa</a> 
                                <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa không')" href="<?= BASE_URL_ADMIN ?>?act=category-delete&id=<?= $category['id']?>">Xóa</a> 
                                
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>
