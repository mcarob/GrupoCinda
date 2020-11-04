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
        <h1>INGRESOS CINDA</h1>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
              <a href="index.html">
                <span class="mdi mdi-home"></span>
              </a>
            </li>
            <li class="breadcrumb-item">
            Administrativos
          </li>
            <li class="breadcrumb-item" aria-current="page">Cobro por eps</li>
          </ol>
        </nav>

      </div>
      
    </div>
   

          <div class="card-body" style="position: absolute; left:400px; width: 820px; height: 30px; top: 4  0px; z-index: 1;">

            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <form>
                  <div class="modal-header px-4">
                    <h5 class="modal-title" id="exampleModalCenterTitle">SELECCIONAR</h5>
                  </div>
                  <div class="modal-body px-4">



                    <div class="row mb-2">
                      <div class="col-lg-6">
                        <div class="form-group" style="width: 150px; height: 30px;">
                          <label for="firstName">Mes</label>
                          <select class="form-control" id="firstName" value="">
                            <option>Enero</option>
                            <option>Marzo</option>
                            <option>Abril</option>
                            <option>Mayo</option>
                            <option>Junio</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-6" style="position: absolute; left:170px; width: 200px; height: 30px;">
                        <div class="form-group" >
                          <label for="firstName">Año</label>
                          <select class="form-control" id="firstName" value="">

                            <option>2023</option>
                            <option>2022</option>
                            <option>2021</option>
                            <option>2020</option>
                            <option>2019</option>

                          </select>
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="firstName">EPS</label>
                          <select class="form-control" id="firstName" value="">

                            <option>Famisanar</option>
                            <option>Compensar</option>
                            

                          </select>
                        </div>
                      </div>
                    </div>


                  </div>
                  <div class="modal-footer px-4">
                    <button type="button" class="btn btn-primary btn-pill">Descargar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Add Contact Button  -->


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