@extends('admin.layout')

@section('meta-title')EMPRESA | Colaboradores @endsection

@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Ingreso de Colaboradores</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Menú principal</a></li>
            <li class="breadcrumb-item active">Lista de colaboradores</li>
        </ol>
    </div>
@endsection

@section('content')

    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h2 class="text-center mb-5">Nuevo Trabajador</h2>
                <form method="POST" action="{{ route('trabajador.store') }}" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="row">
                        <div class="form-group col-4">
                            <label for="rut">RUT </label>
                            <input type="text" name="rut" id="rut" class="form-control" placeholder="123216547"
                                value={{ old('rut') }}>
                            @error('rut')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-5">
                            <label for="imagen">Foto Trabajador</label>
                            <input id="imagen" type="file" class="form-control" name="imagen" value={{ old('imagen') }}>
                            @error('imagen')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="nombres">Nombres </label>
                            <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Nombres"
                                value={{ old('nombres') }}>
                            @error('nombres')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="ap_paterno">Apellido Paterno </label>
                            <input type="text" name="ap_paterno" id="ap_paterno" class="form-control"
                                placeholder="Apellido Paterno" value={{ old('ap_paterno') }}>
                            @error('ap_paterno')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="ap_materno">Apellido Materno </label>
                            <input type="text" name="ap_materno" id="ap_materno" class="form-control"
                                placeholder="Apellido Materno" value={{ old('ap_materno') }}>
                            @error('ap_materno')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="telefono">Telefono </label>
                            <input type="text" name="telefono" id="telefono" class="form-control" placeholder="985424578"
                                value={{ old('telefono') }}>
                            @error('telefono')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email">Email </label>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="ejemplo@ejemplo.com" value={{ old('email') }}>
                            @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="from-group  col-md-3">
                            <label for="region">Region</label>

                            <select name="region" class="form-control @error('region') is-invalid @enderror " id="region">
                                <option value="">-- Seleccione --</option>
                                @foreach ($regions as $region)
                                    <option value="{{ $region->id }}"
                                        {{ old('region') == $region->id ? 'selected' : '' }}>
                                        {{ $region->descripcion }}
                                    </option>
                                @endforeach
                            </select>

                            @error('region')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="from-group  col-md-2">
                            <label for="provincias">Provincia</label>
                            <select name="provincias" class="form-control @error('provincias') is-invalid @enderror "
                                id="provincias"></select>
                            @error('provincias')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="from-group  col-md-2">
                            <label for="comunas">Comuna</label>
                            <select name="comunas" class="form-control @error('comunas') is-invalid @enderror "
                                id="comunas"></select>
                            @error('comunas')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="direccion">Direccion </label>
                            <input type="text" name="direccion" id="direccion" class="form-control"
                                placeholder="Calle N°123, Sector" value={{ old('direccion') }}>
                            @error('direccion')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group center">
                        <input type="submit" class="btn btn-success float-right" value="Ingresar Trabajador">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

@endsection

@push('scripts')
    <script>
        const csrfToken = document.querySelector("[name~=csrf-token]").content;
        document.getElementById('region').addEventListener('change', (e) => {
            fetch('provincias', {
                method: 'POST',
                body: JSON.stringify({
                    id: e.target.value
                }),
                headers: {
                    'Content-Type': 'application/json',
                    "X-CSRF-Token": csrfToken
                }
            }).then(response => {
                return response.json()
                console.log(response);

            }).then(data => {
                var opciones = "<option value=''>-- Seleccione --</option>";
                for (let i in data.lista) {
                    opciones += '<option value="' + data.lista[i].id + '">' + data.lista[i].descripcion +
                        '</option>';
                }

                document.getElementById("provincias").innerHTML = opciones;
            }).catch(error => console.error(error));
        })

        document.getElementById('provincias').addEventListener('change', (e) => {
            fetch('comunas', {
                method: 'POST',
                body: JSON.stringify({
                    id: e.target.value
                }),
                headers: {
                    'Content-Type': 'application/json',
                    "X-CSRF-Token": csrfToken
                }
            }).then(response => {
                return response.json()
            }).then(data => {
                var opciones = "<option value=''>-- Seleccione --</option>";
                for (let i in data.lista) {
                    opciones += '<option value="' + data.lista[i].id + '">' + data.lista[i].descripcion +
                        '</option>';
                }
                document.getElementById("comunas").innerHTML = opciones;
            }).catch(error => console.error(error));
        })

    </script>
@endpush
