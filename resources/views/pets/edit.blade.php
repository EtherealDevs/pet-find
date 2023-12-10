<x-app-layout class="">
    <script src="https://cdn.jsdelivr.net/npm/jquery"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <div class="from-gray-200 via-gray-300 to-gray-400 bg-gradient-to-br">
        <div class='flex pt-32 2xl:pt-0 items-center justify-center min-h-screen 2xl:h-auto'>
            <div
                class="relative w-full group max-w-md min-w-0 mx-auto mt-6 mb-6 break-words bg-white md:max-w-sm rounded-xl">
                <div class="pb-6">

                    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

                    <div class="max-w-md w-full space-y-8 p-10 z-10">
                        <div class="grid gap-8 grid-cols-1">
                            <div class="flex flex-col">
                                <div class="flex flex-col sm:flex-row items-center">
                                    <h2 class="font-semibold text-lg mr-auto">Editar Mascota</h2>
                                    <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                                </div>
                                <div class="mt-5">
                                    <form method="POST" action="{{ route('pets.store') }}"
                                        enctype="multipart/form-data" class="form">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                        <div class="">
                                            <label form="file" class="text-xs font-semibold text-gray-600 py-2">Foto de la
                                                mascota<abbr class="hidden" title="required">*</abbr></label>
                                            <div class="flex items-center py-6">
                                                <div class="w-12 h-12 mr-4 flex-none rounded-xl border overflow-hidden">
                                                        <img id="picture" src="@if($pet->image)/img/{{ $pet->image->url }} @else https://images.unsplash.com/photo-1583337130417-3346a1be7dee?auto=format&fit=crop&q=80&w=2688&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D @endif"
                                                        height="134" width="134" alt="">
                                                </div>

                                                <label class="cursor-pointer ">
                                                    <span
                                                        class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-amber-400 hover:bg-amber-500 hover:shadow-lg">Buscar Imagen</span>
                                                    <input onchange="changeImagePreview()" id="inputFile" type="file" name="file" class="hidden" value="">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="w-full flex flex-col mb-3">
                                            <label for="pet_type_id" class="font-semibold text-gray-600 py-2">Tipo<abbr
                                                    title="required">*</abbr></label>
                                            <select
                                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full "
                                                required="required" name="pet_type_id"
                                                id="pet_type_id">
                                                <option value="">Seleccionar</option>
                                                @foreach ($petTypes as $petType)
                                                <option @if ($petType->id == $pet->pet_type_id) selected @endif value="{{$petType->id}}">{{ucfirst(__($petType->name))}}</option>
                                                @endforeach
                                                

                                            </select>
                                            @error('pet_type_id')
                                            <small class="text-red-500">{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                            <div class="mb-3 space-y-2 w-full text-xs">
                                                <label for="name" class="font-semibold text-gray-600 py-2">Nombre
                                                    <abbr title="required">*</abbr></label>
                                                <input placeholder="Nombre de la mascota"
                                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                    required="required" type="text" name="name"
                                                    id="name" value="{{ $pet->name }}">
                                                @error('name')
                                                <small class="text-red-500">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3 space-y-2 w-full text-xs">
                                                <label for="breed" class="font-semibold text-gray-600 py-2">Raza
                                                    <abbr title="required">*</abbr></label>
                                                <input placeholder="Raza de tu mascota"
                                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                    required="required" type="text" name="breed"
                                                    id="breed" value="{{ $pet->breed }}">
                                                @error('breed')
                                                <small class="text-red-500">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                                            <div class="w-full flex flex-col mb-3">
                                                <label for="age" class="font-semibold text-gray-600 py-2">Edad <abbr
                                                        title="Required field">*</abbr></label>
                                                <input placeholder="Edad"
                                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                    type="text" name="age"
                                                    id="age" value="{{ $pet->age }}">
                                                    @error('age')
                                                    <small class="text-red-500">{{$message}}</small>
                                                    @enderror
                                            </div>
                                            <div class="w-full flex flex-col mb-3">
                                                <label for="city" class="font-semibold text-gray-600 py-2">Ubicación<abbr
                                                        title="required">*</abbr></label>
                                                <select
                                                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full "
                                                    required="required" name="city"
                                                    id="city">
                                                    <option value="">Seleccionar</option>
                                                    @foreach ($cities as $city)
                                                    <option @if (strtolower($city->name) == strtolower($pet->city)) selected @endif value="{{strtolower($city->name)}}">{{ucfirst($city->name)}}</option>
                                                    @endforeach
                                                </select>
                                                @error('city')
                                                <small class="text-red-500">{{$message}}</small>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="w-full flex flex-col mb-3">
                                            <label for="gender" class="font-semibold text-gray-600 py-2">Genero<abbr
                                                    title="required">*</abbr></label>
                                            <select
                                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full "
                                                required="required" name="gender"
                                                id="gender">
                                                <option value="">Seleccionar</option>
                                                <option @if ($pet->gender == "male")
                                                    selected
                                                @endif value="male">Macho</option>
                                                <option @if ($pet->gender == "female")
                                                    selected
                                                @endif value="female">Hembra</option>

                                            </select>
                                        @error('gender')
                                        <small class="text-red-500">{{$message}}</small>
                                        @enderror                                        
                                        </div>
                                        
                                        <div class="flex-auto w-full mb-1 text-xs space-y-2">
                                            <label for="features" class="font-semibold text-gray-600 py-2">Descripción</label>
                                            <textarea required="" name="features" id="features"
                                                class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4"
                                                placeholder="Describí las características distintivas de tu mascota" spellcheck="false">{{ $pet->features }}</textarea>
                                                @error('features')
                                                <small class="text-red-500">{{$message}}</small>
                                                @enderror
                                        </div>
                                        <p class="text-xs text-red-500 text-right my-3">Los Campos requeridos seran
                                            marcados con un <abbr title="Required field">*</abbr></p>
                                        <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                            <a href="{{route('pets.index')}}">
                                                <button type="button"
                                                    class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider  text-gray-600 rounded-full hover:shadow-lg hover:bg-amber-200">
                                                    Cancelar</button>
                                            </a>
                                            <button type="submit"
                                                class="mb-2 md:mb-0 bg-amber-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-amber-500">Guardar
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>




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
    </div>

    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
    
    <script>
        function changeImagePreview(){
            var input = document.getElementById('inputFile')
            var file = input.files[0]
            var imagePreview = document.getElementById('picture')
            var reader = new FileReader();
            reader.onload = function (e){
            // convert image file to base64 string
            imagePreview.src = e.target.result;
            }
            reader.readAsDataURL(file);
    }
        document.getElementById("file").addEventListener('change', cambiar);

        function cambiar(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById("picture").setAttribute('src', e.target.result);
            }

            reader.readAsDataURL(file);
        }

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
