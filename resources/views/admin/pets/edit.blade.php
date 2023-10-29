@extends('adminlte::page')

@section('title', 'Tempano')

@section('content_header')
    <h1>Editar Punto de venta</h1>
@stop

@section('content')
<p>Bienvenido a Administracion.</p>
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif


    <div class="card">
        <div class="card-body">
            {!! Form::model($pet, ['route' => ['admin.pets.update', $pet], 'method' => 'put']) !!}

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
                {!! Form::text('name', NULL, ['class' => 'form-control', 'placeholder' => '']) !!}


                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('breed', 'Cria') !!}
                {!! Form::text('breed', NULL, ['class' => 'form-control', 'placeholder' => 'features']) !!}

                @error('breed')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('pet_type_id', 'Raza') !!}
                {!! Form::select('pet_type_id',$pet_type, NULL, ['class' => 'form-control', 'placeholder' => 'Raza']) !!}

                @error('pet_type_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('age', 'Edad') !!}
                {!! Form::text('age', NULL, ['class' => 'form-control', 'placeholder' => 'Edad']) !!}

                @error('age')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            
            <div class="form-group">
                {!! Form::label('gender', 'Genero') !!}
                {!! Form::text('gender', NULL, ['class' => 'form-control', 'placeholder' => 'Genero']) !!}

                @error('gender')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('features', 'Caracteristicas') !!}
                {!! Form::text('features', NULL, ['class' => 'form-control', 'placeholder' => 'Caracteristicas']) !!}

                @error('features')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('city', 'Ciudad') !!}
                {!! Form::text('city', NULL, ['class' => 'form-control', 'placeholder' => 'Ciudad']) !!}

                @error('city')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            

            <div class="form-group">
                {!! Form::label('user_id', 'Usuario') !!}
                {!! Form::select('user_id',$user, NULL, ['class' => 'form-control', 'placeholder' => 'User']) !!}

                @error('user_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {!! Form::submit('Almacenar', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
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