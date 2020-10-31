<?php

include('menuAdmi.php');
include('Header.php');

?>

<div class="content-wrapper">
  <div class="content">
    <div class="breadcrumb-wrapper breadcrumb-contacts">
      <div>
        <h1>Profesionales CINDA</h1>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
              <a href="index.html">
                <span class="mdi mdi-home"></span>
              </a>
            </li>
            <li class="breadcrumb-item">
              Profesionales
            </li>
            <li class="breadcrumb-item" aria-current="page">Listar</li>
          </ol>
        </nav>

      </div>
      <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-contact"> Agregar
        </button>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-xl-4">
        <div class="card card-default p-4">
          <a href="javascript:0" class="media text-secondary" data-toggle="modal" data-target="#modal-contact">
            <img src="Imagenes/fono.png" width="100"  class="mr-3 img-fluid rounded" alt="Avatar Image">
            <div class="media-body">
              <h5 class="mt-0 mb-2 text-dark">Emma Smith</h5>
              <ul class="list-unstyled">
                <li class="d-flex mb-1">
                  <i class="mdi mdi-map mr-1"></i>
                  <span>Nulla vel metus 15/178</span>
                </li>
                <li class="d-flex mb-1">
                  <i class="mdi mdi-email mr-1"></i>
                  <span>exmaple@email.com</span>
                </li>
                <li class="d-flex mb-1">
                  <i class="mdi mdi-phone mr-1"></i>
                  <span>(123) 888 777 632</span>
                </li>
              </ul>

            </div>
          </a>

        </div>
      </div>
      <div class="col-lg-6 col-xl-4">
        <div class="card card-default p-4">
          <a href="javascript:0" class="media text-secondary" data-toggle="modal" data-target="#modal-contact">
            <img src="Imagenes/musico.png" width="100" class="mr-3 img-fluid rounded" alt="Avatar Image">
            <div class="media-body">
              <h5 class="mt-0 mb-2 text-dark">Emma Smith</h5>
              <ul class="list-unstyled">
                <li class="d-flex mb-1">
                  <i class="mdi mdi-map mr-1"></i>
                  <span>Nulla vel metus 15/178</span>
                </li>
                <li class="d-flex mb-1">
                  <i class="mdi mdi-email mr-1"></i>
                  <span>exmaple@email.com</span>
                </li>
                <li class="d-flex mb-1">
                  <i class="mdi mdi-phone mr-1"></i>
                  <span>(123) 888 777 632</span>
                </li>
              </ul>

            </div>
          </a>

        </div>
      </div>
      <div class="col-lg-6 col-xl-4">
        <div class="card card-default p-4">
          <a href="javascript:0" class="media text-secondary" data-toggle="modal" data-target="#modal-contact">
            <img src="Imagenes/sicologa.png" width="100" class="mr-3 img-fluid rounded" alt="Avatar Image">
            <div class="media-body">
              <h5 class="mt-0 mb-2 text-dark">Emma Smith</h5>
              <ul class="list-unstyled">
                <li class="d-flex mb-1">
                  <i class="mdi mdi-map mr-1"></i>
                  <span>Nulla vel metus 15/178</span>
                </li>
                <li class="d-flex mb-1">
                  <i class="mdi mdi-email mr-1"></i>
                  <span>exmaple@email.com</span>
                </li>
                <li class="d-flex mb-1">
                  <i class="mdi mdi-phone mr-1"></i>
                  <span>(123) 888 777 632</span>
                </li>
              </ul>

            </div>
          </a>

        </div>
      </div>
      
     
      
      
      


    </div>


    <!-- Contact Modal -->
    <div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header justify-content-end border-bottom-0">
            <button type="button" class="btn-edit-icon" data-dismiss="modal" aria-label="Close">
              <i class="mdi mdi-pencil"></i>
            </button>
            <div class="dropdown">
              <button class="btn-dots-icon" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="mdi mdi-dots-vertical"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
            <button type="button" class="btn-close-icon" data-dismiss="modal" aria-label="Close">
              <i class="mdi mdi-close"></i>
            </button>
          </div>
          <div class="modal-body pt-0">
            <div class="row no-gutters">
              <div class="col-md-6">
                <div class="profile-content-left px-4">
                  <div class="card text-center widget-profile px-0 border-0">
                    <div class="card-img mx-auto rounded-circle">
                      <img src="Imagenes/fono.png" width="100" alt="user image">
                    </div>
                    <div class="card-body">
                      <h4 class="py-2 text-dark">Albrecht Straub</h4>
                      <p>Albrecht.straub@gmail.com</p>
                      <a class="btn btn-primary btn-pill btn-lg my-4" data-toggle="modal" data-target="#modal-edit-contact" href="#">Editar</a>
                    </div>
                  </div>
                  

                </div>
              </div>
              <div class="col-md-6">
                <div class="contact-info px-4">
                  <h4 class="text-dark mb-1">Contact Details</h4>
                  <p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
                  <p>Albrecht.straub@gmail.com</p>
                  <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                  <p>+99 9539 2641 31</p>
                  <p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
                  <p>Nov 15, 1990</p>
                  <p class="text-dark font-weight-medium pt-4 mb-2">Event</p>
                  <p>Lorem, ipsum dolor</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Add Contact Button  -->
    <div class="modal fade" id="modal-add-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <form>
            <div class="modal-header px-4">
              <h5 class="modal-title" id="exampleModalCenterTitle">Agregar Profesional</h5>
            </div>
            <div class="modal-body px-4">

              <div class="form-group row mb-6">
                <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Firma</label>
                <div class="col-sm-8 col-lg-10">
                  <div class="custom-file mb-1">
                    <input type="file" class="custom-file-input" id="coverImage" required>
                    <label class="custom-file-label" for="coverImage">Seleccione el archivo</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                  </div>
                </div>
              </div>

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
            </div>
            <div class="modal-footer px-4">
              <button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary btn-pill">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal-edit-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <form>
            <div class="modal-header px-4">
              <h5 class="modal-title" id="exampleModalCenterTitle">Editar Profesional</h5>
            </div>
            <div class="modal-body px-4">

              <div class="form-group row mb-6">
                <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Firma</label>
                <div class="col-sm-8 col-lg-10">
                  <div class="custom-file mb-1">
                    <input type="file" class="custom-file-input" id="coverImage" required>
                    <label class="custom-file-label" for="coverImage">Seleccione el archivo</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                  </div>
                </div>
              </div>

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

</div>



  <?php

  include('Footer.php')

  ?>