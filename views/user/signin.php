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
        <div class="col-lg-4"></div>
        <div class="col-lg-3">
            <a href="#">
                <img class="" src="/eshop/assets/images/149763463262282.png" alt="...">
            </a>
            <hr>
        </div>
        <div class="col-lg-5"></div>
    </header>
    <div class="row">
        <aside class="col-lg-4">
        </aside>
        <section class="col-lg-3">
            <form class="form-horizontal" action="/eshop/user/login" method="POST">
                <div class="form-group">
                    <h1 class="text-left">Sign in</h1>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="password" class="col-lg-6 text-left">Password</label>
                        <a href="#" class="col-lg-6 text-right">Forgot your password?</a>
                    </div>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <button type="submit" class="col-lg-12 btn btn-warning">Sign in</button>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Keep me signed in. <a href="#">Details</a>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-4"><hr></div>
                        <div class="col-lg-4 text-center">New to Eshop? </div>
                        <div class="col-lg-4"><hr></div>
                    </div>
                </div>
                <div class="form-group">
                    <a href="/eshop/user/register" class="col-lg-12 btn btn-default">Create your Eshop account</a>
                </div>
            </form>
        </section>
        <aside class="col-lg-5">

        </aside>
    </div>
    <footer class="row">
        <hr>
        <div class="col-lg-4"></div>
        <div class="col-lg-3">
            <h4 class="text-center"><small>© 1994-2017, Eshop.vn</small></h4>
        </div>
        <div class="col-lg-5"></div>
    </footer>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>