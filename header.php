<?php
echo "hh";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css"/>
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="body">
    <div id="navBar">
        <nav class="navbar navbar-expand-lg navbar-dark ">
          <div class="container">
            <a class="navbar-brand" href="/">
              <img src="./titan.png" alt="" width="90"
                class=" m-2 d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal"
              aria-controls="menuPrincipal" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuPrincipal">
              <ul class="navbar-nav text-end">
                <li class="nav-item">
                    <a class="nav-link opcion ms-3" href="#">Inicio</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link opcion ms-3 "  href="#">Participantes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link opcion ms-3" href="#">Distribuidoras</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link opcion  ms-3" href="#">Cuotas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link opcion ms-3" href="#">Liquidaci??n</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fs-6" style="color: rgb(15, 28, 32);" href="#">Liquidaci??n</a>
                  </li>
                <!-- Menu Mi perfil -->
              </ul>
              <!-- Se crea una lista a parte para generar el boton de perfil -->
              <ul class="nav nav-pills ms-md-auto">
                <li class="nav-item dropdown shadow-sm rounded-4 text-center bg-mi-perfil ">
                    <div class="d-flex flex-column bg-mi-perfil pt-2 ps-2">
                      <div class="d-flex flex-row">
                            <a data-bs-toggle="collapse" href="#cerrarSesion" role="button" aria-expanded="false" aria-controls="cerrarSesion"><img src="./chevron.png" width="21px" class="ms-2"></a>
                            <p id="usuario" class="fw-bold text-muted ms-4">Jorler Ochoa</p>
                      </div>
                  </div>
                  <div class="collapse mt-0 me-5" id="cerrarSesion">
                    <a href="/logout" style="color: white;" class="ps-5 text-decoration-none">Cerrar sesi??n</a>
                </div>

                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuPrincipal">
                    <li>
                      <a class="dropdown-item" href="/logout">
                        <img src="{{base_url}}/assets/imagenes/iconos/cerrar_sesion_azul.svg" alt="" width="16"
                          class="mx-2">
                        Cerrar sesi??n
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
              <!-- Fin crea una lista a parte para generar el boton de perfil -->
            </div>
          </div>
        </nav>
      </div>
      <!-- participante -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="mt-4 text-muted border-bottom">Titanes Upfield/participantes</p>
            <h2 class="mt-5 fw-bold participantes-text">Participantes</h2>
            <span class="text-muted">1234 participantes activos</span>
            <div class="d-flex-column mt-3">
              <button class="button-participante"> <span class="fw-bold">+</span> Nuevo</button>
              <button class="button-participante-importar ">Importar</button>
              
            </div>
           
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-9 contenedor-participante">
            <div class="contenedor-header d-flex flex-row justify-content-end">
              
              <input class="busqueda-nombre mt-4 ps-2" placeholder="Cedula" type="text"/>
              <input type="month" name="fecha_registro" class="mt-4 ms-2 ps-2 text-muted busqueda-nombre" id="fecha_registro" style="height: 30px;"/>
            </div>
            <hr>
            <div class="contenedor-body">
              <div>
                 <!-- 1 -->
                <div class="tarjeta-participante mt-2" >
                  <div class="card-body">
                    <div class="d-flex flex-row">

                      <span id="fecha-participante" class="card-title"> 23</span>
                      <div>
                        <span class="card-subtitle ms-1">enero</span>
                        <span class="card-subtitle ms-1" style="font-size: 10px;">2021</span>
                      </div>
                      
  
                      <div class="d-flex flex-column nombre-participante">
                        <h5 class=" ms-3 card-title">da rt</h5>
                        <h6 class="ms-3 card-subtitle mb-2 text-muted">1112323222</h6>
                      </div>
                      <h6 class="card-subtitle mb-2 mt-3 ms-5 text-muted ciudad-participante">Cali</h6>
                    <p class="card-text ms-4 mt-3 distribuidora-participante">Some quick example text to</p>
                    <button class="ms-5 mt-3 editar-participante">Editar</button>
                    </div>
                    
                   <!-- <button class="inactivar-participante">Inactivar</button> -->
                  </div>
                </div>
                 <!-- 2 -->
                 <div class="tarjeta-participante mt-2" >
                  <div class="card-body">
                    <div class="d-flex flex-row">
                      <span id="fecha-participante" class="card-title"> 23</span>
                      <span class="card-subtitle">enero</span>
  
                      <div class="d-flex flex-column nombre-participante">
                        <h5 class=" ms-3 card-title">Gustavo fernandez</h5>
                    <h6 class="ms-3 card-subtitle mb-2 text-muted">1112323222</h6>
                      </div>
                      <h6 class="card-subtitle mb-2 mt-3 ms-5 text-muted ciudad-participante">Bua</h6>
                    <p class="card-text ms-4 mt-3 distribuidora-participante">Some quick example text to</p>
                    <button class="ms-5 mt-3 editar-participante">Editar</button>
                    </div>
                    
                   <!-- <button class="inactivar-participante">Inactivar</button> -->
                  </div>
                </div>
                <!-- 2 -->

                 <!-- 3 -->
                 <div class="tarjeta-participante mt-2">
                  <div class="card-body">
                    <div class="d-flex flex-row">
                      <div>
                        <span id="fecha-participante" class="card-title"> 23</span>
                        <span class="card-subtitle">enero</span>
                      </div>
                     
                     
                      <div class="d-flex flex-column nombre-participante">
                        <h5 class=" ms-3 card-title">Jorge Salcedo</h5>
                        <h6 class="ms-3 card-subtitle mb-2 text-muted">1112323222</h6>
                      </div>
                      <h6 class="card-subtitle mb-2 mt-3 ms-5 text-muted ciudad-participante">Buenaventura</h6>
                      <p class="card-text ms-4 mt-3 distribuidora-participante">Some quick example text to</p>
                      <button class="ms-5 mt-3 editar-participante">Editar</button>
                    </div>
                    
                   <!-- <button class="inactivar-participante">Inactivar</button> -->
                  </div>
                </div>
                <!-- 3 -->

              </div>
            </div>
             
          </div>
          <div class="col-md-3">
            <div class="contenedor-datos-participante">

            </div>
          </div>
         
        </div>
      </div>
      <script src="{{base_url}}/scripts/home.js"></script>
</body>
</html>