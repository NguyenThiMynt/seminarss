<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('backend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}" type="text/css">
</head>
<body>
<div class="main d-flex">
    <div class="col-md-6 d-none d-md-block px-0">
        <img src="{{asset('backend/images/Group 244.png')}}">
    </div>
    <div class="col-md-6">
        <div class="main-form w-75">
            <div class="main-title text-center mb-4">
                <h3>セミナー管理システム</h3>
                <small>Welcome back! Please login to your account.</small>
            </div>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <button type="button" class=" px-5 py-2 bt-login">Login</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
