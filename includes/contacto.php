<div class="ventana" id="contacto">
    <?php include("includes/barraSuperior.php")?>
    <div class="contenido-contacto">
        <!-- Bloque izquierdo superior -->
        <div class="bloque-contacto info-contacto">
            <h3>Contactame</h3>
            <p>
                <span id="email">joseangelcasabona@gmail.com</span>
                <button onclick="copiarEmail()"><i class="fas fa-copy"></i></button>
            </p>
            <div class="redes">
                <a href="https://www.linkedin.com/in/jos%C3%A9-%C3%A1ngel-casabona-andr%C3%A9s-a1b7362a4/" target="_blank"><img src="assets/ICONS/linkedin.png" alt="LinkedIn" /></a>
                <a href="https://github.com/joseangelcasabona" target="_blank"><img src="assets/ICONS/github.png" alt="LinkedIn" /></i></a>
                <a href="#" target="_blank"><img src="assets/ICONS/instagram.png" alt="LinkedIn" /></i></a>
            </div>
        </div>

        <!-- Bloque izquierdo inferior -->
        <div class="contenedor-avatar">
            <img src="assets/MEMOJI1.png" class="avatarAnimado" alt="Avatar" />
        </div>

        <!-- Bloque derecho: formulario -->
        <div class="bloque-contacto formulario-contacto">
            <h3>Enviame un mensaje</h3>
            <form>
                <input type="text" placeholder="Tu nombre" required />
                <input type="email" placeholder="Tu email" required />
                <textarea placeholder="Escribe tu mensaje..." required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</div>
<script src="js/CopiarMail.js"></script>