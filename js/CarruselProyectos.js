const proyectos = document.querySelectorAll('.proyecto');
  let current = 0;

  const mostrarProyecto = (index) => {
    proyectos.forEach((p, i) => {
      p.classList.remove('active');
      p.style.display = 'none';
    });

    const proyectoActivo = proyectos[index];
    proyectoActivo.style.display = 'block';
    setTimeout(() => {
      proyectoActivo.classList.add('active');
    }, 10); // delay mínimo para que la transición funcione
  };

  document.getElementById('next').addEventListener('click', () => {
    current = (current + 1) % proyectos.length;
    mostrarProyecto(current);
  });

  document.getElementById('prev').addEventListener('click', () => {
    current = (current - 1 + proyectos.length) % proyectos.length;
    mostrarProyecto(current);
  });

  // Mostrar el primero al cargar
  mostrarProyecto(current);