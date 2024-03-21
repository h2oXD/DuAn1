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
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <!-- <div class="col-md-6"> -->
                    <div class="mb-3 mt-3 col-md-6">
                        <label for="Title" class="form-label">Title:</label>
                        <input value="<?= $product['title'] ?>" type="text" class="form-control" id="name" placeholder="Enter Title" name="title">
                    </div>
                    <div class="mb-3 mt-3 col-md-6">
                        <label for="price" class="form-label">Price:</label>
                        <input value="<?= $product['price'] ?>" type="number" min="0" class="form-control" id="price" placeholder="Enter price"
                            name="price">
                    </div>
                    <!-- </div> -->
                    <div class="mb-3 mt-3 col-md-6">
                        <label for="sale" class="form-label">Sale:</label>
                        <input value="<?= $product['sale'] ?>" type="number" min="0" class="form-control" id="sale" placeholder="Enter sale"
                            name="sale">
                    </div>
                    <div class="mb-3 mt-3 col-md-6">
                        <label for="role" class="form-label">Category:</label>
                        <Select class="form-control" class="form-control" name="product_category_id">
                            <option value="">--Chọn-category--</option>
                            <?php foreach ($categories as $category): ?>
                                <option <?= $product['product_category_id'] == $category['id'] ? 'selected' : null ?> value="<?= $category['id'] ?>">
                                    <?= $category['name'] ?>
                                </option>
                            <?php endforeach ?>
                        </Select>
                    </div>
                    <div class="mb-3 mt-3 col-md-6">
                        <label for="Thumbnail" class="form-label">Thumbnail:</label>
                        <input type="file" class="form-control" id="name" placeholder="Enter Thumbnail"
                            name="thumbnail">
                            <img src="<?= BASE_URL. $product['thumbnail'] ?>" width="80px" alt="">    
                    </div>
                    <div class="mb-3 mt-3 col-md-6">
                        <label for="tags" class="form-label">Tags:</label>
                        <input value="<?= $product['tags'] ?>" type="text" class="form-control" id="name" placeholder="Enter tags" name="tags">
                    </div>
                    <div class="mb-3 mt-3 col-md-6">
                        <label for="description" class="form-label">Description:</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"><?= $product['description'] ?></textarea>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="<?= BASE_URL_ADMIN ?>?act=products">Danh sách</a>
            </form>
        </div>
    </div>
</div>
<?php if(isset($_SESSION['data'])) unset($_SESSION['data']); ?>
