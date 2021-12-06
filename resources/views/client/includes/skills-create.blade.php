
            <form action="{{ route('storeSkill') }}"
            method="POST">

                <div class="form-row">
                    <div class="col-md-12">
                        <label class="block text-gray-700 text-sm font-bold mb-2" >
                            Nueva habilidad
                        </label>
                        <input id="name" type="text"  name="name" class="form-control" placeholder="Nueva habilidad">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        
                    </div>
                    
                </div>

                @csrf
                
                
                <button type="submit" class="site-btn bg-success text-white btn btn-lg">Agregar</button>
            </form>
