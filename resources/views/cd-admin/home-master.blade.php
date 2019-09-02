<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Page Title -->
  <title>@yield('page-title')</title>


  <!-- FavIcon Link -->
  <link rel="icon" type="image/ico" href="{{url('public/favicon.ico')}}">


  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keyword')">


  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{url('public/cd-admin/creatu/bootstrap/css/bootstrap.min.css')}}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('public/cd-admin/creatu/plugins/datatables/dataTables.bootstrap.css')}}">

  <!-- daterange picker -->
  <link rel="stylesheet" href="{{url('public/cd-admin/creatu/plugins/daterangepicker/daterangepicker.css')}}">

  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{url('public/cd-admin/creatu/plugins/datepicker/datepicker3.css')}}">

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{url('public/cd-admin/creatu/plugins/iCheck/all.css')}}">

  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{url('public/cd-admin/creatu/plugins/colorpicker/bootstrap-colorpicker.min.css')}}">

  <!-- style -->
  <link rel="stylesheet" href="{{url('public/cd-admin/creatu/css/style.css')}}">

  <!-- component -->
  <link rel="stylesheet" href="{{url('public/cd-admin/creatu/css/component.css')}}">

  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{url('public/cd-admin/creatu/plugins/timepicker/bootstrap-timepicker.min.css')}}">

  <!-- Select2 -->
  <link rel="stylesheet" href="{{url('public/cd-admin/creatu/plugins/select2/select2.min.css')}}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('public/cd-admin/creatu/dist/css/AdminLTE.min.css')}}">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="{{url('public/cd-admin/creatu/dist/css/skins/_all-skins.min.css')}}">

   <!-- iCheck -->
   <link rel="stylesheet" href="{{url('public/cd-admin/creatu/plugins/iCheck/flat/blue.css')}}">

   <!-- Morris chart -->
   <link rel="stylesheet" href="{{url('public/cd-admin/creatu/plugins/morris/morris.css')}}">

   <!-- jvectormap -->
   <link rel="stylesheet" href="{{url('public/cd-admin/creatu/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">

   <!-- Date Picker -->
   <link rel="stylesheet" href="{{url('public/cd-admin/creatu/plugins/datepicker/datepicker3.css')}}">

   <!-- Daterange picker -->
   <link rel="stylesheet" href="{{url('public/cd-admin/creatu/plugins/daterangepicker/daterangepicker.css')}}">

   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="{{url('public/cd-admin/creatu/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

   <!-- jQuery 2.2.3 -->
   <script src="{{url('public/cd-admin/creatu/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>

   <!-- jQuery UI 1.11.4 -->
   <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

   <!--summernote-->

   {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"> --}}

  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">

 </head>
 <body class="sidebar-mini wysihtml5-supported skin-purple">

  <div class="wrapper">

    @include('cd-admin.header.header')

    <div style="min-height: 85vh;">
      @yield('content')
    </div>

    @include('cd-admin.footer.footer')

  </div>
</body>
<script   src="https://code.jquery.com/jquery-1.12.1.js"></script>
<script>
  $(document).ready(function(){
    $('.add_another').click(function() {
      $("#card").append('<div class="group"><hr><div class="form-group"><label class="col-sm-4 control-label">Header</label><div class="col-sm-6"><div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div><input type="text" class="form-control" name="header[]" required="" value="" placeholder="Enter Header" ></div></div></div><div class="form-group"><label class="col-sm-4 control-label"> Description</label><div class="col-sm-6"><div class="input-group"><div class="input-group-addon"><i class="fa fa-pencil"></i></div><textarea type="" name="description[]" class="form-control" rows="5" id="inputDescription3" value="" placeholder="Enter Description"></textarea></div></div></div><label class="col-sm-4 control-label"></label><input type="button" class="remove btn btn-danger" id="close" value="Delete Card"/></div>');

      $('.group').on('click','.remove',function() {
        $(this).parent().remove();
      });

    });
  })
</script>
<script>
  $(document).ready(function () {
    var count = 1;
    $("#submitButton").click(function () {
      if (count >= 2) {
        $("#submitButton").hide();
      } else count++

    });

  })
</script>


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- Bootstrap 3.3.6 -->
<script src="{{url('public/cd-admin/creatu/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{url('public/cd-admin/creatu/plugins/morris/morris.min.js')}}"></script>

<!-- Sparkline -->
<script src="{{url('public/cd-admin/creatu/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

<!-- jvectormap -->
<script src="{{url('public/cd-admin/creatu/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{url('public/cd-admin/creatu/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

<!-- jQuery Knob Chart -->
<script src="{{url('public/cd-admin/creatu/plugins/knob/jquery.knob.js')}}"></script>

<!-- Select2 -->
<script src="{{url('public/cd-admin/creatu/plugins/select2/select2.full.min.js')}}"></script>

 <!--summerNote-->
 <script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
<script>
      $(document).ready(function() {
      $('#summernote').summernote();

        });
    </script>
    <script>
      $(document).ready(function() {
      $('#summernote1').summernote();

        });
    </script>
</script>
<!-- InputMask -->
<script src="{{url('public/cd-admin/creatu/plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{url('public/cd-admin/creatu/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{url('public/cd-admin/creatu/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>

<!-- DataTables -->
<script src="{{url('public/cd-admin/creatu/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('public/cd-admin/creatu/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>

<!-- Page Script -->
<script type="text/javascript">
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

<script src="{{url('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
 <script>
     CKEDITOR.replace( 'article-ckeditor' );
 </script>
 <script>
     CKEDITOR.replace( 'article-ckeditor1' );
 </script>

<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{url('public/cd-admin/creatu/plugins/daterangepicker/daterangepicker.js')}}"></script>

