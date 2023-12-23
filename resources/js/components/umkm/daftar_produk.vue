<template>
    <div class="col-md-9">
        <div class="row">
            <div class="col">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a
                            class="nav-link active"
                            href="#activity"
                            data-toggle="tab"
                            >Activity</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#timeline" data-toggle="tab"
                            >Timeline</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#settings" data-toggle="tab"
                            >Settings</a
                        >
                    </li>
                </ul>
            </div>
            <div class="col">
                <form class="form-inline my-2 my-lg-0">
                    <input
                        class="form-control mr-sm-2"
                        type="search"
                        placeholder="Search"
                        aria-label="Search"
                    />
                    <button
                        class="btn btn-outline-primary my-2 my-sm-0"
                        type="submit"
                    >
                        Search
                    </button>
                </form>
            </div>
        </div>
        <div class="row pl-3 pt-4">
            <div class="col">
                <a href="#">
                    <button
                        type="button"
                        class="btn btn-primary"
                        @click="showModal"
                    >
                        Tambah Produk
                    </button>
                </a>
            </div>
            <div class="col">
                <h5>Ada 1000 produk</h5>
            </div>
            <div class="col">
                <div class="dropdown">
                    <button
                        class="btn btn-transparent dropdown-toggle"
                        type="button"
                        id="dropdownMenu2"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        Dropdown
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button">
                            Action
                        </button>
                        <button class="dropdown-item" type="button">
                            Another action
                        </button>
                        <button ton class="dropdown-item" type="button">
                            Something else here
                        </button>
                    </div>
                </div>
                <div class="dproduk">
                    <div class="col-1">
                        <img src="" alt="" />
                    </div>
                    <div class="col-10">
                        <div class="atas">
                            <div class="row ">
                                <div class="col-1">
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                                <div class="col-2 ">
                                    <h6>14 Maret</h6>
                                </div>
                                <div class="col-8">
                                    <h6>
                                        INV/20211314/MPL/11013
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="tengah">
                            <div class="row">
                                <h3></h3>
                            </div>
                        </div>
                        <div class="bawah">
                            <div class="row">
                                <div class="col-5">
                                    <h6>Sisa 1000 stok</h6>
                                </div>
                                <div class="col-5">
                                    <h5>Sisa 1000 stok</h5>
                                </div>
                            </div>
                        </div>
                        <div class="deskripsi">
                            <div class="row">
                                <h3>Deskripsi Prouk</h3>
                            </div>
                            <div class="row">
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur
                                    adipisicing elit. Dignissimos, consectetur
                                    sunt. Tempore quod officia asperiores neque
                                    doloribus impedit excepturi nulla
                                    necessitatibus minima dolore accusamus
                                    aliquid ex magnam, aliquam obcaecati culpa.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <hr />
                    </div>
                    <div class="col">
                        <div class="tombol">
                            <a href="">
                                <button type="button" class="btn btn-block ">
                                    Iklankan Produk
                                </button>
                            </a>
                        </div>
                        <div class="tombol2">
                            <a
                                href=""
                                type="button"
                                data-toggle="modal"
                                class="btn btn-primary"
                                >Edit Produk</a
                            >
                        </div>
                        <div class="samping">
                            <div class="row">
                                <h3>Harga</h3>
                            </div>
                            <div class="row">
                                <h3><span>Rp 13.000, - /Item</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {},
    methods: {
        showModal() {
            $("#tmbProduk").modal("show");
        }
    },
    created() {}
};
</script>
