<?= $this->extend('users/templates/template') ;?>
<?= $this->section('content') ;?>

<!-- Main -->
<div class="main container-fluid px-0">

    <div class="row">
        <!-- Sidebar -->
        <div class="sidebar d-flex flex-column align-items-stretch flex-shrink-0 col-2 p-0 bg-body-tertiary">
            <!-- Card Header -->
            <div class="list-header d-flex justify-content-center align-items-center flex-shrink-0 p-3">
                <h3>Daftar Toko</h3>
            </div> <!-- /.list-header -->

            <!-- Card List -->
            <div class="list-group list-group-flush border-bottom scrollarea">
                <!-- Card -->
                <div class="card my-3 mx-4 border border-dark" id="card">
                    <div class="row g-0">
                        <div class="card-img col-4">
                            <img src="<?= base_url(); ?>/img/toko[1].jpg" alt="image toko">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Nama Toko</h5>
                                <p class="card-text lh-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, blanditiis similique dicta dolores doloremque obcaecati?</p>
                            </div> <!-- /.card-body -->
                        </div> <!-- /.col-md-8 -->
                    </div> <!-- /.row -->
                </div>  <!-- /.card -->

            </div>  <!-- /.list-group -->
        </div>  <!-- /.sidebar -->

        <!-- Content -->
        <main class="mx-auto col-8">
            <div class="content d-flex justify-content-around flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3" id="content">
                <div class="col-5">
                    <div class="row">
                        <h3 class="text-green">Halo, Selamat Datang!</h3>
                        <h2 class="text-black fw-bold">Mau beli apa hari ini?</h2>
                        <p class="text break">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas deserunt sed amet tenetur. Nostrum, esse.</p>
                    </div> <!-- /.row -->
                </div> <!-- /.col-lg-5 -->
                <div class="col-5">
                    <img src="<?= base_url(); ?>/img/logoSGC[1].png" alt="Logo SGC" class="img-logo img-fluid">
                </div> <!-- /.col-lg-4 -->
            </div> <!-- /.d-flex -->

            <div class="produk pt-3 pb-2 mb-3 hide" id="produk">
                <div class="row">
                    <div class="col text-black">
                        <h3 class="fw-bold">Daftar Produk</h3>
                        <p>Berikut daftar produk [Toko A]</p>
                    </div>
                    <div class="category d-inline-block m-2">
                        <a href="#" class="btn text-black" id="categoryButton" role="button">
                            Semua
                        </a>
                    </div>
                </div>
            </div>
        </main> <!-- /.content -->

    </div> <!-- /.row -->

</div> <!-- /.container-fluid -->

<?= $this->endSection() ;?>