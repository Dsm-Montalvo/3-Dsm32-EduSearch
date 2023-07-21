<?php
include ('./../../layout/menu.php');
include ('./../../layout/header.php');
?>

<h1> &nbsp; &nbsp; Formulario insertar Beca</h1>
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

<?php
include ('./../../layout/footer.php');
?>