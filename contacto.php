<?php include 'head.php';?>
<?php include 'nav.php';?>
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