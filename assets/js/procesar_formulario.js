// Ocultando el campo formulario
document.getElementById("status").style.display = "none";



// Declarando las variables
var url = "https://aplicaciones.io/sendgrid/enviar-mail.php";
var mensaje_de_exito = "Su mensaje se ha envíado correctamente.";
var mensaje_sin_campos = "Debe llenar todos los campos marcados como obligatorios";
var mensaje_con_campos = "Todos los campos llenados correctamente.";
var formulario = document.getElementById('hm-formulario');
var encabezado                          = {};
    encabezado.subject                  = "Mensaje de proyectosenfibradevidrio.com";
    encabezado.remitente_nombre         = "Mi Sitio Web";
    encabezado.remitente_mail           = "no-reply@proyectosenfibradevidrio.com";
    encabezado.destinatario_nombre      = "Web Proyectos en Fibra de Vidrio";
    encabezado.destinatario_mail        = "cesar_3r@hotmail.com";
    // encabezado.destinatario_mail        = "alberto@gobierno.io";



// Procesar formulario
function procesarFormulario() {
    document.getElementById("status").style.display = "block";
    
    let respuesta = armarMensaje();

    if(respuesta.errores >= 1) {
        document.getElementById("status").innerHTML = mensaje_sin_campos;
    } else {
        document.getElementById("status").innerHTML = mensaje_con_campos;
        enviarDatos(respuesta.campos, encabezado);
    }
}



// Armar el cuerpo del mensaje 
function armarMensaje(){
    let respuesta = [];
    respuesta.campos = {};
    respuesta.errores = 0; 

    for (let i = 0, element; element = formulario.elements[i++];) {

        if ( element.value === "" ) {
            
            if(element.attributes.required) {
                respuesta.errores++;
            }
            
        } else {
            respuesta.campos[element.name] = element.value;
        }

    }

    return respuesta;
}



// Crea en enlace HTTP para envíar el formulario
function enviarDatos(campos, encabezado) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("status").innerHTML = mensaje_de_exito;
            resetFormulario();
        }
    };
    
    xhttp.open("POST", url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=utf-8");
    xhttp.send( "campos="+JSON.stringify(campos)+"&encabezado="+JSON.stringify(encabezado) );
}



// Hace reset a los campos del formulario, es llamada solo si el envío es correcto.
function resetFormulario() {
    for (var i = 0, element; element = formulario.elements[i++];) {
        element.value = "";

        setTimeout(function(){
            document.getElementById("status").style.display = "none";
        }, 2000);
    }
}