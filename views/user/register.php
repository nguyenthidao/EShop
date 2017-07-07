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
            <form class="form-horizontal" method="post" action="/eshop/user/store">
                <div class="form-group">
                    <h1 class="text-left">Create account</h1>
                </div>
                <div class="form-group">
                    <label for="name">Your name</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="password" class="col-lg-6 text-left">Password</label>
                    </div>
                    <input type="password" class="form-control" name="password" id="password" placeholder="At least 6 characters">
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="re_password" class="col-lg-6 text-left">Re-enter password</label>
                    </div>
                    <input type="password"  name="re_password" class="form-control" id="re_password">
                </div>
                <div class="form-group">
                    <button type="submit" class="col-lg-12 btn btn-warning">Create your Eshop account</button>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-8 text-left">
                            <p class="help-block">By creating an account, you agree to Amazon's
                                <a href="#conditionuse">Conditions of Use</a> and
                                <a href="#privacynote">Privacy Notice</a>.
                            </p>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-8 text-left">
                            <p class="help-block">
                                Already have an account? <a href="/eshop/user/signin">Sign in</a>
                            </p>
                        </div>
                    </div>
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