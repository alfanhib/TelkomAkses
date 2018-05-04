<div class="cont col-md-12"> 
    <form method="post" action="<?php echo base_url();?>index.php/main/to_view_boq_telkom">  
        <div class="main col-md-12">
            <div class="main-head">
                <div class="row">
                    <div class="col-md-3 inputData input-group">
                        
                        <input type="text" name="search" class="form-control" placeholder="Search Data">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <a style="color: #212121;" href="#" name="search" style="color: ;"><i class="fa fa-search"></i></a>
                                </button>
                            </div>
                    </div>
                  <div class="col-md-3 inputData">
                        
                    </div>
                    <div class="col-md-3 inputData">
                        
                    </div>
                </div>
            </div>
            <div class="main-cont" style="overflow-x : scroll;">
                <table id="tableBoq" class="table table-hover table-bordered table-stripped" style="width: 1700px;">
                    <thead>
                        <tr>
                            <th rowspan="2" style=" text-align: center; vertical-align: middle;">No</th>
                            <th rowspan="2" style="width: 150px; text-align: center; vertical-align: middle;">ID</th>
                            <th rowspan="2" style="width: 175px; text-align: center; vertical-align: middle;">Designator</th>
                            <th rowspan="2" style="width: 500px; text-align: center; vertical-align: middle;">Uraian</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Satuan</th>
                            <th colspan="2" style="text-align: center; vertical-align: middle;">Volume</th>
                            <th colspan="2" style="text-align: center; vertical-align: middle;">Paket 5</th>
                            <th colspan="2" style="text-align: center; vertical-align: middle;">Jumlah Harga</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Action</th>
                        </tr>
                        <tr>
                            <th style="width: 100px; text-align: center; vertical-align: middle;">PLAN</th>
                            <th style="width: 100px; text-align: center; vertical-align: middle;">AANW</th>
                            <th style="width: 100px; text-align: center; vertical-align: middle;">Material</th>
                            <th style="width: 100px; text-align: center; vertical-align: middle;">Jasa</th>
                            <th style="width: 100px; text-align: center; vertical-align: middle;">Material</th>
                            <th style="width: 100px; text-align: center; vertical-align: middle;">Jasa</th>
                        </tr>
                        <tr>
                            <td colspan="11">A. Kabel, Penyambungan dan Pekerjaan Sipil</td>
                            <td>
                                <a class="btn btn-info" style="color: white;" href="<?php echo base_url();?>index.php/main/to_view_harga_telkom_a"><i class="fa fa-plus"></i> Add</button></a>
                            </td>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php 
                            $no= 0; 

                            foreach ($boq_a as $a){ ?>
                        
                        <tr>
                            <td style="text-align: center;"> <?php echo ++$no ?> </td>
                            <td>
                                <?php echo $a->id_project; ?>
                            </td>
                            <td>
                                <?php echo $a->designator; ?>
                            </td>
                            <td>
                                <?php echo $a->uraian; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                    <?php echo $a->satuan; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <?php echo $a->plan; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <?php echo $a->aanw; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <?php echo $a->material; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <?php echo $a->jasa; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <?php echo $a->jum_mat; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <?php echo $a->jum_jas; ?>
                            </td>
                            <td>
                                <a class="btn btn-success" onclick="return confirm('Apakah Anda Yakin ?')" href="<?php echo base_url();?>index.php/main/del_boq_tel_a/<?php echo $a->no; ?>"><i class="fa fa-trash-o"> Hapus</i></a>
                            </td>
                        </tr>

                        <?php 
                                };
                                $no++;

                              ?> 
                    </tbody>
       
                    <thead>
                        <tr>
                            <td colspan="11">B. Manhole, Perbaikan dan Modifikasi</td>
                            <td>
                                <a class="btn btn-info" style="color: white;" href="<?php echo base_url();?>index.php/main/to_view_harga_telkom_b"><i class="fa fa-plus"></i> Add</button></a>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no= 0; 

                            foreach ($boq_b as $b){ ?>
                        <tr>
                            <td style="text-align: center;"><?php echo ++$no ?></td>
                            <td>
                              <?php echo $b->id_project; ?>
                            </td>
                            <td>
                                 <?php echo $b->designator; ?>
                            </td>
                            <td>
                                 <?php echo $a->uraian; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                               <?php echo $a->satuan; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <?php echo $a->plan; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <?php echo $a->aanw; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <?php echo $a->material; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <?php echo $a->jasa; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <?php echo $a->jum_mat; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <?php echo $a->jum_jas; ?>
                            </td>
                            <td>
                                <a class="btn btn-success" href=""><i class="fa fa-pencil"> Edit</i></a>
                            </td>
                        </tr>

                        <?php 
                                };
                                $no++;

                              ?> 
                    </tbody>
                    <thead>
                        <tr>
                            <td colspan="11">C. New Item</td>
                            <td>
                                <a class="btn btn-info" style="color: white;" href="<?php echo base_url();?>index.php/main/to_view_harga_telkom_c"><i class="fa fa-plus"></i> Add</button></a>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no= 0; 

                            foreach ($boq_b as $b){ ?>

                        <tr>
                            <td style="text-align: center;"><?php echo ++$no ?></td>
                            <td>
                                <?php echo $b->id_project; ?>
                            </td>
                            <td>
                              <?php echo $b->designator; ?>
                            </td>
                            <td>
                              <?php echo $a->uraian; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                              <?php echo $a->satuan; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                             <?php echo $a->plan; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                             <?php echo $a->aanw; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <?php echo $a->material; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                  <?php echo $a->jasa; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                 <?php echo $a->jum_mat; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <?php echo $a->jum_jas; ?>
                            </td>
                            <td>
                                <a class="btn btn-success" href=""><i class="fa fa-pencil"> Edit</i></a>
                            </td>
                        </tr>
                        <?php 
                                };
                                $no++;

                              ?> 
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan="4" style="text-align: center; vertical-align: middle">
                                JUMLAH MATERIAL JASA
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                
                            </td>
                            <td>
                                
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: center; vertical-align: middle">
                                TOTAL
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="2">
                               
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="main-foot">

            </div>
            </div>
        </form>
    </form>
</div>

