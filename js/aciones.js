const checkbox = document.getElementById("form-check-input");
const textos = document.getElementsByClassName("tachas");

checkbox.addEventListener("change", () => {
  if (checkbox.checked) {
    textos.style.textDecoration = "line-through";
  } else {
    textos.style.textDecoration = "none";
  }
});
