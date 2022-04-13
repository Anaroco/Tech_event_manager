<div class="mx-3 row">
    
    <div class="events_list_header">

        {{-- titulo sección de enventos --}}
    <div>
        <h2 class="section_name">Próximos eventos</h2>
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


  <div class="card-group col-sm-4 >
    @foreach($events as $event)

    <div class="card rounded  col-sm-4">
      <img src="{{ $event->img }}" class="card-img-top" alt="...">
      <div class="card-body ">
        <h5 class="card-title">"{{ $event->title }}"</h5>

        <button class="btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          
        </button>
      </p>
      <div class="collapse" id="collapseExample">
        <div class="card card-body">
          <p class="card-text">{{ $event->description }}</p>
        </div>
      </div>
        <p class="card-text"><small class="text-muted">{{$event->assistants}}</small></p>
        <p class="card-text"><small class="text-muted">{{$event->date}}</small></p>
      
      </div>  
      @auth
        
      
      <div>
        <form action="{{route('subscribe', $event->id)}}" method="get">
          @csrf
        <input type="hidden" name="event_id" value="{{$event['id']}}">
          <button class="btn btn-primary" type="submit">Subscribe</button>
        </form>
      </div>      
      <div>        
        <form action="{{ route('events.destroy', $event->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
        
        <a href="{{route('events.edit', $event)}}"><button type="button" class="btn btn-danger">Editar</button></a>

      </div>
      @endauth
    
    </div>

    @endforeach
    
  </div>

  {{ $events->links('pagination::Bootstrap-4') }}

  


</div>
