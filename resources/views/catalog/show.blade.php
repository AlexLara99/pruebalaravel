
    @extends('layouts.master')

    @section('content')

    

    <div class="row">

    <div class="col-sm-4">

        {{-- TODO: Imagen de la película --}}
         <img src="{{$arrayPeliculas['poster']}}" style="height:300px"/>

    </div>
    <div class="col-sm-8">

        {{-- TODO: Datos de la película --}}
        <h3 style="min-height:45px;margin:5px 0 10px 0">
                {{$arrayPeliculas['title']}}
            </h3>
        <p>
        	Año: {{$arrayPeliculas['year']}}
        </p>
        <p>
        	Director: {{$arrayPeliculas['director']}}
        </p>
        <p>
        	<b>Resumen:</b> {{$arrayPeliculas['synopsis']}}
        </p>
        <p>
        	<b>Estado:</b> 
        	@if ($arrayPeliculas['rented'] == true)
        		Pelicula actualmente alquilada</p>
        		<button>Devolver Pelicula</button>

        	@else
        		Alquilar pelicula</p>
        		<button>Alquilar Pelicula</button>
        	@endif
        
        
        <button>Editar Pelicula</button>
        <button>Volver al listado</button>
    </div>
   
</div>



    @stop