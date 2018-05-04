<form method="post" action="<?php echo base_url();?>index.php/main/edit_c">
        <div class="cont col-md-12">
             <div class="main col-md-11">
                <div class="main-head">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="alert alert-warning">
                                <strong>Warning!</strong> Make sure your data is valid
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <h4>Edit Layout</h4>
                        </div>
                    </div>
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
                                <td colspan="6">Existing Data</td>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                <td style="text-align: center;">1</td>
                                <td style="width: 150px;"><?php echo $id->designator; ?></td>                                
                                <td style="width: 200px;"><?php echo $id->uraian; ?></td>  
                                <td style="text-align: center; vertical-align: middle"><?php echo $id->satuan; ?></td>
                                <td style="text-align: center; vertical-align: middle"><?php echo $id->material; ?></td>  
                                <td style="text-align: center; vertical-align: middle"><?php echo $id->jasa;?> </td>                          
                            </tr>
                         </tbody>
                         <thead>
                             <tr>
                                <td colspan="6">Updated Data</td>
                             </tr>
                         </thead>
                         <tbody>    
                             <tr>
                                <td style="width: 70px; text-align: center;">
                                    <input type="text" class="form-control" style="display: none;" id="upId" placeholder="" name="upId" value="<?php echo $id->no;?>" />1

                                </td>
                                <td style="width: 270px; text-align: center;">
                                    <input type="text" class="form-control" id="upDesignator" placeholder="Edit Designator" name="upDesignator" value="<?php echo $id->designator; ?>" />
                                </td>                                
                                <td style="width: 400px;">
                                    <textarea class='form-control' rows='5' id='upUraian' name="upUraian" ><?php echo $id->uraian; ?></textarea>
                                </td>  
                                <td style="width: 120px; text-align: center; vertical-align: middle">
                                    <input type="text" class="form-control" value="<?php echo $id->satuan; ?>" name="upSatuan" />
                                </td>                                
                                <td style="width: 120px; text-align: center; vertical-align: middle">
                                    <input type="text" class="form-control" value="<?php echo $id->material; ?>" name="upMaterial" />
                                </td>
                                <td style="width: 120px; text-align: center; vertical-align: middle">
                                    <input type="text" id="upJasa" name="upJasa" autofocus class="form-control" value="<?php echo $id->jasa; ?>" />
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
                             <a class="btn btn-danger"  href="<?php echo base_url();?>index.php/main/harga_mitra"><i class="fa fa-close"></i> Cancel</a>
                             <input class="btn btn-success" id="submit" type="submit" name="submit" value="Upload" />
                         </div>
                     </div>
                 </div>
            </div>
        </div>
</form>
