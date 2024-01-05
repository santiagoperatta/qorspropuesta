<?php include 'head.php';?>
<?php include 'nav.php';?>
<style>

@media (min-width: 768px) {
    .modal {
        display: none;
    }
}

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.9); /* Fondo oscuro */
}

/* Estilo para el contenido de la modal */
.modalContenido {
    display: block;
    margin: auto;
    max-width: 80%;
    max-height: 80%;
}

/* Estilo para el botón de cierre */
.cerrarModal {
    color: #fff;
    font-size: 24px;
    font-weight: bold;
    position: absolute;
    top: 20px;
    right: 30px;
    cursor: pointer;
    z-index: 2; /* Añade esto para asegurarte de que el botón de cierre esté por encima de la imagen */
}
</style>
<style>
    .carousel-container {
        overflow: hidden;
        width: 100%;
        position: relative;
    }
    .carousel-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }
    .carousel-slide {
        min-width: 100%;
        box-sizing: border-box;
        overflow: hidden;
        padding: 0 10px;
    }
    .carousel-img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .carousel-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        color: #233876;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        font-size: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .prev-btn {
        left: 10px;
    }
    .next-btn {
        right: 10px;
    }
    .desktop-category {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
    }
    @media (max-width: 767px) {
        .desktop-category {
            display: none;
        }
    }
    @media (min-width: 768px) {
        .carousel-container {
            display: none;
        }
    }
</style>

<section class="py-8 lg:py-16 mx-auto px-4 bg-gray-100">
    <!-- Sección de FUTBOL -->
	<h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-700 dark:text-gray-700">Catalogo</h2>
			<p class="font-light text-center text-gray-700 sm:text-xl">¿Que ofrecemos?</p>
			<div class="container mx-auto p-4">
    <div class="pt-20 bg-gray-100">
        <h2 class="px-4 mb-4 text-2xl tracking-tight font-extrabold text-right text-gray-700">FUTBOL</h2>
        <div class="carousel-container">
            <div class="carousel-track" id="carousel-futbol">
                <?php
                $rutaFutbol = 'images/catalogo/futbol';
                $archivosFutbol = scandir($rutaFutbol);
                for ($i = 2; $i < count($archivosFutbol); $i++) {
                    $imagenPath = $rutaFutbol . '/' . $archivosFutbol[$i];
                    echo '<div class="carousel-slide">
                        <a href="' . $imagenPath . '" target="_blank">
                            <img src="' . $imagenPath . '" alt="Imagen de Futbol ' . ($i - 1) . '" class="carousel-img">
                        </a>
                    </div>';
                }
                ?>
            </div>
            <button class="carousel-btn prev-btn" onclick="prevSlide('carousel-futbol')">&#10094;</button>
            <button class="carousel-btn next-btn" onclick="nextSlide('carousel-futbol')">&#10095;</button>
        </div>
        <div class="mt-12 mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:px-8 desktop-category">
            <?php
            for ($i = 2; $i < count($archivosFutbol); $i++) {
                $imagenPath = $rutaFutbol . '/' . $archivosFutbol[$i];
                echo '<a href="' . $imagenPath . '" target="_blank">
                        <img src="' . $imagenPath . '" alt="Imagen de Futbol ' . ($i - 1) . '" class="rounded-lg shadow-md w-full h-auto">
                    </a>';
            }
            ?>
        </div>
    </div>
</section>
<script>
    var currentSlideIndex = 0;
    function showSlides(trackId) {
        var track = document.getElementById(trackId);
        var slides = track.getElementsByClassName("carousel-slide");
        if (currentSlideIndex >= slides.length) {
            currentSlideIndex = 0;
        }
        if (currentSlideIndex < 0) {
            currentSlideIndex = slides.length - 1;
        }
        var newTransformValue = -currentSlideIndex * 100 + "%";
        track.style.transform = "translateX(" + newTransformValue + ")";
    }
    function nextSlide(trackId) {
        currentSlideIndex++;
        showSlides(trackId);
    }
    function prevSlide(trackId) {
        currentSlideIndex--;
        showSlides(trackId);
    }
