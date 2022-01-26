<div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Inventaris Gudang</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container">
            <div class="row">
               <div class="col-lg-12">
                   <div class="card">                    
                        <div class="card-header">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add">
                            <i class="fas fa-plus"></i> Tambah Data
                            </button>
                        </div>       
                        <div class="card-body">
                            <!-- Start Modal Add Data Barang -->
                            <div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="myModalLabel">Tambah Barang</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                        </div>
                                        <form class="form-horizontal" method="POST" action="<?php echo site_url('barang/simpan_barang')?>" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3">Kode Barang</label>
                                                    <div class="col-xs-8">
                                                        <input type="text" name="kode_barang" class="form-control" placeholder="Kode Barang" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3">Nama Barang</label>
                                                    <div class="col-xs-8">
                                                        <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3">Harga Barang</label>
                                                    <div class="col-xs-8">
                                                        <input type="text" name="harga_barang" class="form-control" placeholder="Harga Barang" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3">Deskripsi Barang</label>
                                                    <div class="col-xs-8">
                                                        <textarea class="form-control" name="deskripsi_barang" required></textarea>    
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3">Foto Barang</label>
                                                    <div class="col-xs-8">
                                                        <input type="file" name="foto_barang" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
                                                <button class="btn btn-info">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <!-- End Modal Add data Barang -->

                        <div class="card-body">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Deskripsi</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($data_barang->result_array() as $data) : ?>
                                        <tr>
                                            <td><?= $data['kode_barang']; ?></td>
                                            <td><?= $data['nama_barang']; ?></td>
                                            <td><?= $data['harga_barang']; ?></td>
                                            <td><?= $data['deskripsi_barang']; ?></td>
                                            <td><img src="<?php echo base_url('./picture/'.$data['foto_barang']) ?>" width="64" alt="foto"></td>
                                            <td>
                                                <a class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-edit<?=$data['kode_barang']?>"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-delete<?=$data['kode_barang']?>"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- Start Modal Edit -->
                        <?php foreach($data_barang->result_array() as $data) : ?>
                            <div class="modal fade" id="modal-edit<?=$data['kode_barang']?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="myModalLabel">Edit Data Barang</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                        </div>
                                        <form class="form-horizontal" method="POST" action="<?php echo site_url('barang/edit_barang')?>" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3">Kode Barang</label>
                                                    <div class="col-xs-8">
                                                        <input type="text" name="kode_barang" class="form-control" value="<?= $data['kode_barang']; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3">Nama Barang</label>
                                                    <div class="col-xs-8">
                                                        <input type="text" name="nama_barang" class="form-control" value="<?= $data['nama_barang']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3">Harga Barang</label>
                                                    <div class="col-xs-8">
                                                        <input type="text" name="harga_barang" class="form-control" value="<?= $data['harga_barang']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3">Deskripsi Barang</label>
                                                    <div class="col-xs-8">
                                                        <textarea class="form-control" name="deskripsi_barang"><?= $data['deskripsi_barang']; ?></textarea>    
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3">Foto Barang</label>
                                                    <!-- <img id="image-preview" width="100" /><br/> -->
                                                    <input class="form-control-file" type="file" name="foto_barang"/>
                                                    <input type="hidden" name="old_foto_barang" value="<?= $data['foto_barang'] ?>" />
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
                                                <button class="btn btn-info">Edit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                        <!-- End Modal Edit -->

                        <!-- Start Modal Delete -->
                        <?php foreach($data_barang->result_array() as $data) : ?>
                            <div class="modal fade" id="modal-delete<?=$data['kode_barang']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Barang</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <form class="form-horizontal" method="POST" action="<?php echo site_url('barang/hapus_barang')?>">
                                            <div class="modal-body">
                                                <p>Apakah anda yakin menghapus barang <b><?= $data['nama_barang']; ?></b> ?</p>
                                            </div>
                                            <div class="modal-footer" style="margin: 0;border-top: 0;text-align: center;">
                                                <input type="hidden" name="kode_barang" value="<?= $data['kode_barang']; ?>">
                                                <button class="btn btn-danger">Hapus</button>
                                                <button class="btn btn-success" data-dismiss="modal" aria-hidden="true">Batal</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- End Modal Delete -->
                        </div>                
                   </div>
               </div> 
            </div>
        </div>
    </div>
</div>
    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- Default to the left -->
        <div class="text-center">
            <strong>Copyright &copy; 2022 <a href="#">PT. Makmur Sejahtera</a>.</strong> All rights reserved.
        </div>
    </footer>
</div>
