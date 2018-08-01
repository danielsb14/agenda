

<br>	

<p>Bienvenido al register usuario..!</p>

<form action='controllers/contacto_controller.php' method='post' class="table table-bordered table-hover">
	<input type='hidden' name='action' value='register'>
	<table>
		
		<tr>
			<td><label>Nombres: </label></td><td><input type='text' name='name'></td>
		</tr>
		<tr>
			<td><label>Lastname:</label></td><td><input type='text' name='lastname'></td>
		</tr>
		<tr>
			<td><label>address:</label></td><td><input type='text' name='address'></td>
		</tr>
		<tr>
			<td><label>phone:</label></td><td><input type='text' name='phone'></td>
		</tr>
		
		<tr>
			<td><label>Email:</label></td><td><input type='text' name='email'></td>
		</tr>
	</table>
		
	<input type='submit' value='Guardar'>
</form>