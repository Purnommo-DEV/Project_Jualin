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
            <th><small><b>UMKM</b></small></th>
            <th><small><b>Total Beli</b></small></th>
            <th><small><b>Total Pendapatan</b></small></th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="item in laporan_jumlah_transaksi.data" :key="item.id">
             <td>{{ item.id }}</td>
             <td>{{ item.username }} </td>
             <td>{{ item.email }}</td>
             <td>{{ item.kontak_wa}}</td>
             <td>{{ item.alamat}}</td>
             <td>{{ item.jabatan}}</td>

         </tr>

        </tbody>

    </table>
    <pagination :data="laporan_jumlah_transaksi" @pagination-change-page="view"></pagination>
</div>



</template>

<script>
export default {
    data() {
        return {
            laporan_jumlah_transaksi: {},
            search: ''
        }
    },
    methods: {
        view(page = 1) {
            axios.get(`/api/laporan_jumlah_transaksi?page=${page}&search=${this.search}`)
                .then(response => {
                    this.laporan_jumlah_transaksi = response.data;
                });
        }
    },
    created() {
        this.view();
    },
}
</script>
