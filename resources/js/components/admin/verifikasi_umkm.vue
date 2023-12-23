<template>
    <div>
        <div class="row">
            <div class="col-8"></div>
        </div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>
                        <Small><b>No</b></Small>
                    </th>
                    <th>
                        <small><b>Username</b></small>
                    </th>
                    <th>
                        <small><b>Email</b></small>
                    </th>
                    <th>
                        <small><b>Jabatan</b></small>
                    </th>
                    <th>
                        <small><b>Kontak wa</b></small>
                    </th>
                    <th>
                        <small><b>alamat</b></small>
                    </th>
                    <th>
                        <small><b>Nominal Bayar</b></small>
                    </th>
                    <th>
                        <small><b>Status</b></small>
                    </th>
                    <th>
                        <small><b>Aksi</b></small>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in verifikasi_umkm.data" :key="item.id">
                    <td>{{ item.id }}</td>
                    <td>{{ item.username }}</td>
                    <td>{{ item.email }}</td>
                    <td>{{ item.jabatan }}</td>
                    <td>{{ item.kontak_wa }}</td>
                    <td>{{ item.alamat }}</td>
                    <td>{{ item.nominal_bayar }}</td>
                    <td>{{ item.status }}</td>
                    <td><a href="#" @click="modalEdit(item)">Edit</a></td>
                </tr>
            </tbody>
        </table>
        <div
            class="modal fade"
            id="tampilModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="tampilModal"
            aria-hidden="true"
        >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            New message
                        </h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="ubahData()">
                        <div class="modal-body">
                            <div class="form-group">
                                <label
                                    for="recipient-name"
                                    class="col-form-label"
                                    >Recipient:</label
                                >
                                <input
                                    type="text"
                                    v-model="form.status"
                                    class="form-control"
                                />
                            </div>
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-dismiss="modal"
                            >
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Send message
                            </button>
                        </div>
                    </form>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
<<<<<<< Updated upstream
        return{
            verifikasi_umkm:{},
            search:''
        }
=======
        return {
            verifikasi_umkm: {}, //Variabel Baru
            form: new Form({
                id: "",
                status: ""
            })
        };
>>>>>>> Stashed changes
    },
    methods: {
        modalEdit(item) {
            this.form.reset();
            $("#tampilModal").modal("show");
            this.form.fill(item);
        },
        view() {
            axios
                .get("api/verifikasi_umkm")
                .then(({ data }) => (this.verifikasi_umkm = data));
        },
        ubahData() {
            this.form.put("api/verifikasi_umkm/" + this.form.id).then(() => {
                Fire.$emit("refreshData");
                $("#tampilModal").modal("hide");
                Toast.fire({
                    icon: "success",
                    title: "Data Berhasil"
                });
            });
        }
    },

    created() {
        this.view();
        Fire.$on("refreshData", () => {
            this.view();
        });
    }
};
</script>
