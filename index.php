
<?php include("includes/header.php") ?>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem; border-color: #ffcb1a; border-width: 3px;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4">

              <h2 class="fw-bold mb-2 text-uppercase">FICHAJE: <img src="img/1200.png" class="img-fluid" style=" height: 100px;" alt="imagen-negocio"></h2>
              
              <p class="text-white-50 mb-2"> Selecciona tu nombre. </p>
                <form method="post">
                  <div class="d-grid gap-2 col-12 mx-auto">
                  <?php include("functions/trabajadores.php")?>
                    
                    <button type="button" class="btn btn-outline-warning btn-md px-4 mb-2" onclick="mostrarHoraEntrada()" >Pulsa aqui para añadir entrada UTC</button>
                    <input type="time" class="form-control mb-5" id ="hora_entrada" name="hora_entrada" required readonly>

                    <button type="button" class="btn btn-outline-warning btn-md px-4 mb-2" onclick="mostrarHoraSalida()" >Pulsa aqui para añadir salida UTC</button>      
                    <input type="time" class="form-control mb-5" id ="hora_salida" name="hora_salida" required readonly>
                   
                  
                  <input type="submit" class="btn btn-outline-warning btn-lg px-5 mb-5" name="enviar" value="Aceptar"/>
                  </div>
                </form>
                <?php include("functions/fichar.php")?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include("includes/footer.php") ?>


