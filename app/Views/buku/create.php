<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                Tambah Buku
                <small>Form Tambah Buku</small>
            </h2>
        </div>

        <form action="/buku/save" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="body">
                <h2 class="card-inside-title">Judul Buku</h2>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Ketik Judul Buku" name="judul" id="judul" value="<?= old('judul'); ?>">
                            </div>
                            <?php if (session()->get('validation')) : ?>
                                <div class="alert alert-danger" role="alert" id="alert_judul">
                                    <?= session()->get('validation')->listErrors() ?>
                                </div>
                            <?php endif; ?>
                            <script>
                                // Menyembunyikan alert setelah 3 detik
                                setTimeout(function() {
                                    document.getElementById('alert_judul').style.display = 'none';
                                }, 3000);
                            </script>
                        </div>
                    </div>
                </div>
                <h2 class="card-inside-title">Penulis</h2>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Ketik Penulis" name="penulis" id="penulis" value="<?= old('penulis'); ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="card-inside-title">Penerbit</h2>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Ketik Penerbit" name="penerbit" id="penerbit" value="<?= old('penerbit'); ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="sampul">Upload Sampul</label>
                    <div class="col-sm-2">
                        <img src="/sampul_buku/default-sampul.png" class="img-thumbnail img-preview">
                    </div>
                    <input type="file" class="form-control" id="sampul" name="sampul" onchange="previewImg()" accept="image/png, image/jpeg, image/jpg">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="sampul">Upload File</label>
                    <input type="file" class="form-control" id="file" name="file" required>
                </div>
                <button type="submit" class="btn bg-orange waves-effect">
                    <i class=" material-icons">save</i>
                    <span>Simpan</span>
                </button>
                <a href="/buku" class="btn bg-blue waves-effect m-l-10">
                    <i class="material-icons">reply</i>
                    <span>Kembali</span>
                </a>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>