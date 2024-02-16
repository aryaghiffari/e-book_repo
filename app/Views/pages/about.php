<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>

<div class="card profile-card">
    <div class="profile-header">&nbsp;</div>
    <div class="profile-body">

        <div class="image-area">
            <img src="<?= base_url(); ?>img/me.jpg" alt="AdminBSB - Profile Image" width="150px">
        </div>
        <div class="header">
            <h2>ABOUT ME</h2>
        </div>

        <div class="content-area">
            <h3>Arya Ghiffari</h3>
            <p>Mahasiswa Teknik Informatika</p>
            <p>Universitas Muhammadiyah Cirebon</p>
        </div>
    </div>
    <div class="profile-footer">
        <ul>
            <li>
                <div class="title">
                    <i class="material-icons">library_books</i>
                    Education
                </div>
                <br>
                <div class="content">
                    S1 Teknik Informatika Universitas Muhammadiyah Cirebon
                </div>
            </li>
            <li>
                <div class="title">
                    <i class="material-icons">location_on</i>
                    Location
                </div>
                <br>
                <div class="content">
                    Ds. Ciawi, Palimanan, kab.Cirebon
                </div>
            </li>

            <li>
                <div class="title">
                    <i class="material-icons">notes</i>
                    Description
                </div>
                <br>
                <div class="content">
                    Saya, seorang mahasiswa Teknik Informatika, merangkul kekreatifan dan ketelitian
                    dalam setiap proyek pengembangan web yang saya jalankan. Melalui perjalanan akademis saya,
                    saya tidak hanya memperoleh pemahaman mendalam tentang konsep-konsep teknis,
                    tetapi juga mengasah keterampilan desain dan antarmuka pengguna. Dengan semangat,
                    saya percaya dalam menciptakan solusi yang tidak hanya fungsional, tetapi juga estetis.
                    Terus ikuti perjalanan saya dalam dunia web development!
                </div>
            </li>
        </ul>
    </div>
</div>

<?= $this->endSection(); ?>