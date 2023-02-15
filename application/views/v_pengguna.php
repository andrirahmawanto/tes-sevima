            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">DATA PENGGUNA</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li class="active">
                                            <?php if($this->session->userdata('level') == 1 OR $this->session->userdata('level') == 4 ){ ?>
                                                <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#ModalAdd"><i class="fa fa-plus-circle"> </i> Tambah</button>
                                            <?php } ?>
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <form method="post" action="<?php echo site_url('pengguna/input');?>" enctype='multipart/form-data'>
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">TAMBAH PENGGUNA ADMIN</h4>
                              </div>
                              <div class="modal-body">
                                <div class="col-lg-4">
                                    <label for="txtname">Username</label>
                                </div>
                                <div class="col-lg-8" style="margin-bottom: 10px">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
                                </div>
                                <div class="col-lg-4">
                                    <label for="txtname">Nama Pengguna</label>
                                </div>
                                <div class="col-lg-8" style="margin-bottom: 10px">
                                    <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" placeholder="Masukkan Nama Pengguna">
                                </div>                                
                                <div class="col-lg-4">
                                    <label for="txtname">Password</label>
                                </div>
                                <div class="col-lg-8" style="margin-bottom: 10px">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                                </div>
                                <div class="col-lg-4">
                                    <label for="txtname">Level Pengguna</label>
                                </div>
                                <div class="col-lg-8" style="margin-bottom: 10px">
                                 <select class="form-control" name="level">
                                   <option>-- Pilih Level --</option>
                                   <option value="1">1 | Super Admin</option>
                                   <option value="2">2 | Admin</option>
                                   <option value="3">3 | Admin Produk</option>
                               </select>
                           </div>
                       </div>
                       <div class="modal-footer" style="margin-top: 35%">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" id="btnsimpan" name="btnsimpan" class="btn btn-success">Save</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
      <!-- end row -->
      <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table id="tb_pengguna" class="table table-striped dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th style="text-align: center; width: 1%">No</th>
                            <th style="text-align: center; width: 10%">Nama Pengguna</th>
                            <th style="text-align: center; width: 10%">Username</th>
                            <th style="text-align: center; width: 5%">Level</th>
                            <th style="text-align: center; width: 10%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0 ;
                        foreach ($data as $rowdata) {   
                          if($rowdata->username != null){
                            $no++;              
                            ?> 
                            <tr>
                                <td style="text-align: center;"><?php echo $no ?></td>
                                <td style="text-align: left;"><?php echo $rowdata->nama_pengguna ?></td>
                                <td style="text-align: left;"><?php echo $rowdata->username ?></td>
                                <td style="text-align: center;"><?php echo $rowdata->level ?></td>
                                <td align="center">
                                  <button type="button" class="btn btn-info btn-sm " data-toggle="modal" data-target="#ModalEdit<?php echo $rowdata->id_pengguna; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> | Edit</button>

                                  <button type="button" class="btn btn-danger btn-sm " data-toggle="modal" data-target="#ModalDelete<?php echo $rowdata->id_pengguna; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> | Hapus</button>

                                  <button type="button" class="btn btn-warning btn-sm " data-toggle="modal" data-target="#ModalReset<?php echo $rowdata->id_pengguna; ?>"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> | Reset Password</button>
                              </td>
                              <!-- Modal Reset Password -->
                              <!-- Modal Reset-->
                              <div class="modal fade" id="ModalReset<?php echo $rowdata->id_pengguna; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <form method="post" action="<?php echo site_url('pengguna/reset_password');?>">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel" style="font-family: sans-serif;">Konfirmasi Reset Password</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                          <input type="hidden" id="id_pengguna" name="id_pengguna" value="<?php echo $rowdata->id_pengguna; ?>">
                                          <input type="hidden" id="password" name="password" value="12345">
                                          <label style="font-family: sans-serif; font-size: 16px;">Apakah anda yakin, akan mereset password username: <?php echo "'<u>".$rowdata->username."</u>'";?>, menjadi 12345 ?</label>
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                    <button type="submit" id="btnreset" name="btnreset" class="btn btn-warning">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal Delete-->
                <div class="modal fade" id="ModalDelete<?php echo $rowdata->id_pengguna; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form method="post" action="<?php echo site_url('pengguna/delete_pengguna');?>">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel" style="font-family: sans-serif;">Konfirmasi Hapus Data</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                              <input type="hidden" id="id_pengguna" name="id_pengguna" value="<?php echo $rowdata->id_pengguna; ?>">
                              <label style="font-family: sans-serif; font-size: 16px;">Apakah anda yakin, akan menghapus data : <?php echo "'<u>".$rowdata->username."</u>'";?> ?</label>
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" id="btndelete" name="btndelete" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Edit -->
    <div class="modal fade" id="ModalEdit<?php echo $rowdata->id_pengguna; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form method="post" action="<?php echo site_url('pengguna/edit');?>" enctype='multipart/form-data'>
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">EDIT PENGGUNA ADMIN</h4>
          </div>
          <div class="modal-body">
            <div class="col-lg-4">
                <label for="txtname">Username</label>
            </div>
            <div class="col-lg-8" style="margin-bottom: 10px">
                <input type="hidden" class="form-control" id="id_pengguna" name="id_pengguna" value="<?php echo $rowdata->id_pengguna ?>">
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $rowdata->username ?>">
            </div>
            <div class="col-lg-4">
                <label for="txtname">Nama Pengguna</label>
            </div>
            <div class="col-lg-8" style="margin-bottom: 10px">
                <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" value="<?php echo $rowdata->nama_pengguna ?>">
            </div>
            <div class="col-lg-4">
                <label for="txtname">Level Pengguna</label>
            </div>
            <div class="col-lg-8" style="margin-bottom: 10px">
             <select class="form-control" name="level">
               <option value="<?php echo $rowdata->level; ?>"><?php echo $rowdata->level; ?></option>
               <option value="1">1 | Super Admin</option>
               <option value="2">2 | Admin</option>
               <option value="3">3 | Admin Produk</option>
           </select>
       </div>
   </div>
   <div class="modal-footer" style="margin-top: 15%">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" id="btnedit" name="btnedit" class="btn btn-success">Save</button>
  </div>
</form>
</div>
</div>
</div>
</tr>
<?php }
} ?>
</tbody>
</table>
</div>
</div>
</div>
</div> <!-- container -->

</div> <!-- content -->

</div>

</div>
<!-- END wrapper -->
<script type="text/javascript">
    $(document).ready(function () {
    $('#tb_pengguna').DataTable({
            "language": {
                "lengthMenu": 'Tampilkan _MENU_ Baris',
                "search": '_INPUT_',
                "searchPlaceholder": 'Pencarian . . .'
            },
            dom: 
            "<'row'<'col-md-8'l><'col-md-2 pull-right'f>>" +
            "<'row'<'col-md-12't>>" +
            "<'row'<'col-md-5'i><'col-md-7'p>>"
        });
    });
</script>
