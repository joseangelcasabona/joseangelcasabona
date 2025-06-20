function irA(id) {
  const seccion = document.getElementById(id);
  if (seccion) {
    seccion.scrollIntoView({ behavior: 'smooth', inline: 'start' });
  }
}

// Detectar clic en puntos
document.querySelectorAll('.punto').forEach(p => {
  p.addEventListener('click', () => {
    irA(p.dataset.target);
  });
});

// Cambiar punto activo según scroll
const escritorio = document.querySelector('.escritorio');
const puntos = document.querySelectorAll('.punto');
const ventanas = document.querySelectorAll('.ventana');

escritorio.addEventListener('scroll', () => {
  let scrollPos = escritorio.scrollLeft;
  let ancho = escritorio.offsetWidth;

  ventanas.forEach((v, i) => {
    if (scrollPos >= i * ancho - ancho / 2 && scrollPos < (i + 1) * ancho - ancho / 2) {
      puntos.forEach(p => p.classList.remove('activo'));
      puntos[i].classList.add('activo');
    }
  });
});

//Efecto escritura automática
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
