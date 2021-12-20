<form action="{{ route('creatework') }}" enctype="multipart/form-data" method="POST">

    <div class="form-row">
        
    <div class="m-2">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Nombre trabajo
            </label>
            <input id="work_name" type="text"  name="work_name" class="form-control" placeholder="Nombre trabajo">
            <input type="hidden" value="{{ $user->id }}" name="user_id">
        </div>
        <div class="m-2">
            <label class="text-gray-700 text-sm font-bold mb-2" >
            lugar 
            </label>
            <input id="lugar" type="text"  name="lugar" class="form-control" >
            
        </div>
        <div class="m-2">
            <label class="text-gray-700 text-sm font-bold mb-2" >
            tareas
            </label>
            <input id="tareas" type="text"  name="tareas" class="form-control" >
            
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