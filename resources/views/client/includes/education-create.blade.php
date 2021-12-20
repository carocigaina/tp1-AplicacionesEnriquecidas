<form action="{{ route('createeducation') }}" enctype="multipart/form-data" method="POST">

    <div class="form-row">
        
    <div class="m-2">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Nombre Colegio
            </label>
            <input id="school_name" type="text"  name="school_name" class="form-control" placeholder="Nombre colegio">
            <input type="hidden" value="{{ $user->id }}" name="user_id">
        </div>
        <div class="m-2">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Degree 
            </label>
            <input id="degree" type="text"  name="degree" class="form-control" >
            
        </div>
        <div class="m-2">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Descripcion
            </label>
            <input id="description" type="text"  name="description" class="form-control" >
            
        </div>
        <div class="m-2">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Fecha inicio
            </label>
            <input id="start_date" type="date"  name="start_date" class="form-control" >
            
        </div>
        <div class="m-2">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Fecha finalización
            </label>
            <input id="finish_date" type="date"  name="finish_date" class="form-control" >
            
        </div>
        @csrf
        @method('PUT')
        <button class="bg-success btn btn-lg" type="submit" class="site-btn">Guardar</button>
    </div>
</form>