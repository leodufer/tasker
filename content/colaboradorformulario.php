<h4>Registro de Colaboradores</h4>
<form action="controlador/colaborador.php" method="post">
		<label>Nombre</label>
		<input name="nombre" type="text" required placeholder="Nombre del Colaborador">
		<label>Apellido</label>
		<input name="apellido" type="text" required placeholder="Apellido del Colaborador">
		<label>Email</label>
		<input name="email" type="email" placeholder="Escriba el Email" required>
		<label>Teléfono</label>
		<input name="telefono" type="text" required placeholder="Escriba el Nº de Teléfono">
		<br>
		<a href="?p=colaboradores" class="btn">Cancelar</a>
		<input type="submit" value="Guardar" class="btn btn-danger">
</form>