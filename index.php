<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
<body>
<header class="header fixed w-full">
<?php include 'nav.php';?>
</header>
<style>
    @media (max-width: 767px) {
        .mobile-hidden-desktop {
            display: none;
        }

        .text-mobile-desktop {
            font-size: 16px; /* Puedes ajustar el tamaño según sea necesario */
        }
    }

    @media (min-width: 768px) {
        .mobile-hidden-mobile {
            display: none;
        }

        .text-mobile-mobile {
            font-size: 16px; /* Puedes ajustar el tamaño según sea necesario */
        }
    }
</style>

<section style="padding-bottom: 70px;" class="bg-gray-100 dark:bg-gray-900">
    <div style="padding-top: 200px; padding-bottom: 200px; background-image: url(./images/slider/slider1.jpg);" class="bannerpadre flex flex-col items-center justify-center h-screen text-center">
        <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
            <div class="p-16 relative">
                <h2 style="font-size:200px;" class="text-center text-4xl leading-8 font-extrabold tracking-tight text-white sm:text-6xl mobile-hidden-desktop">QORS</h2><br><br><br>
                <p style="font-size:20px;" class="mt-4 max-w-3xl mx-auto text-center text-xl text-white mobile-hidden-desktop">Transformamos tu pasión en indumentaria</span></p>
                <h2 style="font-size:30px;" class="text-center text-2xl leading-8 font-extrabold tracking-tight text-white sm:text-6xl mobile-hidden-mobile"><span style="font-size:40px;" class="text-red-700">QORS,</span> transformamos tu pasion en indumentaria</h2><br><br><br>
                
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-100 dark:bg-gray-900">
<div class="pb-8 lg:pb-16 px-4 mx-auto max-w-screen-md">
	<h2 class="mb-2 text-4xl tracking-tight font-extrabold text-center text-gray-700 dark:text-gray-700">NOSOTROS</h2>
			<p class="mb-6 lg:mb-8 font-light text-center text-gray-700 sm:text-xl">¿Quienes somos?</p>
	<!-- Contenedor del Video (Fondo Gris) -->
	<div class="bg-gray-300 p-40 rounded-lg text-center">
		<p class="text-gray-700">
			Video aquí
		</p>
		<!-- Puedes añadir un ícono de reproducción o cualquier otro contenido aquí -->
	</div>
</div>
</section>
<!-- End block -->
<section class="bg-gray-100 dark:bg-gray-900">
<div class="p-20 bg-gray-100">
	<div class="mx-auto max-w-xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-5xl lg:px-8">
		<h2 class="mb-2 text-4xl tracking-tight font-extrabold text-center text-gray-700">PRODUCTOS</h2>
		<p class="mb-6 lg:mb-8 font-light text-center text-gray-700 sm:text-xl">¿Que ofrecemos?</p>
		<a href="productos.php" class="font-semibold text-center text-sm text-gray-700">Ver todo</a>
		<div class="mt-6 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-5 xl:gap-x-8">
			<div class="group relative">
				<div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-96">
					<img src="images/products/products_0000_Capa-3.jpg" alt="Front of men's Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
				</div>
				<div class="mt-4 flex justify-between">
					<div>
						<h3 class="text-sm text-gray-700">
						<p>
							<span aria-hidden="true" class="absolute inset-0"></span>
							Remera Voley
						</p>
						</h3>
						<p class="mt-1 text-sm text-gray-700">
							Roja
						</p>
					</div>
				</div>
			</div>
			<div class="group relative">
				<div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-96">
					<img src="images/products/products_0001_Capa-2.jpg" alt="Front of men's Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
				</div>
				<div class="mt-4 flex justify-between">
					<div>
						<h3 class="text-sm text-gray-700">
						<p>
							<span aria-hidden="true" class="absolute inset-0"></span>
							Remera Hockey
						</p>
						</h3>
						<p class="mt-1 text-sm text-gray-700">
							Azul y Roja
						</p>
					</div>
				</div>
			</div>
			<div class="sm:hidden group relative">
				<div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-96">
					<img src="images/products/products_0003_Capa 4.jpg" alt="Front of men's Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
				</div>
				<div class="mt-4 flex justify-between">
					<div>
						<h3 class="text-sm text-gray-700">
						<p>
							<span aria-hidden="true" class="absolute inset-0"></span>
							Remera Basquet
						</p>
						</h3>
						<p class="mt-1 text-sm text-gray-700">
							Roja
						</p>
					</div>
				</div>
			</div>
			<div class="group relative">
				<div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-96">
					<img src="images/products/products_0003_Capa-4.jpg" alt="Front of men's Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
				</div>
				<div class="mt-4 flex justify-between">
					<div>
						<h3 class="text-sm text-gray-700">
						<p>
							<span aria-hidden="true" class="absolute inset-0"></span>
							Botines
						</p>
						</h3>
						<p class="mt-1 text-sm text-gray-700">
							Azules
						</p>
					</div>
				</div>
			</div>
			<div class="group relative">
				<div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-96">
					<img src="images/products/products_0002_Capa-6.jpg" alt="Front of men's Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
				</div>
				<div class="mt-4 flex justify-between">
					<div>
						<h3 class="text-sm text-gray-700">
						<p>
							<span aria-hidden="true" class="absolute inset-0"></span>
							Remera Futbol
						</p>
						</h3>
						<p class="mt-1 text-sm text-gray-700">
							Roja
						</p>
					</div>
				</div>
			</div>
			<!-- More products... -->
		</div>
	</div>
