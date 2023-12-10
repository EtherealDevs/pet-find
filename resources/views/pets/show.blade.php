<x-app-layout class="">
    <script src="https://cdn.jsdelivr.net/npm/jquery"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <div class="from-gray-200 via-gray-300 to-gray-400 bg-gradient-to-br">
        <div class='flex pt-32 2xl:pt-0 items-center justify-center min-h-screen 2xl:h-auto'>
            <div class="relative w-full group max-w-md min-w-0 mx-auto mt-12 mb-6 break-words bg-white border md:max-w-sm rounded-xl">
                <div class="pb-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="flex justify-center w-full">
                            <div class="relative">

                                @if ($pet->image)
                                
                                <div class="h-32 w-32 border-white rounded-full align-middle border-8 absolute -m-16 -ml-18 lg:-ml-16 max-w-[150px]" style=" background-image: url('/img/{{ $pet->image->url }}'); background-size: contain; background-repeat:no-repeat; background-position:center; background-color:white">
                                </div>
                                    
                                @else
                                    <img src="https://images.unsplash.com/photo-1583512603805-3cc6b41f3edb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2832&q=80" class="border-white rounded-full align-middle border-8 absolute -m-16 -ml-18 lg:-ml-16 max-w-[150px]" height="134" width="134" />
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="mt-20 text-center">
                        <h3 class="mb-1 text-2xl font-bold leading-normal text-black">{{ $pet->name }}</h3>
                        <div class="flex flex-row justify-center w-full mx-auto space-x-2 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div class="font-bold tracking-wide text-black font-sans text-xl">{{ $pet->city }},
                                Argentina
                            </div>
                        </div>
                        <div class="flex mt-1 flex-row justify-center w-full mx-auto space-x-2 text-center">
                            <div class=" font-bold tracking-wide text-black font-sans text-xl">
                                {{ ucfirst(__($pet->pet_type->name)) }}, {{ ucfirst(__($pet->gender)) }}, <br>{{ $pet->age }} Años</div>
                        </div>
                    </div>
                    <div class="pt-6 mx-6 mt-6 text-center border-t border-gray-200 dark:border-gray-700/50">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full px-6">
                                <p class="font-light leading-relaxed text-black">
                                    Descripcion: {{ $pet->features }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full px-6">
                                <p class="mb-4 font-light leading-relaxed text-bl">
                                    Raza: {{ $pet->breed }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full text-center">
                        <div class="flex justify-center pt-8 pb-0 lg:pt-4">
                            <a href="" class="text-black">{{ $pet->user->name }}
                                <br> Email: {{ $pet->user->email }}
                            </a>
                        </div>
                    </div>
                    @if (auth()->id() == $pet->user_id)
                        <div class="flex items-center justify-center mt-5">
                            <a href="{{$pet->id}}/edit">
                                <button class="p-3 rounded-md bg-amber-400/90 ">
                                    Editar
                                </button>
                            </a>
                            <form action="{{route('pets.destroy', $pet)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" onclick="return confirm('¿Seguro que querés borrar este registro de tu mascota? Esta acción no se puede revertir')" class="text-white p-3 rounded-md bg-red-400/90 ">
                                    Borrar
                                </button>
                            </form>
                        </div>
                    @endif
                    <div class="relative h-6 overflow-hidden translate-y-6 rounded-b-xl">
                        <div class="absolute flex -space-x-12 rounded-b-2xl">
                            <div
                                class="w-36 h-8 transition-colors duration-200 delay-75 transform skew-x-[35deg] bg-amber-400/90 group-hover:bg-amber-600/90 z-10">
                            </div>
                            <div
                                class="w-28 h-8 transition-colors duration-200 delay-100 transform skew-x-[35deg] bg-amber-300/90 group-hover:bg-amber-500/90 z-20">
                            </div>
                            <div
                                class="w-28 h-8 transition-colors duration-200 delay-150 transform skew-x-[35deg] bg-amber-200/90 group-hover:bg-amber-400/90 z-30">
                            </div>
                            <div
                                class="w-28 h-8 transition-colors duration-200 delay-200 transform skew-x-[35deg] bg-amber-100/90 group-hover:bg-amber-300/90 z-40">
                            </div>
                            <div
                                class="w-28 h-8 transition-colors duration-200 delay-300 transform skew-x-[35deg] bg-amber-50/90 group-hover:bg-amber-200/90 z-50">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @if (auth()->id() == $pet->user_id)
            <div class="py-2 ">
                <div class="flex items-center justify-center">
                    <button class="p-3 rounded-full bg-amber-400/90" id="generar"
                        onclick="generateQRCode()">Generar QR</button>
                </div>
                <div class="flex items-center justify-center first-letter" id="qrcode"></div>
                <div class="flex items-center justify-center pt-2">
                    <a class="p-3 rounded-2xl bg-amber-400/90 text-white text-md" id="download-link"
                        style="display: none">Descargar código QR</a>
                </div>
            </div>
        @endif
    </div>

    <script>
        const URL = window.location;

        function generateQRCode() {
            var qrcode = new QRCode(document.getElementById("qrcode"), {
                text: URL.href,
                width: 300,
                height: 300,
            });
            document.getElementById("generar").className = "hidden";
            let canvas = document.getElementsByTagName("canvas")[0];
            let imageDataURL = canvas.toDataURL("image/png");
            let downloadLink = document.getElementById("download-link");
            downloadLink.href = imageDataURL;
            downloadLink.download = "codigo_qr.png";
            downloadLink.style.display = "block";
        }
    </script>
</x-app-layout>
