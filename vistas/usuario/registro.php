<h1>REGISTRARSE</h1>
<form action="<?=url_base?>usuario/guardar" method="POST">
    <label>NOMBRE</label>
    <input type="text" name="nombre" value="" required/>
    <label>APELLIDOS</label>
    <input type="text" name="apellidos" value="" required/>
    <label>EMAIL</label>
    <input type="email" name="email" value="" required/>
    <label>PASSWORD</label>
    <input type="password" name="password" value="" required/>
    <label>Telefono</label>
    <input type="password" name="password" value="" required/>
    <input type="submit" value="Registrar" />
</form>