<div class="w-full fixed bg-gray-100 z-50">
    <nav class="text-gray-600 body-font">
        <div class="container  mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
              @php
                $current_url = $_SERVER['REQUEST_URI'];

                // Divide la URL en partes utilizando "/" como separador
                $url_parts = explode('/', $current_url);

                // Obtiene el último elemento de la URL, que generalmente es el nombre de la vista
                $vista_actual = end($url_parts);

                // Si la vista actual contiene una extensión como .php, .html, etc., quítala
                $vista_actual = preg_replace('/\\.[^.\\s]{3,4}$/', '', $vista_actual);

               /*  echo 'Vista Actual: ' . $vista_actual;   */  
              @endphp
              @if ($vista_actual != '')
                <a href="/" class="mr-5 hover:text-gray-900">Inicio</a>
              @else
                <a href="/" class="mr-5 hover:text-gray-900 hidden">Inicio</a>
              @endif
          
              @if ($vista_actual != 'about')
                <a href="/about" class="mr-5 hover:text-gray-900">Nosotros</a> 
              @else
                <a href="/about" class="mr-5 hover:text-gray-900 hidden">Nosotros</a> 
              @endif
          
              @if ($vista_actual != 'posts')
                <a href="/posts" class="mr-5 hover:text-gray-900">Posts</a>
              @else
                <a href="/posts" class="mr-5 hover:text-gray-900 hidden">Posts</a>
              @endif
         
              @if ($vista_actual != 'contact')
                <a href="/contact" class="mr-5 hover:text-gray-900">Contactanos</a>
              @else
                <a href="/contact" class="mr-5 hover:text-gray-900 hidden">Contactanos</a>
              @endif
              @auth
                @if ($vista_actual != 'pets')
                  <a href="{{ route('pets.index') }}" class="hover:text-gray-900">Mascotas</a>
                @else
                  <a href="{{ route('pets.index') }}" class="hover:text-gray-900 hidden">Mascotas</a>
                @endif
              @endauth      
            </nav>
            <a href="/"
                class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg> --}}
                <h1 class="ml-3 text-xl cursor-pointer">IdenMAC</h1>
            </a>
            <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
                @auth
                    <div id="z"
                        class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                        <div class="relative ml-3" x-data="{ open: false }">
                            <div>
                                <button x-on:click="open = true" type="button"
                                    class="flex rounded-full bg-gray-800 text-sm  focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}"
                                        alt="">
                                </button>
                            </div>
                            <div x-show="open" x-on:click.away="open = false"
                                class="absolute right-0 z-50 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"role="menu"
                                aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">

                                <div x-data>
                                    @csrf
                                    @auth
                                        @can('admin')
                                          <a href="{{ route('index') }}" class="block px-4 py-2 text-sm text-gray-700"
                                        role="menuitem" tabindex="-1" id="user-menu-item-0">Panel de Herramientas</a>
                                        @endcan
                                        <a href="{{ route('pets.index') }}" class="block px-4 py-2 text-sm text-gray-700"
                                            role="menuitem" tabindex="-1"id="user-menu-item-2">
                                            Mis Mascotas
                                        </a>
                                    @endauth


                                </div>
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700"
                                        role="menuitem" tabindex="-1"id="user-menu-item-2"
                                        @click.prevent="$root.submit();">
                                        Cerrar Sesion
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <button
                        class="inline-flex items-center border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
                        <a href="{{ route('login') }}"
                            class=" text-gray-800 px-3 py-2 rounded-md text-sm font-medium">Iniciar sesion</a>
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </button>
                    <button
                        class="inline-flex items-center border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
                        <a href="{{ route('register') }}"
                            class="text-gray-800 px-3  py-2 rounded-md text-sm font-medium">Registrarme</a>
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </button>
                @endauth
            </div>
        </div>
    </nav>
</div>
