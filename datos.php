<?php
echo '<div class="container">
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
</div>';

?>