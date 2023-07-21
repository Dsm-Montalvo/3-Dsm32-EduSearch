<?php
include ('./../../layout/menu.php');
include ('./../../layout/header.php');
?>

<!-- <h1> &nbsp; &nbsp; Formulario insertar carrera</h1>
        <p>&nbsp; &nbsp; Ingresa tu nombre:</p>
        <input type="text" class="form-control" placeholder="Ingresa tu nombre">
        <p> &nbsp; &nbsp; Ingresa tu email</p>
        <input type="email" class="form-control" placeholder="ejemplo@gmail.com">
        <p>&nbsp; &nbsp; Ingresa tu contraseña</p>
        <input type="password" class="form-control">
        <p>&nbsp; &nbsp; Ingresa tu descripcion</p>
        <textarea class="form-control"></textarea>
        <p>&nbsp; &nbsp; Ingresa tu Genero</p>
        &nbsp; &nbsp; &nbsp; &nbsp; <input type="checkbox"  class="form-check-input">M &nbsp; &nbsp; 
        &nbsp; &nbsp; <input type="checkbox"  class="form-check-input">F &nbsp; &nbsp; 
        &nbsp; &nbsp; <input type="checkbox"  class="form-check-input">OTRO
        <p>&nbsp; &nbsp; Ingresa tu fecha de nacimiento</p>
        <input type="date">
        <p>
        <p>&nbsp; &nbsp; Seleccione estado</p>
        <select name="Estado" class="form-control">
        <option value="value1">Mexico</option>
        <option value="value2">Coahuila</option>
        <option value="value3">Nuevo Leon</option>    
        </select>
        </p>
     
        <br>
        <br>
        <input type="submit" class="btn btn-success" value="Enviar Informacion">
        <br>
        <button type="button" class="btn btn-warning">Cancelar</button>
        <br>
 -->

 <div class="container-fluid">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Alta Categoria</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <form action="" method="post">
        <div class="card-body">
            <div class="row mb-3"> 
                <div class="col-6">
                    <label class="form-label" for="">Nombre:</label>
                    <input class="form-control" type="text" name="name" id="">
                </div>
                <div class="col-6">
                <label class="form-label" for="">Selecciona Tienda:</label>

                <select class="form-select" aria-label="Default select example">
                        <option value="">Selecciona Tienda:</option>
                        <option value="">tienda1</option>
                        <option value="">tienda2</option>
                        <option value="">tienda3</option>
                    </select>
                </div>
            </div>

               
                        <div class="col-4">
                        <button class="btn btn-success" type="submit">Guardar</button>

            </div>
        </div>
        </form> 

    </div>
    <!-- Page Heading -->





</div>

<?php
include ('./../../layout/footer.php');
?>

