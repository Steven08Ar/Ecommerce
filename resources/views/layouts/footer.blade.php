<footer>
    <div class="footer-container">
        <div class="footer-columns">
            <div class="footer-column">
                <h4>Mi Tienda Tech</h4>
                <p>La mejor tecnología y electrodomésticos para tu hogar, entregados con la mejor atención y servicio.
                </p>
            </div>
            <div class="footer-column">
                <h4>Navegación</h4>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Ofertas</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Soporte</h4>
                <ul>
                    <li><a href="#">Preguntas Frecuentes</a></li>
                    <li><a href="#">Política de Devoluciones</a></li>
                    <li><a href="#">Términos y Condiciones</a></li>
                    <li><a href="#">Política de Privacidad</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-social">
                <a href="#" aria-label="Facebook"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.494v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
                    </svg></a>
                <a href="#" aria-label="Instagram"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.011 3.584-.069 4.85c-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.584-.012-4.85-.07c-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.85s.011-3.584.069-4.85c.149-3.225 1.664-4.771 4.919-4.919 1.266-.057 1.644-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072s3.667-.014 4.947-.072c4.358-.2 6.78-2.618 6.98-6.98.059-1.281.073-1.689.073-4.948s-.014-3.667-.072-4.947c-.2-4.358-2.618-6.78-6.98-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44 1.441-.645 1.441-1.44-.645-1.44-1.441-1.44z" />
                    </svg></a>
                <a href="#" aria-label="Twitter"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616v.064c0 2.293 1.634 4.212 3.793 4.649-.65.177-1.353.23-2.064.078.608 1.923 2.366 3.217 4.453 3.255-1.923 1.574-4.115 2.37-6.26 2.029 1.95.94 4.25 1.49 6.68 1.49 8.01 0 12.394-6.64 12.037-12.723.85-.61 1.57-1.36 2.14-2.23z" />
                    </svg></a>
            </div>
            <p class="copyright">© {{ date('Y') }} Mi Tienda Tech. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

<style>
    footer {
        background-color: #111827;
        /* Fondo oscuro */
        color: #9ca3af;
        /* Texto gris claro */
        padding: 60px 40px;
        font-family: 'Poppins', sans-serif;
        /* Asegura la consistencia de la fuente */
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .footer-columns {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 30px;
        margin-bottom: 40px;
    }

    .footer-column {
        flex: 1;
        min-width: 220px;
    }

    .footer-column h4 {
        color: #ffffff;
        /* Títulos en blanco */
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .footer-column p {
        line-height: 1.7;
    }

    .footer-column ul {
        list-style: none;
        padding: 0;
    }

    .footer-column ul li {
        margin-bottom: 12px;
    }

    /* --- ANIMACIÓN EN ENLACES --- */
    .footer-column a {
        text-decoration: none;
        color: #9ca3af;
        position: relative;
        /* Necesario para la animación del borde */
        padding-bottom: 4px;
        transition: color 0.3s ease;
    }

    .footer-column a::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: #007bff;
        /* Color de acento azul */
        transform: scaleX(0);
        /* Inicia invisible */
        transform-origin: bottom right;
        transition: transform 0.3s ease-out;
    }

    .footer-column a:hover {
        color: #ffffff;
        /* El texto se vuelve blanco al pasar el mouse */
    }

    .footer-column a:hover::after {
        transform: scaleX(1);
        /* La línea aparece de derecha a izquierda */
        transform-origin: bottom left;
    }

    /* --- REDES SOCIALES Y COPYRIGHT --- */
    .footer-bottom {
        border-top: 1px solid #374151;
        /* Línea divisoria */
        padding-top: 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    .footer-social {
        display: flex;
        gap: 15px;
    }

    /* --- ANIMACIÓN EN ICONOS SOCIALES --- */
    .footer-social a {
        color: #9ca3af;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .footer-social a:hover {
        color: #ffffff;
        /* Se vuelven blancos */
        transform: translateY(-3px);
        /* Se elevan un poco */
    }

    .copyright {
        font-size: 0.9rem;
    }
</style>
