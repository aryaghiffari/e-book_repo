<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="profil">
                <i class="material-icons custom-icon">spa</i>
                <span>E-Book Repository</span>
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= session()->get('username'); ?></div>
                <div class="email"><?= session()->get('email'); ?></div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list active">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="/pages/dashboard/">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">collections_bookmark</i>
                        <span>Buku</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="/buku/">Daftar Buku</a>
                        </li>
                        <?php if (session()->get('role') == 'admin') : ?>
                            <li>
                                <a href="/buku/create">Tambah Buku</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                <li class="header">OTHER NAVIGATION</li>
                <li>
                    <a href="/pages/about/">
                        <i class="material-icons">info</i>
                        <span>About</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('auth/logout'); ?>">
                        <i class="material-icons">input</i>
                        <span>Logout</span>
                    </a>
                </li>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2023 Arya Ghiffari.
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->