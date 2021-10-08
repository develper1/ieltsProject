<footer class="main-footer">
    <strong>Copyright &copy; <?= date("Y")?> <a href="#">Immigration</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
 // $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>


<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>

<!-- <script src="plugins/daterangepicker/daterangepicker.js"></script> -->

<script src="./plugins/php-date-formatter.min.js"></script>
<script src="./plugins/jquery.mousewheel.js"></script>
<script src="./plugins/jquery.datetimepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>-->
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/custom.js"></script>
<script src="dist/js/application_history.js"></script>
<!-- AdminLTE for demo purposes 
<script src="dist/js/demo.js"></script>
-->
<!-- AdminLTE dashboard demo (This is only for demo purposes) 
<script src="dist/js/pages/dashboard.js"></script> -->

<script>
  $(function () {
    $("#datatable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
     // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');
    
    /* $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    */
  });

  $(function () {
  $.validator.setDefaults({
    submitHandler: function () {

      //alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
     /* password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },*/
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
//for date sybmission
$('#date_submission').datetimepicker({

format:'Y-m-d H:i:s ',
formatTime:' H:i:s',
//formatDate:'d.m.Y',
});


$('#date_submission1').click(function(){
  $('#date_submission').datetimepicker('show');
});



$('#date_birth').datetimepicker({

format:'Y-m-d H:i:s ',
formatTime:' H:i:s',
//formatDate:'d.m.Y',
});


$('#date_birth1').click(function(){
  $('#date_birth').datetimepicker('show');
});



$('#date_expire').datetimepicker({

format:'Y-m-d H:i:s ',
formatTime:' H:i:s',
//formatDate:'d.m.Y',
});


$('#date_expire1').click(function(){
  $('#date_expire').datetimepicker('show');
});


$('#date_send').datetimepicker({

format:'Y-m-d H:i:s ',
formatTime:' H:i:s',
//formatDate:'d.m.Y',
});


$('#date_send1').click(function(){
  $('#date_send').datetimepicker('show');
});

$('#date_read').datetimepicker({

format:'Y-m-d H:i:s ',
formatTime:' H:i:s',
//formatDate:'d.m.Y',
});


$('#date_read1').click(function(){
  $('#date_read').datetimepicker('show');
});

/*$('#date_birth').datetimepicker({

format:'Y-m-d ',
//formatDate:'d.m.Y',
});*/

$('.date').datetimepicker({
format:'Y-m-d',
//formatDate:'d.m.Y',
});


$('#date_birth1').click(function(){
  $('#date_birth').datetimepicker('show');
});
$(function () {
    // Summernote
    $('.editor').summernote()
  });  

      
</script>
</body>
</html>
