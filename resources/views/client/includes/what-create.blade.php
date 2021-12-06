<form action="{{ route('user.update', $user) }}" enctype="multipart/form-data" method="POST">

    <div class="form-row">
        <div class="m-2">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Titulo principal
            </label>
            <input id="what_title" type="text"  name="what_title" class="form-control" value="{{ old('what_title', $user->what_title) }}">
   
        <input type="hidden" name="id" value="{{ $user->id }}">

        </div>
        @csrf
        @method('PUT')
        <button class="bg-success btn btn-lg" type="submit" class="site-btn">Guardar Cambios</button>
    </div>
</form>

<form action="{{ route('createwhat') }}"
      method="POST">

    <div class="form-row">
        <div class="col-md-12">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Subtitulo What I do
            </label>
            <input id="titulo" type="text"  name="titulo" class="form-control" placeholder="What I Do">
            
        </div>
    </div>

    <div class="col-md-4">
        <label class="text-gray-700 text-sm font-bold mb-2" >
            Descripción 
        </label>
        <input id="descripcion" type="text"  name="descripcion" class="form-control" >
        @error('descripcion')
        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
        @enderror
    </div>

    <input type="hidden" name="user_id" value="{{ $user->id }}">
    
    @csrf
    <button class="bg-success text-white btn btn-lg" type="submit" class="site-btn">Agregar</button>
</form>

