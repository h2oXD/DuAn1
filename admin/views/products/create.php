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
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                    <div class="mb-3 mt-3">
                            <label for="Title" class="form-label">Title:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Title" name="title">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="price" class="form-label">Price:</label>
                            <input type="number" min="0" class="form-control" id="price" placeholder="Enter price" name="price">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="sale" class="form-label">Sale:</label>
                            <input type="number" min="0" class="form-control" id="sale" placeholder="Enter sale"
                                name="sale">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="role" class="form-label">Role:</label>
                            <Select class="form-control" class="form-control" name="role">
                                <option value="1">Admin</option>
                                <option value="0">Member</option>
                            </Select>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="mb-3 mt-3">
                            <label for="Thumbnail" class="form-label">Thumbnail:</label>
                            <input type="file" class="form-control" id="name" placeholder="Enter Thumbnail" name="thumbnail">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="price" class="form-label">Price:</label>
                            <input type="number" min="0" class="form-control" id="price" placeholder="Enter price" name="price">
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="<?= BASE_URL_ADMIN ?>?act=products">Danh sách</a> 
            </form>
        </div>
    </div>
</div>