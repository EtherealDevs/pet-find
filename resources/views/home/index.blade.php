<x-app-layout>
  <div class="relative h-full pt-14 lg:px-8">
    <div class="mx-auto max-w-2xl py-32 sm:py-48 xl:py-24  2xl:py-56">
      <div class="hidden sm:mb-8 sm:flex sm:justify-center">
        <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
          Aprende mas sobre nosotros <a href="/about" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Leer Mas<span aria-hidden="true">&rarr;</span></a>
        </div>
      </div>
      <div class="text-center">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Bienvenidos a Iden MAC</h1>
        <p class="mt-6 text-lg leading-8 text-gray-600">Somos una APP dedicada a concientizar sobre el maltrato animal</p>

        @if (Auth::check())
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="/admin" class="text-sm font-semibold leading-6 text-gray-900">Ir al panel de administrador<span aria-hidden="true">→</span></a>
        </div>
        @endif
      </div>
    </div>
  </div>

</x-app-layout>
