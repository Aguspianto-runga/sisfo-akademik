        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid alert bg-gradient-cyan" role="alert">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-user-graduate"></i> Mahasiswa</h1>
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


                        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <?php echo anchor('administrator/mahasiswa/tambah_mahasiswa', '<button class="btn btn-sm btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Mahasiswa</button>') ?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table dataTable table-hover" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>NIM</th>
                                                    <th>Foto</th>
                                                    <th>Jurusan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                $no = 1;
                                                foreach($mahasiswa as $mhs) : ?>
                                                    <tr>
                                                        <td width="20px"><?php echo $no++ ?></td>
                                                        <td><?php echo $mhs->nama ?></td>
                                                        <td><?php echo $mhs->nim ?></td>
                                                        <td><img src="<?php echo base_url('assets/img/').$mhs->foto; ?>" width="45" alt=""></td>
                                                        <td><?php echo $mhs->nama_jurusan ?></td>
                                                        <td width="20%">
                                                            <?php echo anchor('administrator/mahasiswa/detail/' . $mhs->id, '<div class="btn btn-sm btn-outline-primary mb-1"><i class="fas fa-list"></i></div>')?>
                                                            <?php echo anchor('administrator/mahasiswa/update/' . $mhs->id, '<div class="btn btn-sm btn-outline-success disabled mb-1"><i class="fas fa-edit"></i></div>')?>
                                                            <a href="<?php echo base_url('administrator/mahasiswa/delete/' . $mhs->id . "")?>" class="btn btn-outline-danger btn-sm mb-1" onclick="return confirm('Anda yakin menghapus data yg anda pilih?');"><i class="fas fa-trash"></i></a>
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