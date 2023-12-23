@if($LoggedUserInfo['jabatan'] == 'admin')
    @include('backend.admin.pilihan')

@endif
@if($LoggedUserInfo['jabatan'] == 'umkm')
    @include('backend.umkm.index')

@endif
@if($LoggedUserInfo['jabatan'] == 'superadmin')
    @include('backend.superadmin.pilihan')

@endif

@if($LoggedUserInfo['jabatan'] == 'user_pengguna')
    @include('welcome')
@endif



