<!-- EXTENDS Y SECTION QUE SE ENCUENTRAN AQUÍ DEBEN INCLUIRSE EN LAS DEMÁS VISTAS QUE SE CREEN -->
@extends('admin.layout')

@section('meta-title')EMPRESA | NOMBRE VISTA @endsection

@section('header')
<div class="col-sm-6">
    <h1 class="m-0">TITULO DE LA VISTA (Ej: Lista de Usuarios)</h1>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Ruta anterior</a></li>
        <li class="breadcrumb-item active">Ruta en la que estamos</li>
    </ol>
</div>
@endsection

@section('content')

<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Titulo de formulario</h3>
        </div>
        <!-- 
            <form>
                <div class="row">
                    
                </div>
            </form>
        -->
    </div>
</div>

@endsection

@push('styles')
<!-- Para agregar una nueva etiqueta de estilo, para que solo se cargue en esta vista -->
@endpush

@push('scripts')
<!-- Para agregar una nueva etiqueta script y código js, para que solo se cargue en esta vista -->
@endpush