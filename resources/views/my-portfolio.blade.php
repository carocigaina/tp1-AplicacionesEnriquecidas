<h1>bienvenido {{ $user->name }}</h1>
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
                        Nombres
                    </label>
                    <input id="name" type="text"  name="name" class="form-control" value="{{ old('name', $user->name) }}">
                    @error('name')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" >
                       Mensaje
                    </label>
                    <input id="mensaje" type="text"  name="mensaje" class="form-control" value="{{ old('mensaje', $user->mensaje) }}">
                    @error('mensaje')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $mensaje }}</div>
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
                <button class="nav-link" id="redes-tab" data-bs-toggle="tab" data-bs-target="#redes" type="button" role="tab" aria-controls="redes" aria-selected="false">Redes</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="what-tab" data-bs-toggle="tab" data-bs-target="#what" type="button" role="tab" aria-controls="what" aria-selected="false">What I do</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profskill-tab" data-bs-toggle="tab" data-bs-target="#profskill" type="button" role="tab" aria-controls="profskill" aria-selected="true">Professional skill</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="education-tab" data-bs-toggle="tab" data-bs-target="#education" type="button" role="tab" aria-controls="education" aria-selected="true">education</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="work-tab" data-bs-toggle="tab" data-bs-target="#work" type="button" role="tab" aria-controls="work" aria-selected="true">work</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="skills" role="tabpanel" aria-labelledby="skills-tab">
             

                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-new-tab" data-bs-toggle="pill" data-bs-target="#v-pills-new" type="button" role="tab" aria-controls="v-pills-new" aria-selected="true">Agregar Skill</button>
                        <button class="nav-link" id="v-pills-edit-tab" data-bs-toggle="pill" data-bs-target="#v-pills-edit" type="button" role="tab" aria-controls="v-pills-edit" aria-selected="false">Editar</button>
                        
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-new" role="tabpanel" aria-labelledby="v-pills-new-tab">
                            
                        @include('client.includes.skills-create') 
                        </div>
                        <div class="tab-pane fade" id="v-pills-edit" role="tabpanel" aria-labelledby="v-pills-edit-tab">
                        @include('client.includes.skills-edit') 
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

                        <div class="tab-pane fade " id="v-pills-crear" role="tabpanel" aria-labelledby="v-pills-crear-tab">

                            @include('client.includes.redes-create')

                        </div>
                        <div class="tab-pane fade" id="v-pills-editar" role="tabpanel" aria-labelledby="v-pills-editar-tab">

                            @include('client.includes.redes-edit')

                        </div>

                    </div>
                </div>
            </div>


            <div class="tab-pane fade" id="what" role="tabpanel" aria-labelledby="what-tab">
             

                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-whatcrear-tab" data-bs-toggle="pill" data-bs-target="#v-pills-whatcrear" type="button" role="tab" aria-controls="v-pills-whatcrear" aria-selected="true">Crear what i do</button>
                        <button class="nav-link" id="v-pills-whatedit-tab" data-bs-toggle="pill" data-bs-target="#v-pills-whatedit" type="button" role="tab" aria-controls="v-pills-whatedit" aria-selected="false">Editar</button>
                        
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade" id="v-pills-whatcrear" role="tabpanel" aria-labelledby="v-pills-whatcrear-tab">
                         @include('client.includes.what-edit')     
                         
                        </div>
                        <div class="tab-pane fade" id="v-pills-whatedit" role="tabpanel" aria-labelledby="v-pills-whatedit-tab">
                        @include('client.includes.what-create') 
                        </div>
                        
                    </div>
                </div>
            
            

            </div>

            <div class="tab-pane fade " id="profskill" role="tabpanel" aria-labelledby="profskill-tab">
             
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-new-tab" data-bs-toggle="pill" data-bs-target="#v-pills-new" type="button" role="tab" aria-controls="v-pills-new" aria-selected="true">Agregar</button>
                        <button class="nav-link" id="v-pills-edit-tab" data-bs-toggle="pill" data-bs-target="#v-pills-edit" type="button" role="tab" aria-controls="v-pills-edit" aria-selected="false">Editar</button>
                        
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade" id="v-pills-new" role="tabpanel" aria-labelledby="v-pills-new-tab">
                            
                        @include('client.includes.profskill-create') 
                        </div>
                        <div class="tab-pane fade" id="v-pills-edit" role="tabpanel" aria-labelledby="v-pills-edit-tab">
                        @include('client.includes.profskill-edit') 
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
             
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-new-tab" data-bs-toggle="pill" data-bs-target="#v-pills-new" type="button" role="tab" aria-controls="v-pills-new" aria-selected="true">Agregar Educacion</button>
                        <button class="nav-link" id="v-pills-edit-tab" data-bs-toggle="pill" data-bs-target="#v-pills-edit" type="button" role="tab" aria-controls="v-pills-edit" aria-selected="false">Editar</button>
                        
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade " id="v-pills-new" role="tabpanel" aria-labelledby="v-pills-new-tab">
                            
                        @include('client.includes.education-create') 
                        </div>
                        <div class="tab-pane fade" id="v-pills-edit" role="tabpanel" aria-labelledby="v-pills-edit-tab">
                        @include('client.includes.education-edit') 
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="work" role="tabpanel" aria-labelledby="work-tab">
             
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-new-tab" data-bs-toggle="pill" data-bs-target="#v-pills-new" type="button" role="tab" aria-controls="v-pills-new" aria-selected="true">Agregar Trabajo</button>
                        <button class="nav-link" id="v-pills-edit-tab" data-bs-toggle="pill" data-bs-target="#v-pills-edit" type="button" role="tab" aria-controls="v-pills-edit" aria-selected="false">Editar</button>
                        
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade " id="v-pills-new" role="tabpanel" aria-labelledby="v-pills-new-tab">
                            
                        @include('client.includes.work-create') 
                        </div>
                        <div class="tab-pane fade" id="v-pills-edit" role="tabpanel" aria-labelledby="v-pills-edit-tab">
                        @include('client.includes.work-edit') 
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
