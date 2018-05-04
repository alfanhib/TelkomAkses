        <div class="cont col-md-12">
            <form method="post" action="<?php echo base_url();?>index.php/main/make_boq_tel_a">
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
                            <h4>Add Boq to Project</h4>
                        </div>
                    </div>
                </div>
                <div class="main-cont" style="overflow-x: scroll;">
                     <table id="tableEdit" class="table table-hover table-bordered table-stripped" style="width: 1650px;">
                         <thead>
                             <tr>
                                <th rowspan="2" style="text-align: center; vertical-align: middle; width: 125px;" ">ID</th>
                                <th rowspan="2" style="text-align: center; vertical-align: middle;">Designator</th>
                                <th rowspan="2" style="text-align: center; vertical-align: middle;">Uraian Pekerjaan</th>
                                <th rowspan="2" style="text-align: center; vertical-align: middle;">Satuan</th>
                                <th colspan="2" style="text-align: center; vertical-align: middle;">Volume</th>
                                <th colspan="2" style="text-align: center; vertical-align: middle;">Paket 5</th>
                             </tr>
                             <tr>
                                <th style="text-align: center;">Plan</th>                                
                                <th style="text-align: center;">AANW</th>
                                <th style="text-align: center;">Material</th>                                
                                <th style="text-align: center;">Jasa</th>                                                              
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                <td style="width: 70px; text-align: center;">
                                    <input type="text" class="form-control" id="upId" placeholder="" name="addId" value="" />
                                </td>
                                <td style="width: 225px; text-align: center;">
                                    <input type="text" class="form-control" id="upDesignator" placeholder="Edit Designator" name="addDesignator" value="<?php echo $id->designator; ?>" readonly />
                                </td>                                
                                <td style="width: 400px;">
                                    <textarea class='form-control' rows='5' id='upUraian' name="addUraian" readonly ><?php echo $id->uraian; ?></textarea>
                                </td>  
                                <td style="width: 120px; text-align: center; vertical-align: middle">
                                    <input type="text" class="form-control" value="<?php echo $id->satuan; ?>" readonly name="addSatuan" />
                                </td>                                
                                <td style="width: 120px; text-align: center; vertical-align: middle">
                                    <input type="text" class="form-control" value="" name="addPlan" />
                                </td>
                                <td style="width: 120px; text-align: center; vertical-align: middle">
                                    <input type="text" id="upJasa" name="addAanw" autofocus class="form-control" value="" />
                                </td>
                                <td style="width: 120px; text-align: center; vertical-align: middle">
                                    <input type="text" id="upJasa" name="addMaterial" autofocus class="form-control" value="<?php echo $id->jasa; ?>" readonly />
                                </td>
                                <td style="width: 120px; text-align: center; vertical-align: middle">
                                    <input type="text" id="upJasa" name="addJasa" autofocus class="form-control" value="<?php echo $id->jasa; ?>" readonly />
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
                            <input class="btn btn-success" id="submit" type="submit" name="submit" value="ADD" />
                         </div>
                     </div>
                 </div>
            </div>
        </form>
        </div>
