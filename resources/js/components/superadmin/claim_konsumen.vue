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
                <th><small><b>Nama Produk</b></small></th>
                <th><small><b>No Resi</b></small></th>
                <th><small><b>Total Harga</b></small></th>
                <th><small><b>Kuantitas</b></small> </th>
                <th><small><b>Konsumen</b></small> </th>
                <th><small><b>Alamat Pengembalian</b></small> </th>
                <th><small><b>Status</b></small> </th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="item in claim_konsumen.data" :key="item.id">
                <td>{{ item.id }}</td>
                <td>{{ item.nama_produk }} </td>
                <td>{{ item.no_resi }}</td>
                <td>{{ item.total_harga}}</td>
                <td>{{ item.kuantitas}}</td>
                <td>{{ item.konsumen}}</td>
                <td>{{ item.alamat_pengembalian}}</td>
                <td>{{ item.status}}</td>

            </tr>

            </tbody>

        </table>
        <pagination :data="claim_konsumen" @pagination-change-page="view"></pagination>
    </div>

</template>

<script>
export default {
    data() {
        return{
            claim_konsumen:{},
            search:''
        }
    },
    methods:{
        view(page=1){
            axios.get(`/api/claim_konsumen?page=${page}&search=${this.search}`)
                .then( response => {
                    this.claim_konsumen = response.data;
                });
        }
    },
    created() {
        this.view();
    },

}
</script>
