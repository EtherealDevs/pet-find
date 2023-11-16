<x-app-layout>
    <section>
        <div class="relative h-screen grid place-items-center pt-14"
            style='background-image: url("https://images.unsplash.com/photo-1450778869180-41d0601e046e?auto=format&fit=crop&q=80&w=1896&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D")'>

            <div class="w-full 2xl:w-screen h-full bg-black/25">
                <div class="mt-32 mx-auto max-w-2xl py-32 sm:py-48 xl:py-24 2xl:py-56">
                    <div class="absolute inset-0 -z-10 overflow-hidden">
                        <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]"
                            aria-hidden="true">
                            <defs>
                                <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%"
                                    y="-1" patternUnits="userSpaceOnUse">
                                    <path d="M100 200V.5M.5 .5H200" fill="none" />
                                </pattern>
                            </defs>
                            <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                                <path
                                    d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z"
                                    stroke-width="0" />
                            </svg>
                            <rect width="100%" height="100%" stroke-width="0"
                                fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
                        </svg>
                    </div>
                    <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                        <div
                            class="relative rounded-full px-3 py-1 text-sm leading-6 text-white ring-1 ring-gray-400/10 hover:ring-gray-100">
                            Aprende mas sobre nosotros <a href="/about" class="font-semibold text-lime-600"><span
                                    class="absolute inset-0" aria-hidden="true"></span>Leer Mas<span
                                    aria-hidden="true">&rarr;</span></a>
                        </div>
                    </div>
                    <div class="text-center">
                        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Bienvenidos a Iden MAC</h1>
                        <p class="mt-2 text-lg leading-8 text-white">Somos una organizacion dedicada a concientizar sobre el maltrato animal</p>

                        @if (Auth::check())
                            <button
                                class="flex mx-auto mt-10 text-white py-2 px-6 focus:outline-none ring-2 ring-purple-300 hover:ring-purple-500  rounded-3xl text-lg"><a
                                href="/pets">Mis Mascotas</a></button>
                        @else
                            <button
                                class="flex mx-auto mt-12 text-white bg-lime-700 border-0 py-2 px-8 focus:outline-none hover:bg-lime-800 rounded-3xl text-lg"><a
                                href="{{ route('login') }}">Iniciar</a>
                            </button>
                        @endif

                    </div>
                </div>
            </div>

        </div>

    </section>


</x-app-layout>
