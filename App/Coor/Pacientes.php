<link href="../assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
<link href="../assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
<link href="../assets/plugins/data-tables/datatables.bootstrap4.min.css" rel="stylesheet" />
<link href="../assets/plugins/data-tables/responsive.datatables.min.css" rel="stylesheet" />
<?php

include('Header.php');
include('MenuCor.php')


?>


<div class="content-wrapper">
    <div class="content">
    <div class="breadcrumb-wrapper breadcrumb-contacts">
      <div>
        <h1>Pacientes CINDA</h1>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
              <a href="index.html">
                <span class="mdi mdi-home"></span>
              </a>
            </li>
            <li class="breadcrumb-item">
              Pacientes
            </li>
            <li class="breadcrumb-item" aria-current="page">Listar</li>
          </ol>
        </nav>

      </div>
      <!-- <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-contact"> Agregar
        </button>
      </div> -->
    </div>

        <div class="row">
            <div class="col-12">
                <div class="card card-default">


                    <div class="card-body">
                        <div class="responsive-data-table">
                            <table id="responsive-data-table" class="table dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Dirección</th>
                                        <th>Teléfono</th>
                                        <th>Estrato</th>
                                        <th>EPS</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger</td>
                                        <td>Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>
                                        <div class="dropdown d-inline-block mb-1">
												<button class="btn btn-info btn-square dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
												    Acciones
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="DesPac.php">Ver más</a>
                                                   </div>
                                            </div>

                                        </td>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Santiago Ruiz Alarcon</td>
                                        <td>Direccion</td>
                                        <td>3432343939</td>
                                        <td>3</td>
                                        <td>Famisanar</td>
                                        <td>
                                        <div class="dropdown d-inline-block mb-1">
												<button class="btn btn-info btn-square dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
												    Acciones
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="DesPac.php">Ver más</a>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    




    <script src="../assets/plugins/data-tables/jquery.datatables.min.js"></script>
    <script src="../assets/plugins/data-tables/datatables.bootstrap4.min.js"></script>



    <script src="../assets/plugins/data-tables/datatables.responsive.min.js"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery('#responsive-data-table').DataTable({
                "aLengthMenu": [
                    [20, 30, 50, 75, -1],
                    [20, 30, 50, 75, "All"]
                ],
                "pageLength": 20,
                "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
            });
        });
    </script>




    <?php


    include('Footer.php')

    ?>