</div>
</section>
<!-- Start block -->
<section class="bg-gray-100 dark:bg-gray-900">
<div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
	<!-- Row -->
	<div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
		<div class="text-gray-700 sm:text-lg dark:text-gray-400">
			<h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-700 dark:text-gray-700">Trabajamos con los mejores materiales</h2>
			<p class="mb-8 font-light lg:text-xl">
				Nos enfocamos en la calidad, por eso es que en QORS, la eleccion de los materiales es siempre primordial. Nos destacamos por la calidad de nuestros productos.
			</p>
			<!-- List -->
			<ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-900">
				<li class="flex space-x-3">
				<!-- Icon -->
				<svg class="flex-shrink-0 w-5 h-5 text-red-600 dark:text-purple-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
				<span class="text-base font-medium leading-tight text-gray-700 dark:text-gray-700">100% Poliester</span>
				</li>
				<li class="flex space-x-3">
				<!-- Icon -->
				<svg class="flex-shrink-0 w-5 h-5 text-red-600 dark:text-purple-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
				<span class="text-base font-medium leading-tighttext-gray-700 dark:text-gray-700">Secado Rapido</span>
				</li>
				<li class="flex space-x-3">
				<!-- Icon -->
				<svg class="flex-shrink-0 w-5 h-5 text-red-600 dark:text-purple-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
				<span class="text-base font-medium leading-tight text-gray-700 dark:text-gray-700">Telas Mixtas</span>
				</li>
			</ul>
			<p class="mb-8 font-light lg:text-xl">
				Entregamos nuestros productos con un servicio impecable. Tu experiencia es muy importante, por eso tratamos que sea la mejor.
			</p>
		</div>
		<img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="./images/feature-1.jpg" alt="dashboard feature image">
	</div>
	<!-- Row -->
	<div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
		<img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="./images/feature-2.jpg" alt="feature image 2">
		<div class="text-gray-700 sm:text-lg dark:text-gray-400">
			<h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-700 dark:text-gray-700">Diseño y Confeccion</h2>
			<p class="mb-8 font-light lg:text-xl">
				Te ofrecemos el diseño completo de tu merchandising. Nosotros nos encargamos de todo, ¡estas en buenas manos!
			</p>
			<!-- List -->
			<ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-900">
				<li class="flex space-x-3">
				<!-- Icon -->
				<svg class="flex-shrink-0 w-5 h-5 text-red-600" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
				<span class="text-base font-medium leading-tight text-gray-700 dark:text-gray-700">Diseños Minimalistas</span>
				</li>
				<li class="flex space-x-3">
				<!-- Icon -->
				<svg class="flex-shrink-0 w-5 h-5 text-red-600" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
				<span class="text-base font-medium leading-tight text-gray-700 dark:text-gray-700">Cortes Excepcionales</span>
				</li>
				<li class="flex space-x-3">
				<!-- Icon -->
				<svg class="flex-shrink-0 w-5 h-5 text-red-600" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
				<span class="text-base font-medium leading-tight text-gray-700 dark:text-gray-700">Proteccion de Espuma</span>
				</li>
				<li class="flex space-x-3">
				<!-- Icon -->
				<svg class="flex-shrink-0 w-5 h-5 text-red-600" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
				<span class="text-base font-medium leading-tight text-gray-700 dark:text-gray-700">Todos los talles</span>
				</li>
				<li class="flex space-x-3">
				<!-- Icon -->
				<svg class="flex-shrink-0 w-5 h-5 text-red-600" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
				<span class="text-base font-medium leading-tight text-gray-700 dark:text-gray-700">Todos los generos</span>
				</li>
			</ul>
			<p class="font-light lg:text-xl">
				Crea la imagen completa de tu Entidad Deportiva, destaca por tu identidad con QORS.
			</p>
		</div>
	</div>
