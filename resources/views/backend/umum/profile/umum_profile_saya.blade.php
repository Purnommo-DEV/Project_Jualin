<div class ="row">
    <div class ="col-sm-3">
        <div class ="card">
            <div class ="card-body">
                <img src ="../profile/{{ $LoggedUserInfo['foto']}}" height="200px" width="200px">
            </div>
            <div class ="card-footer">
            <a class="btn btn-primary btn-sm w-100" data-toggle="modal" 
                href='#m_foto-{{ $LoggedUserInfo['id']}}'><i class="ft ft-edit"></i>Pilih Foto
            </a>
            </div>
        </div>
    </div>
    <div class ="col-sm-5">
        <b>Biodata diri</b>
        <hr>
        <div class ="row">
            <div class ="col-3"><small>Nama</small></div>
            <div class ="col-1">:</div>
            <div class ="col"><small><b>{{ $LoggedUserInfo['username'] }}</b></small></div>
        </div>
        <div class ="row">
            <div class ="col-3"><small>Tanggal Lahir</small></div>
            <div class ="col-1">:</div>
            <div class ="col"><small><b>{{ $LoggedUserInfo['tgl_lahir'] }}</b></small></div>
        </div>
        <div class ="row">
            <div class ="col-3"><small>Jenis Kelamin</small></div>
            <div class ="col-1">:</div>
            <div class ="col"><small><b>{{ $LoggedUserInfo['jenis_kelamin'] }}</b></small></div>
        </div>
        <div class ="row">
            <div class ="col-3"><small>Alamat Rumah</small></div>
            <div class ="col-1">:</div>
            <div class ="col"><small><b>{{ $LoggedUserInfo['alamat_rumah'] }}</b></small></div>
        </div>
        <br>
        <b>Informasi Kontak</b>
        <hr>
        <div class ="row">
            <div class ="col-3"><small>Email</small></div>
            <div class ="col-1">:</div>
            <div class ="col"><small><b>{{ $LoggedUserInfo['email'] }}</b></small></div>
        </div>
        <div class ="row">
            <div class ="col-3"><small>No Hp</small></div>
            <div class ="col-1">:</div>
            <div class ="col"><small><b>{{ $LoggedUserInfo['nomor_hp'] }}</b></small></div>
        </div>
        <div class ="row">
            <div class ="col-3"><small>No Whatsapp</small></div>
            <div class ="col-1">:</div>
            <div class ="col"><small><b>085281938392</b></small></div>
        </div>
        <br>
        <b>Akun</b>
        <hr>
        <div class ="row">
            <div class ="col-3"><small>Username</small></div>
            <div class ="col-1">:</div>
            <div class ="col"><small><b>{{ $LoggedUserInfo['username'] }}</b></small></div>
        </div>
        <div class ="row">
            <div class ="col-3"><small>Password</small></div>
            <div class ="col-1">:</div>
            <div class ="col"><small><b>*******</b></small></div>
        </div>
        <div class ="row">
            <div class ="col-3"><small>No KTP</small></div>
            <div class ="col-1">:</div>
            <div class ="col"><small><b>{{ $LoggedUserInfo['no_ktp'] }}</b></small></div>
        </div>
    </div>

    <div class ="col-sm-4">
    <a class="btn btn-warning btn-sm" data-toggle="modal" 
        href='#m_edit-{{ $LoggedUserInfo['id']}}'><i class="ft ft-edit"></i>Edit Profile
    </a>
        {{-- <button type="button" value="{{ $LoggedUserInfo['id'] }}"
            class="btn btn-primary editProfil">Edit Profil
        </button> --}}
    </div>
</div>