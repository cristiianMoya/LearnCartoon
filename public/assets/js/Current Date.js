
// -------- Ver fecha ----------

var fechaActual = new Date();
var dia = fechaActual.getDate();
var mes = fechaActual.getMonth() + 1;
var anio = fechaActual.getFullYear();
document.getElementById("fecha-actual").innerHTML = dia + "/" + mes + "/" + anio;

// -------------- Ver contraseña ------------

function togglePasswordVisibility() {
    var passwordInput = document.getElementById("passwordInput");
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
    } else {
      passwordInput.type = "password";
    }
  }

// -------------Alerta de Contactenos -------------

// document.getElementById("FormContactenos").onsubmit = function (){
//   alert ("El mensaje se envio satisfactoriamente")
// }
function showCustomDialog() {
  var dialog = document.getElementById("customDialog");
  dialog.style.display = "block";
}

function closeDialog() {
  var dialog = document.getElementById("customDialog");
  dialog.style.display = "none";
}

document.getElementById("FormContactenos").onsubmit = function(e) {
e.preventDefault(); // Evitar el envío automático del formulario
showCustomDialog();
setTimeout(function() {
  document.getElementById("FormContactenos").submit(); // Enviar el formulario manualmente después de mostrar la alerta
}, 3000); // Tiempo de espera para enviar
};