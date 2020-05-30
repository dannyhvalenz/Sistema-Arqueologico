<script type="text/javascript">
		//Tipo Bolsa Analizo Latitud Utmn Utme Patron Cuadrante
		$('#Fecha').on('focusout',function(){
			var fecha = $(this).val();
			if(fecha.length == 0 || fecha==null){
				$('#Fecha').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Fecha').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Cuadrante').on('focusout',function(){
			var Cuadrante = $(this).val();
			if(Cuadrante.length == 0 || Cuadrante==null){
				$('#Cuadrante').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Cuadrante').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Sitio').on('focusout',function(){
			var Sitio = $(this).val();
			if(Sitio.length == 0 || Sitio==null){
				$('#Sitio').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Sitio').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Patron').on('focusout',function(){
			var Patron = $(this).val();
			if(Patron.length == 0 || Patron==null){
				$('#Patron').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Patron').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Utme').on('focusout',function(){
			var Utme = $(this).val();
			if(Utme.length == 0 || Utme==null){
				$('#Utme').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Utme').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Utmn').on('focusout',function(){
			var Utmn = $(this).val();
			if(Utmn.length == 0 || Utmn==null){
				$('#Utmn').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Utmn').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Latitud').on('focusout',function(){
			var Latitud = $(this).val();
			if(Latitud.length == 0 || Latitud==null){
				$('#Latitud').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Latitud').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Analizo').on('focusout',function(){
			var Analizo = $(this).val();
			if(Analizo.length == 0 || Analizo==null){
				$('#Analizo').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Analizo').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Bolsa').on('focusout',function(){
			var Bolsa = $(this).val();
			if(Bolsa.length == 0 || Bolsa==null){
				$('#Bolsa').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Bolsa').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Tipo').on('focusout',function(){
			var Tipo = $(this).val();
			if(Tipo.length == 0 || Tipo==null){
				$('#Tipo').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Tipo').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Tratamiento').on('focusout',function(){
			var Tratamiento = $(this).val();
			if(Tratamiento.length == 0 || Tratamiento==null){
				$('#Tratamiento').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Tratamiento').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Modificacion').on('focusout',function(){
			var Modificacion = $(this).val();
			if(Modificacion.length == 0 || Modificacion==null){
				$('#Modificacion').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Modificacion').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#FormasTratamientos').on('focusout',function(){
			var FormasTratamientos = $(this).val();
			if(FormasTratamientos.length == 0 || FormasTratamientos==null){
				$('#FormasTratamientos').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#FormasTratamientos').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Peso').on('focusout',function(){
			var Peso = $(this).val();
			if(Peso.length == 0 || Peso==null){
				$('#Peso').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Peso').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#TotalFragmentos').on('focusout',function(){
			var totalFragmentos = $(this).val();
			if(totalFragmentos.length == 0 || totalFragmentos==null){
				$('#TotalFragmentos').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#TotalFragmentos').addClass('is-valid').removeClass('is-invalid');
			}
		});
		$('#Observaciones').on('focusout',function(){
			var texto = document.getElementById('Observaciones').value;
			//var observaciones = $(this).val();
			if(texto.length == 0 || texto==null){
				$('#Observaciones').addClass('is-invalid').removeClass('is-valid');
			}else{
				$('#Observaciones').addClass('is-valid').removeClass('is-invalid');
			}
		});
		/*function valtxtarea() {
		  var val = document.getElementById('Observaciones').value;
		  if (val.length == 0 || val==null) {
			$('#TotalFragmentos').addClass('is-invalid').removeClass('is-valid');
		  }else{
				$('#TotalFragmentos').addClass('is-valid').removeClass('is-invalid');
		  }
		}*/
	</script>