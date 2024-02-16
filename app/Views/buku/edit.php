<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                Ubah Buku
                <small>Form Ubah Buku</small>
            </h2>
        </div>

        <form action="/buku/update/<?= $buku['id']; ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="slug" value="<?= $buku['slug']; ?>">
            <input type="hidden" name="sampulLama" value="<?= $buku['sampul']; ?>">
            <input type="hidden" name="fileLama" value="<?= $buku['file']; ?>">
            <div class="body">
                <h2 class="card-inside-title">Judul Buku</h2>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Ketik Judul Buku" name="judul" id="judul" value="<?= (old('judul')) ? old('judul') : $buku['judul'] ?>">
                            </div>
                            <?php if (session('validation')) : ?>
                                <div class="alert alert-danger alert-dismissible" id="alert_judul">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <ul>
                                        <?php foreach (session('validation')->getErrors('judul') as $error) : ?>
                                            <li><?= esc($error) ?></li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                                <script>
                                    // Menyembunyikan alert setelah 3 detik
                                    setTimeout(function() {
                                        document.getElementById('alert_judul').style.display = 'none';
                                    }, 3000);
                                </script>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <h2 class="card-inside-title">Penulis</h2>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Ketik Penulis" name="penulis" id="penulis" value="<?= (old('penulis')) ? old('penulis') : $buku['penulis'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="card-inside-title">Penerbit</h2>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Ketik Penerbit" name="penerbit" id="penerbit" value="<?= (old('penerbit')) ? old('penerbit') : $buku['penerbit'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="sampul">Upload Sampul</label>
                    <div class="col-sm-2">
                        <img src="/sampul_buku/<?= $buku['sampul']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <input type="file" class="form-control" id="sampul" name="sampul" onchange="previewImg()">
                </div>
                <!-- <div class="input-group mb-3">
                    <label class="input-group-text" for="sampul">Upload File</label>
                    <input type="file" class="form-control" id="file" name="file">

                </div> -->
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