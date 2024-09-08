document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("formulario")
    .addEventListener("submit", validarFormulario);
});

function validarFormulario(evento) {
  evento.preventDefault();
  const nomTarea = document.getElementById("nuevaTarea").value;
  if (nomTarea.lenght == 0) {
    alert("Debe agregar un titulo para una tarea");
    return;
  }
  this.submit();
}

const checkbox = document.getElementById("flexCheckDefault");
const texto = document.getElementById("myTexto");

checkbox.addEventListener("change", () => {
  if (checkbox.checked) {
    texto.clossList.add("tachita");
  } else {
    texto.classList.remove("tachita");
  }
});
