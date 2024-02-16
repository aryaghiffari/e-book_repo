<!-- Top Bar -->
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Mohon Tunggu...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="#">E-Book Repository | <?php if (session()->get('role') == 'pengguna') {
                                                                        echo 'Pengguna';
                                                                    } else {
                                                                        echo 'Admin';
                                                                    } ?></a>
        </div>

    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- #Top Bar -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>E-Book Repository</h2>
            </div>