function validar(id){
	var elemento = document.getElementById(id);
	if(elemento.checkValidity()){
		elemento.style.borderColor="green";
	}else{
		elemento.style.borderColor="red";
	}
	
}
function(){
	var Fecha = document.getElementById('Fecha').checkValidity();
	var Cuadrante = document.getElementById('Cuadrante').checkValidity();
	var Sitio = document.getElementById('Sitio').checkValidity();
	var Patron = document.getElementById('Patron').checkValidity();
	var Utme = document.getElementById('Utme').checkValidity();
	var Utmn = document.getElementById('Utmn').checkValidity();
	var Latitud = document.getElementById('Latitud').checkValidity();
	var Analizo = document.getElementById('Analizo').checkValidity();
	var Bolsa = document.getElementById('Bolsa').checkValidity();
	var Tipo = document.getElementById('Tipo').checkValidity();
	var Tratamiento = document.getElementById('Tratamiento').checkValidity();
	var Modificacion = document.getElementById('Modificacion').checkValidity();
	var FormasTratamientos = document.getElementById('FormasTratamientos').checkValidity();
	var Peso = document.getElementById('Peso').checkValidity();
	var TotalFragmentos = document.getElementById('TotalFragmentos').checkValidity();
	var Observaciones = document.getElementById('Observaciones').checkValidity();
	
	if(Fecha==null || Fecha.length ==0){
		alert ("Fecha vacia");
	}
	
	if(Fecha && Cuadrante && Sitio && Patron && Utme && Utmn && Latitud && Analizo && Bolsa && Tipo && Tratamiento && Modificacion && FormasTratamientos && Peso && TotalFragmentos && Observaciones){
		alert ("Formulario exitosamente");
	}else{
		alert ("No se ha podido procesar el formulario");
	}
}