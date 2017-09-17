function validar(){
	var usuario, nombre, apellidos, email, pass, expresion;
	usuario=document.getElementById("usuario").value;
	nombre=document.getElementById("nombre").value;
	apellidos=document.getElementById("apellidos").value;
	email=document.getElementById("email").value;
	pass=document.getElementById("pass").value;
	// nombre=document.getElementById("nombre").value;
	if (usuario === "" || nombre === "" || apellidos === "" || email === "" || pass === "") {
		alert("todos los campos son obligatorios");
		return false;
	}

}