<!-- datepicker -->
<script src="{{url('public/cd-admin/creatu/plugins/datepicker/bootstrap-datepicker.js')}}"></script>

<!-- bootstrap color picker -->
<script src="{{url('public/cd-admin/creatu/plugins/colorpicker/bootstrap-colorpicker.min.js')}}"></script>

<!-- bootstrap time picker -->
<script src="{{url('public/cd-admin/creatu/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>

<!-- Page Script -->
<script type="text/javascript">
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate: moment()
    },
    function (start, end) {
      $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>

<!-- Bootstrap WYSIHTML5 -->
<script src="{{url('public/cd-admin/creatu/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>

<!-- Slimscroll -->
<script src="{{url('public/cd-admin/creatu/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>

<!-- iCheck 1.0.1 -->
<script src="{{url('public/cd-admin/creatu/plugins/iCheck/icheck.min.js')}}"></script>

<!-- FastClick -->
<script src="{{url('public/cd-admin/creatu/plugins/fastclick/fastclick.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{url('public/cd-admin/creatu/dist/js/app.min.js')}}"></script>

<!-- ChartJS 1.0.1 -->
<script src="{{url('public/cd-admin/creatu/plugins/chartjs/Chart.min.js')}}"></script>

<!-- chart script -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var areaChart = new Chart(areaChartCanvas);

    var areaChartData = {
      labels: ["January", "February", "March", "April", "May", "June"],
      datasets: [
      // {
      //   label: "Electronics",
      //   fillColor: "rgba(210, 214, 222, 1)",
      //   strokeColor: "rgba(210, 214, 222, 1)",
      //   pointColor: "rgba(210, 214, 222, 1)",
      //   pointStrokeColor: "#c1c7d1",
      //   pointHighlightFill: "#fff",
      //   pointHighlightStroke: "rgba(220,220,220,1)",
      //   data: [65, 59, 80, 81, 56, 55, 40]
      // },
      {
        label: "Digital Goods",
        fillColor: "rgba(60,141,188,0.9)",
        strokeColor: "rgba(60,141,188,0.8)",
        pointColor: "#3b8bba",
        pointStrokeColor: "rgba(60,141,188,1)",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(60,141,188,1)",
        data: [28, 48, 40, 19, 86, 27, 90]
      }
      ]
    };

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: false,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - Whether the line is curved between points
      bezierCurve: true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension: 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot: false,
      //Number - Radius of each point dot in pixels
      pointDotRadius: 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth: 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius: 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke: true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth: 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true
    };

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions);
  });
</script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('public/cd-admin/creatu/dist/js/pages/dashboard.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{url('public/cd-admin/creatu/dist/js/demo.js')}}"></script>

<!-- Pages JS -->
<script src="{{url('public/cd-admin/creatu/js/home.js')}}"></script>
<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
<script src="{{url('public/cd-admin/creatu/js/jquery.custom-file-input.js')}}"></script>


<script >
 $('#delete').on('show.bs.modal', function (event) {
 var button = $(event.relatedTarget) // Button that triggered the modal
 var slug = button.data('slug')

 var modal = $(this)

 modal.find('.modal-body #slug').val(slug)

})
</script>

<script >
 $('#delete-modal').on('show.bs.modal', function (event) {
 var button = $(event.relatedTarget) // Button that triggered the modal
 var id = button.data('id')

 var modal = $(this)

 modal.find('.modal-body #id').val(id)

})
</script>


</html>