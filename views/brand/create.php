<?php
    if(!empty($data)){
        $errors = $data;
    }
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
                    <h3 class="text-center">Create a brand</h3>
                </div>
            </div>
            <div class="row">
                <form class="col-lg-12" method="POST" action="/eshop/brand/store">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                    <label for="code">code</label>
                                    <input type="text" name="code" id="code" class="form-control">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control"  rows="20" cols="50"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <button type="submit" class="btn btn-default col-lg-1">Submit</button>
                                <div class="col-lg-2"></div>
                                <button type="reset" class="btn btn-primary col-lg-1">Reset</button>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <?php if(isset($errors)) :?>
                                <?php foreach ($errors as $key => $value):?>
                                    <div class="list-group">
                                        <span class="list-group-item list-group-item-info"><?= $key ?></span>
                                        <p class="list-group-item list-group-item-danger"><?= $value ?></p>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
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