<html>

<head>
    <title>BOQ List</title>
    <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
    <link rel="stylesheet" href="style/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/headStyle.css">
    <link rel="stylesheet" href="style/contStyle.css">
    <link rel="stylesheet" href="style/boqListStyle.css">
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
                <div class="row">
                    <div class="input-group inputData col-md-4">
                        <input type="text" class="form-control" placeholder="Search Data">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <h4 class="text-center">BOQ List</h4>
                    </div>
                </div>
            </div>
            <div class="main-cont">
                <table id="tableEdit" class="table table-hover table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>BOQ Name</th>
                            <th>Author</th>
                            <th>Last Updated</th>
                            <th style="width: 70px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1 (int)</td>
                            <td>ODC-SKH-FG (text)</td>
                            <td>Admin (varchar)</td>
                            <td>Today</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-success"><i class="fa fa-cog"></i> Edit</button>
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Remove</button>
                                </div>
                                <button class="btn btn-sm btn-primary"><i class="fa fa-download"></i> Download</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1 (int)</td>
                            <td>ODC-SKH-FG (text)</td>
                            <td>Admin (varchar)</td>
                            <td>Today</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-success"><i class="fa fa-cog"></i> Edit</button>
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Remove</button>
                                </div>
                                <button class="btn btn-sm btn-primary"><i class="fa fa-download"></i> Download</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1 (int)</td>
                            <td>ODC-SKH-FG (text)</td>
                            <td>Admin (varchar)</td>
                            <td>Today</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-success"><i class="fa fa-cog"></i> Edit</button>
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Remove</button>
                                </div>
                                <button class="btn btn-sm btn-primary"><i class="fa fa-download"></i> Download</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="main-foot col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="foot col-md-12">

    </div>
</body>

</html>
