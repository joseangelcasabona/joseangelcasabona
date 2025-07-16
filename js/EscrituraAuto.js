const titulos = ['Desarrollador Web', 'Desarrollador Multiplataforma', 'Entusiasta de la programación', 'Amante de la tecnología'];
const span = document.getElementById('titulo-animado');
let tituloIndex = 0;
let charIndex = 0;
let borrando = false;

function escribir() {
  const texto = titulos[tituloIndex];

  if (!borrando) {
    span.textContent = texto.slice(0, charIndex++);
    if (charIndex > texto.length) {
      borrando = true;
      setTimeout(escribir, 1500); // Pausa antes de borrar
      return;
    }
  } else {
    span.textContent = texto.slice(0, --charIndex);
    if (charIndex === 0) {
      borrando = false;
      tituloIndex = (tituloIndex + 1) % titulos.length;
    }
  }

  setTimeout(escribir, borrando ? 50 : 100);
}

escribir();