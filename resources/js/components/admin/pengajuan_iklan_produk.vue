<template>
    <div>
        <div class ="row">
            <div class ="col-8"></div>
            <div class ="col-4">
                <form @submit.prevent="view">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="search" v-model="search" class="form-control form-control-md" placeholder="Type your keywords here" >
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-md btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th><Small><b>no</b></Small></th>
            <th><small><b>umkm</b></small></th>
            <th><small><b>Nama produk</b></small></th>
            <th><small><b>deskripsi</b></small></th>
            <th><small><b>iklan di rentan</b></small></th>
            <th><small><b>total pembayaran</b></small></th>
            <th><small><b>Status Pembayaran</b></small></th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="item in iklan_product.data" :key="item.id">
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
        <pagination :data="iklan_product" @pagination-change-page="view"></pagination>
    </div>

</template>

<script>
export default {
    data() {
        return{
            iklan_product:{},
            search:''
        }
    },
    methods:{
        view(page=1){
            axios.get(`/api/pengajuan_iklan_produk?page=${page}&search=${this.search}`)
                .then( response => {
                    this.iklan_product = response.data;
                });
        }
    },
    created() {
            this.view();
    },

}
</script>
