<x-app-layout>

  <section class="text-gray-600 body-font bg-[url(https://images.unsplash.com/photo-1466781783364-36c955e42a7f?auto=format&fit=crop&q=80&w=3271&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)] bg-center ">
    <div class="backdrop-blur-2xl w-full">
      <div class="container px-5 py-24 mx-auto">
        <div class="text-center mb-20">
        <h2 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Sobre Nosotros</h2>
        <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Conocenos mas</p>
        <div class="flex mt-6 justify-center">
          <div class="w-16 h-1 rounded-full bg-lime-700 inline-flex"></div>
        </div>
      </div>
      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
        <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
          <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-lime-100 text-lime-600 mb-5 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Concientizacion</h2>
            <p class="leading-relaxed text-base">Disponemos de un blog en el cual las personas pueden ayudar a generar conciencia sobre el maltrato animal, juntos podemos generar impacto y cambiar la manera de verlo</p>
            <a href="/posts?eventos-y-actividades" class="mt-3 text-lime-600 inline-flex items-center">Ver Mas
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
          <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-lime-100 text-lime-600 mb-5 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <circle cx="6" cy="6" r="3"></circle>
              <circle cx="6" cy="18" r="3"></circle>
              <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Administra los datos de tus mascotas</h2>
            <p class="leading-relaxed text-base">Nuestro sitio web ayuda a concentrar los datos de las mascotas para poder mostrarlos luego. Mediante un qr que se puede escanear podemos acceder a la informacion almacenada de cada mascota.</p>
            <a href="/posts?mascotas-perdidas" class="mt-3 text-lime-600 inline-flex items-center">Ver Mas
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
          <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-lime-100 text-lime-600 mb-5 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Apoyo y asesoria</h2>
            <p class="leading-relaxed text-base">Tenemos el apoyo de veterinarias y refugios para la ubicacion y cuidado de animales rescatados, tambien te aconsejamos sobre los cuidados que tu mascota se merece</p>
          </div>
        </div>
      </div>
      <a href="/contact">  
        <button class="flex mx-auto mt-16 text-white bg-lime-700 border-0 py-2 px-8 focus:outline-none hover:bg-lime-800 rounded text-lg">Contactar</button>
      </a>
    </div>
    </div>
   
  </section>

</x-app-layout>
