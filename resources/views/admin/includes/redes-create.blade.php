
        <form action="{{ route('redes.store') }}"
              method="POST">
        <div class="form-group">
            <select class="form-select" aria-label="Default select example" name="name">
                <option selected>Selecciona para agregar una red social</option>
                <option value="facebook">Facebook</option>
                <option value="instagram">Instagram</option>
                <option value="twitter">Twitter</option>
                <option value="github">Github</option>
            </select>


        </div>

        <div class="form-check-inline mx-3">
            <label class="form-label text-gray-700 text-sm font-bold mb-2" >
                url
            </label>
            <input id="url" type="url"  name="url" class="form-input" placeholder="Nueva red">

            <input type="hidden" name="user_id" value="{{ $user->id }}">
            @csrf
            <button class="bg-success text-white btn btn-lg" type="submit" class="site-btn">Crear</button>
        </div>
        </form>