</script>
<!-- BASQUET -->
<section class="py-8 lg:py-16 mx-auto px-4 bg-gray-100">
    <div class=" bg-gray-100">
        <h2 class="px-4 mb-4 text-2xl tracking-tight font-extrabold text-right text-gray-700">BASQUET</h2>
        <div class="carousel-container">
            <div class="carousel-track" id="carousel-basquet">
                <?php
                $rutaBasquet = 'images/catalogo/basquet';
                $archivosBasquet = scandir($rutaBasquet);
                for ($i = 2; $i < count($archivosBasquet); $i++) {
                    $imagenPath = $rutaBasquet . '/' . $archivosBasquet[$i];
                    echo '<div class="carousel-slide">
                        <a href="' . $imagenPath . '" target="_blank">
                            <img src="' . $imagenPath . '" alt="Imagen de Basquet ' . ($i - 1) . '" class="carousel-img">
                        </a>
                    </div>';
                }
                ?>
            </div>
            <button class="carousel-btn prev-btn" onclick="prevSlide('carousel-basquet')">&#10094;</button>
            <button class="carousel-btn next-btn" onclick="nextSlide('carousel-basquet')">&#10095;</button>
        </div>
        <div class="mt-12 mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:px-8 desktop-category">
            <?php
            for ($i = 2; $i < count($archivosBasquet); $i++) {
                $imagenPath = $rutaBasquet . '/' . $archivosBasquet[$i];
                echo '<a href="' . $imagenPath . '" target="_blank">
                        <img src="' . $imagenPath . '" alt="Imagen de Basquet ' . ($i - 1) . '" class="rounded-lg shadow-md w-full h-auto">
                    </a>';
            }
            ?>
        </div>
    </div>
</section>
<script>
    var currentSlideIndexBasquet = 0;
    function showSlidesBasquet() {
        var track = document.getElementById('carousel-basquet');
        var slides = track.getElementsByClassName("carousel-slide");
        if (currentSlideIndexBasquet >= slides.length) {
            currentSlideIndexBasquet = 0;
        }
        if (currentSlideIndexBasquet < 0) {
            currentSlideIndexBasquet = slides.length - 1;
        }
        var newTransformValue = -currentSlideIndexBasquet * 100 + "%";
        track.style.transform = "translateX(" + newTransformValue + ")";
    }
    function nextSlideBasquet() {
        currentSlideIndexBasquet++;
        showSlidesBasquet();
    }
    function prevSlideBasquet() {
        currentSlideIndexBasquet--;
        showSlidesBasquet();
    }
</script>
<!-- Repite este bloque para las demás secciones (hockey, voley, rugby, otros) -->
<!-- HOCKEY -->
<section class="py-8 lg:py-16 mx-auto px-4 bg-gray-100">
    <div class=" bg-gray-100">
        <h2 class="px-4 mb-4 text-2xl tracking-tight font-extrabold text-right text-gray-700">HOCKEY</h2>
        <div class="carousel-container">
            <div class="carousel-track" id="carousel-hockey">
                <?php
                $rutaHockey = 'images/catalogo/hockey';
                $archivosHockey = scandir($rutaHockey);
                for ($i = 2; $i < count($archivosHockey); $i++) {
                    $imagenPath = $rutaHockey . '/' . $archivosHockey[$i];
                    echo '<div class="carousel-slide">
                            <a href="' . $imagenPath . '" target="_blank">
                                <img src="' . $imagenPath . '" alt="Imagen de Hockey ' . ($i - 1) . '" class="carousel-img">
                            </a>
                        </div>';
                }
                ?>
            </div>
            <button class="carousel-btn prev-btn" onclick="prevSlide('carousel-hockey')">&#10094;</button>
            <button class="carousel-btn next-btn" onclick="nextSlide('carousel-hockey')">&#10095;</button>
        </div>
        <div class="mt-12 mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:px-8 desktop-category">
            <?php
            for ($i = 2; $i < count($archivosHockey); $i++) {
                $imagenPath = $rutaHockey . '/' . $archivosHockey[$i];
                echo '<a href="' . $imagenPath . '" target="_blank">
                        <img src="' . $imagenPath . '" alt="Imagen de Hockey ' . ($i - 1) . '" class="rounded-lg shadow-md w-full h-auto">
                    </a>';
            }
            ?>
        </div>
    </div>
