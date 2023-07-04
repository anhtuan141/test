<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Product (<?= $prod->name ?>)</h1>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= href('product', 'index') ?>"><i class="fas fa-fw fa-tachometer-alt"></i></a></li>
        <li class="breadcrumb-item"><a>Edit Product (<?= $prod->name ?>)</a>
        </li>
    </ul>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">
                <?= $this->getError('alert') ?></h5>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="<?= href('product', 'updateList') ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" value="<?= $prod->name ?>" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <select type="text" class="form-control" name="category">
                        <?php foreach ($listCate as $item) { ?>
                            <option value="<?= $item->id ?>" <?= $item->id == $prod->category_id ? 'selected' : '' ?>>
                                <?= $item->name ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <img width="50x50" src="<?= $prod->image ?>" />
                    <input type="file" class="form-control" name="image" value="<?= $prod->image ?>" aria-describedby="emailHelp">
                </div>

                <a name="" id="" class="btn btn-secondary btn-md" href="<?= href('product', 'index') ?>" role="button">Back to
                    list</a>
                <input type="hidden" name="prod_id" value="<?= $prod->id ?>" />
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

</div>