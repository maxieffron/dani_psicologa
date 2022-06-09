/***************************************************************************
VALIDACIONES SOBRE LOS CAMPOS DEL FORMULARIO ANTES DE ENVIAR EL MAIL
***************************************************************************/

// VALIDAR SOLO NÚMEROS EN UN INPUT "TEXT"
window.addEventListener("load", function () {
    formulario.phone.addEventListener("keypress", soloNumeros, false);
});

//Solo permite introducir numeros.
function soloNumeros(e) {
    var key = window.event ? e.which : e.keyCode;
    if (key < 48 || key > 57) {
        e.preventDefault();
    }
}

//Cada vez que clickeamos sobre un enlace del menú, llamamos al evento "click" del nav.bar,para replicar el efecto
//que se produce al hacer click sobre el menú hamburguesa.
//let itemsMenu = document.getElementById("btn-enviar");
//let itemsMenu = document.getElementsByClassName("nav-item");
//let itemsMenu = document.querySelector(".nav-item");
document.querySelectorAll(".nav-item").forEach((element) => {
    element.addEventListener("click", () => {
        document.querySelector(".navbar-toggler").click();
    });
});

$(document).on("ready", function () {
    $("#btn-enviar").click(async function () {
        var url = "../mail/mail.php";

        //Validamos que los datos del formulario estén correctos
        if (!validarFormulario()) {
            event.preventDefault();

            $("#btn-campos_obligatorios").click();
        } else {
            var valido = false;

            try {
                const r = await $.ajax({
                    type: "POST",
                    url: url,
                    data: $("#formdata").serialize(),
                });

                //TODO FUE OK

                $("#btn-presionar").click();

                if ($("select[name=nationality]").val() === "Argentina") {
                    //Redireccionamos la página de Mercado Pago a los 3 segundos
                    setTimeout(function () {
                        url = "https://mpago.la/1fnsh2H";
                        $(location).attr("href", url);
                    }, 3000);
                } else {
                    //Redireccionamos la página de Paypal a los 3 segundos
                    setTimeout(function () {
                        url =
                            "https://paypal.me/nacerconotroserdani?country.x=AR&locale.x=es_XC";
                        $(location).attr("href", url);
                    }, 3000);
                }
            } catch {
                // HUBO UN ERROR

                $("#btn-error").click();
            }
        }
    });
});

function validarFormulario() {
    //Ocultamos todos los divs que muestran un error de validación al
    //completar el campo.
    $(".validate").hide();

    var result = true;
    var re =
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    //****** CAMPO NOMBRE ******

    //Validación Nº1: Campo Obligatorio
    if ($("input[name=name]").val().length === 0) {
        result = false;
        //Si hay un error, mostramos el texto que corresponde.
        $("#validate_Nombre").fadeIn("slow");
    }

    //Validación Nº2: Mínimo de caracteres
    else if ($("input[name=name]").val().length < 4) {
        result = false;
        //Si hay un error, mostramos el texto que corresponde.
        $("#validate_Len_Nombre").fadeIn("slow");
    }

    //****** CAMPO TELEFONO ******

    //Validación Nº1: Campo Obligatorio
    if ($("input[name=phone]").val().length === 0) {
        result = false;
        //Si hay un error, mostramos el texto que corresponde.
        $("#validate_Telefono").fadeIn("slow");
    }

    //Validación Nº2: Mínimo de caracteres
    else if ($("input[name=phone]").val().length < 8) {
        result = false;
        //Si hay un error, mostramos el texto que corresponde.
        $("#validate_Len_Telefono").fadeIn("slow");
    }

    //****** CAMPO EMAIL ******

    //Validación Nº1: Campo Obligatorio
    if ($("input[name=email]").val().length === 0) {
        result = false;
        //Si hay un error, mostramos el texto que corresponde.
        $("#validate_Email").fadeIn("slow");
    }

    //Validación Nº2: Validamos que el mail sea un mail con caracteres correctos
    else if (!re.test($("input[name=email]").val())) {
        result = false;
        //Si hay un error, mostramos el texto que corresponde.
        $("#validate_Email_OK").fadeIn("slow");
    }

    //****** CAMPO RESIDENCIA ******

    if ($("select[name=nationality]").val() === "residencia") {
        result = false;
        //Si hay un error, mostramos el texto que corresponde.
        $("#validate_Residencia").fadeIn("slow");
    }

    //****** CAMPO MENSAJE ******

    //Campo Obligatorio
    if ($("textarea[name=message]").val().length === 0) {
        result = false;
        //Si hay un error, mostramos el texto que corresponde.
        $("#validate_Msj").fadeIn("slow");
    }

    return result;
}
