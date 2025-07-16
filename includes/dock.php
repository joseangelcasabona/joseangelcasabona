<nav class="barra-tareas">
    <button onclick="irA('home')">
        <img src="assets/ICONS/HOME.png" alt="Home" />
        <span class="tooltip">Inicio</span>
    </button>
    <button onclick="irA('conocimientos')">
        <img src="assets/ICONS/CONOCIMIENTOS.png" alt="Conocimientos" />
        <span class="tooltip">Conocimientos</span>
    </button>
    <button onclick="irA('proyectos')">
        <img src="assets/ICONS/PROYECTOS.png" alt="Proyectos" />
        <span class="tooltip">Proyectos</span>
    </button>
    <button onclick="irA('contacto')">
        <img src="assets/ICONS/CONTACTO.png" alt="Contactos" />
        <span class="tooltip">Contacto</span>
    </button>
</nav>

<div class="paginacion">
    <span data-target="home" class="punto activo"></span>
    <span data-target="conocimientos" class="punto"></span>
    <span data-target="proyectos" class="punto"></span>
    <span data-target="contacto" class="punto"></span>
</div>

<script src="js/CambiarPagina.js"></script>