</div>
</section>
<section class=" bg-gray-100 dark:bg-gray-800" style="background-image: url('./images/5039684.jpg'); background-size: cover; background-position: center;">
<div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-24 lg:px-6">
	<figure class="py-20 max-w-screen-md mx-auto">
	<p style="color: white;" class="b-4 text-2xl font-light md:text-2xl text-gray-700">
		 Nuestra misión:
	</p>
	<p style="font-size:40px; color:white;" class="mb-4 font-extrabold md:text-2xl text-gray-700">
		"Transformamos tu pasión en indumentaria"
	</p>
</blockquote>
</figure>
</div>
</section>
<!-- Start block -->
<section class="bg-gray-100 dark:bg-gray-900">
<div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
<div class="mb-10">
	<div class="pt-8 lg:pt-16 px-4 mx-auto max-w-screen-md">
		<div class="">
			<h1 class="text-gray-700 mb-5 text-center font-bold text-4xl leading-tight">Preguntas Frecuentes</h1>
			<div class="faq-question" onclick="toggleQuestion(1)">
				<h3 class="text-gray-700 py-6 text-left pregunta font-lg font-semibold">¿Con qué materiales está hecha la indumentaria? <i class="text-gray-700 fas fa-chevron-down"></i></h3>
				<p class="text-gray-700 mb-6 text-left respuesta hidden">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Check out this guide to learn how to get started and start developing websites even faster with components on top of Tailwind CSS.
				</p>
				<hr class="hr-separador">
			</div>
			<div class="faq-question" onclick="toggleQuestion(2)">
				<h3 class="text-gray-700 py-6 text-left pregunta font-lg font-semibold">¿Trabajan solo con entidades deportivas? <i class="text-gray-700 fas fa-chevron-down"></i></h3>
				<p class="text-gray-700 mb-6 text-left respuesta hidden">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Check out this guide to learn how to get started and start developing websites even faster with components on top of Tailwind CSS.
				</p>
				<hr class="hr-separador">
			</div>
			<div class="faq-question" onclick="toggleQuestion(3)">
				<h3 class="text-gray-700 py-6 text-left pregunta font-lg font-semibold">¿Puedo brindar mi propio diseño? <i class="text-gray-700 fas fa-chevron-down"></i></h3>
				<p class="text-gray-700 mb-6 text-left respuesta hidden">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Check out this guide to learn how to get started and start developing websites even faster with components on top of Tailwind CSS.
				</p>
				<hr class="hr-separador">
			</div>
			<div class="faq-question" onclick="toggleQuestion(3)">
				<h3 class="text-gray-700 py-6 text-left pregunta font-lg font-semibold">¿Cual es la diferencia entre QORS y Sol Sports? <i class="text-gray-700 fas fa-chevron-down"></i></h3>
				<p class="text-gray-700 mb-6 text-left respuesta hidden">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Check out this guide to learn how to get started and start developing websites even faster with components on top of Tailwind CSS.
				</p>
				<hr class="hr-separador">
			</div>
			<div class="faq-question" onclick="toggleQuestion(3)">
				<h3 class="text-gray-700 py-6 text-left pregunta font-lg font-semibold">¿Trabajan con clubes del exterior? <i class="text-gray-700 fas fa-chevron-down"></i></h3>
				<p class="text-gray-700 mb-6 text-left respuesta hidden">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Check out this guide to learn how to get started and start developing websites even faster with components on top of Tailwind CSS.
				</p>
				<hr class="hr-separador">
			</div>
		</div>
	</div>
	</section>
	<section class="bg-gray-100">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
  <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-700">Contactanos</h2>
    <p class="mb-6 lg:mb-8 font-light text-center text-gray-700 sm:text-xl">Envianos tu consulta, te responderemos a la brevedad</p>
          <div>
              <label for="email" class="mt-6 block mb-2 text-sm font-medium text-gray-700">Tu email</label>
              <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-700 dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="nombre@gmail.com" required>
          </div>
          <div>
              <label for="subject" class="mt-6 block mb-2 text-sm font-medium text-gray-700">Asunto</label>
              <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-700 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-700 dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="¿En que podemos ayudarte?" required>
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="mt-6 block mb-2 text-sm font-medium text-gray-700">Tu mensaje</label>
              <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-700 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-700 dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Deja tu comentario..."></textarea>
          </div>
          <button<section style="background-color: #233876;" type="submit" class="mt-6 py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-red-700 sm:w-fit hover:bg-red-800">Enviar Mensaje</button>
      </form>
  </div>
</section>
	<?php include 'footer.php';?>
	<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
	<script>
	function toggleQuestion(questionNumber) {
		const answer = document.querySelector(`.faq-question:nth-child(${questionNumber}) .respuesta`);
		answer.classList.toggle("hidden");
	}
	</script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$('.pregunta').click(function() {
				$(this).next('.respuesta').slideToggle();
				$(this).toggleClass('active');
			});
		});
	</script>
	</body>
	</html>