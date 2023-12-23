<template>
    <div>
        <div class ="row">
            <div class ="col-8"></div>
            <div class ="col-4">
                <form @submit.prevent="view">
                    <div class="input-group">
                        <input type="search" v-model ="search" class="form-control form-control-md" placeholder="Type your keywords here" >
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
        <tr v-for="item in user_pengguna.data" :key="item.id">
            <td>{{ item.id }}</td>
            <td>{{ item.email }} </td>
            <td>{{ item.username }}</td>
            <td>{{ item.kontak_wa}}</td>
            <td>{{ item.alamat}}</td>
            <td>{{ item.jabatan}}</td>


        </tr>

        </tbody>
    </table>
    <pagination :data="user_pengguna" @pagination-change-page="view"></pagination>
    </div>
</template>
<style>

</style>
<script>
    export default {
    data() {
        return{
            user_pengguna:{},
            search:''
        }
    },
    methods:{
        view(page=1){
            axios.get(`/api/user_pengguna?page=${page}&search=${this.search}`)
                .then( response => {
                    this.user_pengguna = response.data;
                });
        }
    },
    created() {
        this.view();
    },

}
</script>
