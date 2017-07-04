<?php
    $product = $data['product'];
    $brands = $data['brands'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Thế giới máy tính</title>
    <link rel="stylesheet" href="/eshop/assets/css/product.css">
</head>
<body>
<div class="container-fluid">
    <header class="row">
        <div class="col-lg-12 header-top">
            <div class="panel panel-primary">
                <div class="panel-heading">Eshop Manage</div>
            </div>
        </div>
    </header>
    <div class="row">
        <aside class="col-lg-2">
            <div class="row">
                <div class="col-lg-5">
                    <img src="/eshop/assets/images/ninja1.jpg" alt="..." class="img-thumbnail">
                </div>
                <div class="col-lg-7">
                    <div class="col-lg-12">
                        <span class="glyphicon glyphicon-cog"></span>
                        <span>Update profile</span>
                    </div>
                    <div class="col-lg-12">
                        <span class="glyphicon glyphicon-share-alt"></span>
                        <span>Logout</span>
                    </div>
                </div>
            </div>
        </aside>

        <section class="col-lg-10">
            <div class="row">
                <div class="col-lg-7">
                    <h3 class="text-center">Edit product
                </div>
            </div>
            <div class="row">
                <form class="col-lg-12" method="POST" action="/eshop/product/update/<?= $product->getId()?>">
                    <div class="row">
                        <div class="form-group col-lg-7">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="<?= $product->getName() ?>">
                            <label for="color">Color</label>
                            <input type="text" name="color" id="color" class="form-control" value="<?= $product->getColor() ?>">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" class="form-control" value="<?= $product->getPrice() ?>">
                            <label for="quality">Quality</label>
                            <input type="text" name="quality" id="quality" class="form-control" value="<?= $product->getQuality() ?>">
                            <label for="ram">Ram</label>
                            <input type="text" name="ram" id="ram" class="form-control" value="<?= $product->getRam() ?>">
                            <label for="keyboard">Keyboard</label>
                            <input type="text" name="keyboard" id="keyboard" class="form-control" value="<?= $product->getKeyboard() ?>">
                            <label for="display">Display</label>
                            <input type="text" name="display" id="display" class="form-control" value="<?= $product->getDisplay() ?>">
                            <label for="hard_drive">Hard Drive</label>
                            <input type="text" name="hard_drive" id="hard_drive" class="form-control" value="<?= $product->getHardDrive() ?>">
                            <label for="wireless">Wireless</label>
                            <input type="text" name="wireless" id="wireless" class="form-control" value="<?= $product->getWireless() ?>">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control"  rows="3" cols="50" ><?= $product->getDescription() ?></textarea>
                            <label>Brand Name</label>
                            <select name="brand" class="form-control">
                                <?php foreach($brands as $brand) :?>
                                    <?php if($brand->getId() == $product->getId()) :?>
                                        <option selected= "selected" value="<?= $brand->getId() ?>"><?= $brand->getName() ?></option>
                                    <?php else: ?>
                                        <option value="<?= $brand->getId() ?>"><?= $brand->getName() ?></option>
                                    <? endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <button type="submit" class="btn btn-default col-lg-1">Submit</button>
                        <div class="col-lg-1"></div>
                        <button type="reset" class="btn btn-primary col-lg-1">Reset</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <footer class="row">
    </footer>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>