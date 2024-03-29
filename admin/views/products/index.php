<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        <?= $title ?? null ?>
        <a class="btn btn-primary" href="<?= BASE_URL_ADMIN ?>?act=products-create">Thêm mới</a> 
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
                            <th>Title</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Sale</th>
                            <th>Thumbnail</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($products as $product): ?>
                        
                        
                        <tr>
                            <td><?= $product['id']?></td>
                            <td><?= $product['title']?></td>
                            <td><?= $product['name'] ?></td>
                            <td><?= $product['price']?></td>
                            <td><?= $product['sale']?></td>
                            <td><img src="<?= BASE_URL.$product['thumbnail']?>" width="80px" alt=""></td>
                            <td>
                                <a class="btn btn-info" href="<?= BASE_URL_ADMIN ?>?act=products-detail&id=<?= $product['id']?>">Chi tiết</a> 
                                <a class="btn btn-primary" href="<?= BASE_URL_ADMIN ?>?act=products-update&id=<?= $product['id']?>">Sửa</a> 
                                <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa không')" href="<?= BASE_URL_ADMIN ?>?act=products-delete&id=<?= $product['id']?>">Xóa</a> 
                                
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>
