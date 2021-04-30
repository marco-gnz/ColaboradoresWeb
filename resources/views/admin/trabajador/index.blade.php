@extends('admin.layout')

@section('meta-title')EMPRESA | Trabajadores @endsection

@section('header')
<div class="col-sm-6">
    <h1 class="m-0">Trabajadores</h1>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Menú principal</a></li>
        <li class="breadcrumb-item active">Lista de trabajadores</li>
    </ol>
</div>
@endsection

@section('content')

<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Lista de trabajadores</h3>
        </div>
        <div id="app">
            <div class="row">
                <lista-trabajadores></lista-trabajadores>
            </div>
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

@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

@endpush