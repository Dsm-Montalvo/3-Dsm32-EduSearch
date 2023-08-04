<?php
include ('./../../test.php');
include ('./../../layout/menu.php');
include ('./../../layout/header.php');
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Editar Universidades</h6>
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
                <div class="col-4">
                    <label class="form-label" for="">Nombre:</label>
                    <input class="form-control" type="text" name="name" id="">
                </div>
                <div class="col-4">
                    <label class="form-label" for="">Precio:</label>
                    <input class="form-control" type="text" name="price" id="">
                </div>
                <div class="col-4">
                    <label class="form-label" for="">Cantidad</label>
                    <input class="form-control" type="text" name="stok" id="">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4">
                <select class="form-select" aria-label="Default select example">
                        <option value="">Selecciona Tienda:</option>
                        <option value="">tienda1</option>
                        <option value="">tienda2</option>
                        <option value="">tienda3</option>
                    </select>
                </div>
                <div class="col-4">
                <select class="form-select" aria-label="Default select example">
                        <option value="">Seleccione Categoria</option>
                        <option value="">Alimentos</option>
                        <option value="">Liquidos</option>
                    </select>
                </div>
                        <div class="col-4">
                        <button class="btn btn-success" type="submit">Guardar</button>
                </div>

            </div>
        </div>
        </form> 

    </div>
    <!-- Page Heading -->





</div>
<!-- /.container-fluid -->

</div>
<?php
include ('./../../layout/footer.php');
?>
