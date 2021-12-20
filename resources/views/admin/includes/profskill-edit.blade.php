@foreach($user->profskill as $profskill)
            <form action="{{ route('profskill.update', $profskill) }}"
            method="POST">

                <div class="form-row">
                    <div class="col-md">
                        <label class="block text-gray-700 text-sm font-bold mb-2" >
                            Skills Profesionales
                        </label>
                        <input id="name" type="text"  name="name" class="form-control" value="{{ old('name', $profskill->name) }}">
                        <input type="hidden" value="{{ $profskill->id }}" name="user_id">
                    </div>
                    <div class="col-md">
                        <label class="block text-gray-700 text-sm font-bold mb-2" >
                            Porcentaje
                        </label>
                        <input id="percent" type="text"  name="percent" class="form-control" value="{{ old('percent', $profskill->percent) }}">
                        <input type="hidden" value="{{ $profskill->id }}" name="user_id">
                    </div>
                    
                </div>

                @csrf
                @method('PUT')
                
                <button type="submit" class="site-btn bg-warning btn btn-lg">Actualizar</button>
            </form>
            <form action="{{ route('profskill.destroy', $profskill) }}" method="POST">
            <input type="hidden" name="id" value="{{ $profskill->id }}">
                @method('DELETE')
                @csrf
                <button type="submit" class="site-btn bg-danger btn btn-lg">Eliminar</button>
            </form>
@endforeach