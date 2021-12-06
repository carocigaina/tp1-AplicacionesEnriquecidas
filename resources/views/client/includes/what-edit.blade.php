@foreach($user->whatido as $what)
           
    <form action="{{ route('update', 'App\Http\Controllers\WhatidoController') }}"
            method="POST">

                <div class="form-row">
                    <div class="col-md">
                        <label class="block text-gray-700 text-sm font-bold mb-2" >
                            Titulo
                        </label>
                        <input id="titulo" type="text"  name="titulo" class="form-control" value="{{ old('titulo', $what->titulo) }}">
                        
                    </div>
                    
                </div>

                <div class="form-row">
                    <div class="col-md">
                        <label class="block text-gray-700 text-sm font-bold mb-2" >
                            Descripcion
                        </label>
                        <input id="descripcion" type="text"  name="descripcion" class="form-control" value="{{ old('descripcion', $what->descripcion) }}">
                        <input type="hidden" name="id" value="{{ $what->id }}">
                    </div>
                    
                </div>

                @csrf
                @method('PUT')
                
                <button type="submit" class="site-btn bg-warning btn btn-lg">Actualizar</button>
            </form>
            <form action="{{ route('destroy', $what) }}" method="POST">
            <input type="hidden" name="id" value="{{ $what->id }}">
            @method('DELETE')
                @csrf
                <button type="submit" class="site-btn bg-danger btn btn-lg">Eliminar</button>
            </form>
@endforeach