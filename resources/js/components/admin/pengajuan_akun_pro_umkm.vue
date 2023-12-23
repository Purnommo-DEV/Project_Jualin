<template>
   <div>
       <div class ="row">
           <div class ="col-8"></div>
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
            <th><Small><b>no</b></Small></th>
            <th><small><b>email</b></small></th>
            <th><small><b>Username</b></small></th>
            <th><small><b>Kontak Wa</b></small></th>
            <th><small><b>alamat</b></small></th>
            <th><small><b>jabatan</b></small></th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="item in akun_premium.data" :key="item.id">
            <td>{{ item.id }}</td>
            <td>{{ item.umkm }} </td>
            <td>{{ item.nama_produk }}</td>
            <td>{{ item.deskripsi}}</td>
            <td>{{ item.iklan_di_rentan}}</td>
            <td>{{ item.total_pembayaran}}</td>
            <td>{{ item.status_pembayaran}}</td>

        </tr>

        </tbody>

    </table>
       <pagination :data="akun_premium" @pagination-change-page="view"></pagination>
   </div>

</template>

<script>
export default {
    data() {
        return{
            akun_premium:{},
            search:''

        }
    },
    methods:{
        view(page=1){
            axios.get(`/api/pengajuan_akun_pro_umkm?page=${page}&search=${this.search}`)
                .then( response => {
                    this.akun_premium = response.data;
                });
        }
    },
    created() {
        this.view();
    },

}
</script>
