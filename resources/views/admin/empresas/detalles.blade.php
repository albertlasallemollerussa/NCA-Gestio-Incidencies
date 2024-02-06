@vite(['resources/js/app.js'])
<div class="panel-body">
 
 @if(Session::has('message'))
   <div class="alert alert-primary" role="alert">
     {{ Session::get('message') }}
   </div>
 @endif 
          
   <p class="h5">Nombre:</p>
   <p class="h6 mb-3">{{ $empresa->nombre }}</p>

   <p class="h5">Categoría:</p>
   <p class="h6 mb-3">{{ $empresa->categoria }}</p> 

   <p class="h5">Población:</p>
   <p class="h6 mb-3">{{ $empresa->poblacion }}</p> 

   <p class="h5">Dirección:</p>
   <p class="h6 mb-3">{{ $empresa->direccion }}</p> 

   <p class="h5">Teléfono:</p>
   <p class="h6 mb-3">{{ $empresa->telefono }}</p> 

   <p class="h5">Email:</p>
   <p class="h6 mb-3">{{ $empresa->email }}</p>  

   <br>
   
   <a href="{{ route('admin/empresas') }}" class="btn btn-success mt-4 ml-3"> Empresas </a>

</div>
