<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">


  <title>Fundación CINDA</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />


  <!-- PLUGINS CSS STYLE -->
  <link href="../assets/plugins/nprogress/nprogress.css" rel="stylesheet" />



  <!-- No Extra plugin used -->



  <link href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />



  <link href="../assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />



  <link href="../assets/plugins/toastr/toastr.min.css" rel="stylesheet" />



  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="../assets/css/sleek.css" />

  <!-- FAVICON -->
  <link href="../assets/img/favicon.png" rel="shortcut icon" />



  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="../assets/plugins/nprogress/nprogress.js"></script>
</head>


<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">

  <script>
    NProgress.configure({
      showSpinner: false
    });
    NProgress.start();
  </script>


  <div id="toaster">

  </div>


  <div class="wrapper">

    <aside class="left-sidebar bg-sidebar">
      <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
          <a href="/index.html" title="Sleek Dashboard">
            <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
              <g fill="none" fill-rule="evenodd">
                <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
              </g>
            </svg>
            <span class="brand-name text-truncate">Sleek Dashboard</span>
          </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

          <!-- sidebar menu -->
          <ul class="nav sidebar-inner" id="sidebar-menu">

            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pacientes" aria-expanded="false" aria-controls="pacientes">
                <i class="mdi mdi-folder-multiple-outline"></i>
                <span class="nav-text">Pacientes</span> <b class="caret"></b>
              </a>
              <ul class="collapse" id="pacientes" data-parent="#sidebar-menu">
                <div class="sub-menu">
              
                  <li>
                    <a class="sidenav-item-link" href="Pacientes.php">
                      <span class="nav-text">Listar</span>
                    </a>
                  </li>

              

                </div>
              </ul>
            </li>


            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#tables" aria-expanded="false" aria-controls="tables">
                <i class="mdi mdi-table"></i>
                <span class="nav-text">Informes</span> <b class="caret"></b>
              </a>
              <ul class="collapse" id="tables" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#data-tables" aria-expanded="false" aria-controls="data-tables">
                      <span class="nav-text">Informe 1</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="data-tables">
                      <div class="sub-menu">

                        <li>
                          <a href="basic-data-table.html">Basic Data Table</a>
                        </li>

                        <li>
                          <a href="responsive-data-table.html">Responsive Data Table</a>
                        </li>

                        <li>
                          <a href="hoverable-data-table.html">Hoverable Data Table</a>
                        </li>

                        <li>
                          <a href="expendable-data-table.html">Expendable Data Table</a>
                        </li>

                      </div>
                    </ul>
                  </li>


                  <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#informe2" aria-expanded="false" aria-controls="informe2">
                      <span class="nav-text">Informe 2</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="informe2">
                      <div class="sub-menu">

                        <li>
                          <a href="basic-data-table.html">Basic Data Table</a>
                        </li>

                        <li>
                          <a href="responsive-data-table.html">Responsive Data Table</a>
                        </li>

                        <li>
                          <a href="hoverable-data-table.html">Hoverable Data Table</a>
                        </li>

                        <li>
                          <a href="expendable-data-table.html">Expendable Data Table</a>
                        </li>

                      </div>
                    </ul>
                  </li>

                  <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#informe3" aria-expanded="false" aria-controls="informe3">
                      <span class="nav-text">Informe 3</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="informe3">
                      <div class="sub-menu">

                        <li>
                          <a href="basic-data-table.html">Basic Data Table</a>
                        </li>

                        <li>
                          <a href="responsive-data-table.html">Responsive Data Table</a>
                        </li>

                        <li>
                          <a href="hoverable-data-table.html">Hoverable Data Table</a>
                        </li>

                        <li>
                          <a href="expendable-data-table.html">Expendable Data Table</a>
                        </li>

                      </div>
                    </ul>
                  </li>
                </div>
              </ul>
            </li>
            
        



          </ul>

        </div>

        <!-- <div class="sidebar-footer">
          <hr class="separator mb-0" />
          <div class="sidebar-footer-content">
            <h6 class="text-uppercase">
              Cpu Uses <span class="float-right">40%</span>
            </h6>
            <div class="progress progress-xs">
              <div class="progress-bar active" style="width: 40%;" role="progressbar"></div>
            </div>
            <h6 class="text-uppercase">
              Memory Uses <span class="float-right">65%</span>
            </h6>
            <div class="progress progress-xs">
              <div class="progress-bar progress-bar-warning" style="width: 65%;" role="progressbar"></div>
            </div>
          </div>
        </div> -->
      </div>
    </aside>




    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
    <script src="../assets/plugins/jekyll-search.min.js"></script>

    <script src="../assets/data/search.json"></script>


    <script src="../assets/plugins/charts/Chart.min.js"></script>



    <script src="../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>



    <script src="../assets/plugins/daterangepicker/moment.min.js"></script>
    <script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script>
      jQuery(document).ready(function() {
        jQuery('input[name="dateRange"]').daterangepicker({
          autoUpdateInput: false,
          singleDatePicker: true,
          locale: {
            cancelLabel: 'Clear'
          }
        });
        jQuery('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
          jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
        });
        jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
          jQuery(this).val('');
        });
      });
    </script>



    <script src="../assets/plugins/toastr/toastr.min.js"></script>



    <script src="../assets/js/sleek.bundle.js"></script>
</body>

</html>