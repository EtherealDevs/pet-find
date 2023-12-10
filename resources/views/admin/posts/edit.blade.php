@extends('adminlte::page')
@section('title', 'IdenMac')

@section('content_header')
    <h1>Iden MAC</h1>
@stop

@section('content')
<!-- include libraries(jQuery, bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <div class="card">
        <div class="card-body">
            {!! Form::model($post, ['route' => ['admin.posts.update', $post], 'method' => 'put', 'files' => true, 'id'=>'editForm']) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            <div class="form-group">
                {!! Form::label('title', 'Nombre:') !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}

                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug:') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug del post', 'readonly']) !!}

                @error('slug')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Categoria:') !!}
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

                @error('category_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <p class="font-weight-bold mb-1">Etiquetas:</p>
                @foreach ($tags as $tag)
                    <label class="mr-4">
                        {!! Form::checkbox('tags[]', $tag->id, null) !!}
                        {{ $tag->name }}
                    </label>
                @endforeach

                @error('tags')
                    <br>
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>


            <div class="form-group">
                <p class="font-weight-bold mb-1">Estado:</p>

                <label class="mr-2">
                    {!! Form::radio('status', 1, true) !!}
                    Borrador
                </label>

                <label>
                    {!! Form::radio('status', 2) !!}
                    Publicado
                </label>

                @error('status')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="row">
                <div class="col">
                    <div class="image-wrapper">
                        @isset($post->image)
                            <img id="imagePreview" class="img-fluid" src="/img/{{ $post->image->url }}" alt="">
                        @else
                            <img id="imagePreview" class="img-fluid"
                                src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?auto=format&fit=crop&q=80&w=2688&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="">
                        @endisset
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('file', 'Imagen del Post') !!}
                        {!! Form::file('file', ['accept' => 'image/*', 'class' => 'form-control-file', 'onchange'=>'changeImagePreview()', 'id'=>'inputFile']) !!}
                        @error('file')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            {{--  <p class="font-weight-bold mb-1">Extracto:</p> --}}
            <div class="form-group">
                {!! Form::label('extract:') !!}
                {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

                @error('extract')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>



            {{-- <p class="font-weight-bold mt-4">Body:</p> --}}
            <div class="mt-4 form-group">
                {!! Form::label('body:') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control', 'id' => 'summernote']) !!}

                @error('body')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>



            {!! Form::submit('Actualizar Post', ['class' => 'mt-4 text-white btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <!-- summernote css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- Include HTML Sanitizer to prevent XSS attacks --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/3.0.6/purify.min.js" integrity="sha512-H+rglffZ6f5gF7UJgvH4Naa+fGCgjrHKMgoFOGmcPTRwR6oILo5R+gtzNrpDp7iMV3udbymBVjkeZGNz1Em4rQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- summernote js -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
         // Summernote
         $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>


    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script>
        // Summernote
        $(document).ready(function() {
            $('#summernote').summernote();
        });

        var form = document.getElementById('editForm');
        form.addEventListener("submit", sanitizeSummernote);
        function sanitizeSummernote(event){
            var markupStr = $('#summernote').summernote('code');
            console.log(markupStr);
            var clean = DOMPurify.sanitize(markupStr);
            console.log(clean)

        }

        $(document).ready(function() {
            $("#title").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
        // Cambiar la imagen
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

        document.getElementById("file").addEventListener('change', cambiar);

        function cambiar(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById("picture").setAttribute('src', e.target.result);
            }

            reader.readAsDataURL(file);
        }
    </script>
@stop
