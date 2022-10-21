        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid alert bg-gradient-cyan" role="alert">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class=""><i class="fas fa-home"></i> Dashboard</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
        </div><!-- /.content-header -->



<!-- Main content -->
<section class="content">
<div class="container-fluid">



    <!-- Basic Card Example -->
      <div class="card shadow mb-4">
        <div class="card-header bg-gradient-light py-3">
          <h4 class="m-0 font-weight-bold">Selamat Datang!</h4>
                      <div class="ribbon-wrapper">
                        <div class="ribbon bg-primary">
                          Pian
                        </div>
                      </div>
        </div>
        <div class="card-body">
          <p>Selamat datang <strong><?php echo $username; ?></strong> di sistem 
            informasi akademik UKI Toraja, Anda login sebagai <strong><?php echo $level; ?></strong>
          </p>
          <p class="text-muted">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Veniam error voluptas tempora earum tempore, consectetur veritatis quam molestias aliquam, 
            tenetur ex, est voluptatibus assumenda magni sapiente. Saepe optio necessitatibus doloremque 
            consequatur quia in, exercitationem dignissimos libero quasi ea, hic, dolorem itaque 
            perspiciatis atque dolore mollitia natus est quaerat omnis soluta sapiente doloribus? Esse 
            delectus aperiam voluptatum a minima nesciunt ducimus omnis iste, inventore nam, 
            harum molestias sunt ullam eveniet numquam similique, quis quidem? Earum veritatis adipisci 
            cupiditate sint, assumenda alias quasi eligendi non voluptatibus tempora repellat. Deleniti 
            voluptates et voluptate magnam neque, 
            dignissimos ipsam ab reiciendis iste labore temporibus. Quasi.
          </p>
          <!-- Button trigger modal  -->
          <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-cogs"></i> Control Panel <em>(Modal)</em>
          </button>
          <!-- <a class="btn btn-info btn-sm" href="<?php echo base_url('administrator/control_panel') ?>" role="button"><i class="fas fa-cogs"></i> Control Panel</a> -->
        </div>
      </div>




      <div class="row"><!-- Left col -->
        <section class="col-lg-7 connectedSortable ui-sortable"><!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-gallery">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h5 class="card-title"><b>Gallery</b></h5>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <video class="col-10" controls>
                  <source src="<?php echo base_url('assets/video.mp4') ; ?>" type="video/mp4"/>
                </video>
              </div>
            </div><!-- /.card-gallery -->
          </div><!-- /.card -->
        </section><!-- /.Left col -->
        <section class="col-lg-5 connectedSortable ui-sortable"><!-- Map card -->
        <div class="card">
            <div class="card-gallery">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                  <h5 class="card-title"><b>Gallery</b></h5>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div><!-- /.card-header -->
              <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5" class="active"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo base_url('assets/img/qw.jpg') ; ?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo base_url('assets/img/172.jpg') ; ?>" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo base_url('assets/img/153.jpg') ; ?>" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo base_url('assets/img/1621.jpg') ; ?>" alt="Fourth slide">
                    </div>
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="<?php echo base_url('assets/img/o.jpg') ; ?>" alt="Fifth slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div><!-- /.card-header -->
          </div><!-- /.card -->
        </section><!-- right col -->
      </div>



            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Collapsible Accordion</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                <div id="accordion">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
                          Collapsible Group Item #1
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3
                        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum
                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                        nulla
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                        beer
                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                        labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="card card-danger">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                          Collapsible Group Danger
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3
                        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum
                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                        nulla
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                        beer
                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                        labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="card card-success">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">
                          Collapsible Group Success
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3
                        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum
                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                        nulla
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                        beer
                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                        labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->







  </div>
</section>
</div>
    
    
    
    
    
    
    
    
    
    <!-- Modal Control panel -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i> Control Panel</h4>
        </div>
        <div class="container align-content-center">
        <div class="container-fluid mt-2">
        
        
        
        
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>1.</h3>
                <br>
              </div>
              <div class="icon">
                <i class="fas fa-calendar"></i>
              </div>
              <a href="<?php echo base_url('administrator/tahun_akademik'); ?>" class="small-box-footer">Tahun Akademik </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>2.</h3>
                <br>
              </div>
              <div class="icon">
                <i class="fas fa-file"></i>
              </div>
              <a href="<?php echo base_url('administrator/krs'); ?>" class="small-box-footer">KRS </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>3.</h3>
                <br>
              </div>
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
              <a href="#" class="small-box-footer">KHS</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>4.</h3>
                <br>
              </div>
              <div class="icon">
                <i class="fas fa-user-graduate"></i>
              </div>
              <a href="<?php echo base_url('administrator/mahasiswa'); ?>" class="small-box-footer">Mahasiswa</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>5.</h3>
                <br>
              </div>
              <div class="icon">
                <i class="fas fa-list-ol"></i>
              </div>
              <a href="#" class="small-box-footer">Input Nilai</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>6.</h3>
                <br>
              </div>
              <div class="icon">
                <i class="fas fa-print"></i>
              </div>
              <a href="#" class="small-box-footer">Cetak Transkrip</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>7.</h3>
                <br>
              </div>
              <div class="icon">
                <i class="fas fa-filter"></i>
              </div>
              <a href="#" class="small-box-footer">Kategori</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>8.</h3>
                <br>
              </div>
              <div class="icon">
                <i class="fas fa-info"></i>
              </div>
              <a href="#" class="small-box-footer">Info Kampus</a>
            </div>
          </div>
          <!-- ./col -->
        
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>9.</h3>
                <br>
              </div>
              <div class="icon">
                <i class="fas fa-id-card"></i>
              </div>
              <a href="#" class="small-box-footer">Identitas</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>10.</h3>
                <br>
              </div>
              <div class="icon">
                <i class="fas fa-building"></i>
              </div>
              <a href="#" class="small-box-footer">Fasilitas</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>11.</h3>
                <br>
              </div>
              <div class="icon">
                <i class="fas fa-image"></i>
              </div>
              <a href="#" class="small-box-footer">Gallery</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>12.</h3>
                <br>
              </div>
              <div class="icon">
                <i class="fas fa-university"></i>
              </div>
              <a href="#" class="small-box-footer">Tentang Kampus</a>
            </div>
          </div>
          <!-- ./col -->
        </div>



        </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
    </div>
    </div>
  </div>
  </div>
  </div>