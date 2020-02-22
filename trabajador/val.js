$(function(){

/* Incluimos un método para validar el campo nombre */
jQuery.validator.addMethod("nombre", function(value, element) {
return this.optional(element) || /^[a-zA-Záéóóúàèìòùäëïöüñ\s]+$/i.test(value);
});

/* Incluimos un método para validar el campo nombre */
jQuery.validator.addMethod("apellido", function(value, element) {
return this.optional(element) || /^[a-zA-Záéóóúàèìòùäëïöüñ\s]+$/i.test(value);
}); 

/* Capturar el click del botón */
$("#guardarnuevo").on("click", function()
   {
    /* Validar el formulario */
    $("#formulario").validate
         ({
             rules: /* Accedemos a los campos a través de su nombre: email, nombre, edad */
             {
               nombre: {required: true, nombre: true, maxlength: 50},
               apellido: {required: true, apellido: true,  maxlength: 50},
               email: {required: true, email: true, minlength: 5, maxlength: 80},
               telefono: {required: true, digits: true,  maxlength: 10}
             },
             messages: /* Accedemos a los campos a través de su nombre: email, nombre, edad */
             {
               nombre: {required: 'El campo es requerido.', nombre: 'Sólo letras.', minlength: 'El mínimo permitido son 2 caracteres.', maxlength: 'El máximo permitido son 50 caracteres.'},
               apellido: {required: 'El campo es requerido.', apellido: 'Sólo letras.',maxlength: 'El máximo permitido son 50 caracteres.'},
               email: {required: 'El campo es requerido.', email: 'El formato de email es incorrecto.', minlength: 'El mínimo permitido son 5 caracteres.', maxlength: 'El máximo permitido son 80 caracteres.'},
               telefono: {required: 'El campo es requerido.', digits: 'Escriba solo numeros.', maxlength: 'El máximo permitido son 10.'}
             }
         });
   });

});




