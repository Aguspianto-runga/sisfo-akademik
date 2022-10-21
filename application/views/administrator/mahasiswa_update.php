       <!-- Content Header (Page header) -->
       <div class="content-header">
        
        </div><!-- /.content-header -->


<!-- Main content -->
<section class="content">
<div class="container-fluid">






            <?php foreach($mahasiswa as $mhs): ?>
            <?php echo form_open_multipart('administrator/mahasiswa/update_mahasiswa_aksi') ?>
            <div class="card">
                <div class="card-header bg-gradient-cyan">
                    <h3 class="m-0"><i class="fas fa-user-graduate"></i> Update Mahasiswa</h3>
                </div>
                <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="settings">
                        <form class="form-horizontal">
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                            <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
                            <input type="text" name="nama" class="form-control" value="<?php echo $mhs->nama ?>">
                            <?php echo form_error('nama', '<div class="text-danger small" ml-3>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">NIM</label>
                            <div class="col-sm-10">
                                <input type="number" name="nim" class="form-control" value="<?php echo $mhs->nim ?>">
                                <?php echo form_error('nim', '<div class="text-danger small" ml-3>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                            <input type="text" name="alamat" class="form-control" id="inputEmail" value="<?php echo $mhs->alamat ?>">
                            <?php echo form_error('alamat', '<div class="text-danger small" ml-3>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="inputEmail" value="<?php echo $mhs->email ?>">
                            <?php echo form_error('email', '<div class="text-danger small" ml-3>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Telepon</label>
                            <div class="col-sm-10">
                            <input type="number" name="telpon" class="form-control" id="inputEmail" value="<?php echo $mhs->telpon ?>">
                            <?php echo form_error('alamat', '<div class="text-danger small" ml-3>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                            <input type="text" name="tempat_lahir" class="form-control" id="inputEmail" value="<?php echo $mhs->tempat_lahir ?>">
                            <?php echo form_error('tempat_lahir', '<div class="text-danger small" ml-3>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                            <input type="date" name="tanggal_lahir" class="form-control" id="inputEmail" value="<?php echo $mhs->tanggal_lahir ?>">
                            <?php echo form_error('tanggal_lahir', '<div class="text-danger small" ml-3>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select name="jenis_kelamin" class="form-control" id="inputEmail" >
                                <option type="select" value="<?php echo $mhs->jenis_kelamin ?>"><?php echo $mhs->jenis_kelamin ?></option>
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                                </select>
                            <?php echo form_error('jenis_kelamin', '<div class="text-danger small" ml-3>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Jurusan</label>
                            <div class="col-sm-10">
                            <select type="select" class="form-control" id="inputEmail" name="nama_jurusan">
                                <option value="<?php echo $mhs->nama_jurusan ?>"> <?php echo $mhs->nama_jurusan ?></option>
                                <?php foreach($jurusan as $jrs) : ?>
                                    <option value="<?php echo $jrs->nama_jurusan ?>"><?php echo $jrs->nama_jurusan; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('jurusan', '<div class="text-danger small" ml-3>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                    <img class="profile-user-img img-fluid" src="<?php echo base_url('assets/img/').$mhs->foto; ?>" alt="User profile picture">
                                    <input type="file" name="foto" class="form-control" id="inputEmail" value="<?php echo $mhs->foto ?>">
                                <?php echo form_error('foto', '<div class="text-danger small" ml-3>') ?>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <a href="<?php echo base_url('administrator/mahasiswa') ?>" class="btn btn-sm mb-1 btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-sm mb-1 btn-primary">Simpan</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                    </div>
            </div>
            <?php endforeach; ?>





</div>
</section>
</div>