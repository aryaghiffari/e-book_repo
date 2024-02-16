<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>

<div class="row clearfix">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-pink hover-expand-effect">
            <div class="icon">
                <i class="material-icons">playlist_add_check</i>
            </div>
            <div class="content">
                <div class="text">Jumlah Buku</div>
                <div class="number count-to" data-from="0" data-to="<?= $totalBooks ?>" data-speed="15" data-fresh-interval="20"><?= $totalBooks ?></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-orange hover-expand-effect">
            <div class="icon">
                <i class="material-icons">person_add</i>
            </div>
            <div class="content">
                <div class="text">Jumlah Users</div>
                <div class="number count-to" data-from="0" data-to="<?= $totalUsers; ?>" data-speed="1000" data-fresh-interval="20"><?= $totalUsers; ?></div>
            </div>
        </div>
    </div>
</div>

<!-- #END# Widgets -->
<div class="col-lg-12 col-md-10 col-sm-12 col-xs-12 d-flex justify-content-center">
    <div class="card text-center">
        <div class="header">
            <h2>HOME</h2>
        </div>
        <div class="body">
            <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic_2" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-example-generic_2" data-slide-to="1" class="active"></li>
                    <li data-target="#carousel-example-generic_2" data-slide-to="2" class=""></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active left">
                        <img src="/img/UMC-Kampus.jpg">
                        <div class="carousel-caption">
                            <h3>Kampus</h3>
                            <p>Universitas Muhammadiyah Cirebon</p>
                        </div>
                    </div>
                    <div class="item next left">
                        <img src="/img/ti21d.jpg">
                        <div class="carousel-caption">
                            <h3>Teknik Informatika</h3>
                            <p>Mahasiswa dari Teknik Informatika TI21-D</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/img/kampusUMC.jpg">
                        <div class="carousel-caption">
                            <h3>Kampus</h3>
                            <p>Universitas Muhammadiyah Cirebon</p>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<script src="../../theme/js/pages/index.js"></script>
<?= $this->endSection(); ?>