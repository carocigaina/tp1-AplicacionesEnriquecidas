@foreach($user->work as $work)
           
    <form action="{{ route('work.update', $work) }}"
            method="POST">

                
                <div class="form-row">
                    <div class="col-md">
                        <label class="block text-gray-700 text-sm font-bold mb-2" >
                            Nombre trabajo
                        </label>
                        <input id="work_name" type="text"  name="work_name" class="form-control" value="{{ old('work_name', $work->work_name) }}">
                        <input type="hidden" name="id" value="{{ $work->id }}">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-md">
                        <label class="block text-gray-700 text-sm font-bold mb-2" >
                        lugar
                        </label>
                        <input id="lugar" type="text"  name="lugar" class="form-control" value="{{ old('lugar', $work->lugar) }}">
                        <input type="hidden" name="id" value="{{ $work->id }}">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-md">
                        <label class="block text-gray-700 text-sm font-bold mb-2" >
                        tareas
                        </label>
                        <input id="tareas" type="text"  name="tareas" class="form-control" value="{{ old('tareas', $work->tareas) }}">
                        <input type="hidden" name="id" value="{{ $work->id }}">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-md">
                        <label class="block text-gray-700 text-sm font-bold mb-2" >
                            Fecha inicio
                        </label>
                        <input id="start_date" type="date"  name="start_date" class="form-control" value="{{ old('start_date', $work->start_date) }}">
                        <input type="hidden" name="id" value="{{ $work->id }}">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-md">
                        <label class="block text-gray-700 text-sm font-bold mb-2" >
                            Fecha finalización
                        </label>
                        <input id="finish_date" type="date"  name="finish_date" class="form-control" value="{{ old('finish_date', $work->finish_date) }}">
                        <input type="hidden" name="id" value="{{ $work->id }}">
                    </div>
                    
                </div>
                @csrf
                @method('PUT')
                
                <button type="submit" class="site-btn bg-warning btn btn-lg">Actualizar</button>
            </form>
            <form action="{{ route('work.destroy', $work) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="id" value="{{ $work->id }}">
                <button type="submit" class="site-btn bg-danger btn btn-lg">Eliminar</button>
            </form>
@endforeach