<html>

<head>
    <title>Harga Satuan</title>
    <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
    <link rel="stylesheet" href="style/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/headStyle.css">
    <link rel="stylesheet" href="style/contStyle.css">
    <link rel="stylesheet" href="style/hargaStyle.css">
    <link rel="stylesheet" href="style/footStyle.css">


    <script src="script/jquery.min.js"></script>
    <script src="script/myScript.js"></script>
    <script src="style/bootstrap/js/bootstrap.min.js"></script>
    <script src="style/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
    <script>


    </script>
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
                <div class="row">
                    <div class="input-group inputData col-md-5">
                        <input type="text" class="form-control" placeholder="Search Data">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                </button>
                        </div>
                    </div>
                    <div class="col-md-3 inputData">
                        <div class="btn-group">
                            <button type="button" class="btn">Telkom</button>
                            <button type="button" class="btn btn-danger disabled">TA</button>
                            <button type="button" class="btn btn-default"> Mitra</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4>Rincian Data Satuan Telkom-TA</h4>
                    </div>
                </div>

            </div>
            <div class="main-cont">
                <table id="tabelHarga" class="table table-responsive table-hover table-bordered table-striped">
                    <thead>
                        <tr class="table-title">
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">No</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Designator</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Uraian Pekerjaan</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Satuan</th>
                            <th colspan="2" style="text-align: center; vertical-align: middle;">Paket 5</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle; width: auto;">Action</th>
                        </tr>
                        <tr>
                            <th style="text-align: center;">Material</th>
                            <th style="text-align: center;">Jasa</th>
                        </tr>
                        <tr>
                            <td colspan="6" style="vertical-align: middle;">A. Kabel, Penyambungan dan Pekerjaan Sipil</td>
                            <td>
                                <button class="btn btn-info"><i class="fa fa-plus"></i> Add</button>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center;">1</td>
                            <td style="width: 150px;">DC-OF-SM-12D</td>
                            <td style="width: 200px;">Pengadaan dan pemasangan Kabel Duct Fiber Optik Single Mode 12 core G 652 D</td>
                            <td style="text-align: center; vertical-align: middle">meter</td>
                            <td style="width: 150px; text-align: center; vertical-align: middle"> 6.440 </td>
                            <td style="width: 150px; text-align: center; vertical-align: middle"> 2.610 </td>
                            <td style="width: 120px; text-align: center; vertical-align: middle">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-success"><i class="fa fa-cog"></i> Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i> Remove</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <td colspan="6" style="vertical-align: middle;">B. Manhole, Perbaikan dan Modifikasi</td>
                        <td>
                            <button class="btn btn-info"><i class="fa fa-plus"></i> Add</button>
                        </td>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center;">1</td>
                            <td>MH-HH1</td>
                            <td>Pekerjaan Pembuatan Handhole Type HH1 ukuran dimensi dalam (P X L X T = 170x150x165) cor beton 1 : 2 : 3 </td>
                            <td style="text-align: center; vertical-align: middle">pcs</td>
                            <td style="text-align: center; vertical-align: middle"> 4886000 </td>
                            <td style="text-align: center; vertical-align: middle"> 2367700 </td>
                            <td style="text-align: center; vertical-align: middle">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-success"><i class="fa fa-cog"></i> Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i> Remove</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <td colspan="6" style="vertical-align: middle;">C. New Item</td>
                            <td>
                                <button class="btn btn-info"><i class="fa fa-plus"></i> Add</button>
                            </td>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <div class="main-foot">

            </div>
        </div>
    </div>
    <div class="foot col-md-12" id="foot">

    </div>
</body>

</html>
