<div>	<br>	</div>

<div>
<table border='1' class="table table-bordered table-hover">
	<tr>
		<thead>
		<td>Id</td>
		<td>name</td>
		<td>lastname</td>
		<td>address</td>
		<td>phone</td>
		<td>email</td>
		<td colspan=2 >Acciones</td>
		<thead>
	</tr>
<?php
	foreach ($contactos as $contacto) { ?>
		
			<tr>
				<td><?php echo $contacto->id; ?></td>
				<td><?php echo $contacto->name; ?></td>
				<td><?php echo $contacto->lastname;?></td>
				<td><?php echo $contacto->address;?></td>
				<td><?php echo $contacto->phone;?></td>
				<td><?php echo $contacto->email;?></td>
				<td><a href="controllers/contacto_controller.php?action=update&id=<?php echo $contacto->id ?>">Actualizar</a> </td>
				<td><a href="controllers/contacto_controller.php?action=delete&id=<?php echo $contacto->id ?>">Eliminar</a> </td>
			</tr>		
	<?php } ?>
</table>
</div>