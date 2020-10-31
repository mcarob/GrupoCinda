<?php

include('menuPro.php');
include('Header.php');

?>
<script src="../assets/plugins/toastr/toastr.min.js"></script>


<div class="content-wrapper">
    <div class="content">
        <div class="bg-white border rounded">

            <div class="row no-gutters">
                <div class="col-lg-4 col-xl-3">
                    <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                        <div class="card text-center widget-profile px-0 border-0">
                            <img alt="Card image cap" class="card-img-top" width="150" height="150" src="../Admi/Imagenes/fono.png" />


                        </div>

                        <hr class="w-100">

                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="profile-content-right py-5">
                        <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                            <h1 style="color: black;"> PACIENTE CINDA</h1>
                        </ul>
                        <div class="tab-content px-3 px-xl-5" id="myTabContent">
                            <div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">



                            </div>


                            <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                <div class="mt-5">
                                    <form id="postulados" method="POST" action="javascript: agregarPostulacion()">
                                        <input type="hidden" id="codigooo" name="codigooo" value="" />
                                        <input type="hidden" id="ofertaa" name="ofertaa" value="" />

                        



                                        <div class="row mb-2">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Nombres y apellidos
                                                    </label>
                                                    <span class="d-block mt-1">CASTRO MENDEZ
                                                ISABELLA</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Fecha de nacimiento
                                                    </label>
                                                    <span class="d-block mt-1">23/05/2014 </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="firstName">Identificación</label>
                                                    <span class="d-block mt-1">1072710066 </span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Tipo de identificación
                                                    </label>
                                                    <span class="d-block mt-1"> Tarjeta de identidad</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Pais de nacimiento
                                                    </label>
                                                    <span class="d-block mt-1"> Colombia </span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Sexo
                                                    </label>
                                                    <span class="d-block mt-1"> Femenino </span>
                                                </div>
                                            </div>


                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Fecha de ingreso
                                                    </label>
                                                    <span class="d-block mt-1">1/04/2019 </span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Proceso
                                                    </label>
                                                    <span class="d-block mt-1">TAV </span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">EPS
                                                    </label>
                                                    <span class="d-block mt-1"> FAMISANAR </span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Fonoaudiologa
                                                    </label>
                                                    <span class="d-block mt-1"> OLGA CONSTANZA </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <h3 style="color: black;">Amplificación</h3>
                                        </div>

                                        <div class="row mb-2">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Oido derecho
                                                    </label>
                                                    <span class="d-block mt-1"> AUDIFONO PHONAK NAIDA LINK UP</span>
                                                </div>
                                            </div>


                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Oido izquierdo
                                                    </label>
                                                    <span class="d-block mt-1"> IMPLANTE COCLEAR ADVANCED BIONICS NAIDA Q 70 </span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Tipo y grado de perdida auditiva
                                                    </label>
                                                    <span class="d-block mt-1"> HNP BILATERAL </span>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group mb-4">
                                            <h3 style="color: black;">Información familiar</h3>
                                        </div>

                                        <div class="row mb-2">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Nombre del padre
                                                    </label>
                                                    <span class="d-block mt-1"> JOSE CAMILO CASTRO</span>
                                                </div>
                                            </div>


                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Telefono
                                                    </label>
                                                    <span class="d-block mt-1">3013686627 </span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Correo
                                                    </label>
                                                    <span class="d-block mt-1">jpcortesramirez@gmail.com </span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">
                                                    </label>
                                                    <span class="d-block mt-1"> </span>
                                                </div>
                                            </div>


                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Nombre de la madre
                                                    </label>
                                                    <span class="d-block mt-1">EULALIA PINEDA </span>
                                                </div>
                                            </div>


                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Telefono
                                                    </label>
                                                    <span class="d-block mt-1"> 3132944569</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Correo
                                                    </label>
                                                    <span class="d-block mt-1"> NO TIENE </span>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group mb-4">
                                            <h3 style="color: black;">Datos de la ubicación</h3>
                                        </div>


                                        <div class="row mb-2">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Dirección
                                                    </label>
                                                    <span class="d-block mt-1"> CALLE 146N° 138 A 04 INT 3 APT 203</span>
                                                </div>
                                            </div>


                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Barrio
                                                    </label>
                                                    <span class="d-block mt-1"> VILLA DEL RIO </span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Localidad
                                                    </label>
                                                    <span class="d-block mt-1">SUBA </span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Estrato
                                                    </label>
                                                    <span class="d-block mt-1"> 3</span>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="form-group mb-4">
                                            <h3 style="color: black;">Datos del acudiente</h3>
                                        </div>

                                        <div class="row mb-2">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Nombre
                                                    </label>
                                                    <span class="d-block mt-1">RICHARD BERNAL BERNAL </span>
                                                </div>
                                            </div>


                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Parentesco
                                                    </label>
                                                    <span class="d-block mt-1">ABUELO </span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Telefono
                                                    </label>
                                                    <span class="d-block mt-1"> 3114609013- 3002808671</span>
                                                </div>
                                            </div>



                                        </div>


                                        <div class="d-flex justify-content-end mt-5">

                                            <button id="boton56" type="submit" class="btn btn-primary mb-2 btn-pill">Regresar</button>';
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        var entrada = 0;

        function agregarPostulacion() {
            document.getElementById("boton56").disabled = true;
            if (entrada == 0) {
                entrada = 1;
                document.getElementById("boton56").disabled = true;
                datos = $('#postulados').serialize();
                $.ajax({
                    type: "POST",
                    data: datos,
                    url: "agregar_postulacion.php",
                    success: function(r) {
                        console.log(r);
                        if (r == 1) {
                            window.location.href = "postulaciones.php";
                        } else {
                            toastr["warning"]("No se puede registrarse a esta promoción");
                        }
                    }
                });

            } else {
                toastr["warning"]("No se puede registrarse a esta promoción");
            }
        }
    </script>

    <?php

    include('Footer.php')

    ?>