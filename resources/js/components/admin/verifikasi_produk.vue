<template>
    <div>
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
                <form @submit.prevent="view">
                    <div class="input-group">
                        <input
                            type="search"
                            v-model="search"
                            class="form-control form-control-md"
                            placeholder="Type your keywords here"
                        />
                        <div class="input-group-append">
                            <button
                                type="submit"
                                class="btn btn-md btn-default"
                            >
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
                    <th>
                        <Small><b>no</b></Small>
                    </th>
                    <th>
                        <small><b>umkm</b></small>
                    </th>
                    <th>
                        <small><b>Nama Produk</b></small>
                    </th>
                    <th>
                        <small><b>Deskripsi</b></small>
                    </th>
                    <th>
                        <small><b>Jumlah Stok</b></small>
                    </th>
                    <th>
                        <small><b>Harga Produk</b></small>
                    </th>
                    <th>
                        <small><b>Status Verifikasi</b></small>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in verifikasi_produk.data" :key="item.id">
                    <td>{{ item.id }}</td>
                    <td>{{ item.umkm }}</td>
                    <td>{{ item.nama_produk }}</td>
                    <td>{{ item.deskripsi_produk }}</td>
                    <td>{{ item.total_stok }}</td>
                    <td>{{ item.harga_produk }}</td>
                    <td>{{ item.status_verifikasi }}</td>
                </tr>
            </tbody>
        </table>
        <pagination
            :data="verifikasi_produk"
            @pagination-change-page="view"
        ></pagination>
    </div>
</template>

<script>
export default {
    data() {
        return {
            verifikasi_produk: {},
            search: ""
        };
    },
    methods: {
        view(page = 1) {
            axios
                .get(
                    `/api/verifikasi_produk?page=${page}&search=${this.search}`
                )
                .then(response => {
                    this.verifikasi_produk = response.data;
                });
        }
    },

    created() {
        this.view();
    }
};
</script>
