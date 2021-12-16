@extends('admin.layouts.admin')

@section('main-content')
<div class="col-12">
    <div class="row">
        @if(session('success'))
            <div class="alert alert-success" role="alert">
            {{ session('success') }}
            </div>
        @elseif(session('danger'))
            <div class="alert alert-danger" role="alert">
            {{ session('danger') }}
            </div>
        @endif
        <form action="{{ route('user.update', $user) }}"
        enctype="multipart/form-data" method="POST">

            <div class="row">
                
                <div class="col-md-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" >
                        Mensaje
                    </label>
                    <input id="mensaje" type="text"  name="mensaje" class="form-control" value="{{ old('mensaje', $user->mensaje) }}">
                    @error('mensaje')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div> 
                <div class="col-md-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" >
                        Nombres
                    </label>
                    <input id="name" type="text"  name="name" class="form-control" value="{{ old('name', $user->name) }}">
                    @error('name')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" >
                        Titulo
                    </label>
                    <input id="title_job" type="text"  name="title_job" class="form-control" value="{{ old('title_job', $user->title_job) }}">
                    @error('title_job')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    @if($user->image)
                        <img src="{{ $user->get_image }}" class="card-img-top" alt="{{ $user->name }}">
                    @else
                        <img src="https://picsum.photos/640/360" class="card-img-top" alt="imagen">
                    @endif
                    <input type="file" name="file">
                    @error('file')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" >
                        Telefono
                    </label>
                    <input id="tel" type="text"  name="tel" class="form-control" value="{{ old('tel', $user->tel) }}">
                    @error('tel')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" >
                       Direccion
                    </label>
                    <input id="address" type="text"  name="address" class="form-control" value="{{ old('address', $user->address) }}">
                    @error('address')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div> 
                <div class="col-md-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" >
                       About Title
                    </label>
                    <input id="about_title" type="text"  name="about_title" class="form-control" value="{{ old('about_title', $user->about_title) }}">
                    @error('about_title')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" >
                       About Texto
                    </label>
                    <input id="about" type="text"  name="about" class="form-control" value="{{ old('about', $user->about) }}">
                    @error('about')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" >
                       Boton de About 
                    </label>
                    <input id="about_button" type="text"  name="about_button" class="form-control" value="{{ old('about_button', $user->about_button) }}">
                    @error('about_button')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>
                 <div class="col-md-4">
                    @if($user->about_image)
                        <img src="{{ $user->get_foto }}" class="card-img-top" alt="{{ $user->about }}">
                    @else
                        <img src="https://picsum.photos/640/360" class="card-img-top" alt="imagen">
                    @endif
                    <input type="file" name="file_image">
                    @error('file_image')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div> 
                <div class="col-md-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" >
                       What Title
                    </label>
                    <input id="about_title" type="text"  name="what_title" class="form-control" value="{{ old('what_title', $user->what_title) }}">
                    @error('what_title')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            @csrf
            @method('PUT')

            <button type="submit" class="site-btn">Guardar Cambios</button>
        </form>
    </div>
</div>
<div class="container fluid">
    <div class="col-12">
        
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button" role="tab" aria-controls="skills" aria-selected="true">skills</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="redes-tab" data-bs-toggle="tab" data-bs-target="#redes" type="button" role="tab" aria-controls="redes" aria-selected="false">redes</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false">About Me</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="what-tab" data-bs-toggle="tab" data-bs-target="#what" type="button" role="tab" aria-controls="what" aria-selected="false">What i do</button>
            </li>
            
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                

                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-new-tab" data-bs-toggle="pill" data-bs-target="#v-pills-new" type="button" role="tab" aria-controls="v-pills-new" aria-selected="true">Agregar Habilidad</button>
                            <button class="nav-link" id="v-pills-edit-tab" data-bs-toggle="pill" data-bs-target="#v-pills-edit" type="button" role="tab" aria-controls="v-pills-edit" aria-selected="false">Editar</button>
                            
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-new" role="tabpanel" aria-labelledby="v-pills-new-tab">
                                
                            @include('admin.includes.skills-create') 
                            </div>
                            <div class="tab-pane fade" id="v-pills-edit" role="tabpanel" aria-labelledby="v-pills-edit-tab">
                            @include('admin.includes.skills-edit') 
                            </div>
                            
                        </div>
                    </div>
                
                

                </div>
                <div class="tab-pane fade" id="redes" role="tabpanel" aria-labelledby="redes-tab">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-crear-tab" data-bs-toggle="pill" data-bs-target="#v-pills-crear" type="button" role="tab" aria-controls="v-pills-crear" aria-selected="true">Nuevas redes</button>
                            <button class="nav-link" id="v-pills-editar-tab" data-bs-toggle="pill" data-bs-target="#v-pills-editar" type="button" role="tab" aria-controls="v-pills-editar" aria-selected="false">Editar redes</button>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-crear" role="tabpanel" aria-labelledby="v-pills-crear-tab">

                                @include('admin.includes.redes-create')

                            </div>
                            <div class="tab-pane fade" id="v-pills-editar" role="tabpanel" aria-labelledby="v-pills-editar-tab">

                                @include('admin.includes.redes-edit')

                            </div>

                        </div>
                    </div>


                </div>

                <!--
                <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-crear-tab" data-bs-toggle="pill" data-bs-target="#v-pills-crear" type="button" role="tab" aria-controls="v-pills-crear" aria-selected="true">Nuevo about</button>
                            <button class="nav-link" id="v-pills-editar-tab" data-bs-toggle="pill" data-bs-target="#v-pills-editar" type="button" role="tab" aria-controls="v-pills-editar" aria-selected="false">Editar redes</button>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-crear" role="tabpanel" aria-labelledby="v-pills-crear-tab">

                                @include('admin.includes.about-create')

                            </div>
                            <div class="tab-pane fade" id="v-pills-editar" role="tabpanel" aria-labelledby="v-pills-editar-tab">

                                @include('admin.includes.about-edit')

                            </div>

                        </div>
                    </div>-->
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        
                    </div>
                </div>  

            </div>
    </div>

</div>
@endsection
