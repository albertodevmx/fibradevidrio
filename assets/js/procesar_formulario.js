document.getElementById("status").style.display = "none";
var formulario = document.getElementById('hm-formulario');

var encabezado                          = {};
    encabezado.subject                  = "Mensaje de proyectosenfibradevidrio.com";
    encabezado.remitente_nombre         = "Mi Sitio Web";
    encabezado.remitente_mail           = "no-reply@proyectosenfibradevidrio.com";
    encabezado.destinatario_nombre      = "Web Proyectos en Fibra de Vidrio";
    encabezado.destinatario_mail        = "cesar_3r@hotmail.com";
    // encabezado.destinatario_mail        = "alheranx@hotmail.com";
    // encabezado.destinatario_mail        = "alberto@gobierno.io";

var mensaje_de_exito = "Su mensaje se ha envíado correctamente.";
var mensaje_sin_campos = "Debe llenar todos los campos marcados como obligatorios";
var mensaje_con_campos = "Todos los campos llenados correctamente.";


//function enviarMail(campos_cadena, encabezado_cadena) {
var campos = {};
function procesarFormulario() {
    document.getElementById("status").style.display = "block";
    
    var errores = 0; 

    for (var i = 0, element; element = formulario.elements[i++];) {

        if ( element.value === "" ) {
            
            if(element.attributes.required) {
                errores++;
            }
            
        } else {
            campos[element.name] = element.value;
        }

    }

    if(errores >= 1) {
        document.getElementById("status").innerHTML = mensaje_sin_campos;
    } else {
        document.getElementById("status").innerHTML = mensaje_con_campos;
        enviarFormulario(campos, encabezado);
    }
}

function enviarFormulario(campos, encabezado) {
    console.log("Esto se envía", campos);

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("status").innerHTML = mensaje_de_exito;
            console.log(xhttp.responseText);

            borrarFormulario();
        }
    };
    xhttp.open("POST", "http://35.185.31.208/sendgrid/enviar-mail.php", true);
    //xhttp.open("POST", "mail.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=utf-8");
    xhttp.send( "campos="+JSON.stringify(campos)+"&encabezado="+JSON.stringify(encabezado) );
}


function borrarFormulario() {
    for (var i = 0, element; element = formulario.elements[i++];) {


        element.value = "";

        // if ( element.value === "" ) {
            
        //     if(element.attributes.required) {
        //         errores++;
        //     }
            
        // } else {
        //     campos[element.name] = element.value;
        // }

    }
}