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