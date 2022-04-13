<div class="mx-3 row">
    <h1 class=color4>Probando componente</h1>


    <div class="events_list_header">

        {{-- titulo sección de enventos --}}
    <div>
        <h2 class="section_name">Eventos Disponibles</h2>
    </div>

        {{-- botónn filtrar --}}
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle btn_filter" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
          Filtrar
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="{{ url('current') }}">Actuales</a></li>
            <li><a class="dropdown-item" href="{{ url('past') }}">Pasados</a></li>
        </ul>
    </div>
  </div>



  <div class="card-group " >
    @foreach($events as $event)

    <div class="card rounded ">
      <img src="{{ $event->img }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">"{{ $event->title }}"</h5>

        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          About 
        </button>
      </p>
      <div class="collapse" id="collapseExample">
        <div class="card card-body">
          <p class="card-text">{{ $event->description }}</p>
        </div>
      </div>
        <p class="card-text"><small class="text-muted">"OMAR I"</small></p>
      </div>
    </div>

    @endforeach
    
  </div>

  {{ $events->links('pagination::Bootstrap-4') }}


   


</div>

