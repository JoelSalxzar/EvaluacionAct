 <?php  
if (isset($_POST['submit'])){
if (empty($nombre)) {
	 echo "<p class='error'>*Campo de Nombre es obligatorio </p>";
	 }
if (empty($apellidos)) {
	 echo "<p class='error'>*Campo de Apellidos es obligatorio </p>";
}
if (empty($noCtrl)) {
	 echo "<p class='error'>*Campo de No.Control es obligatorio </p>";
}else{
if (!is_numeric($noCtrl)) {
	 echo "<p class='error'>*Solo se pueden ingresar números </p>";
}
} 
if (empty($correo)) {
	 echo "<p class='error'>*Campo de Correo es obligatorio </p>";
}else {
	if (!filter_var($correo,FILTER_VALIDATE_EMAIL)) {
		 echo "<p class='error'>*Correo incorrecto </p>";
	}
	if (empty($contraseña)) {
	 echo "<p class='error'>*Campo de Contraseña es obligatorio </p>";
	} else if($_POST["contraseña"]==$_POST["contraseña2"])
{
    echo "<p class='correcto'>*Las contraseñas coinciden </p>";
}else if ($_POST["contraseña"]!=$_POST["contraseña2"]) {
	# code...
	echo "<p class='error'>*Las contraseñas no coinciden </p>";
}
    

}


}

