@foreach($user->education as $education)
           
    <form action="{{ route('education.update', $education) }}"
            method="POST">

                
                <div class="form-row">
                    <div class="col-md">
                        <label class="block text-gray-700 text-sm font-bold mb-2" >
                            Nombre colegio
                        </label>
                        <input id="school_name" type="text"  name="school_name" class="form-control" value="{{ old('school_name', $education->school_name) }}">
                        <input type="hidden" name="id" value="{{ $education->id }}">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-md">
                        <label class="block text-gray-700 text-sm font-bold mb-2" >
                            Degree
                        </label>
                        <input id="degree" type="text"  name="degree" class="form-control" value="{{ old('degree', $education->degree) }}">
                        <input type="hidden" name="id" value="{{ $education->id }}">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-md">
                        <label class="block text-gray-700 text-sm font-bold mb-2" >
                            Descripcion
                        </label>
                        <input id="description" type="text"  name="description" class="form-control" value="{{ old('description', $education->description) }}">
                        <input type="hidden" name="id" value="{{ $education->id }}">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-md">
                        <label class="block text-gray-700 text-sm font-bold mb-2" >
                            Fecha inicio
                        </label>
                        <input id="start_date" type="date"  name="start_date" class="form-control" value="{{ old('start_date', $education->start_date) }}">
                        <input type="hidden" name="id" value="{{ $education->id }}">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-md">
                        <label class="block text-gray-700 text-sm font-bold mb-2" >
                            Fecha finalización
                        </label>
                        <input id="finish_date" type="date"  name="finish_date" class="form-control" value="{{ old('finish_date', $education->finish_date) }}">
                        <input type="hidden" name="id" value="{{ $education->id }}">
                    </div>
                    
                </div>
                @csrf
                @method('PUT')
                
                <button type="submit" class="site-btn bg-warning btn btn-lg">Actualizar</button>
            </form>
            <form action="{{ route('education.destroy', $education) }}" method="POST">
            <input type="hidden" name="id" value="{{ $education->id }}">
            @csrf
            @method('DELETE')
                
                <button type="submit" class="site-btn bg-danger btn btn-lg">Eliminar</button>
            </form>
@endforeach