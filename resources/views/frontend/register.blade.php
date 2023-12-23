@extends('layout.header')

@section('content')
    <section id="form"><!--form-->
        <div class="container">
            <div class = "row">
                <div class = "col-sm"></div>
                <div class = "col-sm">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Daftar Diri Anda Sekarang</h2>
                        <small>untuk tujuan regulasi industri detail data pribadi pada diperlukan</small>
                        <form action="#">
                            <div class = "form-group">
                                <label><small>Nama Personal/ UMKM/ Instansi</small></label>
                                <input type="text" placeholder="Nama Personal"/>
                            </div>
                            <div class = "form-group">
                                <label>
                                    <small>Alamat Email</small>
                                </label>
                                    <input type="email" placeholder="Email Address"/>

                            </div>
                         <div class = "form-group">
                             <label>
                                 <small>Daftar sebagai</small>
                             </label>
                                 <select class = "form-control">
                                     <option>---Pilih---</option>
                                     <option>pejabat</option>
                                     <option>kameramen</option>
                                 </select>

                         </div>
                            <div class = "form-group">
                                <label>
                                    <small>Password</small>
                                </label>
                                    <input type="password" placeholder="Password"/>

                            </div>

                            <button type="submit" class="btn btn-default">Signup</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
                <div class = "col-sm"></div>
            </div>
        </div>
    </section><!--/form-->
@endsection
