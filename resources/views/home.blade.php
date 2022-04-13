@extends('layouts.web')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1 class="text-dark">Bienvenida: {{ Auth::user()->name }}</h1></div>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif                
                    </div>
                </div>
            </div>
        </div>
    </div>
<a href="{{route('events.create')}}" class="d-flex justify-content-center mt-4"><button class="btn btn-primary">Crear Evento</button></a>
        <x-slider/>
        <livewire:event-list /> 
    </div>

@endsection
<body>

    @livewireStyles
</body>
</html>