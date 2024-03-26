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
                    <div class="mb-3 mt-3 col-md-4">
                        <label for="Title" class="form-label">Title:</label>
                        <input value="<?= isset($_SESSION['data']) ? $_SESSION['data']['title'] : null ?>" type="text" class="form-control" id="name" placeholder="Enter Title" name="title">
                    </div>
                    <div class="mb-3 mt-3 col-md-4">
                        <label for="price" class="form-label">Price:</label>
                        <input value="<?= isset($_SESSION['data']) ? $_SESSION['data']['price'] : null ?>" type="number" min="0" class="form-control" id="price" placeholder="Enter price"
                            name="price">
                    </div>
                    <!-- </div> -->
                    <div class="mb-3 mt-3 col-md-4">
                        <label for="sale" class="form-label">Sale:</label>
                        <input value="<?= isset($_SESSION['data']) ? $_SESSION['data']['sale'] : null ?>" type="number" min="0" class="form-control" id="sale" placeholder="Enter sale"
                            name="sale">
                    </div>
                    <div class="mb-3 mt-3 col-md-4">
                        <label for="category" class="form-label">Category:</label>
                        <Select class="form-control" class="form-control" name="product_category_id">
                            <option value="">--Chọn-category--</option>
                            <?php foreach ($categories as $category): ?>
                                <option <?= isset($_SESSION['data']) && $_SESSION['data']['product_category_id'] == $category['id'] ? 'selected' : null ?> value="<?= $category['id'] ?>">
                                    <?= $category['name'] ?>
                                </option>
                            <?php endforeach ?>
                        </Select>
                    </div>
                    <div class="mb-3 mt-3 col-md-4">
                        <label for="brand" class="form-label">Brand:</label>
                        <Select class="form-control" class="form-control" name="product_brand_id">
                            <option value="">--Chọn-brand--</option>
                            <?php foreach ($brands as $brand): ?>
                                <option <?= isset($_SESSION['data']) && $_SESSION['data']['product_brand_id'] == $brand['id'] ? 'selected' : null ?> value="<?= $brand['id'] ?>">
                                    <?= $brand['name'] ?>
                                </option>
                            <?php endforeach ?>
                        </Select>
                    </div>
                    <div class="mb-3 mt-3 col-md-4">
                        <label for="Thumbnail" class="form-label">Thumbnail:</label>
                        <input type="file" class="form-control" id="name" placeholder="Enter Thumbnail"
                            name="thumbnail">
                    </div>
                    <div class="mb-3 mt-3 col-md-4">
                        <label for="tags" class="form-label">Tags:</label>
                        <Select class="form-control" class="form-control" name="tags[]" multiple>
                            <?php foreach ($tags as $tag): ?>
                                <option value="<?= $tag['id'] ?>">
                                    <?= $tag['name'] ?>
                                </option>
                            <?php endforeach ?>
                        </Select>
                    </div>
                    <div class="mb-3 mt-3 col-md-4">
                        <label for="colors" class="form-label">Colors:</label>
                        <Select class="form-control" class="form-control" name="colors[]" multiple>
                            <?php foreach ($colors as $color): ?>
                                <option value="<?= $color['id'] ?>">
                                    <?= $color['name'] ?>
                                </option>
                            <?php endforeach ?>
                        </Select>
                    </div>
                    
                   
                    <div class="mb-3 mt-3 col-md-12">
                        <label for="description" class="form-label">Description:</label>
                        <textarea value="<?= isset($_SESSION['data']) ? $_SESSION['data']['description'] : null ?>" name="description" class="form-control" id="abc" cols="30" rows="10"></textarea>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="<?= BASE_URL_ADMIN ?>?act=products">Danh sách</a>
            </form>
        </div>
    </div>
</div>
<?php if(isset($_SESSION['data'])) unset($_SESSION['data']); ?>
