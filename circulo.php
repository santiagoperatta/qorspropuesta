<?php include 'head.php';?>
<?php include 'nav.php';?>
<style>
        /* Agregar estilos adicionales según sea necesario */
        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .logo {
            width: 100px; /* Ajusta el tamaño de los logos según tus necesidades */
            height: auto;
            filter: grayscale(100%); /* Inicialmente en blanco y negro */
            transition: filter 0.3s ease; /* Agregar una transición suave */
        }

        .logo:hover {
            width: 120px; /* Al pasar el ratón, muestra la imagen a todo color */
			filter: grayscale(0%); /* Inicialmente en blanco y negro */
        }
    </style>
<div class="pb-16">
	<section class="bg-gray-100">
		<div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
			<h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-700 dark:text-gray-700">Circulo QORS</h2>
			<p class="mb-6 lg:mb-8 font-light text-center text-gray-700 sm:text-xl">Confian en nosotros</p>
			<div class="container mx-auto p-4">
        	<div class="logo-container">
				<?php
				// Ruta de la carpeta de logos
				$ruta = 'images/logos';

				// Obtener la lista de archivos en la carpeta
				$archivos = scandir($ruta);

				// Iterar sobre los archivos y mostrar los logos
				foreach ($archivos as $archivo) {
					// Excluir los directorios . y ..
					if ($archivo != "." && $archivo != "..") {
						echo '<img src="' . $ruta . '/' . $archivo . '" alt="Logo" class="logo">';
					}
				}
				?>
        	</div>
    	</div>
			<div class="container mx-auto p-8">
				<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
					<?php
					// Ruta de la carpeta de imágenes
					$ruta = 'images/circulo';

					// Obtener la lista de archivos en la carpeta
					$archivos = scandir($ruta);

					// Iterar sobre los archivos y mostrar las imágenes
					foreach ($archivos as $archivo) {
						// Excluir los directorios . y ..
						if ($archivo != "." && $archivo != "..") {
							echo '<img src="' . $ruta . '/' . $archivo . '" alt="Imagen" class="rounded-lg shadow-md w-full h-auto">';
						}
					}
					?>
				</div>
			</div>
		</div>
	</section>
</div>
<?php include 'footer.php';?>