<div class="cont col-md-12"> 
    <form method="POST" action="<?php echo base_url();?>index.php/main/search_boq_telkom_a" >
        <div class="main col-md-12">
            <div class="main-head">
                <div class="row">
                    <div class="col-md-3 inputData input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search Data">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                            <i class="fa fa-search"></i>
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
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">No</th>
                            <th rowspan="2" style="width: 175px; text-align: center; vertical-align: middle;">Designator</th>
                            <th rowspan="2" style="width: 500px; text-align: center; vertical-align: middle;">Uraian</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Satuan</th>
                            <th colspan="2" style="text-align: center; vertical-align: middle;">Paket 5</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Keterangan</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Action</th>
                        </tr>
                        <tr>
                            <th style="width: 150px; text-align: center; vertical-align: middle;">Material</th>
                            <th style="width: 150px; text-align: center; vertical-align: middle;">Jasa</th>
                        </tr>
                        <tr>
                            <td colspan="8">A. Kabel, Penyambungan dan Pekerjaan Sipil</td>
                        </tr>
                    </thead>
                    
                    <tbody>
                         <?php 
                            $no= 0; 

                            foreach ($khs as $d){ ?>
                        <tr>
                            <td style="text-align: center;"><?php echo ++$no ?></td>
                            <td>
                                <?php echo $d->designator; ?>
                            </td>
                            <td>
                                <?php echo $d->uraian; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <?php echo $d->satuan; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <?php echo $d->material; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <?php echo $d->jasa; ?>
                            </td>
                            <td>

                            </td>
                            <td>
                                <a class="btn btn-info" style="color: white;" href="<?php echo base_url();?>index.php/main/to_add_boq_tel_a/<?php echo $d->no; ?>"><i class="fa fa-plus"></i> Add</button></a>
                            </td>
                        </tr>
                        <?php 
                                };
                                $no++;

                              ?>  
                    </tbody>
                            
                </table>
            </div>
            <div class="main-foot">

            </div>
            </div>
        </form>
</div>

