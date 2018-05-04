<form action="<?php echo base_url(); ?>index.php/main/insert_b" method="post">
        <div class="cont col-md-12">
             <div class="main col-md-11">
                <div class="main-head">
                    <dic class="row">
                        <div class="col-md-6">
                            <div class="alert alert-warning">
                                <strong>Warning!</strong> Make sure your data is valid
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <h4>Add Layout</h4>
                        </div>
                    </dic>
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
                                <td colspan="6">Add New Data</td>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                <td style="width: 50px; text-align: center;">1</td>
                                <td style="width: 270px; text-align: center">
                                    <input type="text" id="addDesignator" name="addDesignator" class="form-control" placeholder="Add Designator">
                                </td>                                
                                <td style="width: 400px;">
                                    <textarea class='form-control' rows='5' id='addUraian' name="addUraian"></textarea>
                                </td>  
                                <td style="width: 120px; text-align: center; vertical-align: middle">
                                    <input type="text" class="form-control" id="addSatuan" name="addSatuan">
                                </td>                               
                                <td style="width: 120px; text-align: center; vertical-align: middle">
                                    <input type="text" class="form-control" id="addMaterial" name="addMaterial">
                                </td>
                                <td style="width: 120px; text-align: center; vertical-align: middle">
                                     <input type="text" class="form-control" id="addJasa" name="addJasa">
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
                             <button  class="btn btn-danger""><a href="<?php echo base_url(); ?>index.php/main/harga_telkom" style="color: white;"><i class="fa fa-close"></i> Cancel</a></button>
                             <input type="submit" name="submit" class="btn btn-success" value="Upload" href="<?php echo base_url(); ?>index.php/main/harga_telkom" />
                         </div>
                     </div>
                 </div>
             </div>
        </div>
