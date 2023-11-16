<div class="modal fade" id="delete-{{$pet_type->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Desea eliminar {{$pet_type->id." ".$pet_type->name}}?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
          <form action="{{route('admin.pettypes.destroy', $pet_type)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('¿Desea eliminar esta especie del registro?')" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
      </div>
    </div>
  </div>
