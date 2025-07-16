<div class="ventana" id="proyectos">
    <?php include("includes/barraSuperior.php") ?>
    <div class="contenido-proyectos">

        <button class="btn-nav" id="prev">
            <i class="fa-solid fa-arrow-left"></i>
        </button>

        <div class="proyecto proyecto1">
            <h2>The Little Explorer</h2>
            <p>Videojuego de plataformas, educativo y con niveles de diferente estilo desarrollado en Unity.
                Controla a nuestro pequeño explorador en un
                mundo lleno de peligros, misterios, enemigos y niveles progresivos.</p>
            <p>Este videojuego tiene como objetivo explicar los fundamentos del protocolo TCP/IP,
                pero gamificando la experiencia. Está enfocado a gente que esté comenzando a estudiar informática
                y quiera una forma original de entrar en materia.</p>
            <div class="info-video">
                <ul>
                    <li>🎮 Hecho con C# y motor Unity</li>
                    <li>🌍 Niveles diseñados desde cero con tilesets</li>
                    <li>🎧 Música, efectos y animaciones personalizadas</li>
                </ul>
                <div class="video-embed">
                    <iframe src="https://www.youtube.com/embed/bNikg1VuXFA" title="The Little Explorer"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>

        <div class="proyecto proyecto2">
            <h2>Tick-It</h2>
            <p>Plataforma web de gestión de tickets para soporte técnico. Permite a los usuarios registrar
                incidencias, hacer seguimiento y recibir notificaciones por correo. Proyecto final del ciclo
                DAW.</p>
            <p>¿Quieres ver los resultados? Entra en <a href="https://tick-it.free.nf">tick-it.free.nf</a></a></p>
            <div class="info-foto">
                <ul>
                    <li>💻 Desarrollado en PHP + MySQL</li>
                    <li>🔐 Sistema de login, roles y permisos</li>
                    <li>📬 Notificaciones automáticas por email</li>
                </ul>
                <img src="assets/tickit-captura.png" alt="Captura de Tick-It">
            </div>
        </div>

        <div class="proyecto proyecto3">
            <h2>Más proyectos próximamente</h2>
            <img src="assets/MEMOJI3.png" class="avatarAnimado" alt="avatar">
        </div>

        <button class="btn-nav" id="next">
            <i class="fa-solid fa-arrow-right"></i>
        </button>

    </div>
</div>
<script src="js/CarruselProyectos.js"></script>