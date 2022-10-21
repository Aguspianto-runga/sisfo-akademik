        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid alert bg-gradient-cyan" role="alert">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-calendar"></i> Update Tahun Akademik</h1>
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



<?php foreach($tahun_akademik as $ta): ?>
    <form method="post" action="<?php echo base_url('administrator/tahun_akademik/update_aksi') ?>">
        <div class="form-group">
            <label for="">Tahun Akademik</label>
            <input type="hidden" name="id_thn_akad" class="form-control" value="<?php echo $ta->id_thn_akad ?>">
            <input type="text" name="tahun_akademik" class="form-control" value="<?php echo $ta->tahun_akademik ?>">
            <?php echo form_error('tahun_akademik', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label for="">Semester</label>
                <select name="semester" class="form-control" value="<?php echo $ta->semester ?>">
                    <option><?php echo $ta->semester ?></option>
                    <option>Ganjil</option>
                    <option>Genap</option>
                </select>
            <?php echo form_error('semester', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label for="">Status</label>
                <select name="status" class="form-control" value="<?php echo $ta->status ?>">
                    <option value="<?php echo $ta->status ?>"><?php echo $ta->status ?></optionvalue=>
                    <option>Aktif</option>
                    <option>Tidak Aktif</option>
                </select>
            <?php echo form_error('status', '<div class="text-danger small" ml-3>') ?>
        </div>
            <a href="<?php echo base_url('administrator/tahun_akademik') ?>" class="btn btn-sm mb-1 btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-sm mb-1 btn-primary">Simpan</button>
        </div>
    </form>
<?php endforeach; ?>




</div>
</section>
</div>