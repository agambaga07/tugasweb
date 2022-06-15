<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <title>SIAKAD - <?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>
    <div class="container-fluid">
        <div class="row bg-primary">
            <div class="col-lg-12">
                <div class="btn-group" style="float: right;">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <?php if(auth()->guard()->check()): ?>
                        <i class="fa fa-user"></i> <?php echo e(Auth()->user()->name); ?>


                        <?php endif; ?>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" type="submit" href="profile">
                            <i class="fa fa-user"></i> Profile</a>
                        <button class="dropdown-item" type="button"><i class="fa fa-key"></i> Ganti Password</button>
                        <a class="dropdown-item" href="/logout"><i class="fa fa-power-off"></i> Keluar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-lg-3">
                <div class="nav flex-column" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" href="dashboard">Dashboard</a>
                    <a class="nav-link" href="dosen">Dosen</a>
                    <a class="nav-link" href="mahasiswa ">Mahasiswa</a>
                    <a class="nav-link" href="#">Skripsi</a>
                </div>
            </div>
            <div class="col-lg-9 bg-light">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html><?php /**PATH C:\xampp\htdocs\blog\resources\views/layouts/layout.blade.php ENDPATH**/ ?>