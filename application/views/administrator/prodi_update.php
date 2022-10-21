       <!-- Content Header (Page header) -->
       <div class="content-header">
        <div class="container-fluid alert alert-default-primary" role="alert">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><i class="fas fa-university"></i> Update Prodi</h1>
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


<?php foreach($prodi as $prd) : ?>
    <form method="post" action="<?php echo base_url('administrator/prodi/update_aksi') ?>">
        <div class="form-group">
            <label>Kode Jurusan</label>
            <input type="hidden" name="id_jurusan" value="<?php echo $prd->id_jurusan ?>">
            <input type="text" name="kode_jurusan" class="form-control" value="<?php echo $prd->kode_jurusan ?>">
        </div>
        <div class="form-group">
            <label>Nama Jurusan</label>
            <select name="nama_jurusan" class="form-control">
                <option value="<?php echo $prd->nama_jurusan ?>"><?php echo $prd->nama_jurusan; ?></option>
                <?php foreach ($jurusan as $jrs): ?>
                    <option value="<?php echo $jrs->nama_jurusan ?>"><?php echo $jrs->nama_jurusan; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <a href="<?php echo base_url('administrator/prodi') ?>" class="btn btn-sm mb-1 btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-sm mb-1 btn-primary">Simpan</button>
    </form>
<?php endforeach; ?>



</div>
</section>
</div>