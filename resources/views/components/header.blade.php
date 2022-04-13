<div>
    <nav class="navbar navbar-light bg-white ">
        <div class="container-fluid">
          <a class="navbar techvents text-decoration-none" href="{{ url('/') }}">
            <img src="{{asset('images/img/logo.png')}}" alt="" width="38" height="38" class="d-inline-block align-text-center techvents">
            TECHVENTS
          </a>
            <div>
            @auth 
                <div class="dropdown">
                 {{ Auth::user()->name }}
                 <button class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                 <img src="{{asset('images/img/boton-usuario.png')}}">
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="{{url('dashboard')}}">Mis eventos</a></li>
                  <li><a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Cerrar Sesión') }}</a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form></li>
                </ul>
                </div>
            @else     
                <a href="{{ url('login') }}" class="text-dark text-decoration-none" >
                Login
                <a href="{{ url('register') }}" class="text-dark m-2 text-decoration-none"> 
                Registro
                </a>  
                @endif 
            </div> 
        </div>
      </nav>  
      <hr class="mt-0">    

</div>  