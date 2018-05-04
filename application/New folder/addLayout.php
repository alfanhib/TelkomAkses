<html>

<head>
    <title>addLayout</title>
    <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
    <link rel="stylesheet" href="style/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/headStyle.css">
    <link rel="stylesheet" href="style/contStyle.css">
    <link rel="stylesheet" href="style/addStyle.css">
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
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">Harga Satuan</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                          BOQ
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">BOQ List</a>
                        <a class="dropdown-item" href="#">BOQ Telkom-TA</a>
                        <a class="dropdown-item" href="#">BOQ TA-Mitra</a>
                    </div>
                </li>
            </ul>
            <button class="btn btn-danger">Logout <i class="fa fa-sign-out"></i></button>
        </div>
    </nav>
    <div class="cont col-md-12">
        <div class="main col-md-11">
            <div class="main-head">
                <dic class="row">
                    <div class="col-md-6">
                        <div class="alert alert-warning">
                            <strong>Warning!</strong> Make sure your data is valid
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <h4>Add Layout</h4>
                    </div>
                </dic>
            </div>
            <div class="main-cont">
                <table id="tableEdit" class="table table-hover table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">No</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Designator</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Uraian Pekerjaan</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Satuan</th>
                            <th colspan="2" style="text-align: center; vertical-align: middle;">Paket 5</th>
                        </tr>
                        <tr>
                            <th style="text-align: center;">Material</th>
                            <th style="text-align: center;">Jasa</th>
                        </tr>
                        <tr>
                            <td colspan="6">Add New Data</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 50px; text-align: center;">1</td>
                            <td style="width: 270px; text-align: center">
                                <input type="text" class="form-control" placeholder="Add Designator">
                            </td>
                            <td style="width: 400px;">
                                <textarea class='form-control' rows='5' id='addUraian'></textarea>
                            </td>
                            <td style="width: 120px; text-align: center; vertical-align: middle">
                                <select class="form-control" id="sel1">
                                        <option>Meter</option>
                                        <option>Pcs</option>
                                        <option>Titik</option>
                                        <option>Core</option>
                                    </select>
                            </td>
                            <td style="width: 120px; text-align: center; vertical-align: middle">
                                <input type="text" class="form-control">
                            </td>
                            <td style="width: 120px; text-align: center; vertical-align: middle">
                                <input type="text" class="form-control">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="main-foot col-md-12">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <button class="btn btn-danger"><i class="fa fa-close"></i> Cancel</button>
                        <button class="btn btn-success"><i class="fa fa-upload"></i> Upload</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="foot col-md-12">

    </div>
</body>

</html>
