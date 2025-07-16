function copiarEmail() {
  const email = document.getElementById("email").innerText;
  navigator.clipboard.writeText(email);
  alert("¡Email copiado!");
}