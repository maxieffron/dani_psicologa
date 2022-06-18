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

$(document).ready(function () {
    $("#btn-enviar").on("click", async function () {
        //Validamos que los datos del formulario estén correctos
        if (!validarFormulario()) {
            event.preventDefault();

            //$("#btn-campos_obligatorios").click();

            //Campos obligatorios
            Swal.fire({
                icon: "warning",
                title: "Hay campos incompletos",
                text: "Por favor, complete todos los campos obligatorios",
                imageUrl: "./assets/images/logo.png",
                imageWidth: 200,
                showConfirmButton: true,
                confirmButtonColor: "#8c8c8c",
            });
        } else {
            //let valido = false;

            try {
                //const r = await $.ajax({
                await $.ajax({
                    type: "POST",
                    url: "./assets/mail/mail.php",
                    data: $("#formdata").serialize(),
                    success: function () {
                        //Éxito
                        Swal.fire({
                            title: "¡La inscripción ha sido exitosa!",
                            text:
                                $("input[name=name]").val() +
                                ", en breve te vamos a redireccionar a tu plataforma de pago",
                            icon: "success",
                            imageUrl: "./assets/images/logo.png",
                            imageWidth: 200,
                            showConfirmButton: false,
                            timer: 4000,
                        });

                        //Redireccionamos la página de Mercado Pago a los 3 segundos
                        setTimeout(function () {
                            const url =
                                $("select[name=nationality]").val() ===
                                "Argentina"
                                    ? "https://mpago.la/1fnsh2H"
                                    : //Redireccionamos la página de Paypal a los 3 segundos
                                      "https://paypal.me/nacerconotroserdani?country.x=AR&locale.x=es_XC";
                            window.open(url, "_blank");
                            location.href = "/";
                        }, 4000);
                    },
                    error: function () {
                        //Error
                        Swal.fire({
                            title: "¡Oops... Se produjo un error al procesar tu inscripción.!",
                            text: "Aguarda unos minutos e intentalo nuevamente.",
                            icon: "error",
                            imageUrl: "./assets/images/logo.png",
                            imageWidth: 200,
                            showConfirmButton: false,
                            timer: 4000,
                        });
                    },
                });
            } catch {
                //Error
                Swal.fire({
                    title: "¡Oops... Se produjo un error al procesar tu inscripción.!",
                    text: "Aguarda unos minutos e intenta nuevamente.",
                    icon: "error",
                    imageUrl: "./assets/images/logo.png",
                    imageWidth: 200,
                    showConfirmButton: false,
                    timer: 4000,
                });
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
