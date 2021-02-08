<div class="panel panel-default remove-radio">
	<div class="panel-heading">
		<h3 class="remove-margin">
			<i class="fa fa-users"></i> 
			Control de clientes
			<div class="pull-right">
				
				<button class="btn btn-xs btn-default" onclick="openFCli()">
					<i class="fa fa-plus"></i> Nuevo
				</button>
				<button class="btn btn-xs btn-primary" onclick="openFclasificacion()">
					<i class="fa fa-plus"></i> Clasificacion
				</button>
				<button class="btn btn-xs btn-info" onclick="openFtipoCliente()">
					<i class="fa fa-plus"></i> Tipo cliente
				</button>
			</div>
		</h3>
	</div>
	
	<div class="panel-body">
		<div id="contenidoFCli"></div>

		<div class="table-responsivex" id="ListaCli">
			<table class="table table-bordered table-hover">
				<thead>
					<tr style="background: #eeeeee;">
						<th class="text-center">Nit</th>
						<th class="text-center">Nombre</th>
						<th class="text-center">Dirección</th>
						<th class="text-center">Teléfono</th>
						<th class="text-center">Correo</th>
						<th class="text-center">Tipo<br>cliente</th>
						<th class="text-center">Aplica<br>descuento</th>
						<th class="text-center">Monto<br>decuento</th>
						<th class="text-center">Aplica<br>IVA</th>
						<th></th>
					</tr>
				</thead>
				<tbody id='contenidoCliLista'>
					<?php $this->load->view('cliente/lista'); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>