<html>

<head>
    <title>Template</title>
    <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
    <link rel="stylesheet" href="style/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/headStyle.css">
    <link rel="stylesheet" href="style/contStyle.css">
    <link rel="stylesheet" href="style/mainStyle.css">
    <link rel="stylesheet" href="style/footStyle.css">


    <script src="script/jquery.min.js"></script>
    <script src="script/myScript.js"></script>
    <script src="style/bootstrap/js/bootstrap.min.js"></script>
    <script src="style/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
</head>

<body>
    <nav class="head navbar navbar-toggleable-md navbar-light bg-faded sticky-top">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#" style="color: white;">
                <img src="assets/Logo2.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                TelkomAkses - Solo
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="hargaSatuan" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                          Harga Satuan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="hargaSatuan">
                        <a class="dropdown-item" href="#">Harga Satuan Telkom - TA</a>
                        <a class="dropdown-item" href="#">Harga Satuan TA - Mitra</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="boq" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                          BOQ
                    </a>
                    <div class="dropdown-menu" aria-labelledby="boq">
                        <a class="dropdown-item" href="#">BOQ List Telkom-TA</a>
                        <a class="dropdown-item" href="#">BOQ List TA-Mitra</a>
                    </div>
                </li>
            </ul>
            <button class="btn btn-danger">Logout <i class="fa fa-sign-out"></i></button>
        </div>
    </nav>
    <!--HEADER-->


    <!--CONTENT-->
    <div class="cont col-md-12">
    <div class="main col-md-11">
        <div class="main-head">
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-info">
                        <strong>Willkommen!</strong> (Name User)
                    </div>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <h4>Dashboard</h4>
                </div>
            </div>
        </div>
        <div class="main-cont">
            <div class="row">
                <div class="dashboard col-md-4">
                    <div class="dashboard-head" style="background-color: #3F51B5;" data-toggle="collapse" href="#dashboardHargaSatuan" aria-expanded="false" aria-controls="">
                        <h3><i class="fa fa-usd"></i> Harga Satuan <i class="fa fa-angle-down pull-right"></i></h3>
                    </div>
                    <div class="dashboard-body collapse show" id="dashboardHargaSatuan">
                        <div class="dashboard-body-item">
                            <a href="#">
                                <h5>Harga Satuan Telkom - TA</h5>
                            </a>
                        </div>
                        <div class="dashboard-body-item">
                            <a href="#">
                                <h5>Harga Satuan TA - Mitra</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="dashboard-item col-md-4">
                    <div class="dashboard-head" style="background-color: #2196F3;" data-toggle="collapse" href="#dashboardBoq" aria-expanded="false" aria-controls="">
                        <h3><i class="fa fa-list-alt"></i> BOQ <i class="fa fa-angle-down pull-right"></i></h3>
                    </div>
                    <div class="dashboard-body collapse show" id="dashboardBoq">
                        <div class="dashboard-body-item">
                            <a href="#">
                                <h5>BOQ List</h5>
                            </a>
                        </div>
                        <div class="dashboard-body-item">
                            <a href="#">
                                <h5>Make BOQ Telkom - TA</h5>
                            </a>
                        </div>
                        <div class="dashboard-body-item">
                            <a href="#">
                                <h5>Make BOQ TA - Mitra</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="dashboard-item col-md-4">
                    <div class="dashboard-head" style="background-color: #03A9F4;">
                        <h3>List User <i class="fa fa-user pull-right"></i></h3>
                    </div>
                    <div class="dashboard-body">
                        <div class="dashboard-body-item" style="vertical-align: middle;">
                            <h6>AdminNyan (085330366472)</h6>
                        </div>
                        <div class="dashboard-body-item">
                            <h6>AdminAlfan</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!--FOOTER-->
    <div class="foot col-md-12">
        <h5 class="text-center">@Copyright By Nov | Bay | Alf</h5>
    </div>
</body>

</html>
