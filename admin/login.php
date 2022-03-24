<?php
    include_once "model/public.php";
    if (isset($_POST['btn'])){
        $data=$_POST['data'];
//        var_dump($data);
        $user=new user();
        $user->login($data);
    }
    if($_GET){
        if ($_GET['login'] == 'first'){
            echo "در ابتدا میبایست وارد شوید !";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>پنل مدیریت | فرم ساده</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="view/public/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="view/public/dist/css/bootstrap-rtl.min.css">
    <!-- template rtl version -->
    <link rel="stylesheet" href="view/public/dist/css/custom-style.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

        <!-- Horizontal Form -->

    <!-- form start -->
            <form class="form-horizontal" method="post" action="#">
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">ایمیل</label>

                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="data[email]" id="inputEmail3" placeholder="ایمیل را وارد کنید">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">پسورد</label>

                        <div class="col-sm-10">
                            <input type="password" name="data[password]" class="form-control" id="inputPassword3" placeholder="پسورد را وارد کنید">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                <label class="form-check-label" for="exampleCheck2">مرا به خاطر بسپار</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" name="btn" class="btn btn-info">ورود</button>
                </div>
                <!-- /.card-footer -->
            </form>
</div>
</body>