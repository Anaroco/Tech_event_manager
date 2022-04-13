@extends('layouts.web')

@section('content')

    <div class="container mt-5"> 
        <h2 class="d-flex justify-content-center mt-5">Crear Evento</h2>
        <form action="{{route('events.store')}}" method="POST">
            
            @csrf
            <div class="col-4">
                <label class="form-label mt-3 text-dark" for="title">Nombre del Evento</label>
                <input type="text" class="form-control" name="title" id="title" required><br>
                <label class="form-label text-dark mt-3" for="date">Fecha/hora</label>
                <input type="text" class="form-control" name="date" id="date" required><br>
                <label class="form-label text-dark mt-3" for="img">Añadir imagen</label>
                <input type="text" class="form-control" name="img" id="img" required>
                <label class="form-label text-dark mt-3" for="assistants">Nº de Asistentes</label>
                <input type="text" class="form-control" name="assistants" id="assintants" required>
            </div><br>
            <div class="col-4">
                <label for="inputDescription" class="form-label text-dark">Descripción</label><br>
                <textarea class="form-control text-dark" type="text" name="description" id="description" required></textarea><br>
                <div class="d-grid gap-2 d-md-block">
                    <button type="submit" class="btn btn-primary" value="Add">Crear</button>
                </div>
            </div>  
        </form>      
        <div class="d-grid mt-3 gap-2 d-md-block">
            <a href="{{route('home')}}"><button class="btn btn-secondary">Cancelar</button></a> 
        </div>  
    <div>
@endsection

