<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
    <style>
      body {
        font-family: 'Ubuntu Condensed', sans-serif;
        background: #0F466E;
        background: -webkit-linear-gradient(right,#0F466E 0%,#5093C4 75%);
        background: -moz-linear-gradient(right,#0F466E 0%,#5093C4 75%);
        background: -o-linear-gradient(right,#0F466E 0%,#5093C4 75%);
        background: -ms-linear-gradient(right,#0F466E 0%,#5093C4 75%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=  '#5093C4',endColorstr='#0F466E',GradientType=1);
        height: 100px;
      }
      .panel {
        border-radius: 0;
      }
      .modal-header {
        color: white;
        text-transform: uppercase;
        background: #0F466E;
        background: -webkit-linear-gradient(top,#0F466E 0%,#387AAB 75%);
        background: linear-gradient(top,#0F466E 0%,#387AAB 75%);
        background: -moz-linear-gradient(top,#0F466E 0%,#387AAB 75%);
        background: -o-linear-gradient(top,#0F466E 0%,#387AAB 75%);
        background: -ms-linear-gradient(top,#0F466E 0%,#387AAB 75%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=  '#0F466E',endColorstr='#387AAB',GradientType=0);
        height: 50px;
        overflow: hidden;
      }
      .help-block {
        font-size: 10px;
      }
      .banner {
        padding: 10px;
        font-size: 20px;
        background: rgba(147,206,222,1);
background: -moz-linear-gradient(left, rgba(147,206,222,1) 0%, rgba(117,189,209,1) 41%, rgba(73,165,191,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(147,206,222,1)), color-stop(41%, rgba(117,189,209,1)), color-stop(100%, rgba(73,165,191,1)));
background: -webkit-linear-gradient(left, rgba(147,206,222,1) 0%, rgba(117,189,209,1) 41%, rgba(73,165,191,1) 100%);
background: -o-linear-gradient(left, rgba(147,206,222,1) 0%, rgba(117,189,209,1) 41%, rgba(73,165,191,1) 100%);
background: -ms-linear-gradient(left, rgba(147,206,222,1) 0%, rgba(117,189,209,1) 41%, rgba(73,165,191,1) 100%);
background: linear-gradient(to right, rgba(147,206,222,1) 0%, rgba(117,189,209,1) 41%, rgba(73,165,191,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#93cede', endColorstr='#49a5bf', GradientType=1 );
      }
    </style>
  </head>
  <body>
    <div class="container">
      @yield('content')
    </div>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
      $(function () {
        jQuery.validator.setDefaults({
          highlight: function (element) {
            $(element).closest('.form-group').addClass('has-error');
          },
          unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
          },
          errorElement: 'span',
          errorClass: 'help-block',
          errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
              error.insertAfter(element.parent());
            } else {
              error.insertAfter(element);
            }
          }
        });
      });
    </script>
    @stack('scripts')
  </body>
</html>
