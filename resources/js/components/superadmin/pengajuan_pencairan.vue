<template>
    <div>
        <div class ="row">
            <div class ="col-8">
            </div>
            <div class ="col-4">
                <form @submit.prevent="view">
                    <div class="input-group">
                        <input type="search" v-model="search" class="form-control form-control-md" placeholder="Type your keywords here" >
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-md btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th><Small><b>No</b></Small></th>
                <th><small><b>Nama UMKM</b></small></th>
                <th><small><b>tanggal penjualan</b></small></th>
                <th><small><b>Total pencairan</b></small></th>
                <th><small><b>Status Pencairan</b></small> </th>

            </tr>
            </thead>
            <tbody>
            <tr v-for="item in pengajuan_pencairan.data" :key="item.id">
               <td>{{ item.id }}</td>
               <td>{{ item.nama_umkm }} </td>
               <td>{{ item.tanggal_penjualan }}</td>
               <td>{{ item.total_pencairan}}</td>
               <td>{{ item.status_pencairan}}</td>
           </tr>
            </tbody>

        </table>
        <pagination :data="pengajuan_pencairan" @pagination-change-page="view"></pagination>
    </div>


</template>

<script>
export default {
    data() {
        return{
            pengajuan_pencairan:{},
            search:''
        }
    },
    methods:{
        view(page=1){
            axios.get(`/api/pengajuan_pencairan?page=${page}&search=${this.search}`)
                .then( response => {
                    this.pengajuan_pencairan = response.data;
                });
        }
    },
    created() {
        this.view();
    },

}
</script>
