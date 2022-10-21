       <!-- Content Header (Page header) -->
       <div class="content-header">
        <div class="container-fluid alert alert-default-primary" role="alert">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><i class="fas fa-university"></i> Input Prodi</h1>
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


        <form method="post" action="<?php echo base_url('administrator/prodi/tambah_prodi_aksi') ?>">
            <div class="form-group">
                    <label for="">Kode Jurusan</label>
                    <input type="text" name="kode_jurusan" class="form-control">
                    <?php echo form_error('kode_jurusan', '<div class="text-danger small" ml-3>') ?>
                </div>
                <div class="form-group">
                    <label for="">Nama Jurusan</label>
                    <select class="custom-select" name="nama_jurusan">
                        <?php foreach($jurusan as $jrs) : ?>
                            <option value="<?php echo $jrs->nama_jurusan ?>"><?php echo $jrs->nama_jurusan; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php echo form_error('nama_jurusan', '<div class="text-danger small" ml-3>') ?>
                </div>
                <a href="<?php echo base_url('administrator/prodi') ?>" class="btn btn-sm mb-1 btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-sm mb-1 btn-primary">Simpan</button>
            </div>
        </form>


</div>
</section>
</div>