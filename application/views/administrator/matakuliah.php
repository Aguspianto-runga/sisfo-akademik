        <!-- Content Header (Page header) -->
        <div class="content-header">
        </div><!-- /.content-header -->


<!-- Main content -->
<section class="content">
<div class="container-fluid">

    <?= $this->session->flashdata('pesan'); ?>


        <div class="row">

            <div class="col">
                <div class="card card-success">
                    <div class="card-header bg-gradient-cyan">
                        <h3 class="card-title"><i class="fas fa-book"></i><b> Mata Kuliah</b></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div><!-- /.card-tools -->
                    </div><!-- /.card-header -->
                    <div class="card-body">

                        <?php echo anchor('administrator/matakuliah/tambah_matakuliah', '<button class="btn btn-sm btn-info mb-2"><i class="fas fa-plus"></i> Tambah Mata Kuliah</button>') ?>
                        <div class="table-responsive">
                            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table dataTable table-hover" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                            <thead>
                                                <tr >
                                                    <th>No</th>
                                                    <th>Kode</th>
                                                    <th>Nama Mata Kuliah</th>
                                                    <th>Jurusan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach($matakuliah as $mk): ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $mk->kode_matakuliah ?></td>
                                                    <td><?php echo $mk->nama_matakuliah ?></td>
                                                    <td><?php echo $mk->nama_jurusan ?></td>
                                                    <td width="20%">
                                                        <?php echo anchor('administrator/matakuliah/detail/' . $mk->kode_matakuliah, '<div class="btn btn-sm btn-primary mb-1"><i class="fas fa-list"></i></div>')?>
                                                        <?php echo anchor('administrator/matakuliah/update/' . $mk->kode_matakuliah, '<div class="btn btn-sm btn-success mb-1"><i class="fas fa-edit"></i></div>')?>
                                                        <a href="<?php echo base_url('administrator/matakuliah/delete/' . $mk->kode_matakuliah . "")?>" class="btn btn-danger btn-sm mb-1" onclick="return confirm('Anda yakin menghapus data yg anda pilih?');"><i class="fas fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                                </div><!-- /.card-body -->
                            </div><!-- /.card -->
                        </div>

        </div><!-- /.row -->


</div>
</section>
</div>