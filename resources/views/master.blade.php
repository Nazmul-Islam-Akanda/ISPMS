
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Admin-Dashboards</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
  <link href="{{url('css/nova-icons.css')}}" rel="stylesheet">

  <!-- CSS Implementing Libraries -->
  <link rel="stylesheet" href="{{url('css/animate.min.css')}}">
  <link rel="stylesheet" href="{{url('css/jquery.mCustomScrollbar.css')}}">
  <link rel="stylesheet" href="{{url('css/flatpickr.min.css')}}">
  <link rel="stylesheet" href="{{url('css/select2.min.css')}}">
  <link rel="stylesheet" href="{{url('css/chartist.min.css')}}">
  <link rel="stylesheet" href="{{url('css/chartist-plugin-tooltip.css')}}">
  <link rel="stylesheet" href="{{url('css/jquery.shorten.css')}}">

  <!-- CSS Nova Template -->
  <link rel="stylesheet" href="{{url('css/theme.css')}}">
</head>

<body class="has-sidebar has-fixed-sidebar-and-header">
  

@include('admin.fixed.header')


<main class="main">

@include('admin.fixed.sidebar')




@yield('content')


</main>

<!-- JS Global Compulsory -->
<script src="{{url('js/jquery.min.js')}}"></script>
<script src="{{url('js/jquery-migrate.min.js')}}"></script>
<script src="{{url('js/popper.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>

<!-- JS Implementing Libraries -->
<script src="{{url('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{url('js/flatpickr.min.js')}}"></script>
<script src="{{url('js/select2.full.min.js')}}"></script>
<script src="{{url('js/chartist.min.js')}}"></script>
<script src="{{url('js/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{url('js/chartist-bar-labels.js')}}"></script>
<script src="{{url('js/resizeSensor.min.js')}}"></script>
<script src="{{url('js/jquery.shorten.js')}}"></script>
<script src="{{url('js/jquery.dataTables.min.js')}}"></script>
{{-- dataTables.select.js were here --}}

<!-- JS Nova -->
<script src="{{url('js/hs.core.js')}}"></script>
<script src="{{url('js/hs.malihu-scrollbar.js')}}"></script>
<script src="{{url('js/hs.side-nav.js')}}"></script>
<script src="{{url('js/hs.unfold.js')}}"></script>
<script src="{{url('js/hs.flatpickr.js')}}"></script>
<script src="{{url('js/hs.header-search.js')}}"></script>
<script src="{{url('js/hs.select2.js')}}"></script>
<script src="{{url('js/hs.chartist-area.js')}}"></script>
<script src="{{url('js/hs.chartist-bar.js')}}"></script>
<script src="{{url('js/hs.chartist-pie.js')}}"></script>
<script src="{{url('js/hs.chartist-donut.js')}}"></script>
<script src="{{url('js/hs.datatables.js')}}"></script>

<!-- JS Libraries Init. -->
<script>
  $(document).on('ready', function () {
    // initialization of custom scroll
    $.HSCore.components.HSMalihuScrollBar.init($('.js-custom-scroll'));

    // initialization of sidebar navigation component
    $.HSCore.components.HSSideNav.init('.js-side-nav');

    // initialization of dropdown component
    $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
      unfoldHideOnScroll: false,
      afterOpen: function () {
        // initialization of charts
        $.HSCore.components.HSChartistBar.init('#activity .js-bar-chart');

        setTimeout(function () {
          $('#activity .js-bar-chart').css('opacity', 1);
        }, 100);

        // help function for accordions in hidden block
        $('#headerProjects .accordion-header').on('click', function () {
          // vars
          var target = $(this).data('target');

          $(target).collapse('show');
        });
      }
    });

    // initialization of range datepicker
    $.HSCore.components.HSFlatpickr.init('#headerRightSidebarDatepicker', {
      locale: {
        weekdays: {
          shorthand: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]
        }
      },
      nextArrow: '<i class="nova-arrow-right icon-text icon-text-xs"></i>',
      prevArrow: '<i class="nova-arrow-left icon-text icon-text-xs"></i>'
    });

    $.HSCore.components.HSFlatpickr.init('#rangeDatepicker, #rangeDatepickerMyPortfolio', {
      locale: {
        weekdays: {
          shorthand: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]
        },
        rangeSeparator: ' - '
      },
      nextArrow: '<em class="nova-arrow-right"></em>',
      prevArrow: '<em class="nova-arrow-left"></em>'
    });

    // initialization of show on type module
    $.HSCore.components.HSHeaderSearch.init('.js-header-search');

    // initialization of show on type module
    $.HSCore.components.HSSelect2.init('.js-custom-select');

    // initialization of charts
    $.HSCore.components.HSChartistArea.init('.js-area-chart');
    $.HSCore.components.HSChartistBar.init('.js-bar-chart');
    $.HSCore.components.HSChartistDonut.init('.js-donut-chart');

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
      $(e.currentTarget.hash).find('.js-area-chart').each(function (el, tab) {
        tab.__chartist__.update();
      });
    });

    // initialization of datatables
    $.HSCore.components.HSDatatables.init('.js-datatable', {
      "columnDefs": [
        { "orderable": false, "targets": 8 }
      ]
    });
  });
</script>


</body>
</html>
