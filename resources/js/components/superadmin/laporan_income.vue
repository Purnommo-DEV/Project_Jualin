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
            <th><small><b>Laba kotor</b></small></th>
            <th><small><b>Laba operasi</b></small></th>
            <th><small><b>laba sebelum pajak</b></small></th>
            <th><small><b>laba Operasi</b></small> </th>
            <th><small><b>Laba Operasi berjalan</b></small> </th>
            <th><small><b>Laba Bersih</b></small> </th>
        </tr>
        </thead>
        <tbody>
         <tr v-for="item in laporan_income.data" :key="item.id">
            <td>{{ item.id }}</td>
            <td>{{ item.laba_kotor }} </td>
            <td>{{ item.laba_operasi }}</td>
            <td>{{ item.laba_sebelum_pajak}}</td>
            <td>{{ item.laba_operasis}}</td>
            <td>{{ item.laba_operasi_berjalan}}</td>
             <td>{{ item.laba_bersih}}</td>

        </tr>

        </tbody>

    </table>
    <pagination :data="laporan_income" @pagination-change-page="view"></pagination>
</div>


</template>

<script>
export default {
    data() {
        return{
            laporan_income:{},
            search:''
        }
    },
    methods:{
        view(page=1){
            axios.get(`/api/laporan-income?page=${page}&search=${this.search}`)
                .then( response => {
                    this.laporan_income = response.data;
                });
        }
    },
    created() {
        this.view();
    },

}

</script>