</section>
<script>
    var currentSlideIndexHockey = 0;
    function showSlidesHockey() {
        var track = document.getElementById('carousel-hockey');
        var slides = track.getElementsByClassName("carousel-slide");
        if (currentSlideIndexHockey >= slides.length) {
            currentSlideIndexHockey = 0;
        }
        if (currentSlideIndexHockey < 0) {
            currentSlideIndexHockey = slides.length - 1;
        }
        var newTransformValue = -currentSlideIndexHockey * 100 + "%";
        track.style.transform = "translateX(" + newTransformValue + ")";
    }
    function nextSlideHockey() {
        currentSlideIndexHockey++;
        showSlidesHockey();
    }
    function prevSlideHockey() {
        currentSlideIndexHockey--;
        showSlidesHockey();
    }
</script>
<!-- Repite este bloque para las demás secciones (voley, rugby, otros) -->
<!-- VOLEY -->
<section class="py-8 lg:py-16 mx-auto px-4 bg-gray-100">
    <div class=" bg-gray-100">
        <h2 class="px-4 mb-4 text-2xl tracking-tight font-extrabold text-right text-gray-700">VOLEY</h2>
        <div class="carousel-container">
            <div class="carousel-track" id="carousel-voley">
                <?php
                $rutaVoley = 'images/catalogo/voley';
                $archivosVoley = scandir($rutaVoley);
                for ($i = 2; $i < count($archivosVoley); $i++) {
                    $imagenPath = $rutaVoley . '/' . $archivosVoley[$i];
                    echo '<div class="carousel-slide">
                            <a href="' . $imagenPath . '" target="_blank">
                                <img src="' . $imagenPath . '" alt="Imagen de Voley ' . ($i - 1) . '" class="carousel-img">
                            </a>
                        </div>';
                }
                ?>
            </div>
            <button class="carousel-btn prev-btn" onclick="prevSlide('carousel-voley')">&#10094;</button>
            <button class="carousel-btn next-btn" onclick="nextSlide('carousel-voley')">&#10095;</button>
        </div>
        <div class="mt-12 mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:px-8 desktop-category">
            <?php
            for ($i = 2; $i < count($archivosVoley); $i++) {
                $imagenPath = $rutaVoley . '/' . $archivosVoley[$i];
                echo '<a href="' . $imagenPath . '" target="_blank">
                        <img src="' . $imagenPath . '" alt="Imagen de Voley ' . ($i - 1) . '" class="rounded-lg shadow-md w-full h-auto">
                    </a>';
            }
            ?>
        </div>
    </div>
</section>
<script>
    var currentSlideIndexVoley = 0;
    function showSlidesVoley() {
        var track = document.getElementById('carousel-voley');
        var slides = track.getElementsByClassName("carousel-slide");
        if (currentSlideIndexVoley >= slides.length) {
            currentSlideIndexVoley = 0;
        }
        if (currentSlideIndexVoley < 0) {
            currentSlideIndexVoley = slides.length - 1;
        }
        var newTransformValue = -currentSlideIndexVoley * 100 + "%";
        track.style.transform = "translateX(" + newTransformValue + ")";
    }
    function nextSlideVoley() {
        currentSlideIndexVoley++;
        showSlidesVoley();
    }
    function prevSlideVoley() {
        currentSlideIndexVoley--;
        showSlidesVoley();
    }
</script>
<!-- Repite este bloque para las demás secciones (rugby, otros) -->
<!-- RUGBY -->
<section class="py-8 lg:py-16 mx-auto px-4 bg-gray-100">
    <div class=" bg-gray-100">
        <h2 class="px-4 mb-4 text-2xl tracking-tight font-extrabold text-right text-gray-700">RUGBY</h2>
        <div class="carousel-container">
            <div class="carousel-track" id="carousel-rugby">
                <?php
                $rutaRugby = 'images/catalogo/rugby';
                $archivosRugby = scandir($rutaRugby);
                for ($i = 2; $i < count($archivosRugby); $i++) {
                    $imagenPath = $rutaRugby . '/' . $archivosRugby[$i];
                    echo '<div class="carousel-slide">
                            <a href="' . $imagenPath . '" target="_blank">
                                <img src="' . $imagenPath . '" alt="Imagen de Rugby ' . ($i - 1) . '" class="carousel-img">
                            </a>
                        </div>';
                }
                ?>
            </div>
            <button class="carousel-btn prev-btn" onclick="prevSlide('carousel-rugby')">&#10094;</button>
            <button class="carousel-btn next-btn" onclick="nextSlide('carousel-rugby')">&#10095;</button>
        </div>
        <div class="mt-12 mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:px-8 desktop-category">
            <?php
            for ($i = 2; $i < count($archivosRugby); $i++) {
                $imagenPath = $rutaRugby . '/' . $archivosRugby[$i];
                echo '<a href="' . $imagenPath . '" target="_blank">
                        <img src="' . $imagenPath . '" alt="Imagen de Rugby ' . ($i - 1) . '" class="rounded-lg shadow-md w-full h-auto">
                    </a>';
            }
            ?>
        </div>
    </div>
