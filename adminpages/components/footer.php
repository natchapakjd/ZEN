<footer class="main-footer">
  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.2.0
  </div>
</footer>

<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="assets/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard.js"></script>

<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jszip/jszip.min.js"></script>
<script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- CodeMirror -->
<script src="assets/plugins/codemirror/codemirror.js"></script>
<script src="assets/plugins/codemirror/mode/css/css.js"></script>
<script src="assets/plugins/codemirror/mode/xml/xml.js"></script>
<script src="assets/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- Page specific script -->
<script>
  $(function() {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    function showDetails(ordId) {
        // ถ้ารายละเอียดถูกแสดงอยู่แล้วให้ซ่อน
        var detailsRow = document.getElementById('detailsRow_' + ordId);
        if (detailsRow.style.display === 'table-row') {
            detailsRow.style.display = 'none';
        } else {
            // ซ่อนรายละเอียดทั้งหมดก่อน
            hideAllDetails();

            // แสดงเฉพาะรายละเอียดของคำสั่งซื้อที่ถูกคลิก
            detailsRow.style.display = 'table-row';
        }
    }

    function hideAllDetails() {
        // ซ่อนรายละเอียดของทุกคำสั่งซื้อ
        <?php foreach ($orders as $order) : ?>
            document.getElementById('detailsRow_<?php echo $order['ord_id']; ?>').style.display = 'none';
        <?php endforeach; ?>
    }
</script>
