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
                Detail
            </h6>
        </div>
        <div class="card-body">
            <table class="table">
                <?php foreach ($tag as $fieldName => $value): ?>
                    <tr>
                        <th>
                            <?= ucfirst($fieldName) ?>
                        </th>
                        <th>
                            <?= ucfirst($value) ?>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </table>
            <a class="btn btn-danger" href="<?= BASE_URL_ADMIN ?>?act=tags">Danh sách</a> 
        </div>
    </div>
</div>