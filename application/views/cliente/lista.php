<?php if (isset($registros) && $registros): ?>
	<?php foreach ($registros as $row): ?>

		<tr ondblclick = "openFCli(<?= $row->cliente ?>)">

			<td><?= $row->nit; ?></td>
			<td><?= $row->nombre; ?></td>
			<td><?= $row->direccion; ?></td>

			<td><?= $row->telefono; ?></td>
			<td><?= $row->correo; ?></td>
			<td><?= $row->cliente_tipo; ?></td>

			<td class="text-center"><i class="fas fa-<?= $row->aplica_descuento == 1 ? 'check': 'times'; ?>"></i></td>
			<td><?= $row->monto_descuento; ?></td>
			<td class="text-center"><i class="fas fa-<?= $row->aplica_descuento == 1 ? 'check': 'times'; ?>"></i></td>

			<td class="text-center">
				<div class="btn-group">

					<button 
						type 			= "button" 
						class 			= "btn btn-default btn-xs dropdown-toggle" 
						data-toggle 	= "dropdown" 
						aria-haspopup 	= "true" 
						aria-expanded 	= "false">

				    	<span class 	= "caret"></span>

				  	</button>

				  	<ul class="dropdown-menu dropdown-menu-right">

					    <li>
					    	<a 
					    		href="javascript:;" 
					    		onclick="openFCli(<?= $row->cliente; ?>)"
					    	>
					    		<i class="fa fa-edit" style="width: 15px;"></i> Editar
					    	</a>
					    </li>

					    <!-- <li role="separator" class="divider"></li> -->

					    <li>
					    	<a 
					    		href="javascript:;" 
					    		onclick="DarDeBaja(<?= $row->cliente; ?>)"
					    	>
					    		<i class="fa fa-times" style="width: 15px;"></i> Anular
					    	</a>
					    </li>
					    
				  	</ul>

				</div>
			</td>

		</tr>

	<?php endforeach ?>
<?php endif ?>