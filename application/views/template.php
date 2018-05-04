<html>

<head>
    <title>Telkom Akses</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/headStyle.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/contStyle.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/mainStyle.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/style/footStyle.css">


    <script src="<?php echo base_url(); ?>/assets/script/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/script/myScript.js"></script>
    <script src="<?php echo base_url(); ?>/assets/style/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="head navbar navbar-toggleable-md navbar-light bg-faded sticky-top">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url();?>index.php/main/dashboard" style="color: white;">
                <img src="<?php echo base_url(); ?>/assets/image/Logo2.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                TelkomAkses - Solo
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                          Harga Satuan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo base_url();?>index.php/main/harga_telkom">Harga Satuan Telkom - TA</a>
                        <a class="dropdown-item" href="<?php echo base_url();?>index.php/main/harga_mitra">Harga Satuan TA - Mitra</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                          Project List
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/main/to_add_project_telkom">Project List Telkom</a>
                        <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/main/addProject_mitra">Project List Mitra</a>
                    </div>
                </li>
            </ul>
            <a class="btn btn-danger" style="color: white;" href="<?php echo base_url();?>index.php/main/logout">Log Out <i class="fa fa-sign-out"></i></a>
        </div>
    </nav>
    <!--HEADER-->
    
    <!--CONTENT-->
    <?php 
        $this->load->view($main_konten);
    ?> 
    
    <!--FOOTER-->
    <div class="foot col-md-12">
        <h5 class="text-center">@Copyright By Nov | Bay | Alf</h5>
    </div>
</body>

</html>
