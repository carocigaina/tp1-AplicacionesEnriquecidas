<form action="{{ route('createwhat') }}"  method="POST">

    <div class="form-row">
        
        <div class="m-2">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Subtitulo What I do
            </label>
            <input id="subtitulo" type="text"  name="subtitulo" class="form-control" placeholder="What I Do">
            <input type="hidden" value="{{ $user->id }}" name="user_id">
        </div>
        <div class="m-2">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Descripción 
            </label>
            <input id="descripcion" type="text"  name="descripcion" class="form-control" >
            <input type="hidden" value="{{ $user->id }}" name="user_id">
        </div>
        @csrf
        
        <button class="bg-success btn btn-lg" type="submit" class="site-btn">Guardar</button>
    </div>
</form>
