<x-app-layout>
    <div>
        <head>
            <link rel="stylesheet"
                href="https://horizon-tailwind-react-corporate-7s21b54hb-horizon-ui.vercel.app/static/css/main.d7f96858.css" />
        </head>

        <body>
            @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{session('info')}}
            </strong>
        </div>
    @endif
            <div class="flex flex-col justify-center items-center h-[100vh] pt-4"
                style='background-image: url("https://images.unsplash.com/photo-1601758177266-bc599de87707?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D")'>
                <div
                    class="relative h-fit overflow-auto flex flex-col items-center rounded-[10px] border-[1px] border-gray-200 w-[368px] xl:w-[576px] 2xl:w-[576px] 3xl:w-[576px] mx-auto p-4 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                    <div class="flex items-center justify-between rounded-t-3xl p-3 w-full">
                        <div class="text-lg font-bold text-navy-700 dark:text-white">
                            Mascotas
                        </div>
                        <a href="pets/create">
                        <button
                        type="button"
                            class="linear rounded-[20px] bg-lightPrimary px-4 py-2 text-base font-medium text-brand-500 transition duration-200 hover:bg-gray-100 active:bg-gray-200 dark:bg-white/5 dark:text-white dark:hover:bg-white/10 dark:active:bg-white/20">
                                    Registrar Mascota
                                </button>
                        </a>
                    </div>


                    @foreach ($pets as $pet)
                        <div
                            class="flex h-full w-full items-start justify-between rounded-md border-[1px] border-[transparent] dark:hover:border-white/20 bg-white px-3 py-[20px] transition-all duration-150 hover:border-gray-200 dark:!bg-navy-800 dark:hover:!bg-navy-700">
                            <div class="flex items-center gap-3">
                                <div class="flex h-16 items-center justify-center">

                                    @if ($pet->image)
                                        <img class="h-24 w-24 rounded-xl bg-center" src="/img/{{ $pet->image->url }}"
                                            alt="" />
                                    @endif

                                </div>
                                <div class="flex flex-col">
                                    <h5 class="text-base font-bold text-navy-700 dark:text-white">
                                        <a href="/pets/{{ $pet->id }}">{{ $pet->name }}</a>
                                    </h5>
                                    <p class="mt-1 text-sm font-normal text-gray-600">
                                        {{ $pet->city }}

                                    </p>
                                </div>
                            </div>
                            <div class="mt-1 flex items-center justify-center text-navy-700 dark:text-white">
                                <div class="ml-1 flex items-center text-sm font-bold text-navy-700 dark:text-white">

                                    <p class="ml-1">{{ ucfirst(__($pet->pet_type->name)) }}</p>
                                </div>
                                <div class="ml-2 flex items-center text-sm font-normal text-gray-600 dark:text-white">
                                    <p>{{ $pet->age }} Años de Edad</p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </body>

        
    </div>
</x-app-layout>
