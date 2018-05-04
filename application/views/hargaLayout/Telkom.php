<div class="cont col-md-12">
        <div class="row">
            <div class="main col-md-12">
                <div class="main-head">
                    <form method="post" action="<?php echo base_url(); ?>index.php/main/search_b">
                    <div class="row">
                        <div class="input-group inputData col-md-5">
                            <input type="text" name="search" class="form-control" placeholder="Search Data">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit" name="">
                                    <a style="color: #212121;" href="<?php echo base_url(); ?>index.php/main/search" name="search" style="color: ;"><i class="fa fa-search"></i></a>
                                </button>
                            </div>
                        </div>
                <div class="col-md-3 inputData">
                    <div class="btn-group">
                        <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/main/harga_telkom">Telkom</a>
                        <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/main/harga_mitra">Mitra</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>Rincian Harga Satuan Telkom</h4> 
                </div>
                    </div>
                </form>
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
                                    <a class="btn btn-info" style="color: white;" href="<?php echo base_url();?>index.php/main/move_add_tel_a"><i class="fa fa-plus"></i> Add</button></a>
                                </td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                            $no= 0; 
                            foreach ($khs as $d){ ?>
                                <tr>
                                    <td style="width: 50px; text-align: center;"><?php echo ++$no; ?> </td>
                                    <td style="width: 175px;"><?php echo $d->designator; ?> </td>
                                    <td style="width: 625px;"><?php echo $d->uraian; ?> </td>
                                    <td style="text-align: center; vertical-align: middle"><?php echo $d->satuan; ?> </td>
                                    <td style="text-align: center; vertical-align: middle"><?php echo $d->material; ?> </td>
                                    <td style="text-align: center; vertical-align: middle"><?php echo $d->jasa; ?> </td>
                                    <td style="text-align: center; vertical-align: middle">
                                    <div class="btn-group">
                                        <a class="btn btn-success btn-sm" href="<?php echo base_url();?>index.php/main/to_edit_telkom/<?php echo $d->no; ?>" style="color: white"><i class="fa fa-cog"></i> Edit</a>
                                       <a onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-danger btn-sm"style="color: white;" href="<?php echo base_url();?>index.php/main/del_harga_a/<?php echo $d->no; ?>" ><i class="fa fa-trash-o"></i> Remove</a>
                                    </div>
                                    </td>   
                                </tr>
                            <?php 
                                };
                                $no++;

                              ?> 
                        </tbody>
                        <thead>
                            <td colspan="6" style="vertical-align: middle;">B. Manhole, Perbaikan dan Modifikasi</td>
                            <td>
                                <a class="btn btn-info" style="color: white;" href="<?php echo base_url();?>index.php/main/move_add_tel_b"><i class="fa fa-plus"></i> Add</button></a>
                            </td>
                        </thead>
                        <tbody>
                            <?php 
                                $no= 0; 
                                foreach ($file as $f) { ?>
                                <tr>
                                    <td style="width: 50px; text-align: center;"><?php echo ++$no ?> </td>
                                    <td style="width: 175px;"><?php echo $f->designator; ?> </td>
                                    <td style="width: 625px;"><?php echo $f->uraian; ?> </td>
                                    <td style="text-align: center; vertical-align: middle"><?php echo $f->satuan; ?> </td>
                                    <td style="text-align: center; vertical-align: middle"><?php echo $f->material; ?> </td>
                                    <td style="text-align: center; vertical-align: middle"><?php echo $f->jasa; ?> </td>
                                    <td style="text-align: center; vertical-align: middle">
                                    <div class="btn-group">
                                        
                                        <a class="btn btn-success btn-sm" href="<?php echo base_url();?>index.php/main/to_edit_telkom_b/<?php echo $f->no; ?>" style="color: white"><i class="fa fa-cog"></i> Edit</a>
                                       <a onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-danger btn-sm" style="color: white;" href="<?php echo base_url();?>index.php/main/del_harga_b/<?php echo $f->no; ?>" ><i class="fa fa-trash-o"></i> Remove</a>
                                    </div>
                                    </td>   
                                </tr>
                            <?php 
                                };
                                $no++;
                                 ?>
                        </tbody>
                        <thead>
                            <tr>
                                <td colspan="6" style="vertical-align: middle;">C. New Item</td>
                                <td>
                                    <a class="btn btn-info" style="color: white;" href="<?php echo base_url();?>index.php/main/move_add_tel_c"><i class="fa fa-plus"></i> Add</button></a>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no= 1;
                                foreach ($datac as $c) { ?>
                                <tr>
                                    <td style="width: 50px; text-align: center;"><?php echo $no++ ?> </td>
                                    <td style="width: 175px;"><?php echo $c->designator; ?> </td>
                                    <td style="width: 625px;"><?php echo $c->uraian; ?> </td>
                                    <td style="text-align: center; vertical-align: middle"><?php echo $c->satuan; ?> </td>
                                    <td style="text-align: center; vertical-align: middle"><?php echo $c->material; ?> </td>
                                    <td style="text-align: center; vertical-align: middle"><?php echo $c->jasa; ?> </td>
                                    <td style="text-align: center; vertical-align: middle">
                                    <div class="btn-group">
                                        
                                        <a class="btn btn-success btn-sm" href="<?php echo base_url();?>index.php/main/to_edit_telkom_c/<?php echo $c->no; ?>" style="color: white"><i class="fa fa-cog"></i> Edit</a>
                                        <a onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-danger btn-sm"style="color: white;" href="<?php echo base_url();?>index.php/main/del_harga_c/<?php echo $c->no; ?>" ><i class="fa fa-trash-o"></i> Remove</a>

                                    </div>
                                    </td>   
                                </tr>
                            <?php 
                                };
                                $no++
                                 ?>
                        </tbody>
                    </table>
                </div>
                <div class="main-foot">

                </div>
            </div>
        </div>
    </div>