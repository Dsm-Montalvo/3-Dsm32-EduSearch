<?php 
include ('./../../database/conexion.php');

$sql = $conexion -> query("SELECT * FROM carrera");

?>
<div class="container">
    
			<div class="row" style="padding: 10px">
				<h3 class="text-center">Sistema de Busqueda de Universidades</h3>
			</div>
			
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Carreras </h1>
                <a href="add.php" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i></a>
            </div>
			<div class="table-responsive-sm">
				<table class="display table table-bordered" id="mitabla">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Duracion</th>
							<th>Tipo</th>
                            <th>Colegiatura</th>
							<th>Acciones</th>
						</tr>
					</thead>
					
					<tbody>
                        <?php while($resultado = $sql -> fetch_assoc()){
                        ?>
                         <tr>
							<td scope="row"><?php echo $resultado['Id_Carrera']?></td>
							<td><?php echo $resultado['Nom_Carrera']?></td>
							<td><?php echo $resultado['Duracion']?></td>
							<td><?php echo $resultado['Tipo']?></td>
                            <td><?php echo $resultado['Colegiatura']?></td>
							<td><a href="<?=$h->get['base_url'].'/views/carreras/edit.php?Id='?><?php echo $resultado['Id_Carrera'] ?>" class="btn btn-warning" ><i class="bi bi-brush"></i></a>
                                <a href="<?=$h->get['base_url'].'/views/carreras/show.php?Id='?><?php echo $resultado['Id_Carrera'] ?>" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                <a href="<?=$h->get['base_url'].'/app/models/eliminar_carrera.php?Id='?><?php echo $resultado['Id_Carrera'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
						</tr>
                        <?php 
                        } 
                        ?>
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
		