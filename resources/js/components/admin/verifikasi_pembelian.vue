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
            <th><small><b>nama_produk</b></small></th>
            <th><small><b>umkm</b></small></th>
            <th><small><b>kuantitas</b></small></th>
            <th><small><b>kurir</b></small></th>
            <th><small><b>total</b></small></th>
            <th><small><b>Metode Pembayaran</b></small></th>
            <th><small><b>Status</b></small></th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="item in verifikasi_pembelian.data" :key="item.id">
            <td>{{ item.id }}</td>
            <td>{{ item.nama_produk }} </td>
            <td>{{ item.umkm }}</td>
            <td>{{ item.kuantitas}}</td>
            <td>{{ item.kurir}}</td>
            <td>{{ item.total}}</td>
            <td>{{ item.metode_pembayaran}}</td>
            <td>{{ item.status}}</td>

        </tr>

        </tbody>

    </table>
        <pagination :data="verifikasi_pembelian" @pagination-change-page="view"></pagination>
    </div>
</template>

<script>
export default {
    data() {
        return{
            verifikasi_pembelian:{},
            search:''

        }
    },
    methods:{
        view(page=1){
            axios.get(`/api/verifikasi_pembelian?page=${page}&search=${this.search}`)
                .then( response => {
                    this.verifikasi_pembelian = response.data;
                });
        }
    },
    created() {
        this.view();
    },

}
</script>
