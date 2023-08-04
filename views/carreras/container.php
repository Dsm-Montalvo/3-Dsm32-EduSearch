<!-- 
<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Proyecto Integrador</strong> Carreras</h1>
    <h2>Muestra de los datos de la tabla de SQL</h2>
    <div class="table-responsive">
       
        <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id_Universidad</th>
            <th scope="col">Nombre_universidad</th>
            <th scope="col">Categoria</th>
            <th scope="col">Modalidad</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Universidad Privada XY</td>
            <td>Privada</td>
            <td>Presencial</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Universidad Tecnologica</td>
            <td>Publica</td>
            <td>Vitual</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Universidad ABC</td>
            <td>Privada</td>
            <td>Semi-Presencial</td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Universidad Autonoma</td>
            <td>Publica</td>
            <td>Presencial</td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">6</th>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">7</th>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
            
    </table>
    </div>
</div> -->

<div class="container">
			<div class="row" style="padding: 10px">
				<h3 class="text-center">CRUD imagenes y archivo de PHP y MySQL</h3>
			</div>
			
			<div class="row">
				<a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a>
			</div>
			
			<br>
			
			<div class="table-responsive-sm">
				<table class="display table table-bordered" id="mitabla">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Duracion</th>
							<th>Tipo</th>
                            <th>Colegiatura</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
		
		<!-- Modal -->		
		<div class="modal fade" id="confirm-delete" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Eliminar Registro</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Eliminar</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		