<style>
    /* Estilos personalizados */
    .navbar {
        background-color: #fff;
        border-bottom: 1px solid #ccc;
        padding: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .navbar-logo {
        display: flex;
        align-items: center;
    }

    .navbar-logo img {
        height: 30px;
        margin-right: 10px;
    }

    .navbar-menu {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-menu ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }

    .navbar-menu a {
        padding: 10px;
        text-decoration: none;
        color: #333;
        transition: background-color 0.3s;
    }

    .navbar-menu a:hover {
        background-color: #f0f0f0;
    }

    /* Estilos para dispositivos móviles */
    @media (max-width: 768px) {
        .navbar {
            justify-content: space-between;
        }

        .navbar-menu {
            flex-direction: column;
            position: absolute;
            top: 60px;
            right: 10px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1;
            width: 100%;
            display: none; /* Ocultar por defecto en dispositivos móviles */
        }

        .navbar-menu-btn {
            display: block;
        }

        .navbar-menu-btn div {
            width: 30px;
            height: 3px;
            background-color: #333;
            margin: 6px 0;
            transition: 0.4s;
        }

        .navbar-menu ul {
            flex-direction: column;
            align-items: center;
        }
    }
</style>

<nav class="navbar">

    
    <div class="navbar-menu" id="desktop-menu">
        <ul>
			<li><a class="text-right font-bold" href="/qors-santiago">Inicio</a></li>
            <li><a class="text-right font-bold" href="productos.php">Productos</a></li>
            <li><a class="text-right font-bold" href="circulo.php">Círculo QORS</a></li>
            <li><a class="text-right font-bold" href="contacto.php">Contacto</a></li>
            <li><a class="text-right font-bold" href="nosotros.php">Nosotros</a></li>
        </ul>
    </div>

    <div class="navbar-menu-btn" onclick="toggleMobileMenu()">
        <div></div>
        <div></div>
        <div></div>
    </div>
</nav>

<script>
    function toggleMobileMenu() {
        const mobileMenu = document.querySelector('.navbar-menu');
        mobileMenu.style.display = (mobileMenu.style.display === 'none' || mobileMenu.style.display === '') ? 'flex' : 'none';
    }

    // Cierra el menú en dispositivos móviles si se hace clic fuera de él
    window.addEventListener('click', function (e) {
        const mobileMenu = document.querySelector('.navbar-menu');
        const menuBtn = document.querySelector('.navbar-menu-btn');

        // Verificar si el ancho de la ventana es menor o igual a 768px (dispositivos móviles)
        if (window.innerWidth <= 768 && !mobileMenu.contains(e.target) && !menuBtn.contains(e.target)) {
            mobileMenu.style.display = 'none';
        }
    });

    // Añadimos la clase 'active' al enlace clicado
    const links = document.querySelectorAll('.navbar-menu a');
    links.forEach(link => {
        link.addEventListener('click', function() {
            links.forEach(otherLink => otherLink.classList.remove('active'));
            this.classList.add('active');

            // Oculta el menú en dispositivos móviles al hacer clic en un enlace
            const mobileMenu = document.querySelector('.navbar-menu');
            mobileMenu.style.display = 'none';
        });
    });
</script>