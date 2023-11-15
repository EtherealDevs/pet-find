<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el Post">
    </div>

    @if ($posts->count())
    <div class="card-body">
        @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{session('info')}}
            </strong>
        </div>
    @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th colspan="2"></th>
                </tr>


            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit', $post)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <button type="button" class="text-white btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete-{{$post->id}}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('admin.posts.delete')
                @endforeach
            </tbody>
        </table>
      </div>

    {{--   <div classd="card-footer">
        {{$posts->links()}}
      </div> --}}
    @else
      <div class="card-body">
        <strong>No hay ningun registro...</strong>
      </div>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</div>
