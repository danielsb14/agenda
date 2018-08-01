<p>Bienvenido al update contacto..!</p>

<form action='contacto_controller.php' method='post'>
	<input type='hidden' name='action' value='update'>
	<table>
		<input type='hidden' name='id' value='<?php echo $contacto->id; ?>'>
		
		<tr>
			<td><label>Nombres: </label></td><td><input type='text' name='name'value='<?php echo $contacto->name; ?>'></td>
		</tr>
		<tr>
			<td><label>Lastname:</label></td><td><input type='text' name='lastname'value='<?php echo $contacto->lastname; ?>'></td>
		</tr>
		<tr>
			<td><label>address:</label></td><td><input type='text' name='address'value='<?php echo $contacto->address; ?>'></td>
		</tr>
		<tr>
			<td><label>phone:</label></td><td><input type='text' name='phone'value='<?php echo $contacto->phone; ?>'></td>
		</tr>
		<tr>
			<td><label>Email:</label></td><td><input type='text' name='email' value='<?php echo $contacto->email; ?>'></td>
		</tr>

	</table>
		
	<input type='submit' value='Actualizar'>
</form>