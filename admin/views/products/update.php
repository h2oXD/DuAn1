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
        <div class="card-body">
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3 mt-3">
                            <label for="title" class="form-label">Title:</label>
                            <input value="<?= $product['title'] ?>" type="text" class="form-control" id="title" placeholder="Enter title" name="title">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="price" class="form-label">Price:</label>
                            <input value="<?= $product['price'] ?>" type="text" class="form-control" id="price" placeholder="Enter price" name="price">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 mt-3">
                            <label for="sale" class="form-label">Sale:</label>
                            <input value="<?= $product['sale'] ?>" type="text" class="form-control" id="sale" placeholder="Enter sale"
                                name="sale">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="thumbnail" class="form-label">Thumbnail:</label>
                            <input value="<?= $product['thumbnail'] ?>" type="text" class="form-control" id="thumbnail"
                                placeholder="Enter thumbnail" name="thumbnail">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 mt-3">
                            <label for="description" class="form-label">Description:</label>
                            <input value="<?= $product['description'] ?>" type="text" class="form-control" id="description" placeholder="Enter description"
                                name="description">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="tags" class="form-label">Tags:</label>
                            <input value="<?= $product['tags'] ?>" type="text" class="form-control" id="tags" placeholder="Enter tags"
                                name="tags">

                        </div>
                    </div>

                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="<?= BASE_URL_ADMIN ?>?act=products">Danh sách</a> 
            </form>
        </div>
    </div>
</div>