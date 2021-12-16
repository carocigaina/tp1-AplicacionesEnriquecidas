<div class="row">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @elseif(session('danger'))
        <div class="alert alert-danger" role="alert">
            {{ session('danger') }}
        </div>
    @endif
    <form
        action="{{ route('user.aboutupdate', $user) }}"
        enctype="multipart/form-data"
        method="POST">
        @foreach($user->about as $about)

        <div class="row">
            <div class="col-md-4">
                <label class="text-gray-700 text-sm font-bold mb-2" >
                    Titulo
                </label>
                <input id="title" type="text"  name="title" class="form-control" value="{{ old('title', $user->title) }}">
                @error('title')
                <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <label class="text-gray-700 text-sm font-bold mb-2" >
                    Mensaje
                </label>
                <input id="mensaje" type="text"  name="mensaje" class="form-control" value="{{ old('mensaje', $user->mensaje) }}">
                @error('mensaje')
                <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ message }}</div>
                @enderror
            </div>
            

        


            <div class="col-md-4 mt-2 mb-2 w-100">
                @if ($user->image)
                    <img class="card-img-top w-25" src="{{ $user->get_image }}" alt="{{ $user->name }}">
                @else
                    <img class="card-img-top w-25" src="https://picsum.photos/640/360" alt="Card image cap">
                @endif
                <input type="file" name="about_image">
                @error('about_image')
                <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                @enderror
            </div>
        </div>
        @endforeach
        <input type="hidden" name="id" value="{{ $user->id }}">
        @csrf
        @method('PUT')

        <button type="submit" class="site-btn">Guardar Cambios</button>
    </form>
</div>