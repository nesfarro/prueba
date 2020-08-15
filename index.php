
<?php
include "controller/controlador.php";
?>
<!DOCTYPE HTML>
   <html lang="es">
       <head>
          <title>Prueba</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
          <link rel="stylesheet" href="view/css/style.css"/>
          <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,500,700,900&display=swap" rel="stylesheet">  
        </head>
       <body>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="text-center">
                     <img class="mb-4 mt-4" src="https://sigma-studios.s3-us-west-2.amazonaws.com/test/sigma-logo.png" alt="imagen-top"/>
                     <h2 class="mb-4">Prueba de desarrollo Sigma</h2>
                     <p class="spacing-text ">
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate .
                     </p>
                  </div>
               </div>
            </div>
            <div class="row mt-4">
               <div class="col-md-6 col-sm-12 mb-4">
                  <img class="w-100" src="https://sigma-studios.s3-us-west-2.amazonaws.com/test/sigma-image.png" alt="image-left"/>
               </div>
               <div class="col-md-6 col-sm-12">
                     <div class="box-form-shadow mb-5">
                        <form id="form1" action="#" method="POST">
                           <div class="form-group">
                              <label for="state">
                                 Departamento*
                              </label>
                              <select name="state" id="state" class="form-control select-css" required>
                                 <?php echo $datos;?>
                              </select>
                           </div>
                           <div class="form-group">
                              <label for="city">
                                 Ciudad*
                              </label>
                              <select name="city" id="city" class="form-control select-css" required>
                              </select>
                           </div>
                           <div class="form-group">
                              <label for="name">
                                 Nombre*
                              </label>
                              <input type="text" class="form-control" id="name" name="name" maxlenght="50" required/>
                           </div>     
                           <div class="form-group">             
                              <label for="email">
                                 Correo*
                              </label>
                              <input type="email" class="form-control" id="email" name="email" maxlenght="30" required/>
                           </div> 
                           
                           <div class="text-center mt-4">
                              <input type="submit" class="btn btn-danger border-radius-btn back-button text-uppercase py-2 font-weight-bold" value="Enviar">
                           </div>
                        </form >      
                     </div> 
                  </div>
               </div>
            </div>
         </div>

         <button type="button" class="btn btn-info btn-lg" style="display:none !important" data-toggle="modal" data-target="#miModal">Abrir Modal</button>

         <div id="miModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
               <!-- Contenido del modal -->
               <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                  <p id="message-popup"></p>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                  </div>
               </div>
            </div>
         </div>


         <script src="https://code.jquery.com/jquery-3.1.1.min.js">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
        <script src="view/js/process.js" ></script>
   
       </body>
   </html> 
</html>