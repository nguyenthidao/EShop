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
        <div class="col-lg-12 header-bottom">
            <div class="col-lg-2">
                <h3>Hi user name</h3>
            </div>
            <div class="col-lg-10">
                <h3>List brands</h3>
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
            <ul class="nav nav-pills nav-stacked menu">
                <li role="presentation" class="active"><a href="/eshop/product/listall">Product</a></li>
                <li role="presentation"><a href="/eshop/user/listall">User</a></li>
                <li role="presentation"><a href="/eshop/brand/listall">Brand</a></li>
            </ul>
        </aside>
        <section class="col-lg-10">
            <article class="row">
                <div class="col-lg-12">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                        <button class="btn btn-primary search" name="btn-search">Search</button>
                    </span>
                    </div>
                </div>
            </article>
            <article class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-th-list"></span>
                                    <span>Brand Management</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 add-product">
                    <a class="btn btn-primary" href="/eshop/brand/create">Add new brand</a>
                </div>
                <div class="col-lg-12 table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th><input type="checkbox" name="checkAll" id="toggle" onclick="checkedAll(this)"></th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($data as $brand) :?>
                            <tr>
                                <td><input type="checkbox" name="checkbox[]" value="<?= $brand->getId()?>"></td>
                                <td><?php echo $brand->getName(); ?></td>
                                <td><?php echo $brand->getCode(); ?></td>
                                <td><?php echo $brand->getDescription(); ?></td>
                                <td><a class="btn btn-info" href="/eshop/brand/edit/<?= $brand->getId() ?>">Edit</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <div class="col-lg-12">
                    <button class="btn btn-danger" id="deleteBrand" onclick='deleteBands()'>Delete</button>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-10"></div>
                    <nav class="col-lg-2" aria-label="...">
                        <ul class="pagination">
                            <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                            <li><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li class="active"><a href="#">2 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </article>
        </section>
    </div>
    <footer class="row">

    </footer>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    function deleteBands(){
        var answer = confirm('Are you sure?');
        var checkboxes = document.getElementsByName('checkbox[]');
        var checkedIdList = [];

        if (answer){
            for(var i = 1; i < checkboxes.length; i++)
            {
                if(checkboxes[i].checked)
                {
                    checkedIdList.push(checkboxes[i].value);
                }
            }

            window.location = '/eshop/brand/delete/' + checkedIdList;
        }
    }

    function checkedAll(source) {
        var checkboxes = document.getElementsByName('checkbox[]');

        for (var i = 1; i < checkboxes.length; i++){
                checkboxes[i].checked = source.checked;
        }
    }
</script>
</body>
</html>