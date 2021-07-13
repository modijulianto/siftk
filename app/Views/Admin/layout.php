<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= (isset($title)) ? $title : ''; ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="/img/logo-ftk.png">
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="/css/owl.carousel.css">
  <link rel="stylesheet" href="/css/owl.theme.css">
  <link rel="stylesheet" href="/css/owl.transitions.css">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="/css/animate.css">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="/css/normalize.css">
  <!-- meanmenu icon CSS
		============================================ -->
  <link rel="stylesheet" href="/css/meanmenu.min.css">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="/css/main.css">
  <!-- educate icon CSS
		============================================ -->
  <link rel="stylesheet" href="/css/educate-custon-icon.css">
  <!-- morrisjs CSS
		============================================ -->
  <link rel="stylesheet" href="/css/morrisjs/morris.css">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="/css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- metisMenu CSS
		============================================ -->
  <link rel="stylesheet" href="/css/metisMenu/metisMenu.min.css">
  <link rel="stylesheet" href="/css/metisMenu/metisMenu-vertical.css">
  <!-- calendar CSS
		============================================ -->
  <link rel="stylesheet" href="/css/calendar/fullcalendar.min.css">
  <link rel="stylesheet" href="/css/calendar/fullcalendar.print.min.css">
  <!-- x-editor CSS
		============================================ -->
  <link rel="stylesheet" href="/css/editor/select2.css">
  <link rel="stylesheet" href="/css/editor/datetimepicker.css">
  <link rel="stylesheet" href="/css/editor/bootstrap-editable.css">
  <link rel="stylesheet" href="/css/editor/x-editor-style.css">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="/css/data-table/bootstrap-table.css">
  <link rel="stylesheet" href="/css/data-table/bootstrap-editable.css">
  <!-- modals CSS
		============================================ -->
  <link rel="stylesheet" href="/css/modals.css">
  <!-- forms CSS
		============================================ -->
  <link rel="stylesheet" href="/css/form/all-type-forms.css">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="/style.css">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="/css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
  <!-- jquery
		============================================ -->
  <script src="/js/vendor/jquery-1.12.4.min.js"></script>
  <!-- bootstrap JS
		============================================ -->
  <script src="/js/bootstrap.min.js"></script>

  <script src="<?php echo base_url('/tinymce/tinymce.js') ?>"></script>
</head>

<body>
  <?= $this->include('Admin/Components/sidebar'); ?>
  <!-- Start Welcome area -->
  <div class="all-content-wrapper">
    <?= $this->include('Admin/Components/header'); ?>
    <!-- Static Table Start -->
    <?= $this->renderSection('content'); ?>
    <!-- Static Table End -->
    <?= $this->include('Admin/Components/footer'); ?>
  </div>

  <!-- wow JS
		============================================ -->
  <script src="/js/wow.min.js"></script>
  <!-- price-slider JS
		============================================ -->
  <script src="/js/jquery-price-slider.js"></script>
  <!-- meanmenu JS
		============================================ -->
  <script src="/js/jquery.meanmenu.js"></script>
  <!-- owl.carousel JS
		============================================ -->
  <script src="/js/owl.carousel.min.js"></script>
  <!-- sticky JS
		============================================ -->
  <script src="/js/jquery.sticky.js"></script>
  <!-- scrollUp JS
		============================================ -->
  <script src="/js/jquery.scrollUp.min.js"></script>
  <!-- mCustomScrollbar JS
		============================================ -->
  <script src="/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="/js/scrollbar/mCustomScrollbar-active.js"></script>
  <!-- metisMenu JS
		============================================ -->
  <script src="/js/metisMenu/metisMenu.min.js"></script>
  <script src="/js/metisMenu/metisMenu-active.js"></script>
  <!-- data table JS
		============================================ -->
  <script src="/js/data-table/bootstrap-table.js"></script>
  <script src="/js/data-table/tableExport.js"></script>
  <script src="/js/data-table/data-table-active.js"></script>
  <script src="/js/data-table/bootstrap-table-editable.js"></script>
  <script src="/js/data-table/bootstrap-editable.js"></script>
  <script src="/js/data-table/bootstrap-table-resizable.js"></script>
  <script src="/js/data-table/colResizable-1.5.source.js"></script>
  <script src="/js/data-table/bootstrap-table-export.js"></script>
  <!--  editable JS
		============================================ -->
  <script src="/js/editable/jquery.mockjax.js"></script>
  <script src="/js/editable/mock-active.js"></script>
  <script src="/js/editable/select2.js"></script>
  <script src="/js/editable/moment.min.js"></script>
  <script src="/js/editable/bootstrap-datetimepicker.js"></script>
  <script src="/js/editable/bootstrap-editable.js"></script>
  <script src="/js/editable/xediable-active.js"></script>
  <!-- Chart JS
		============================================ -->
  <script src="/js/chart/jquery.peity.min.js"></script>
  <script src="/js/peity/peity-active.js"></script>
  <!-- SweetAlert
		============================================ -->
  <script language="JavaScript" type="text/javascript" src="/js/sweetalert/sweetalert2.all.min.js"></script>
  <script language="JavaScript" type="text/javascript" src="/js/sweetalert/myscript.js"></script>
  <!-- tab JS
		============================================ -->
  <script src="/js/tab.js"></script>
  <!-- plugins JS
		============================================ -->
  <script src="/js/plugins.js"></script>
  <!-- main JS
		============================================ -->
  <script src="/js/main.js"></script>
  <!-- Custom JS
		============================================ -->
  <script src="/js/custom-script.js"></script>
  <script>
    $('.custom-file-input').on('change', function() {
      let fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
  </script>
</body>

</html>