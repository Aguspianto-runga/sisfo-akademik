        <!-- Content Header (Page header) -->
        <div class="content-header">
        </div><!-- /.content-header -->


<!-- Main content -->
<section class="content">
<div class="container-fluid">




        <div class="card m-auto" style="width: 75%;">
                <div class="card-header bg-cyan">
                    <h3 class="card-title"><i class="fas fa-book"></i><b> Input Mata Kuliah</b></h3>
                </div><!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="<?php echo base_url('administrator/matakuliah/tambah_matakuliah_aksi') ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Matakuliah</label>
                            <input type="text" name="kode_matakuliah" class="form-control" placeholder="Masukkan Kode Mata Kuliah">
                            <?php echo form_error('kode_matakuliah', '<div class="text-danger small" ml-3>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Mata Kuliah</label>
                            <input type="text" name="nama_matakuliah" class="form-control"  placeholder="Masukkan Nama Mata Kuliah">
                            <?php echo form_error('nama_matakuliah', '<div class="text-danger small" ml-3>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">SKS</label>
                            <select class="custom-select" name="sks">
                                <option value="">Pilih SKS</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <?php echo form_error('sks', '<div class="text-danger small" ml-3>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Semester</label>
                            <select class="custom-select" name="semester">
                                <option value="">Pilih Semester</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                            <?php echo form_error('semester', '<div class="text-danger small" ml-3>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Jurusan</label>
                            <select class="custom-select" name="nama_jurusan">
                                <!-- <option selected>Pilih Prodi</option> -->
                                <?php foreach($jurusan as $jrs) : ?>
                                    <option value="<?php echo $jrs->nama_jurusan ?>"><?php echo $jrs->nama_jurusan; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('nama_jurusan', '<div class="text-danger small" ml-3>') ?>
                        </div>
                    </div><!-- /.card-body -->

                    <div class="card-footer">
                        <a href="<?php echo base_url('administrator/matakuliah') ?>" class="btn btn-sm mb-1 btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-sm mb-1 btn-primary">Simpan</button>
                    </div>
                </form>
                </div>




</div>
</section>
</div>