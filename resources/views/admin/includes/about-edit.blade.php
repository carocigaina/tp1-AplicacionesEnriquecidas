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
        action="{{ route('about.update', $about) }}"
        enctype="multipart/form-data"
        method="POST">
        
        
        <div class="row">
            <div class="col-md-4">
                <label class="text-gray-700 text-sm font-bold mb-2" >
                    Titulo
                </label>
                <input id="about_title" type="text"  name="title" class="form-control" value="{{ old('about_title', $user->about_title) }}">
                @error('about_title')
                <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <label class="text-gray-700 text-sm font-bold mb-2" >
                    About
                </label>
                <input id="about" type="text"  name="about" class="form-control" value="{{ old('about', $about->about) }}">
                @error('about')
                <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ top_message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <label class="text-gray-700 text-sm font-bold mb-2" >
                    Titulo cargar archivo
                </label>
                <input id="about_button" type="text"  name="about_button" class="form-control" value="{{ old('about_button', $about->about_button) }}">
                @error('about_button')
                <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                @enderror
            </div>



            <div class="col-md-4 mt-2 mb-2 w-100">
                @if ($user->about_image)
                    <img class="card-img-top w-25" src="{{ $user->about_image }}" alt="{{ $user->about_title }}">
                @else
                    <img class="card-img-top w-25" src="https://picsum.photos/640/360" alt="Card image cap">
                @endif
                <input type="file" name="file">
                @error('file')
                <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <input type="hidden" name="id" value="{{ $user->id }}">
        @csrf
        @method('PUT')

        <button type="submit" class="site-btn">Guardar Cambios</button>
    </form>
</div>