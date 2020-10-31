<link href="../assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
<link href="../assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
<link href="../assets/plugins/data-tables/datatables.bootstrap4.min.css" rel="stylesheet" />
<link href="../assets/plugins/data-tables/responsive.datatables.min.css" rel="stylesheet" />
<?php

include('Header.php');
include('MenuPro.php')


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
                                                    <button class="dropdown-item" href="DesPac.php">Ver más</button>
                                                    <a class="dropdown-item" href="PED.php">PED</a>
                                                    <button class="dropdown-item" data-toggle="modal" data-target="#modal-add-contact">Asignar</button>
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
                                                    <a class="dropdown-item" href="PED.php">PED</a>
                                                    <button class="dropdown-item" data-toggle="modal" data-target="#modal-add-contact">Asignar</button>
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



        <div class="modal fade" id="modal-add-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <form>
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Asignar Profesional</h5>
                        </div>
                        <div class="modal-body px-4">



                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="firstName">Nombres</label>
                                        <input type="text" class="form-control" id="firstName" value="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="lastName">Apellidos</label>
                                        <input type="text" class="form-control" id="lastName" value="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="userName">Identificación</label>
                                        <input type="text" class="form-control" id="userName" value="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="email">Correo</label>
                                        <input type="email" class="form-control" id="email" value="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="Birthday">Fecha de incorporación</label>
                                        <input type="text" class="form-control" id="Birthday" value="01-10-1993">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="event">Area</label>
                                        <select type="text" class="form-control" id="event" value="Some value for event">
                                            <option>Fonoaudiologa</option>
                                            <option>Psicologa</option>
                                            <option>Terapeuta</option>
                                            <option>Musicoterapeuta</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-6">
                                <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Profesional</label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="custom-file mb-1">
                                        <select type="text" class="form-control" id="event" value="Some value for event">
                                            <option>Seleccione por favor</option>
                                            <option>Fonoaudiologa</option>
                                            <option>Psicologa</option>
                                            <option>Terapeuta</option>
                                            <option>Musicoterapeuta</option>
                                        </select> </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer px-4">
                            <button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary btn-pill">Guardar</button>
                        </div>
                    </form>
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