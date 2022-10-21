        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid alert bg-gradient-cyan" role="alert">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-user"></i> Profil</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        </div><!-- /.content-header -->



<!-- Main content -->
<section class="content">
<div class="container-fluid">





            <div class="card card-primary card-outline m-auto" style="width: 60%;">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url('assets/img/').$foto; ?>" alt="User profile picture">
                    </div>

                        <h3 class="profile-username text-center"><?php echo $username; ?></h3>
                        <p class="text-muted text-center">Bergabung sejak <?= date('d F Y', $date_created); ?></p>

                    <div class="card-body">
                        <p></p>
                    </div>

                    <a href="<?php echo base_url('administrator/dashboard')?>" class="btn btn-secondary btn-block"><b>Dashboard</b></a>
                <!-- /.card-body -->
            </div>



</div>
</section>
</div>