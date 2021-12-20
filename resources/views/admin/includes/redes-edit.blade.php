@foreach ($user->redes as $red)
    <form action="{{ route('redes.update', $red) }}"
          method="POST">
        <div class="form-group">
            <select class="form-select" aria-label="Default select example" name="name" >
                <option selected>{{ old('name', $red->name) }}</option>
                <option value="facebook">Facebook</option>
                <option value="instagram">Instagram</option>
                <option value="twitter">Twitter</option>
                <option value="github">Github</option>
            </select>
        </div>
        
        <div class="form-check-inline mx-3">
            <label class="form-label text-gray-700 text-sm font-bold mb-2" >
                URL
            </label>
            <input id="url" type="url"  name="url" class="form-input" value="{{ old('url', $red->url) }}">
            <input type="hidden" name="id" value="{{ $red->id }}">
        </div>

        @csrf
        @method('PUT')
        <button class="bg-warning btn btn-lg" type="submit" class="site-btn">Actualizar</button>
    </form>
    <form action="{{ route('redes.destroy', $red) }}"
          method="POST">
          <input type="hidden" name="id" value="{{ $red->id }}">
          @csrf
             @method('DELETE')
        <button class="bg-danger btn btn-lg" type="submit" class="site-btn">Eliminar</button>
    </form>
@endforeach