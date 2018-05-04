
<div class="cont col-md-12">
    <form method="post" action="<?php echo base_url();?>index.php/main/user_list ">
        <div class="main col-md-11">
            <div class="main-head">
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-info">
                            <?php
                                $cek = $this->session->userdata('logged_in');
                                 if( $cek == TRUE)
                                  {
                                     echo '<strong>Willkommen!</strong> '.$this->session->userdata('username').'';
                                    }
                                 ?>    
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
                        <div class="dashboard-head" style="background-color: #673AB7;" data-toggle="collapse" href="#dashboardHargaSatuan" aria-expanded="false" aria-controls="">
                            <h3>Harga Satuan <i class="fa fa-angle-down pull-right"></i></h3>
                        </div>
                        <div class="dashboard-body collapse " id="dashboardHargaSatuan">
                            <div class="dashboard-body-item">
                                <a href="<?php echo base_url(); ?>index.php/main/harga_telkom">
                                    <h5>Harga Satuan Telkom - TA</h5>
                                </a>
                            </div>
                            <div class="dashboard-body-item">
                                <a href="<?php echo base_url(); ?>index.php/main/harga_mitra">
                                    <h5>Harga Satuan TA - Mitra</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-item col-md-4">
                        <div class="dashboard-head" style="background-color: #3F51B5;" data-toggle="collapse" href="#dashboardBoq" aria-expanded="false" aria-controls="">
                            <h3>Project <i class="fa fa-angle-down pull-right"></i></h3>
                        </div>
                        <div class="dashboard-body collapse " id="dashboardBoq">
                            <div class="dashboard-body-item">
                                <a href="<?php echo base_url(); ?>index.php/main/to_add_project_telkom">
                                    <h5>Project List Telkom</h5>
                                </a>
                            </div>
                            <div class="dashboard-body-item">
                                <a href="<?php echo base_url();?>index.php/main/to_add_project_mitra">
                                    <h5>Project List Mitra</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-item col-md-4">
                        <div class="dashboard-head" style="background-color: #2196F3;">
                            <h3>List User <i class="fa fa-user pull-right"></i></h3>
                        </div>
                        
                        <div class="dashboard-body" style="overflow-y: scroll; max-height: 250px;">
                            <?php foreach ($user as $a): ?>
                            <div class="dashboard-body-item" style="vertical-align: middle;">
                                <h6><?php echo $a->username ?></h6>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
