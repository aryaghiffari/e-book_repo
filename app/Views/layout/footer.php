</div>
</section>
<!-- Jquery Core Js -->
<script src="<?= base_url() ?>plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?= base_url() ?>plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="<?= base_url() ?>plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?= base_url() ?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Bootstrap Notify Plugin Js -->
<script src="<?= base_url() ?>plugins/bootstrap-notify/bootstrap-notify.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?= base_url() ?>plugins/node-waves/waves.js"></script>

<!-- SweetAlert Plugin Js -->
<script src="<?= base_url() ?>plugins/sweetalert/sweetalert.min.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="<?= base_url() ?>plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Morris Plugin Js -->
<script src="<?= base_url() ?>plugins/raphael/raphael.min.js"></script>
<script src="<?= base_url() ?>plugins/morrisjs/morris.js"></script>

<!-- ChartJs -->
<script src="<?= base_url() ?>plugins/chartjs/Chart.bundle.js"></script>

<!-- Flot Charts Plugin Js -->
<script src="<?= base_url() ?>plugins/flot-charts/jquery.flot.js"></script>
<script src="<?= base_url() ?>plugins/flot-charts/jquery.flot.resize.js"></script>
<script src="<?= base_url() ?>plugins/flot-charts/jquery.flot.pie.js"></script>
<script src="<?= base_url() ?>plugins/flot-charts/jquery.flot.categories.js"></script>
<script src="<?= base_url() ?>plugins/flot-charts/jquery.flot.time.js"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="<?= base_url() ?>plugins/jquery-sparkline/jquery.sparkline.js"></script>
<!-- Dropzone Plugin Js -->
<script src="<?= base_url() ?>plugins/dropzone/dropzone.js"></script>
<!-- Jquery DataTable Plugin Js -->
<script src="<?= base_url() ?>plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?= base_url() ?>plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="<?= base_url() ?>plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="<?= base_url() ?>plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="<?= base_url() ?>plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="<?= base_url() ?>plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>


<!-- Custom Js -->
<script src="<?= base_url() ?>js/admin.js"></script>
<script src="<?= base_url() ?>js/pages/ui/dialogs.js"></script>
<script src="<?= base_url() ?>js/pages/tables/jquery-datatable.js"></script>
<script src="<?= base_url() ?>js/pages/index.js"></script>


<!-- Demo Js -->
<script src="<?= base_url() ?>js/demo.js"></script>

<script>
    function previewImg() {
        const sampul = document.querySelector('#sampul');
        const imgPreview = document.querySelector('.img-preview');

        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(sampul.files[0]);

        fileSampul.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>
</body>

</html>