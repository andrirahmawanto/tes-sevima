<footer class="footer text-right">
    <strong> &copy; 2023 - Andri Rahmawanto, All Rights Reserved </strong>
</footer>
<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/detect.js"></script>
<script src="<?php echo base_url() ?>assets/js/fastclick.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url() ?>assets/js/waves.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/switchery/switchery.min.js"></script>

<!-- Datatable  -->
<script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.colVis.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

<!-- init -->
<script src="<?php echo base_url() ?>assets/pages/jquery.datatables.init.js"></script>

<!-- Counter js  -->
<script src="<?php echo base_url() ?>assets/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/counterup/jquery.counterup.min.js"></script>

<!--Morris Chart-->
<script src="<?php echo base_url() ?>assets/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/raphael/raphael-min.js"></script>
<script src="<?php echo base_url() ?>assets/pages/jquery.morris.init.js"></script>

<!-- Dashboard init -->
<script src="<?php echo base_url() ?>assets/pages/jquery.dashboard.js"></script>
<!--Summernote js-->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<!-- App js -->
<script src="<?php echo base_url() ?>assets/js/jquery.core.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.app.js"></script>

<!-- Modal-Effect -->
<script src="<?php echo base_url() ?>assets/plugins/custombox/js/custombox.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/custombox/js/legacy.min.js"></script>

<!--Form Wizard-->
<script src="<?php echo base_url() ?>assets/plugins/jquery.steps/js/jquery.steps.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<!--wizard initialization-->
<script src="<?php echo base_url() ?>assets/pages/jquery.wizard-init.js"></script>

<!-- Jquery ui js -->
<script src="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>

<!--Wysiwig js-->
<script src="<?php echo base_url() ?>assets/plugins/tinymce/tinymce.min.js"></script>

<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.11/js/dataTables.checkboxes.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
<!-- Datatable Kelas -->

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
 $(document).ready(function() {
  $('#summernote').summernote();
});
 imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
        blah.src = URL.createObjectURL(file)
    }
}
</script>

<script>
    $(function () {
                // sortable
                $(".sortable").sortable({
                    connectWith: '.sortable',
                    items: '.card-draggable',
                    revert: true,
                    placeholder: 'card-draggable-placeholder',
                    forcePlaceholderSize: true,
                    opacity: 0.77,
                    cursor: 'move'
                });
            });
    
    TableManageButtons.init();
    function goBack() {
        window.history.back();
    }
</script>
</body>
</html>

<!-- https://jsfiddle.net/gyrocode/snqw56dw/ -->