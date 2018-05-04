<div class="cont col-md-12"> 
    <form method="post" action="<?php echo base_url();?>index.php/main/make_boq_tel_a">  
        <div class="main col-md-12">
            <div class="main-head">
                <div class="row">
                    <div class="col-md-3 inputData input-group">
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             WITEL</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Yogyakarta</a>
                                <a class="dropdown-item" href="#">Kudus</a>
                                <a class="dropdown-item" href="#">Magelang</a>
                                <a class="dropdown-item" href="#">Pekalongan</a>
                                <a class="dropdown-item" href="#">Purwokerto</a>
                                <a class="dropdown-item" href="#">Semarang</a>
                                <a class="dropdown-item" href="#">Solo</a>
                            </div>
                        </div>
                    </div>
                  <div class="col-md-3 inputData">
                        
                    </div>
                    <div class="col-md-3 inputData">
                        <div class="btn-group">
                            <button class="btn btn-success"><i class="fa fa-upload"></i> Upload</button>
                            <button class="btn btn-primary"><i class="fa fa-download"></i> Download</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-cont" style="overflow-x : scroll;">
                <table id="tableBoq" class="table table-hover table-bordered table-stripped" style="width: 1700px;">
                    <thead>
                        <tr>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">No</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">ID</th>
                            <th rowspan="2" style="width: 175px; text-align: center; vertical-align: middle;">Designator</th>
                            <th rowspan="2" style="width: 500px; text-align: center; vertical-align: middle;">Uraian</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Satuan</th>
                            <th colspan="2" style="text-align: center; vertical-align: middle;">Volume</th>
                            <th colspan="2" style="text-align: center; vertical-align: middle;">Paket 5</th>
                            <th colspan="2" style="text-align: center; vertical-align: middle;">Jumlah Harga</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Keterangan</th>
                            <th rowspan="2" ="2" style="text-align: center; vertical-align: middle;">Action</th>
                        </tr>
                        <tr>
                            <th style="width: 150px; text-align: center; vertical-align: middle;">PLAN</th>
                            <th style="width: 150px; text-align: center; vertical-align: middle;">AANW</th>
                            <th style="width: 150px; text-align: center; vertical-align: middle;">Material</th>
                            <th style="width: 150px; text-align: center; vertical-align: middle;">Jasa</th>
                            <th style="width: 150px; text-align: center; vertical-align: middle;">Material</th>
                            <th style="width: 150px; text-align: center; vertical-align: middle;">Jasa</th>
                        </tr>
                        <tr>
                            <td colspan="12">A. Kabel, Penyambungan dan Pekerjaan Sipil</td>
                            <td>
                                <a class="btn btn-info" style="color: white;" href="<?php echo base_url();?>index.php/main/move_add_boq"><i class="fa fa-plus"></i> Add</button></a>
                            </td>
                        </tr>
                    </thead>
                    
                    <tbody>
                         <?php 
                            $no= 0; 

                            foreach ($khs as $d){ ?>
                        <tr>
                            <td style="text-align: center;"><?php echo ++$no; ?></td>
                            <td>
                                <input class="form-control" type="text" name="addIdProject">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="addDesignator"  value="<?php echo $d->designator; ?>">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="addUraian"  value="<?php echo $d->uraian; ?>">
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input class="form-control" type="text" name="addSatuan"  value="<?php echo $d->satuan; ?>">
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input type="text" class="form-control" name="volumePlan">
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input type="text" class="form-control" name="volumeAanw">
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input class="form-control" type="text" name="addMaterial"  value="<?php echo $d->material; ?>"> 
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input class="form-control" type="text" name="addJasa"  value="<?php echo $d->jasa; ?> ">
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input type="number" class="form-control" name="jumlahMaterial" readonly>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input type="number" class="form-control" name="jumlahJasa" readonly>
                            </td>
                            <td>

                            </td>
                            <td>
                                <input type="submit" name="submit" class="btn btn-success" value="ADD">
                            </td>
                        </tr>
                        <?php 
                                };
                                $no++;

                              ?>  
                    </tbody>
       
                    <thead>
                        <tr>
                            <td colspan="12">B. Manhole, Perbaikan dan Modifikasi</td>
                            <td>
                                <a class="btn btn-info" style="color: white;" href="<?php echo base_url();?>index.php/main/move_add"><i class="fa fa-plus"></i> Add</button></a>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center;"></td>
                            <td>
                                <input class="form-control" type="text" name="addIdProject" value="">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="addDesignator" value="">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="addUraian" value="">
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input class="form-control" type="text" name="addSatuan" value="">
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input type="text" class="form-control" name="volumePlan">
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input type="text" class="form-control" name="volumeAanw">
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input class="form-control" type="text" name="addMaterial" value=""> 
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input class="form-control" type="text" name="addJasa" value="">
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input type="number" class="form-control" name="jumlahMaterial" vlaue="">
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input type="number" class="form-control" name="jumlahJasa">
                            </td>
                            <td>

                            </td>
                            <td>
                                <input type="submit" name="submitB" class="btn btn-success" value="ADD">
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <td colspan="12">C. New Item</td>
                            <td>
                                <a class="btn btn-info" style="color: white;" href="<?php echo base_url();?>index.php/main/move_add"><i class="fa fa-plus"></i> Add</button></a>
                            </td>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td style="text-align: center;"></td>
                            <td>
                                <input class="form-control" type="text" name="addIdProject" value="">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="addDesignator" value="">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="addUraian" value="">
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input class="form-control" type="text" name="addSatuan" value="">
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input type="text" class="form-control" name="volumePlan">
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input type="text" class="form-control" name="volumeAanw">
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input class="form-control" type="text" name="addMaterial" value=""> 
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input class="form-control" type="text" name="addJasa" value="">
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input type="number" class="form-control" name="jumlahMaterial" vlaue="">
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <input type="number" class="form-control" name="jumlahJasa">
                            </td>
                            <td>

                            </td>
                            <td>
                                <input type="submit" name="submit" class="btn btn-success" value="ADD">
                            </td>
                        </tr>

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
                                <input type="text" class="form-control" name="keterangan" readonly />
                            </td>
                            <td>
                                <input type="text" class="form-control" name="keterangan" readonly />
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
                                <input type="text" class="form-control" name="keterangan" readonly />
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