</section>
<script>
    var currentSlideIndexRugby = 0;
    function showSlidesRugby() {
        var track = document.getElementById('carousel-rugby');
        var slides = track.getElementsByClassName("carousel-slide");
        if (currentSlideIndexRugby >= slides.length) {
            currentSlideIndexRugby = 0;
        }
        if (currentSlideIndexRugby < 0) {
            currentSlideIndexRugby = slides.length - 1;
        }
        var newTransformValue = -currentSlideIndexRugby * 100 + "%";
        track.style.transform = "translateX(" + newTransformValue + ")";
    }
    function nextSlideRugby() {
        currentSlideIndexRugby++;
        showSlidesRugby();
    }
    function prevSlideRugby() {
        currentSlideIndexRugby--;
        showSlidesRugby();
    }
</script>
<!-- Repite este bloque para las demás secciones (otros) -->
<section class="py-8 lg:py-16 mx-auto px-4 bg-gray-100">
    <div class=" bg-gray-100">
        <h2 class="px-4 mb-4 text-2xl tracking-tight font-extrabold text-right text-gray-700">OTROS</h2>
        <div class="carousel-container">
            <div class="carousel-track" id="carousel-otros">
                <?php
                $rutaOtros = 'images/catalogo/otros';
                $archivosOtros = scandir($rutaOtros);
                for ($i = 2; $i < count($archivosOtros); $i++) {
                    $imagenPath = $rutaOtros . '/' . $archivosOtros[$i];
                    echo '<div class="carousel-slide">
                            <a href="' . $imagenPath . '" target="_blank">
                                <img src="' . $imagenPath . '" alt="Imagen de Otros ' . ($i - 1) . '" class="carousel-img">
                            </a>
                        </div>';
                }
                ?>
            </div>
            <button class="carousel-btn prev-btn" onclick="prevSlide('carousel-otros')">&#10094;</button>
            <button class="carousel-btn next-btn" onclick="nextSlide('carousel-otros')">&#10095;</button>
        </div>
        <div class="mt-12 mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:px-8 desktop-category">
            <?php
            for ($i = 2; $i < count($archivosOtros); $i++) {
                $imagenPath = $rutaOtros . '/' . $archivosOtros[$i];
                echo '<a href="' . $imagenPath . '" target="_blank">
                        <img src="' . $imagenPath . '" alt="Imagen de Otros ' . ($i - 1) . '" class="rounded-lg shadow-md w-full h-auto">
                    </a>';
            }
            ?>
        </div>
    </div>
</section>
<script>
    var currentSlideIndexOtros = 0;
    function showSlidesOtros() {
        var track = document.getElementById('carousel-otros');
        var slides = track.getElementsByClassName("carousel-slide");
        if (currentSlideIndexOtros >= slides.length) {
            currentSlideIndexOtros = 0;
        }
        if (currentSlideIndexOtros < 0) {
            currentSlideIndexOtros = slides.length - 1;
        }
        var newTransformValue = -currentSlideIndexOtros * 100 + "%";
        track.style.transform = "translateX(" + newTransformValue + ")";
    }
    function nextSlideOtros() {
        currentSlideIndexOtros++;
        showSlidesOtros();
    }
    function prevSlideOtros() {
        currentSlideIndexOtros--;
        showSlidesOtros();
    }
</script>
<script></script>
<?php include 'footer.php';?>