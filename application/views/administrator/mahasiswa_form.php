        <!-- Content Header (Page header) -->
        <div class="content-header">
        </div><!-- /.content-header -->


<!-- Main content -->
<section class="content">
<div class="container-fluid">






            <div class="card m-auto" style="width: 75%;">
                <div class="card-header bg-cyan">
                    <h3 class="card-title"><i class="fas fa-user-graduate"></i><b> Input Mahasiswa</b></h3>
                </div><!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                <?php echo form_open_multipart('administrator/mahasiswa/tambah_mahasiswa_aksi') ?>
                    <div class="form-group">
                        <label for="">NIM</label>
                        <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM">
                        <?php echo form_error('nim', '<div class="text-danger small" ml-3>') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama ">
                        <?php echo form_error('nama', '<div class="text-danger small" ml-3>') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat ">
                        <?php echo form_error('alamat', '<div class="text-danger small" ml-3>') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Masukkan Email">
                        <?php echo form_error('email', '<div class="text-danger small" ml-3>') ?>
                    </div>
                    <div class="form-group">
                        <label for="">No. Telpon</label>
                        <input type="text" name="telpon" class="form-control" placeholder="Masukkan No. Telepon">
                        <?php echo form_error('telpon', '<div class="text-danger small" ml-3>') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir">
                        <?php echo form_error('tempat_lahir', '<div class="text-danger small" ml-3>') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                        <?php echo form_error('tanggal_lahir', '<div class="text-danger small" ml-3>') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select class="custom-select" name="jenis_kelamin">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                        </select>
                        <?php echo form_error('jenis_kelamin', '<div class="text-danger small" ml-3>') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Jurusan</label>
                        <select class="custom-select" name="nama_jurusan">
                            <option value="">Pilih Jurusan</option>
                            <?php foreach($jurusan as $jrs) : ?>
                                <option value="<?php echo $jrs->nama_jurusan ?>"><?php echo $jrs->nama_jurusan; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php echo form_error('nama_jurusan', '<div class="text-danger small" ml-3>') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Foto</label><br>
                        <input type="file" name="foto">
                    </div>
                <?php form_close(); ?>
                </div><!-- /.card-body -->
                    <div class="card-footer">
                        <a href="<?php echo base_url('administrator/mahasiswa') ?>" class="btn btn-sm mb-1 btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-sm mb-1 btn-primary">Simpan</button>
                    </div>
            </div>







</div>
</section>
</div>