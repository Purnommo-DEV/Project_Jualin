@extends('backend.umum.layout.header')

@section('content')
        <div class ="container">
            <div class ="row">
                <div class ="col-sm-3">
                    <div class ="card">
                        <div class ="card-header" style="">
                            <h5><b>Filter</b></h5>
                        </div>
                        <div class ="card-body" style="margin: -10px;">
                            <!-- Sidebar Menu -->
                            <h5><b><center>Filter</center></b></h5>

                        </div>
                        </aside>
                        <h5><b><center>Jenis UMKM</center></b></h5>
                        <!-- radio -->
                            <!-- checkbox -->
                            <div class="form-group clearfix">

                                <div class="icheck-primary d-inline ml-3">
                                    <input type="checkbox" id="checkboxPrimary3">
                                    <label style="color: grey" class ="ml-1" for="checkboxPrimary3">
                                        Power UMKM
                                    </label>
                                </div><br>
                                <div class="icheck-primary d-inline ml-3">
                                    <input type="checkbox" id="checkboxPrimary3">
                                    <label style="color: grey" class ="ml-1" for="checkboxPrimary3">
                                        UMKM Biasa
                                    </label>
                                </div>
                            </div>
                        <!-- checkbox -->
                        <h5><b><center>Harga</center></b></h5>
                        <div class="form-group clearfix">

                            <div class="icheck-primary d-inline ml-3">
                                <input type="checkbox" id="checkboxPrimary3">
                                <label style="color: grey" class ="ml-1" for="checkboxPrimary3">
                                    Tertinggi
                                </label>
                            </div><br>
                            <div class="icheck-primary d-inline ml-3">
                                <input type="checkbox" id="checkboxPrimary3">
                                <label style="color: grey" class ="ml-1" for="checkboxPrimary3">
                                    Terendah
                                </label>
                            </div>
                        </div>

                    </div>
                        <div class ="card-footer"></div>
                    </div>
                <div class ="col-sm-9">
                    <div class ="card">
                        <div class ="card-header">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                            </ul>
                        </div>
                        <div class ="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <div class ="row">
                                        <div class ="col-sm-3 col-12">
                                            <div class ="card" style="border-radius: 0px;">
                                                <div class ="card-body" style="margin: -20px;">
                                                    <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                                    <div style="margin: 10px;">
                                                        <small>Kopi sepok Kampung</small><br>
                                                        <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                                        <small style="color: orange">Diskon 10%</small><br>
                                                        <small><b>13.500/ Item</b></small><br>
                                                        <small>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>

                                                            (Terjual)</small>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class ="col-sm-3 col-12">
                                            <div class ="card" style="border-radius: 0px;">
                                                <div class ="card-body" style="margin: -20px;">
                                                    <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                                    <div style="margin: 10px;">
                                                        <small>Kopi sepok Kampung</small><br>
                                                        <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                                        <small style="color: orange">Diskon 10%</small><br>
                                                        <small><b>13.500/ Item</b></small><br>
                                                        <small>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>

                                                            (Terjual)</small>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class ="col-sm-3 col-12">
                                            <div class ="card" style="border-radius: 0px;">
                                                <div class ="card-body" style="margin: -20px;">
                                                    <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                                    <div style="margin: 10px;">
                                                        <small>Kopi sepok Kampung</small><br>
                                                        <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                                        <small style="color: orange">Diskon 10%</small><br>
                                                        <small><b>13.500/ Item</b></small><br>
                                                        <small>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>

                                                            (Terjual)</small>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class ="col-sm-3 col-12">
                                            <div class ="card" style="border-radius: 0px;">
                                                <div class ="card-body" style="margin: -20px;">
                                                    <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                                    <div style="margin: 10px;">
                                                        <small>Kopi sepok Kampung</small><br>
                                                        <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                                        <small style="color: orange">Diskon 10%</small><br>
                                                        <small><b>13.500/ Item</b></small><br>
                                                        <small>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>

                                                            (Terjual)</small>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="timeline">
                                    <div class ="row">
                                        <div class ="col-sm-3 col-12">
                                            <div class ="card" style="border-radius: 0px;">
                                                <div class ="card-body" style="margin: -20px;">
                                                    <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                                    <div style="margin: 10px;">
                                                        <small>Kopi sepok Kampung</small><br>
                                                        <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                                        <small style="color: orange">Diskon 10%</small><br>
                                                        <small><b>13.500/ Item</b></small><br>
                                                        <small>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>

                                                            (Terjual)</small>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class ="col-sm-3 col-12">
                                            <div class ="card" style="border-radius: 0px;">
                                                <div class ="card-body" style="margin: -20px;">
                                                    <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                                    <div style="margin: 10px;">
                                                        <small>Kopi sepok Kampung</small><br>
                                                        <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                                        <small style="color: orange">Diskon 10%</small><br>
                                                        <small><b>13.500/ Item</b></small><br>
                                                        <small>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>

                                                            (Terjual)</small>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class ="col-sm-3 col-12">
                                            <div class ="card" style="border-radius: 0px;">
                                                <div class ="card-body" style="margin: -20px;">
                                                    <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                                    <div style="margin: 10px;">
                                                        <small>Kopi sepok Kampung</small><br>
                                                        <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                                        <small style="color: orange">Diskon 10%</small><br>
                                                        <small><b>13.500/ Item</b></small><br>
                                                        <small>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>

                                                            (Terjual)</small>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class ="col-sm-3 col-12">
                                            <div class ="card" style="border-radius: 0px;">
                                                <div class ="card-body" style="margin: -20px;">
                                                    <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                                    <div style="margin: 10px;">
                                                        <small>Kopi sepok Kampung</small><br>
                                                        <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                                        <small style="color: orange">Diskon 10%</small><br>
                                                        <small><b>13.500/ Item</b></small><br>
                                                        <small>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>
                                                            <i class ="fa fa-star"></i>

                                                            (Terjual)</small>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class ="card-footer"></div>
                    </div>
                </div>
                </div>

            </div>
        </div>
@endsection
