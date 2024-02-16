<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>



<!-- Exportable Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Daftar Buku
                </h2>
            </div>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div id="myAlert" class="alert bg-green alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
                <script>
                    // Menyembunyikan alert setelah 3 detik
                    setTimeout(function() {
                        document.getElementById('myAlert').style.display = 'none';
                    }, 3000);
                </script>
            <?php endif; ?>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Sampul</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($buku as $b) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $b['judul']; ?></td>
                                    <td><img src="/sampul_buku/<?= $b['sampul']; ?>" alt="" class="sampul"></td>
                                    <td>
                                        <a href="/buku/<?= $b['slug']; ?>" class="btn btn-primary waves-effect">
                                            <i class="material-icons">search</i>
                                            <span>Detail</span>
                                        </a>
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
<!-- #END# Exportable Table -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?= $this->endSection(); ?>