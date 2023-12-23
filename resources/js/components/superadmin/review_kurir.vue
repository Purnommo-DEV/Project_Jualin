<template>

<div>

    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th><Small><b>No</b></Small></th>
            <th><small><b>Nama kurir</b></small></th>
            <th><small><b>Penjual</b></small></th>
            <th><small><b>Nama Barang</b></small></th>
            <th><small><b>Pembeli</b></small> </th>
            <th><small><b>Plat motor</b></small> </th>
            <th><small><b>Rating</b></small> </th>
            <th><small><b>Review Dari pembeli</b></small> </th>
        </tr>
        </thead>
        <tbody>
         <tr v-for="item in review_kurir.data" :key="item.id">
             <td>{{ item.id }}</td>
             <td>{{ item.nama_kurir }} </td>
             <td>{{ item.penjual }}</td>
             <td>{{ item.nama_barang}}</td>
             <td>{{ item.pembeli}}</td>
             <td>{{ item.plat_motor}}</td>
             <td>{{ item.rating}}</td>
             <td>{{ item.review_dari_pembeli}}</td>


         </tr>

        </tbody>

    </table>

</div>


</template>

<script>
export default {
    data() {
        return{
            review_kurir:{},
            search:''
        }
    },
    methods:{
        view(page=1){
            axios.get(`/api/review_kurir?page=${page}&search=${this.search}`)
                .then( response => {
                    this.review_kurir = response.data;
                });
        }
    },
    created() {
        this.view();
    },

}
</script>
