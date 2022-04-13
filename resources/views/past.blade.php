@extends('layouts.web')
<body>
    
    @section('content') 
    <div>
        {{-- <x-slider/> --}}
        <livewire:past-event /> 
        
    </div>
@endsection

@livewireStyles
</body>
</html>