@extends('adminlte::page')

@section('title', 'IdenMac')

@section('content_header')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
    <h1>Registrar Mascota</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.pets.store', 'files' => true]) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            {{-- Formulario de Categoria --}}
            {{-- Permite almacenar datos de una nueva categoria --}}
            <div class="form-group">
                {!! Form::label('file', 'Foto') !!}
                <p class="text-muted">Adjuntá una foto de tu mascota para facilitar su identificación</p>
                <div class="image-wrapper pb-4 ">
                        <img class="border rounded-circle" id="imagePreview" width="200" height="200" src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?auto=format&fit=crop&q=80&w=2688&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
                {!! Form::file('file', ['accept' => 'image/*', 'id'=>'inputFile', 'class' => 'form-control-file', 'onchange'=>'changeImagePreview()']) !!}
                @error('file')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', NULL, ['class' => 'form-control', 'placeholder' => 'Nombre de tu mascota']) !!}

                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('pet_type_id', 'Tipo de Mascota') !!}
                <select class='form-control' name="pet_type_id" id="pet_type_id">
                    <option value="">Seleccionar</option>
                    @foreach ($pet_types as $pet_type)
                    <option value="{{$pet_type->id}}">
                        {{ucfirst(__($pet_type->name))}}
                    </option>
                    @endforeach

                </select>
                @error('pet_type_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('breed', 'Raza') !!}
                {!! Form::text('breed', NULL, ['class' => 'form-control', 'placeholder' => 'Raza a la cual pertenece tu mascota']) !!}

                @error('breed')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('age', 'Edad') !!}
                {!! Form::text('age', NULL, ['class' => 'form-control', 'placeholder' => 'La edad de tu mascota, en años']) !!}

                @error('age')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('gender', 'Género') !!}
               
                <select class='form-control' name="gender" id="gender">
                    <option value="">Seleccionar</option>
                   
                    <option value="male">
                        Macho
                    </option>
                    <option value="female">
                        Hembra
                    </option>

                </select>
                @error('gender')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            

            <div class="form-group">
                {!! Form::label('features', 'Características') !!}
                {!! Form::text('features', NULL, ['class' => 'form-control', 'placeholder' => 'Caracteristicas distintivas de tu mascota. Puede ser el color del pelaje, ojos, su tamaño o demas cualidades identificativas']) !!}

                @error('features')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('city', 'Ubicación') !!}
                
            <select
                class="form-control "
                required="required" name="city"
                id="city">
                <option value="{{ old('city') }}">Seleccionar</option>
                @foreach ($cities as $city)
                <option value="{{$city->name}}">{{$city->name}}</option>
                @endforeach
            </select>
            @error('city')
            <small class="text-red-500">{{__($message)}}</small>
            @enderror

                @error('city')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>
            

            
            


            {!! Form::submit('Almacenar', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    {{-- CKEditor --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script> --}}

    {{-- Plugin para asignar automaticamente una Slug a cada categoria --}}
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}">
    </script>

    <script>
        //Slug Automatica
        $(document).ready( function() {
          $("#title").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
           });
        });
        function changeImagePreview(){
            var input = document.getElementById('inputFile')
            var file = input.files[0]
            var imagePreview = document.getElementById('imagePreview')
            var reader = new FileReader();
            reader.onload = function (e){
            // convert image file to base64 string
            imagePreview.src = e.target.result;
            }
            reader.readAsDataURL(file);
    }

        /*  ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .catch( error => {
            console.error( error );
        } ); */
    </script>
@endsection