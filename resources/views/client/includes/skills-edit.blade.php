@foreach($user->skill as $skill)
            <form action="{{ route('skill.update', $skill) }}"
            method="POST">

                <div class="form-row">
                    <div class="col-md">
                        <label class="block text-gray-700 text-sm font-bold mb-2" >
                            Skill
                        </label>
                        <input id="name" type="text"  name="name" class="form-control" value="{{ old('name', $skill->name) }}">
                        <input type="hidden" name="id" value="{{ $user->id }}">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-md">
                        <label class="block text-gray-700 text-sm font-bold mb-2" >
                            Porcentaje
                        </label>
                        <input id="percent" type="text"  name="percent" class="form-control" value="{{ old('percent', $skill->percent) }}">
                        <input type="hidden" name="id" value="{{ $user->id }}">
                    </div>
                    
                </div>

                @csrf
                @method('PUT')
                
                <button type="submit" class="site-btn bg-warning btn btn-lg">Actualizar</button>
            </form>
            <form action="{{ route('skill.destroy', $skill) }}" method="POST">
            <input type="hidden" name="id" value="{{ $skill->id }}">
            @method('DELETE')
                @csrf
                <button type="submit" class="site-btn bg-danger btn btn-lg">Eliminar</button>
            </form>
@endforeach