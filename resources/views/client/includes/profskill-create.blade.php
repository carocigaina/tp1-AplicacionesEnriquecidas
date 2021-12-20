
            <form action="{{ route('profskill.store') }}"
            method="POST">

                <div class="form-row">
                    <div class="col-md-12">
                        <label class="block text-gray-700 text-sm font-bold mb-2" >
                            Nueva habilidad Profesional
                        </label>
                        <input id="name" type="text"  name="name" class="form-control" placeholder="Nueva habilidad Profesional">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <label class="block text-gray-700 text-sm font-bold mb-2" >
                            Porcentaje
                        </label>
                        <input id="percent" type="text"  name="percent" class="form-control" placeholder="Porcentaje">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        
                    </div>
                    
                </div>
                

                @csrf
                
                
                <button type="submit" class="site-btn bg-success text-white btn btn-lg">Agregar</button>
            </form>
