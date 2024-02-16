<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                Detail Buku <?= $buku['judul']; ?>
                <small>Detail buku yang dipilih</small>
            </h2>
        </div>
        <div class="body">
            <div class="thumbnail">
                <img src="/sampul_buku/<?= $buku['sampul']; ?>" width="150px" height="170px" alt="Sampul buku">
                <div class="caption">
                    <h3><?= $buku['judul']; ?></h3>
                    <p>
                        Penulis : <?= $buku['penulis']; ?>
                    </p>

                    <p>
                        Penerbit : <?= $buku['penerbit']; ?>
                    </p>

                    <p>
                        Ditambahkan pada : <?= $buku['created_at']; ?>
                    </p>

                    <p>
                        <a href="<?= base_url('buku/pdf/' . $buku['slug']) ?>" class="btn btn-success waves-effect" role="button">
                            <i class="material-icons">book</i> Baca Buku
                        </a>
                        <?php if (session()->get('role') == 'admin') : ?>
                            <a href="/buku/edit/<?= $buku['slug']; ?>" class="btn btn-primary waves-effect" role="button">
                                <i class="material-icons">edit</i> Edit
                            </a>
                        <?php endif; ?>
                        <a href="/buku" class="btn btn-warning waves-effect" role="button">
                            <i class="material-icons">arrow_back</i> Kembali
                        </a>
                    </p>

                    <?php if (session()->get('role') == 'admin') : ?>
                        <form action="/buku/<?= $buku['id']; ?>" method="post" class="form-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <div class="row clearfix js-sweetalert">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <button class="btn btn-danger waves-effect" data-type="cancel" id="deleteButton">
                                        Hapus
                                        <i class="material-icons">delete</i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>