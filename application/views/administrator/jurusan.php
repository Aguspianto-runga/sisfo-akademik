        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid alert alert-default-primary bg-gradient-cyan" role="alert">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-university"></i> Jurusan</h1>
                </div>
            <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div> -->
            </div>
        </div><!-- /.container-fluid -->
        </div><!-- /.content-header -->


<!-- Main content -->
<section class="content">
<div class="container-fluid">


    <?= $this->session->flashdata('pesan'); ?>
        <!-- button tambah data
        <?php echo anchor('administrator/jurusan/input', '<button class="btn btn-sm btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Jurusan</button>') ?> -->



                        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- button modal -->
                            <button type="button" class="btn btn-info btn-sm mb-2" data-toggle="modal" data-target="#inputModal">
                                Tambah Jurusan <i class="fas fa-plus"></i>
                            </button> 
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table dataTable table-hover" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kode Jurusan</th>
                                                        <th>Nama Jurusan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $no =1;
                                                    foreach ($jurusan as $jrs) : ?>
                                                    <tr>
                                                        <td><?php echo $no++ ?></td>
                                                        <td><?php echo $jrs->kode_jurusan ?></td>
                                                        <td><?php echo $jrs->nama_jurusan ?></td>
                                                        <td width="20%">
                                                            <?php echo anchor('administrator/jurusan/update/' . $jrs->id_jurusan, '<div class="btn btn-sm btn-outline-success mb-1"><i class="fas fa-edit"></i></div>')?>
                                                            <a href="<?php echo base_url('administrator/jurusan/delete/' . $jrs->id_jurusan."")?>" class="btn btn-outline-danger btn-sm mb-1" onclick="return confirm('Anda yakin menghapus data yg anda pilih?');"><i class="fas fa-trash"></i></a>
                                                            <!-- <?php echo anchor('administrator/jurusan/delete/' . $jrs->id_jurusan, '<div class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></div>')?> -->
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>



</div>
</section>
</div>





<!-- Modal Tambah Jurusan -->
<div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel"><i class="fas fa-university"></i> Input Jurusan</h4>
        </div>
        <div class="modal-body">
            <form method="post" action="<?php echo base_url('administrator/jurusan/input_aksi') ?>">
                <div class="form-group">
                    <label for="">Kode Jurusan</label>
                    <input type="text" name="kode_jurusan" id="" palceholder="Masukkan Kode Jurusan" class="form-control">
                    <?php echo form_error('kode_jurusan', '<div class="text-danger small" ml-3>') ?>
                </div>
                <div class="form-group">
                    <label for="">Nama Jurusan</label>
                    <input type="text" name="nama_jurusan" id="" palceholder="Masukkan Nama Jurusan" class="form-control">
                    <?php echo form_error('nama_jurusan', '<div class="text-danger small" ml-3>') ?>
                </div>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal <i class=" glyphicon glyphicon-remove"></i></button>
                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>