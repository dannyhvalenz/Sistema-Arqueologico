$('document').onsubmit(function(){
    var conteo_state = false;

    var Material = $('#Material').val();
    var ConteoArti = $('#ConteoArti').val();
    var Colecto = $('#Colecto').val();
    var Fecha = $('#Fecha').val();
    var IdAnalisisPastas = $('#IdAnalisisPastas').val();

    $.ajax({
        url: 'crearConteo.php', 
        type: 'post',
        data: {
            'conteo_check': 1,
            'material': Material, 
            'conteoArti': ConteoArti,
            'colecto': Colecto,
            'fecha': Fecha,
            'IdAnalisisPastas': IdAnalisisPastas,
            'Estado': 'activo',
        },
        success: function(response){
            if (response == 'existe'){
                conteo_state = false;
                alert("Hay un conteo existente con los siguientes datos iguales: idAnalisis, Material, Conteo Artificial, Fecha y Colecto");
            } else if (response == 'no_existe'){
                conteo_state = true;
                registrarConteo();
            }
        }
    })    

    function registrarConteo(query) {
        $.ajax({
            url: "crearConteo2.php",
            method: "POST",
            data: {
                query: query
            },
            success: function(data) {
                if(response == true){    
                    header("Location: ../../pages/Conteo/conteo-Colecciones.php");
                } else {
                    header("Location: ../../pages/Otras/nodisponible.php");
                }
            }
        });
    }
});