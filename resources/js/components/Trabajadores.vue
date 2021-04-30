<template>
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Filtros</h3>
            <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px">
                <input
                type="text"
                name="table_search"
                class="form-control float-right"
                placeholder="Search"
                />
                <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                </button>
                </div>
            </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <template v-if="trabajadores.length">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                        <th>Rut</th>
                        <th>Nombres</th>
                        <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(trabajador, index) in trabajadores" :key="index">
                            <td>{{trabajador.rut}}</td>
                            <td>{{trabajador.nombres}} {{trabajador.ap_paterno}} {{trabajador.ap_materno}}</td>
                            <td><a href="">Ver</a></td>
                        </tr>
                    </tbody>
                </table>
            </template>
        </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
        trabajadores: [],
        listaTrabajadores: []
        };
    },
    mounted(){
        this.getListarTrabajadores();
    },
    methods: {

        getListarTrabajadores(){
            var url = "/colaboradores/axios/listado-colaboradores";
            axios.get(url)
                    .then((response) => {
                        this.trabajadores = response.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
        }

    }
};
</script>