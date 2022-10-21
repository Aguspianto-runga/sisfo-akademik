        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid alert alert-default-primary" role="alert">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><i class="fas fa-university"></i> Program Studi</h1>
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
<marquee><h3><i>IGNORE</i></h3></marquee>
    <?= $this->session->flashdata('pesan'); ?>
    <!-- Button trigger modal
    <button type="button" class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#inputModal">
        Modal Tambah Prodi <i class="fas fa-plus"></i>
    </button> -->
    <?php echo anchor('administrator/prodi/tambah_prodi', '<button class="btn btn-sm btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Prodi</button>') ?>



<table class="table table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Kode Jurusan</th>
            <th>Nama Jurusan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <?php 
    $no=1;
    foreach($prodi as $prd): ?>
    <tr>
        <td width="20px"><?php echo $no++ ?></td>
        <td><?php echo $prd->kode_jurusan ?></td>
        <td><?php echo $prd->nama_jurusan ?></td>
        <td width="20%">
            <?php echo anchor('administrator/prodi/update/' . $prd->id_jurusan, '<div class="btn btn-sm btn-success mb-1"><i class="fas fa-edit"></i></div>')?>
            <a href="<?php echo base_url('administrator/prodi/delete/' . $prd->id_jurusan."")?>" class="btn btn-danger btn-sm mb-1" onclick="return confirm('Anda yakin menghapus data yg anda pilih?');"><i class="fas fa-trash"></i></a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>




</div>
</section>
</div>





<!-- Modal Tambah Prodi
<div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel"><i class="fas fa-university"></i> Input Jurusan</h4>
        </div>
        <div class="modal-body">
            <form method="post" action="<?php echo base_url('administrator/prodi/tambah_prodi_aksi') ?>">
            <div class="form-group">
                    <label for="">Kode Prodi</label>
                    <input type="text" name="kode_prodi" id="" palceholder="Masukkan Kode prodi" class="form-control">
                    <?php echo form_error('kode_prodi', '<div class="text-danger small" ml-3>') ?>
                </div>
                <div class="form-group">
                    <label for="">Nama Prodi</label>
                    <input type="text" name="nama_prodi" id="" palceholder="Masukkan Nama prodi" class="form-control">
                    <?php echo form_error('nama_prodi', '<div class="text-danger small" ml-3>') ?>
                </div>
                <div class="form-group">
                    <label for="">Nama Jurusan</label>
                    <select class="custom-select" name="nama_jurusan">
                        <option selected>Pilih Jurusan</option>
                        <?php foreach($prodi as $jrs) : ?>
                            <option value="<?php echo $jrs->nama_jurusan ?>"><?php echo $jrs->nama_jurusan; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php echo form_error('nama_jurusan', '<div class="text-danger small" ml-3>') ?>
                </div>
                <a href="<?php echo base_url('administrator/prodi') ?>" class="btn btn-sm btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
            
            </form>
        </div>
    </div>
</div> -->