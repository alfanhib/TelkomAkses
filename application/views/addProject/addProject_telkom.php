<div class="cont col-md-12">
    <form method="post" action="<?php echo base_url();?>index.php/main/search_project_telkom">
        <div class="main col-md-12">
            <div class="main-head">
                <div class="row">
                    <div class="input-group inputData col-md-4">
                        <input type="text" class="form-control" placeholder="Search Data" name="search">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                        </div>
                    </div>
                    <div class="col-md-4">
                       <div class="btn-group">
                           <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/main/addProject_telkom">Telkom</a>
                           <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/main/addProject_mitra">Mitra</a>
                       </div>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-center">Project List Telkom</h4>
                    </div>
                </div>
            </div>
            <div class="main-cont">
                <table id="tableEdit" class="table table-responsive table-hover table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th style="width: 50px;">No</th>
                            <th>ID Project</th>
                            <th style="width: 150px;">Name Project</th>
                            <th>Nomor SP</th>
                            <th>Nomor Kontrak</th>
                            <th>Tanggal Input</th>
                            <th>DateLine</th>
                            <th style="width: 100px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no= 0; foreach ($project as $p): ?>
                        
                        
                        <tr>
                            <td> <?php echo ++$no; ?> </td>
                            <td>
                                <?php echo $p->id_project; ?>
                            </td>
                            <td>
                                <?php echo $p->nama_project; ?>
                            </td>
                            <td>
                                <?php echo $p->no_sp; ?>
                            </td>
                            <td>
                                <?php echo $p->no_kontrak; ?>
                            </td>
                            <td>
                                <?php echo $p->tanggal_input; ?>
                            </td>
                            <td>
                                <?php echo $p->dateline; ?>
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                <div class="btn-group-vertical">
                                    <a class="btn btn-sm btn-success" href="<?php echo base_url();?>index.php/main/edit_project_telkom/<?php echo $p->no; ?>"><i class="fa fa-cog"></i></a>
                                    <a class="btn btn-sm btn-warning" href="<?php echo base_url();?>index.php/main/to_view_boq_telkom/<?php echo $p->no; ?>"><i class="fa fa-pencil"></i></a>
                                </div>
                                <div class="btn-group-vertical">
                                    <a class="btn btn-sm btn-primary" href="#"><i class="fa fa-download"></i></a>
                                    <a onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-sm btn-danger" href="<?php echo base_url();?>index.php/main/del_project_tel/<?php echo $p->no; ?>"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php  endforeach; $no++; ?>
                        <tr>
                            <td></td>
                            <td>
                                <input type="text" class="form-control" name="addIdProject">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="addNameProject">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="addNomorSp">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="addNomorKontrak">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="addTanggalInput">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="addDateLine">
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                    <input type="submit" class="btn btn-md btn-success" href="#" name="submit" value="Upload" />
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
    </form>
</div>
  